<?php

class Software extends CI_Model{
	
	public function get_info($name,$selectedLocation, $selectedCategory)		//Get the information of the selected software
	{
			if ($selectedLocation!="All"){
				$query=$this->db->like('location',$selectedLocation);
			}
			if ($selectedCategory!="All"){
				$query=$this->db->like('category',$selectedCategory);
			}
			$query=$this->db->like('name',$name);
			$query=$this->db->where('is_deleted',0);   
			$query=$this->db->get('s_info');
			return $query->result_array();
	}
	
	
	public function get_list($type)	
	{
		if($type=="common"){
			$query=$this->db->where('is_deleted',0);   
			$query=$this->db->get('s_info');
		}
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
		$query=$this->db->join('s_detail','s_info.id=s_detail.id');
		$query=$this->db->where('s_info.name', $name);
		$query=$this->db->where('is_deleted',0);
		$query=$this->db->get();
		return $query->row_array();
	}
	

	/**
	 * for category
	 */
	public function get_item($name)
	{
		$type=$this->db->select('type');
		$type=$this->db->where('name',$name);
		$type=$this->db->get('s_type');
		$type=$type->row_array();

		$query=$this->db->like($type['type'],$name);
		$query=$this->db->where('is_deleted',0);
		$query=$this->db->get('s_info');


		
		return $query->result_array();
	}
	
}


?>