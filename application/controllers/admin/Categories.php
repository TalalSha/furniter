<?php

class Categories extends Admin_Controller
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
        $this->data['pageView'] = ADMIN . '/categories';

        $this->data['rows'] = $this->master->getRows('furniture_cat', array(), '', '', 'acs', '');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/categories';
        if ($this->input->post()) {
            $vals = $this->input->post();

            $this->master->save('furniture_cat', $vals, 'id', $this->uri->segment(4));
            setMsg('success', 'furniture Category has been saved successfully.');
            if(empty(intval($this->uri->segment(4)))){
                redirect(ADMIN . '/categories', 'refresh');
                exit;
            }
        }

        $this->data['row'] = $this->master->getRow('furniture_cat', array('id' => $this->uri->segment('4')));
        $this->data['page_title'] = $this->data['row'] ? "Edit Furniture Category" : "Add New furniture Category";
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete()
    {
        $this->master->delete('furniture_cat', 'id', $this->uri->segment(4));
        setMsg('success', 'furniture Category has been deleted successfully.');
        redirect(ADMIN . '/categories', 'refresh');
    }

}

?>