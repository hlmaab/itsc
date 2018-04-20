<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Information extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('info');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function info()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        
		
		$this->load->library('pagination');
        $data['searchText']=$this->security->xss_clean($this->input->GET('searchText'));
        $count = $this->info->get_count($data['searchText']);
		$returns = $this->paginationCompress ( "manage/", $count, 1 );
		
		$data['result']=$this->info->get_software($data['searchText'],$returns["page"], $returns["segment"]);
		
        $this->loadViews("/manage/info", $this->global, $data , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function addSoftware()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
			$data['locations']=$this->info->get_list('s_locations');
			$data['category']=$this->info->get_list('s_category');
			$data['license']=$this->info->get_list('s_license');
			$data['platform']=$this->info->get_list('s_platform');
            
			$this->global['pageTitle'] = 'CodeInsect : Add New Software';

            $this->loadViews("/info/add", $this->global, $data, NULL);
        }
    }

    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

 }

?>