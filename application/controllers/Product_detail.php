<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_detail extends MY_Controller {

	
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('page_model');
      
		}
	
		function index($id)
		{  
            $id=doDecode($id);
            // var_dump($id);
            if (intval($id) > 0 &&
             $this->data['product'] = $this->master->get_data_row('products', ['status'=> 1, 'id'=> $id]))
           {
             //$this->data['rows'] = $this->master->get_data_rows('products',array('furniture_cat_id'=>$this->uri->segment('2')));
           $this->data['color'] = getMultiText($this->data['product']->title);
           //pr( $this->data['color']);
            $this->data['pageView']='product-detail';
			$this->data['footer']=true;
			$this->load->view("includes/site-master", $this->data);
        }
        }
    }
    ?>