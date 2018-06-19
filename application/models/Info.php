<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_MODEL
{
	function get_count($name=NULL)
	{
		if($name!=NULL)
			$this->db->like('name',$name);
		$result=$this->db->get('s_info');
		return $result->num_rows();
	}
	function get_software($name=NULL,$page, $segment)
	{
		if($name!=NULL)
			$this->db->like('name',$name);
		$this->db->limit($page, $segment);
		$query=$this->db->get('s_info');
		$result=$query->result_array();
		
		return $result;
	}
	
	function get_list($db){
		$result=$this->db->get($db);
		return $result->result_array();
	}
}