<?php
class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('service_model');
        $this->load->model('page_model');
        $this->load->model('testimonial_model');
    }

    function index()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'home'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        // pr($this->data['site_categories']);
        // $this->data['services'] = $this->service_model->get_rows(array('status'=>1));
        $this->data['testimonials'] = $this->testimonial_model->get_rows(array('status'=>1),'','','desc');
        $this->data['pageView']='index';
        $this->data['footer']=true;
        $this->load->view("includes/site-master", $this->data);
    }

    function add_product(){
			
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $image = $this->input->post('image');
        $des = $this->input->post('des');
        
        $cart = array(
            'id'      => $id,
            'qty'     => 1,
            'price'   => $price,
            'name'    => $name,
            'image'    =>$image,
            'des'    =>$des
           
    );
     
   if($this->cart->insert($cart)){
    $this->data['carts'] =$carts=$this->cart->contents();
    
    if($carts){
        
        
        $output['output1'] = $this->load->view('cart', $this->data, true);
        $output['output2'] = $this->load->view('cart1', $this->data, true);
        $output['msg']="Item added to cart successfully ";
        
        

   } 
   }
//    echo  ' Successfully Entered';
exit(json_encode($output));
       }
function delete_item(){
    $id = $this->input->post('id');
    $data = array(
        'rowid' =>  $id,
        'qty'   => 0
        );
    
    $this->cart->update($data);
    $this->data['carts'] =$carts = $this->cart->contents();
    if($carts)
    {
        $output['output1'] = $this->load->view('cart', $this->data, true);
        $output['output2'] = $this->load->view('cart1', $this->data, true);
        $output['msg']="Item deleted successfully";
    }
    else{
        $output['output1'] = $this->load->view('cart', $this->data, true);
        $output['output2'] = $this->load->view('cart1', $this->data, true);
        $output['msg']="Cart is empty now";
    }
    
    exit(json_encode($output));
    }

    
}

?>