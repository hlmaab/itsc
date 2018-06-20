<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Information 
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
     * This function used to load the first screen of the software management
     */
    public function info()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        
		
		$this->load->library('pagination');
        $data['searchText']=$this->security->xss_clean($this->input->GET('searchText'));
        $count = $this->info->get_software_count($data['searchText']);
		$returns = $this->paginationCompress ( "manage/", $count, 10 );
		
        $data['result']=$this->info->get_software($data['searchText'],$returns["page"], $returns["segment"]);
        //$data['result']=$this->info->get_list('s_info');
		
        $this->loadViews("/manage/info", $this->global, $data , NULL);
    }
    
    /**
     * This function is used to load the software list
     * @Alice replaced it by Insert.php
     * */
    /*function addSoftware()
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
    }*/

    /**
     * @Alice
     * This function is used to load the add new software form
     */
    function addNewForm()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('insert_model');
            //$data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'CodeInsect : Add New Software';

            $this->loadViews("manage/addNewSoftware", $this->global, NULL, NULL);
        }
    }

    /**
     * @Alice
     * This function is used to add new software to the database
     */
    function addNewSoftware()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Software Name','trim|required|max_length[100]');
            $this->form_validation->set_rules('location','Location','trim|required|max_length[100]');
            $this->form_validation->set_rules('category','Category','trim|required|max_length[100]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNewForm();
            }
            else
            {
                $data = $this->input->post('new_data');

                $softwareInfo = array();
                $softwareInfo = array('new_data'=>$data);
                
                $this->load->model('insert_model');
                $result = $this->insert_model->form_insert($softwareInfo);
                
                if($result > 0)
                {
                    redirect('manage/addSoftwareSuccess');
                    //$this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Software creation failed');
                }
                
                
            }
        }
    }


    /**
     * @Alice
     * This function is used load software edit information
     * @param number $userId : Optional : This is user id
     */
    function editOldSoftware($id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($id == null)
            {
                redirect('manage');
            }
            
            $data['softwareInfo'] = $this->info->get_software_by_id($id);
            
            $this->global['pageTitle'] = 'CodeInsect : Edit Software';
            
            $this->loadViews("manage/editOldSoftware", $this->global, $data, NULL);
        }
    }

    /**
     * @Alice
     * This function is used to edit the software information
     */
    function editSoftware()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $id = $this->input->post('id');
            
            $this->form_validation->set_rules('name','Software Name','trim|required|max_length[100]');
            $this->form_validation->set_rules('location','Location','trim|required|max_length[100]');
            $this->form_validation->set_rules('category','Category','trim|required|max_length[100]');

            if($this->form_validation->run() == FALSE)
            {
                $this->editOldSoftware($id);
            }
            else
            {
                $name = $this->input->post('name');
                $location = $this->input->post('location');
                $category = $this->input->post('category');
                
                $softwareInfo = array();
                $softwareInfo = array('name'=>$name, 'location'=>$location, 'category'=>$category);

                $result = $this->info->edit_Software($softwareInfo, $id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Software updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Software updation failed');
                }
                
                redirect('manage');
            }
        }
    }

    /**
     * This function is used to delete the software using its id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteSoftware()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $id = $this->input->post('id');
            $softwareInfo = array('is_deleted'=>1);
            
            $result = $this->info->delete_Software($id, $softwareInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
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