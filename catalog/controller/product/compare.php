<?php
class ControllerProductCompare extends Controller {
	public function numWords($value, $words, $show = true) {
		$num = $value % 100;
		if ($num > 19) { 
			$num = $num % 10; 
		}

		$out = ($show) ?  $value . ' ' : '';
		switch ($num) {
			case 1:  $out .= $words[0]; break;
			case 2: 
			case 3: 
			case 4:  $out .= $words[1]; break;
			default: $out .= $words[2]; break;
		}

		return $out;
	}
	
	public function index() {
		$this->load->language('product/compare');

		$this->load->model('catalog/product');
      
        $this->load->model('catalog/category');

		$this->load->model('tool/image');

		if (!isset($this->session->data['compare'])) {
			$this->session->data['compare'] = array();
		}
      //unset($this->session->data['compare']);

		if (isset($this->request->get['remove']) && isset($this->request->get['category_id'])) {
			$key = array_search($this->request->get['remove'], $this->session->data['compare'][$this->request->get['category_id']]);

			if ($key !== false) {
				unset($this->session->data['compare'][$this->request->get['category_id']][$key]);
              
                if(count($this->session->data['compare'][$this->request->get['category_id']]) == 0) {
                    unset($this->session->data['compare'][$this->request->get['category_id']]);
                }

				$this->session->data['success'] = $this->language->get('text_remove');
			}

			$this->response->redirect($this->url->link('product/compare'));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/compare')
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['review_status'] = $this->config->get('config_review_status');

		$data['products'] = array();
        $data['categories'] = array();

		$data['attribute_groups'] = array(); 

		foreach ($this->session->data['compare'] as $category_id => $compares) {
            $category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
                $n = $category_info['name'];
            } else {
                $n = 'Другая';
            }
          
            $data['categories'][$category_id] = array(
				'category_id'  => $category_id,
				'name'       => $n,
            );
          
            foreach ($compares as $key => $product_id) {
              
			    $product_info = $this->model_catalog_product->getProduct($product_id);

			    if ($product_info) {
				    if ($product_info['image']) {
					    $image = $this->model_tool_image->resize($product_info['image'], 800, 800);
				    } else {
					    $image = false;
				    }

				    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					    $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				    } else {
					    $price = false;
				    }
					
					

				    if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
					    $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				    } else {
					    $special = false;
				    }

				    if ($product_info['quantity'] <= 0) {
					    $availability = $product_info['stock_status'];
				    } elseif ($this->config->get('config_stock_display')) {
					    $availability = $this->language->get('text_instock');
				    } else {
					    $availability = $this->language->get('text_instock');
				    }
					
					$existLang = $this->language->get('text_reset');
					$existLangZero = $this->language->get('text_reset_zero');
					$notExistLang = $this->language->get('text_buy');

					$existing = $this->cart->getProducts();
					$cant_add = false;
					if ($existing) {
						foreach ($existing as $exists) {
							if ($exists['product_id'] == $product_info['product_id']) {
								$cant_add = true;
								break;
							} else {
								$cant_add = false;
							}
						}
					}
					if ($cant_add)
						$product_info['button_cart'] = $existLang;
					else
						$product_info['button_cart'] = $notExistLang;

					if ($product_info['quantity'] == 0)
						$product_info['button_cart'] = $existLangZero;

				    $attribute_data = array();

				    $attribute_groups = $this->model_catalog_product->getProductAttributes($product_id);

				    foreach ($attribute_groups as $attribute_group) {
					    foreach ($attribute_group['attribute'] as $attribute) {
						    $attribute_data[$attribute['attribute_id']] = $attribute['text'];
					    }
				    }
              
                    if ($product_info['quantity'] <= 0) {
				        $stock = $product_info['stock_status'];
			        } else {
				        $stock = $this->language->get('text_instock');
			        }
					
					$rating_text_1 = $this->language->get('text_rating_1');
					$rating_text_2 = $this->language->get('text_rating_2');
					$rating_text_3 = $this->language->get('text_rating_3');

					$data['rating_text'] = $this->numWords((int)$product_info['rating'], array($rating_text_1, $rating_text_2, $rating_text_3));

				    $data['products'][$category_id][$product_id] = array(
					    'product_id'   => $product_info['product_id'],
                        'category_id'  => $category_id,
					    'name'         => $product_info['name'],
						'button_cart'  => $product_info['button_cart'],
					    'thumb'        => $image,
					    'price'        => $price,
					    'special'      => $special,
					    'description'  => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, 120) . '..',
					    'model'        => $product_info['model'],
					    'manufacturer' => $product_info['manufacturer'],
					    'availability' => $availability,
					    'minimum'      => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
					    'rating'       => (int)$product_info['rating'],
					    'reviews'      => sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']),
					    'weight'       => $this->weight->format($product_info['weight'], $product_info['weight_class_id']),
					    'length'       => $this->length->format($product_info['length'], $product_info['length_class_id']),
					    'width'        => $this->length->format($product_info['width'], $product_info['length_class_id']),
					    'height'       => $this->length->format($product_info['height'], $product_info['length_class_id']),
					    'attribute'    => $attribute_data,
                        'ean'          => $product_info['ean'],
                        'location'     => $product_info['location'],
                        'stock'        => $stock,
						'quantity'	   => $product_info['quantity'],
					    'href'         => $this->url->link('product/product', 'product_id=' . $product_id),
					    'remove'       => $this->url->link('product/compare', 'remove=' . $product_id . '&category_id=' . $category_id)
				    );

				    foreach ($attribute_groups as $attribute_group) {
					    $data['attribute_groups'][$attribute_group['attribute_group_id']]['name'] = $attribute_group['name'];

					    foreach ($attribute_group['attribute'] as $attribute) {
						    $data['attribute_groups'][$attribute_group['attribute_group_id']]['attribute'][$attribute['attribute_id']]['name'] = $attribute['name'];
					    }
				    }
			    } else {
				    unset($this->session->data['compare'][$category_id][$key]);
			    }
            }
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('product/compare', $data));
	}

	public function add() {
		$this->load->language('product/compare');

		$json = array();

		if (!isset($this->session->data['compare'])) {
			$this->session->data['compare'] = array();
		}

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);
      
        $category_id = $this->model_catalog_product->getProductMainCategoryId($product_id);
      
        $c = $this->model_catalog_product->getProductCompare($product_id);

		if ($product_info) {
            if($c) {
                $this->delete($product_id);
                $json['success'] = sprintf($this->language->get('text_success2'), $this->url->link('product/product', 'product_id=' . $this->request->post['product_id']), $product_info['name'], $this->url->link('product/compare'));
            } else {
			    if (!in_array($this->request->post['product_id'], $this->session->data['compare'])) {
				    if (isset($this->session->data['compare'][$category_id]) && count($this->session->data['compare'][$category_id]) >= 5) {
					    array_shift($this->session->data['compare'][$category_id]);
				    }
				    $this->session->data['compare'][$category_id][] = $this->request->post['product_id'];
			    }
              
                $json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . $this->request->post['product_id']), $product_info['name'], $this->url->link('product/compare'));
            }
			
			$compareTotal = 0;
			if (isset($this->session->data['compare'])) {
				foreach($this->session->data['compare'] as $cat => $value) {
					$compareTotal += count($value);
				}
			}
			
			$json['total'] = sprintf($this->language->get('text_compare_count'), $compareTotal);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
  
    public function delete($product_id) {
        if(isset($this->session->data['compare'])) {
          foreach ($this->session->data['compare'] as $category_id => $compares) {
            foreach ($compares as $key => $pr_id) {
                if($product_id == $pr_id) {
                  $c = $category_id;
                  $k = $key;
                  break;
                }
            }
          }
          unset($this->session->data['compare'][$c][$k]);
			if (count($this->session->data['compare'][$c]) < 1)
				unset($this->session->data['compare'][$c]);
        }
    }
}
