<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends MY_Controller {

	
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('page_model');
      
		} 

public function index()
{
    $this->data['enable_datatable'] = TRUE;
    $this->data['pageView'] ='shopping-cart';
    
    $this->load->view( "includes/site-master", $this->data);
}

function delete_item(){
    $id = $this->input->post('id');
    $data = array(
        'rowid' =>  $id,
        'qty'   => 0
);

$this->cart->update($data);
$this->data['carts']=$carts=$this->cart->contents();



    if($carts)
		{
			$output['output1'] = $this->load->view('cart2', $this->data, true);
			$output['output2'] = $this->load->view('cart1', $this->data, true);
			$output['msg']="Item deleted successfully";
		}
        else{
            $output['output1'] = $this->load->view('cart2', $this->data, true);
            $output['output2'] = $this->load->view('cart1', $this->data, true);
            $output['msg']="Cart is empty now";
        }
   
            
   
   exit(json_encode($output));


   }

    }
    ?>