<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Insert extends BaseController{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('insert_model');
      $this->isLoggedIn();   
  }

  function index(){
    $this->global['pageTitle'] = 'CodeInsect : Dashboard';

    //Setting values for tabel columns
  
    print_r ($_POST);
    $data = $_POST['new_data'];



    //Loading the view
    $this->loadViews("addSoftware/addSoftware", $this->global, NULL , NULL);
  }
}
?>