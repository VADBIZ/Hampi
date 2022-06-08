<?php
use Dompdf\Dompdf;
class ControllerExtensionModulePrintVersionProduct extends Controller {
	private $error = array();

	public function index() {
        require_once(DIR_SYSTEM . 'library/dompdf/autoload.inc.php');
		$data['direction'] = $this->language->get('direction');
		$data['lang'] = $this->language->get('code');
		
		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}
		
		$data['base'] = $server;
		
		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}
		
		$this->load->language('information/contact');
		$this->load->language('product/product');
		$this->load->language('extension/module/print_version');
		
		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['print_id'])) {
			$product_id = (int)$this->request->get['print_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {

			$data['href'] = $this->url->link('product/product', 'product_id=' . $product_id);
			$data['heading_title'] = $product_info['name'];
			
			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);
			
			$data['store'] = $this->config->get('config_name');
			$data['address'] = nl2br($this->config->get('config_address'));
			$data['telephone'] = $this->config->get('config_telephone');
			$data['fax'] = $this->config->get('config_fax');
			$data['email'] = $this->config->get('config_email');
            $data['textv'] = html_entity_decode($this->config->get('config_textv'), ENT_QUOTES, 'UTF-8');
            $data['textn'] = html_entity_decode($this->config->get('config_textn'), ENT_QUOTES, 'UTF-8');
			$data['store_domain'] = preg_replace("(^https?://)", "", $server );
			if(substr($data['store_domain'], -1) == '/') {
				$data['store_domain'] = substr($data['store_domain'], 0, -1);
			}
		
			$data['product_id'] = $product_id;
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['model'] = $product_info['model'];
			$data['sku'] = $product_info['ean'];
            $data['mpn'] = $product_info['mpn'];
            $data['manufacturer'] = $product_info['manufacturer'];
			$data['reward'] = $product_info['reward'];
			$data['quantity'] = $product_info['quantity'];
			$data['points'] = $product_info['points'];
			$data['weight'] = $this->weight->format($product_info['weight'], $product_info['weight_class_id']);
			$data['length'] = $this->length->format($product_info['length'], $product_info['length_class_id']);
            $data['width'] = $this->length->format($product_info['width'], $product_info['length_class_id']);
            $data['height'] = $this->length->format($product_info['height'], $product_info['length_class_id']);
			$data['location'] = $product_info['location'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');
			
			if ($product_info['quantity'] <= 0) {
				$data['stock'] = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $this->language->get('text_instock');
			}
          
            $data['text_tax'] = $this->model_catalog_product->getTax($product_info['tax_class_id']);

			$this->load->model('tool/image');

			if ($product_info['image']) {
				$data['image'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['image'] = '';
			}			

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = number_format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), 0, '.', '') . ' руб.';
                $data['price_new'] = number_format($product_info['price'], 0, '.', '') . ' руб.';
			} else {
				$data['price'] = false;
                $data['price_new'] = false;
			}

			if ((float)$product_info['special']) {
				$data['special'] = number_format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), 0, '.', '') . ' руб.';
			} else {
				$data['special'] = false;
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = number_format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], 0, '.', '') . ' руб.';
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($product_id);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => number_format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), 0, '.', '') . ' руб.'
				);
			}

			$data['options'] = array();
			
			foreach ($this->model_catalog_product->getProductOptions($product_id) as $option) {
				$product_option_value_data = array();
				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}
						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}
				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}
			
			$data['review_status'] = $this->config->get('config_review_status');
			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			$data['text_ed'] = $this->language->get('text_ed');
			$data['text_aviable_yes'] = $this->language->get('text_aviable_yes');
			$data['text_aviable_no'] = $this->language->get('text_aviable_no');
			$data['text_stock'] = $this->language->get('text_stock');
			$data['text_sku'] = $this->language->get('text_sku');
			$data['text_manu'] = $this->language->get('text_manu');
			$data['text_weight'] = $this->language->get('text_weight');
			$data['text_sizes'] = $this->language->get('text_sizes');
			$data['text_address'] = $this->language->get('text_address');
			$data['tab_attribute'] = $this->language->get('tab_attribute');
			$data['text_price'] = $this->language->get('text_price');
			$data['text_tax_2'] = $this->language->get('text_tax');
			
			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($product_id);

			$data['recurrings'] = $this->model_catalog_product->getProfiles($product_id);
			
			$data['products'] = array();
			$results = $this->model_catalog_product->getProductRelated($product_id);
			foreach ($results as $result) {
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
				} else {
					$price = false;
				}
				if ((float)$result['special']) {
					$special = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
				} else {
					$special = false;
				}
				if ($this->config->get('config_tax')) {
					$tax = (float)$result['special'] ? $result['special'] : $result['price'];
				} else {
					$tax = false;
				}
				
				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'name'        => $result['name'],
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}
          
            $data['today'] = date("d.m.Y");
            
			// НАЧАЛО PDF
			$test = false;
			
			$linkProduct = $this->url->link('product/product', 'product_id=' . $product_id);
		$html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
			
			$html .= '<style type="text/css">';
				$html .= '
					* {padding:0;margin:0;font-family:arial;font-size: 14px;line-height: 14px}
					body{padding:25px 50px}
					.page__header{margin-bottom:30px}
					.page__header:after{content:"";clear:both;display:block}
					.page__header-logo{float:left}
					.page__header-link{float:right;padding-top:10px}
					.comm_title{text-align:center}
					.info__top p{margin-bottom:10px;text-align:justify;text-indent:40px}
					.info__top p:first-child {text-indent:0}
					.comm__title{margin:30px 0;text-align:center;font-weight:700;font-size:22px}
					.flyleaf{page-break-after:always}
					.product__wrap:after{content:"";display:block;clear:both}
					.product__image{width:30%;float:left}
					.product__image img{max-width: 100%}
					.product__content{width:60%;float:right}
					.product__description{margin-bottom:50px;text-align:justify}
					.product__title{font-size:20px;font-weight:700;margin-bottom:15px}
					.product__line{margin-bottom:5px}
					.product__desc-title{font-weight:700;font-size:18px;margin-bottom:10px}
					.red{color:red;}
					.green{color:green;}
					.char{margin-top:30px}
					.char__title{font-weight:700;font-size:18px;margin-bottom:20px}
					table {margin: 0 0 15px 0;width: 100%;border-collapse: collapse; border-spacing: 0;}		
					table td {padding: 2px 5px;}
					table td:last-child {border-left:1px solid #ddd;}
					table th {padding: 5px;font-weight: bold;}
					.table {width: 100%;max-width: 100%;margin-bottom: 20px;}
					.table-bordered {border: 1px solid #ddd;}
					.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td  border: 1px solid #ddd;}
					.text-right {text-align: right;}
					.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {padding: 3px 8px; line-height: 1.42857143; vertical-align: top;border-top: 1px solid #ddd;}
					.table thead > tr > td, .table tbody > tr > td {vertical-align: middle;}
					.footer{text-align:center}
					.info__bottom:first-child{margin-bottom:10px}
					.info__bottom p {margin-bottom:10px}
					.info__bottom ol {argin-top:10px;margin-left:20px}
					.info__bottom ol li {margin-bottom:10px}
				';
			$html .= '</style>';
			
		$html .= '</head><body>';
		
			$html .= '<header class="page__header">';
				$logo = $server . 'admin/view/image/logo.png';
				$html .= '<div class="page__header-logo"><img src="'.$logo.'" alt=""></div>';
				$html .= '<div class="page__header-link"><a href="'.$linkProduct.'">'.$linkProduct.'</a></div>';
			$html .= '</header>';
			$html .= '<div class="info__top">'.$data['textv'].'</div>';
			$html .= '<h1 class="comm__title">Коммерческое предложение от '.$data['today'].'</h1>';
			$html .= '<div class="product">';
				$html .= '<div class="product__wrap">';
					if($data['image']) {
						$html .= '<div class="product__image"><img src="image/'.$product_info['image'].'"  title="'.$data['heading_title'].'" alt="'.$data['heading_title'].'"/></div>';
            		}
					$html .= '<div class="product__content">';
						$html .= '<h3 class="product__title">'.$data['heading_title'].'</h3>';
						$html .= '<p class="product__subtitle product__line">'.$data['mpn'].'</p>';
						$html .= '<p class="product__sku product__line"><strong>'.$data['text_sku'].':</strong> '.$data['model'].'</p>';
						if ($data['manufacturer'] != '') {
							$html .= '<p class="product__brand product__line"><strong>'.$data['text_manu'].'</strong> '.$data['manufacturer'].'</p>';
						}
						if ($data['quantity'] == 0)
							$html .= '<p class="product__stock product__line"><strong>'.$data['text_stock'].'</strong> <span class="red">'.$data['text_aviable_no'].'</span>';
						else
							$html .= '<p class="product__stock product__line"><strong>'.$data['text_stock'].'</strong> <span class="green">'.$data['text_aviable_yes'].'</span>';
						$html .= '<p class="product__weight product__line"><strong>'.$data['text_weight'].':</strong> '.$data['weight'].'</p>';
						$html .= '<p class="product__sizes product__line"><strong>'.$data['text_sizes'].':</strong> '.$data['length'].' x '.$data['width']. ' x '.$data['height'].'</p>';
						$html .= '<p class="product__location product__line"><strong>'.$data['text_address'].':</strong> '.$data['location'].'</p>';
						if($data['price']) {
							if ($data['text_tax'])
								$html .= '<p class="product__nalog product__line">Цена включает '.$data['text_tax'].'</p>';
							if(!$data['special']) {
				    			$html .= '<h3 class="product__title">'.$data['text_price'].' '.$data['price'].$data['text_ed'].'</h3>';
                			} else {
				    			$html .= '
									<h3 class="product__title" style="text-decoration:line-through;" class="product__price ">'.$data['price'].$data['text_ed'].'</h3>
									<p class="product__price product__line">'.$data['special'].$data['text_ed'].'</p>
								';
							}
						}
					$html .= '</div>';
				$html .= '</div>';
				$html .= '<div class="char">';
					$html .= '<div class="char__title">'.$data['tab_attribute'].'</div>';
					$html .= '<div class="char__table">';
						$html .= '<table class="table table-bordered">';
							foreach ($data['attribute_groups'] as $attribute_group) {
								$html .= '<tbody>';
			  						foreach ($attribute_group['attribute'] as $attribute) {
			  							$html .= '<tr>
											<td>'.$attribute['name'].'</td>
											<td>'.$attribute['text'].'</td>
			  							</tr>';
			  						}
								$html .= '</tbody>';
							}
		  				$html .= '</table>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<h3 class="product__desc-title">Описание</h3>';
			$html .= '<div class="product__description">'.$data['description'].'</div>';
			$html .= '<div class="info__bottom">'.$data['textn'].'</div>';
		$html .= '</body></html>';

			if (!$test) {
		  		$dompdf = new Dompdf(array('enable_remote' => true));
          		$dompdf->loadHtml($html, 'UTF-8');
				$dompdf->setPaper('A4', 'portrait');
				$dompdf->render();
				$dompdf->stream('Hampi-cp_'.$data['model']);
			} else {
				echo $html;
			}
 
         // Вывод файла в браузер:
                
			//$this->response->setOutput($this->load->view('extension/module/print_version_product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}