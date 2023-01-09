<?php

class Products extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        // $this->load->model('newsletter_model');
        has_access(10);
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/products';
        $this->data['pro'] = $this->master->get_data_rows('products', [], 'desc');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->get_data_row('siteadmin');
        $this->data['pageView'] = ADMIN . '/products';
         if ($this->input->post()) {
            $vals = $this->input->post();
            $content_row = $this->master->get_data_row('products', array('id'=>$this->uri->segment(4)));
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image1 = upload_file(UPLOAD_PATH.'images/', 'image');
                    generate_thumb(UPLOAD_PATH . "images/", UPLOAD_PATH . "images/", $image1['file_name'],100,'thumb_');
                    // generate_thumb(UPLOAD_PATH . "jobs/", UPLOAD_PATH . "jobs/", $image1['file_name'],200,'200p_');
                    // generate_thumb(UPLOAD_PATH . "jobs/", UPLOAD_PATH . "jobs/", $image1['file_name'],400,'400p_');
                    // generate_thumb(UPLOAD_PATH . "jobs/", UPLOAD_PATH . "jobs/", $image1['file_name'],500,'500p_');
                    generate_thumb(UPLOAD_PATH . "images/", UPLOAD_PATH . "images/", $image1['file_name'],700,'700p_');
                $vals['image']=$image1['file_name'];
                //pr($vals);
            }
            else{
                $vals['image']=$content_row->image;
            }
            $created_date="";
            if(empty($content_row->created_date)){
                $created_date=date('Y-m-d h:i:s');
            }
            else{
                $created_date=$content_row->created_date;
            }
            //pr($image1);
            //$categories=implode(",",$vals['categories']);
            $values=array(
                'title'=>$vals['title'],
                'description'=>$vals['description'],
                'furniture_cat_id'=>$vals['furniture_cat'],
                // 'years_of_experience'=>$vals['years_of_experience'],
                // 'practice_area_id'=>$vals['practice_area_id'],
                'Sub_id'=>$vals['sub_id'],
                'image'=>$vals['image'],
                // 'jurisdiction'=>$vals['jurisdiction'],
                // 'positions_available'=>$vals['positions_available'],
                'price'=>$vals['price'],
                'status'=>$vals['status'],
                'created_date'=>$created_date,
            );
 
            $sec6['title'] = $vals['sec6_title'];
            $sec6Phto['pics'] = $vals['sec6_pics'];
            $sec6['order_no'] = $vals['sec6_order_no'];
            unset($vals['sec6_order_no'],$vals['sec6_title'],$vals['sec6_pics']);
            $this->master->delete_where('multi_text', array('section'=> $vals['title'],'site_lang'=> 'eng'));
            $sec6s = array('order_no' => $sec6['order_no'], 'title' => $sec6['title'], 'txt1' => $sec6['text1']);
            
            $num=$sec6['title'];

            saveMultiMediaFieldsImgs('./uploads/images/', $_FILES['sec6_image'], 'sec6_image', $vals['title'], $sec6Phto['pics'], $sec6s, 'eng', 300);



            $id = $this->master->save('products', $values, 'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id > 0){
                setMsg('success', 'Product has been saved successfully.');
                redirect(ADMIN . '/products', 'refresh');
                exit;
            }
        }
        $this->data['row'] = $this->master->get_data_row('products',array('id'=>$this->uri->segment('4')));
        $this->data['cats'] = $this->master->get_data_rows('furniture_cat', ['status'=> 1]);
        $this->data['sub'] = $this->master->get_data_rows('sub_cat', ['status'=> 1]);
        // $this->data['levels'] = $this->master->get_data_rows('job_experience_levels', ['status'=> 1]);
        // $this->data['juri'] = $this->master->get_data_rows('job_jurisdiction', ['status'=> 1]);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);        
    }

    function sub_cat(){
        // pr("hi htere");
        $sub_id =$this->input->post('s_id');
        //pr($catalog);
        $this->data['row'] = $this->master->get_data_row('products',array('id'=>$this->uri->segment('4')));
     // echo $brand_id.$cat_id;
        $sub_c = $this->master->getSubCat($sub_id);
        // pr($sub_c);
        // $output="";
        if($sub_c){
            $output .='  <div class="col-md-12 sub_c">
            <label for="sub_id" class="control-label">Sub Category<span class="symbol required">*</span></label>
            <select name="sub_id" id="sub_id" class="form-control sub_c" required>
            <option value="">-- Select --</option> ';
                foreach ($sub_c as  $c) { 
                    
                $output .=                    
                    
                    '<option value="'. $c->id.' "  >' .$c->title.' </option> .
                   
                         </select>
            </div>
                ';
               } 
                    echo $output;
                    }
                   
     }

    function add_category(){
        $data=$this->input->post();
        $res=array();
        if(empty($data['cat_name'])){
            $res['status']=false;
            $res['empty']=true;
            echo json_encode($res);
        }
        else{
            $vals=array(
                'name'=>$data['cat_name']
            );
            $q=$this->master->save("categories",$vals);
            if($q>0){
                $res['status']=true;
                $res['success']=true;
                $res['cat_id']=$q;
            }
            else{
                 $res['status']=false; 
                 $res['fail']=false;  
            }
            echo json_encode($res);
        }
    }	
    
    function delete()
    {
        has_access(17);
        $this->master->delete('products','id', $this->uri->segment(4));
        setMsg('success', 'Products has been deleted successfully.');
        redirect(ADMIN . '/products', 'refresh');
    }
}

?>