<?php
class ControllerExtensionModuleCategorypro extends Controller {
	public function index() {
		$this->load->language('extension/module/categorypro');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 225;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 225;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

foreach ($categories as $category) {
            $children_data = array();
 
            if ($category['category_id'] == $data['category_id']) {
                $children = $this->model_catalog_category->getCategories($category['category_id']);
 
                foreach($children as $child) {
                                    $children_data_1 = array();
                                    $children_1 = $this->model_catalog_category->getCategories($child['category_id']);
                                    foreach($children_1 as $child_1){
                                        $filter_data_1 = array('filter_category_id' => $child_1['category_id'], 'filter_sub_category' => true);
						if ($child_1['image']) {
							$image = $this->model_tool_image->resize($child_1['image'], 300, 300);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', 300, 300);
						}
                                        $children_data_1[] = array(
                        'category_id' => $child_1['category_id'],
                        'name' => $child_1['name'],
						'image'  => $image,
                        'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_1['category_id'])
                    );
                                    }
                    $filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);
 
					
					if ($child['image']) {
							  $image = $this->model_tool_image->resize($child['image'], 50, 50);
							} else {
							  $image = $this->model_tool_image->resize('no-image.png', 50, 50);
							}
                    $children_data[] = array(
						'children' => $children_data_1,
                        'category_id' => $child['category_id'],
                        'name' => $child['name'],
						'image'  => '123',
                        'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
                    );
                }
            }
 
            $filter_data = array(
                'filter_category_id'  => $category['category_id'],
                'filter_sub_category' => true
            );
	
			if ($category['image']) {
							  $image = $this->model_tool_image->resize($category['image'], 50, 50);
							} else {
							  $image = $this->model_tool_image->resize('no-image.png', 50, 50);
							}
 
            $data['categories'][] = array(
                'category_id' => $category['category_id'],
                'name'        => $category['name'],
                'image'  => $image,
                'children'    => $children_data,
                'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
            );
        }

		return $this->load->view('extension/module/categorypro', $data);
	}
}