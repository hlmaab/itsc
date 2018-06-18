<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
* @Alice 
* Controller for inserting new software
* */
class Insert extends BaseController{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('insert_model');
      $this->isLoggedIn();   
  }

  /*function index(){
    //load libraries
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    //set rules
    $this->form_validation->set_rules('sname', 'sname', 'required');

    // get field data from addSoftware.php
    $data = array ('new_data' => $this->input->post('new_data', TRUE));

    //$data = array ('new_data' => $this->input->post('test'));
    print_r($data);


    //check if the validation is successful
    if ($this->form_validation->run() == FALSE)
    {
      //Loading the from view
      $this->global['pageTitle'] = 'CodeInsect : Add Software';
      $this->loadViews("addSoftware/addSoftware", $this->global, NULl , NULL);

      log_message('error', '(insert.php) Name field is missing in the form.');
    }
    else
    {
      $this->insert_model->form_insert($data);

      //Loading the successfully inserted view
      $this->global['pageTitle'] = 'CodeInsect : Added Software';
      $this->loadViews('addSoftware/addSoftwareSuccess', $this->global, NULl , NULL);

      log_message('debug', '(insert.php) Name field is valid in the form.');
    }

    log_message('info', '(insert.php) The purpose of this function is to insert data.');
  }*/
function index(){
    //load libraries
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');



    //set rules
    $this->form_validation->set_rules('sname', 'sname', 'required');

    // get field data from addSoftware.php
    $data = array ('new_data' => $this->input->post('new_data'));

    //$data = array ('new_data' => $this->input->post('test'));
    print_r($data);


    //check if the validation is successful
    if ($this->form_validation->run() == FALSE)
    {
      //Loading the from view
      $this->global['pageTitle'] = 'CodeInsect : Add Software';
      $this->loadViews("addSoftware/addSoftware", $this->global, NULl , NULL);

      log_message('error', '(insert.php) Name field is missing in the form.');
    }
    else
    {
      $this->insert_model->form_insert($data);

      //Loading the successfully inserted view
      $this->global['pageTitle'] = 'CodeInsect : Added Software';
      $this->loadViews('addSoftware/addSoftwareSuccess', $this->global, NULl , NULL);

      log_message('debug', '(insert.php) Name field is valid in the form.');
    }

    log_message('info', '(insert.php) The purpose of this function is to insert data.');
  }
}

?>