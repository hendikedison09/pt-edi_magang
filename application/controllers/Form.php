<?php
class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
    }
    public function index()
    {
        
        $data['input']= $this->Form_model->getForm();
        $this->load->view('v_form',$data);

    }       
}

?>
