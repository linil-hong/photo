<?php
class ControllerInformationWhereToBuy extends Controller {
	public function index() {
		$this->load->language('information/where_to_buy');

		$this->document->setTitle($this->language->get('heading_title'));
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][]= array(
						'text' =>'Home'. '&nbsp;&gt;',
						'href' =>$this->url->link('common/home')
					);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title') . '&nbsp;&gt;',
			'href' => $this->url->link('information/where_to_buy')
		);

		$data['online_sales'] = array(
			'amazon' => array(
				'icon' => 'catalog/view/theme/imuto/image/icon/icon-amazon.png',
				'countries' => array(
					array(
						'href' => 'https://www.amazon.com/stores/node/15090695011?_encoding=UTF8&field-lbr_brands_browse-bin=PHOTOOLEX&ref_=bl_dp_s_web_15090695011',
						'image' => 'catalog/view/theme/imuto/image/country/icon-usa.png'
					),
					array(
						'href' => 'https://www.amazon.ca/stores/node/17221020011?_encoding=UTF8&field-lbr_brands_browse-bin=PHOTOOLEX&ref_=bl_dp_s_web_17221020011',
						'image' => 'catalog/view/theme/imuto/image/country/icon-ca.png'
					),
					array(
						'href' => 'http://amz.masadora.net/s?k=PHOTOOLEX&ref=bl_dp_s_web_0',
						'image' => 'catalog/view/theme/imuto/image/country/icon-jp.png'
					),
					array(
						'href' => 'https://www.amazon.co.uk/stores/node/8377219031?_encoding=UTF8&field-lbr_brands_browse-bin=PHOTOOLEX&ref_=bl_dp_s_web_8377219031',
						'image' => 'catalog/view/theme/imuto/image/country/icon-uk.png'
					),
					array(
						'href' => 'https://www.amazon.fr/s?k=PHOTOOLEX&ref=bl_dp_s_web_0',
						'image' => 'catalog/view/theme/imuto/image/country/icon-fr.png'
					),
					array(
						'href' => 'https://www.amazon.it/stores/node/4622693031?_encoding=UTF8&field-lbr_brands_browse-bin=PHOTOOLEX&ref_=bl_dp_s_web_4622693031',
						'image' => 'catalog/view/theme/imuto/image/country/icon-it.png'
					),
					array(
						'href' => 'https://www.amazon.com.au/s?k=PHOTOOLEX&ref=bl_dp_s_web_0',
						'image' => 'catalog/view/theme/imuto/image/country/icon-au.png'
					),
					array(
						'href' => 'https://www.amazon.ae/s?k=PHOTOOLEX&ref=bl_dp_s_web_0',
						'image' => 'catalog/view/theme/imuto/image/icon/icon-uae.png'
					)
				)
			)	
			// 'souq' => array(
			// 	'icon' => 'catalog/view/theme/imuto/image/icon/icon-souq.png',
			// 	'countries' => array(
			// 		array(
			// 			'href' => 'https://uae.souq.com/ae-en/imuto/s/?as=1',
			// 			'image' => 'catalog/view/theme/imuto/image/icon/icon-uae.png'
			// 		)
			// 	)
			// ),
			// 'walmart' => array(
			// 	'icon' => 'catalog/view/theme/imuto/image/icon/icon-walmart.png',
			// 	'countries' => array(
			// 		array(
			// 			'href' => 'javascript:;',
			// 			'image' => 'catalog/view/theme/imuto/image/country/icon-usa.png'
			// 		)
			// 	)
			// )
		);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/where_to_buy', $data));
	}
}
