<?php

class Software extends CI_Model{
	
	public function get_info($name)		//Get the information of the selected software
	{
			$query=$this->db->where('name',$name);
			$query=$this->db->get('s_info');
			return $query->row_array();
	}
	
	public function get_result($crit=NULL)
	{		
		if($crit!=NULL)
		{
			$query=$this->db->like($crit['type'],$crit['value']);	//Find simliar data
		}
		
		$query=$this->db->get('software');
		return $query->result_array();
	}
	
	public function get_list($type)	
	{
		$query=$this->db->get($type);
		return $query->result_array();
	}
	
	
}


?>