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

  function index(){
    $this->global['pageTitle'] = 'CodeInsect : Add Software';

    //Loading the view
    $this->loadViews("addSoftware/addSoftware", $this->global, NULl , NULL);
  }


  function insertData(){
    $this->global['pageTitle'] = 'CodeInsect : Insert Data';
    
    //Setting values for tabel columns
    //$data = array ('sname' => $this->input->post('new_data'));
    //$data = $this->input->post('new_data');
    //print_r($data);

    $data = array ('new_data' => $this->input->post('new_data'));
    //$pieces = explode("&", $data['new_data']);
    //$name_piece = substr($pieces[0], strrpos($pieces[0],'=') + 1);
		//$name = array ('sname' => $name_piece );
    
    $this->insert_model->form_insert($data);

    //Loading the view
    redirect("insert/index");
  }
}
?>