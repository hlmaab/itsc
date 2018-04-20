<?php

class Software extends CI_Model{
	
	public function get_info($name)		//Get the information of the selected software
	{
			$query=$this->db->like('name',$name);
			$query=$this->db->get('s_info');
			return $query->result_array();
	}
	
	
	public function get_list($type)	
	{
		if($type=="common")
			$query=$this->db->get('s_info');
		else{
			$query=$this->db->like('type',$type);
			$query=$this->db->get('s_type');
		}
		return $query->result_array();
	}
	
	public function get_result($name)
	{
		$query=$this->db->select('s_info.name, s_info.img, s_detail.information,s_detail.version,s_detail.subscribe');
		$query=$this->db->from('s_info');
		$query=$this->db->join('s_detail','s_info.name=s_detail.name');
		$query=$this->db->get();
		return $query->row_array();
	}
	
	public function get_item($name)
	{
		$query=$this->db->select('type');
		$query=$this->db->where('name',$name);
		$query=$this->db->get('s_type');
		$query=$query->row_array();
		$query=$this->db->like($query['type'],$name);
		$query=$this->db->get('s_info');
		return $query->result_array();
	}
	
}


?>