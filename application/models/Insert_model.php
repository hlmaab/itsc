<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Insert_model extends CI_MODEL
{
	function __construct() {
		parent::__construct();
	}

	function get_count($name=NULL)
	{
		if($name!=NULL)
			$this->db->like('name',$name);
		$result=$this->db->get('software');
		return $result->num_rows();
	}
	function get_software($name=NULL,$page, $segment)
	{
		if($name!=NULL)
			$this->db->like('name',$name);
		$this->db->limit($page, $segment);
		$query=$this->db->get('software');
		$result=$query->result_array();
		
		return $result;
	}
	
	function get_list($db){
		$result=$this->db->get($db);
		return $result->result_array();
	}

	/**
	 * @Alice */
	function form_insert($data){
		// Inserting in Table(s_info) of Database(itsc)
		$this->db->insert('s_info', $data);
	}

}