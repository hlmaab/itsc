<?php
/*********************************************
This is the controller used for main seaching
Basic flow
	Text BOX: keyword()->(found exact name data)? display result view : call software() -> result();
	Common: software() -> result()
	Location $ Category: sort_list()->software()->result();
	
Variable:
$data['result'] <== Contain all the data want to pass to the view
$this->input->post('name') <== The name refer to the 'name' attribute of the textbox

*********************************************/
	class Search extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('software');	//Load the model first
		}
		
		public function index()
		{
			$this->load->view('search/software_home_page');	//Default action
		}
		
		/***********
			for searching bar
		************/
		public  function keyword()
		{
			$name=$this->input->get('name');
			$selectedLocation=$this->input->get('selectedLocation');
			$selectedCategory=$this->input->get('selectedCategory');
			
			$data['type']="Result";
			if($name!="")
				$data['result']=$this->software->get_info(urldecode($name),$selectedLocation, $selectedCategory); //Get the data that match the name
			else
				redirect('');	//Nothing change when nothing has been input
			
			if(sizeof($data['result'])==0)
				redirect('/notFound');	//direct to error page if nothing found
			else
			$this->load->view('search/common_software',$data);		//if found exact data,display
			//print_r($data['result']);
		}
		
		public function sort_list($type="common")	
		{ 
			$data['result']=$this->software->get_list($type);	//Create the select list
			$data['type']=$type;
			$this->load->view('search/common_software',$data);
		}
		
		public function item($name)
		{
			$data['type']="list";
			$data['result']=$this->software->get_item(urldecode($name));
			
			$this->load->view('search/common_software',$data);
			
		}
		
		public function detail($name)
		{
			$data['type']='software';
			$data['result']=$this->software->get_result(urldecode($name));
			$this->load->view('search/software_page',$data);
		}
		
		function notFound()
		{
			$this->load->view('search/software_not_found');
		}
		
	}