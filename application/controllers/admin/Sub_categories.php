<?php



class Sub_categories extends Admin_Controller

{



    public function __construct()

    {

        parent::__construct();

        $this->isLogged();

        has_access(7);

    }



    function index()

    {

        $this->data['enable_datatable'] = TRUE;

        $this->data['pageView'] = ADMIN . '/sub_categories';



        $this->data['rows'] = $this->master->getRows('sub_cat', array(), '', '', 'asc', 'title');

        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);

    }



    function manage()

    {

        $this->data['enable_editor'] = TRUE;

        $this->data['pageView'] = ADMIN . '/sub_categories';

        if ($this->input->post()) {

            $vals = $this->input->post();



            $this->master->save('sub_cat', $vals, 'id', $this->uri->segment(4));

            setMsg('success', 'sub_categories has been saved successfully.');

            if(empty(intval($this->uri->segment(4)))){

                redirect(ADMIN . '/sub_categories', 'refresh');

                exit;

            }

        }

        $this->data['cats'] = $this->master->get_data_rows('furniture_cat', ['status'=> 1]);

        $this->data['row'] = $this->master->getRow('sub_cat', array('id' => $this->uri->segment('4')));

        $this->data['page_title'] = $this->data['row'] ? "Edit sub_categories" : "Add New sub_categories";

        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);

    }



    function delete()

    {

        $this->master->delete('sub_cat', 'id', $this->uri->segment(4));

        setMsg('success', 'Sub_categories has been deleted successfully.');

        redirect(ADMIN . '/sub_categories', 'refresh');

    }



}



?>