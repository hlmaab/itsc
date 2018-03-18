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
			$this->load->view('search/index');	//Default action
		}
		
		
		public  function keyword()
		{
			$name=$this->input->post('name');
			
			if($name!="")
				$data['result']=$this->software->get_info(urldecode($name)); //Get the data that match the name
			else
				redirect('');	//Nothing change when nothing has been input
			
			if($data['result']=="")
				$this->software('name',urldecode($name));	//if now data matched, try matching similiar data
			else
			$this->load->view('search/result',$data);		//if found exact data,display
		}
		
		public function result($name)
		{
			$data['result']=$this->software->get_info(urldecode($name));	//The the data with exact name
			$this->load->view('search/result',$data);
		}
		
		 function software($type=NULL,$value=NULL)
		{
			if($type==NULL && $value==NULL)
				$data['result']=$this->software->get_result();
			else
			{
				$crit=array(
						'value'=>urldecode($value),  //parse URL spacial character 
						'type'=>$type
						);
						
				$data['result']=$this->software->get_result($crit);	//Find the simliar data
			}
				if(empty($data['result']))					//If no result back to index
					redirect('');
				else
					$this->load->view('search/list',$data);

		}
		
		public function sort_list($type='software')	
		{ 
			$data['result']=$this->software->get_list($type);	//Create the select list
			$data['type']=$type;
			$this->load->view('search/preList',$data);
		}
		
	}