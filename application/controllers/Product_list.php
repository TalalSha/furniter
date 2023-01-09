<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_list extends MY_Controller {

	
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('page_model');
		}
	
		function index($id)
		{  
            $id=doDecode($id);
            if (intval($id) > 0 &&
             $this->data['catalog'] = $this->master->get_data_rows('products', ['status'=> 1, 'furniture_cat_id'=> $id]))
        {

            $this->data['rows'] = $this->master->get_data_rows('products',array('furniture_cat_id'=>$this->uri->segment('2')));
            $this->data['sub'] = $this->master->get_data_rows('sub_cat', ['status'=> 1]);
             
            $this->data['cats']=[];
            $cats = $this->master->get_data_rows('furniture_cat', ['status'=>1]);
            foreach($cats as $index => $cat):
                $cat->sub = $this->master->get_data_rows('sub_cat', ['cat_id'=> $cat->id, 'status'=> 1]);
                $this->data['cats'][] = $cat;
             endforeach;

            $this->data['pageView']='product-list';
            $this->data['footer']=true;
            // pr($this->data['cats']);
        }else{
            $this->data['msg'] = " No products availabe";
          $this->data['cats'] = [];
          $cats = $this->master->get_data_rows('furniture_cat', ['status'=> 1]);
   foreach($cats as $index => $cat):
     $cat->sub = $this->master->get_data_rows('sub_cat', ['id'=> $cat->id, 'status'=> 1]);
     $this->data['cats'][] = $cat;
   endforeach;
   

   
       $this->data['pageView']='product-list';
        }
        $this->load->view("includes/site-master", $this->data);
      }
      function search(){
        $searchpro = $this->input->post('search');
        $this->data['catalog']= $this->master->getsearchPro($searchpro);
        // pr($this->data['result']);
        // exit;
        
        $this->data['pageView']='product-list';
        $this->data['footer']=true;
        $this->load->view("includes/site-master", $this->data);

      }

      
      function list() {  
             
               $this->data['catalog'] = $this->master->get_data_rows('products',['status'=> 1]);
           
              $this->data['cats'] = [];
               $cats = $this->master->get_data_rows('furniture_cat', ['status'=> 1]);
        foreach($cats as $index => $cat):
          $cat->sub = $this->master->get_data_rows('sub_cat', ['cat_id'=> $cat->id, 'status'=> 1]);
          $this->data['cats'][] = $cat;
        endforeach;
        
              $this->data['pageView']='product-list';
        $this->data['footer']=true;
        $this->load->view("includes/site-master", $this->data);
          
          }

          function pfilter()
          {
        
            $id = $this->input->post('id');
            $sid = $this->input->post('sid');
            $price = explode("$ - $", $this->input->post('price'));
            if($sid){
              $this->data['products1'] = $products1 = $this->master->get_data_rows('products', ['status' => 1, 'furniture_cat_id' => (int)$id,'sub_id'=>(int)$sid, 'price >=' => (int)$price[0], 'price <=' => (int)$price[1]]);
              $output['output1'] = $this->load->view('filtered', $this->data, true);
         
              exit(json_encode($output));
            }
            $this->data['products1'] = $products1 = $this->master->get_data_rows('products', ['status' => 1, 'furniture_cat_id' => (int)$id, 'price >=' => (int)$price[0], 'price <=' => (int)$price[1]]);
           //pr( $this->data['products1'] );
          //  $this->db->where( ['furniture_cat_id'=> (int)$id, 'price >='=> (int)$price[0], 'price <='=> (int)$price[1]]);
          
          // //  $this->db->where('price >=','',$price[0] );
          // //  $this->db->where('price <=',$price[1] );
          //  $this->db->order_by("id","desc");
          //  $this->db->where('status', 1);
          //  $result = $this->db->get('products')->result();
           
          //  pr($result); 
           $output['output1'] = $this->load->view('filtered', $this->data, true);
         
            exit(json_encode($output));
          }



          




          function pro_cat(){
            // pr("hi htere");
            $product_id =$this->input->post('b_id');
            //pr($catalog);
            $cat_id = $this->input->post('c_id');
         // echo $product_id.$cat_id;
            $catalog = $this->master->proCat($product_id,$cat_id);
             //pr($catalog);
            $output="";
            if($catalog){
                $output .=' <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6 col-xx-12 RSide itemsf">
                <ul class="proLst">';
                  foreach($catalog as $cat) { 

                    $output .=' <li>
                    <div class="inner">';
                    //$output .='	<img src="'.base_url('upload/images/' .$cat->image).'" alt="" />';
                                            $output .='<img src="'.get_site_image_src("images", $cat->image, 'thumb_').'" alt="" data-src="' .get_site_image_src("images", $cat->image, 'thumb_').'">';
                                           
                                            $output .=' <div class="overlay">';
                                            $output .='<a href="'.base_url().'product/'.doEncode($cat->id).'" class="view"><i class="fi-link"></i></a>';
                                            $output .= '  <a href="javascript:void(0)" class="cart" data-id="' . $cat->id . '" data-des="' . $cat->description . '" data-image="' . $cat->image . '" data-name="' . $cat->title . '" data-price="' . $cat->price . '"><i class="fi-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="rsBar">'
                . '<h4>' . $cat->title . '</h4>'
                . '<span class="price">' . $cat->price . '</span>
                          </div>
                      </li>';
            }
            echo $output;
                        } else {
                          echo "No Sub-categories";
                        }
    }
  }   
            ?>