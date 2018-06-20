<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_MODEL
{
	function get_software_count($name=NULL)
	{
		if($name!=NULL)
			$this->db->like('name',$name);
		$result=$this->db->get('s_info');
		return $result->num_rows();
	}

	/**
     * This function used to get software information by name
     * @param number $userId : This is software name
     * @return array $result : This is software information
     */
	function get_software($name=NULL,$page, $segment)
	{
        //only get the software that is not deleted in the system
        $this->db->where('is_deleted',0);                              
		if($name!=NULL)
			$this->db->like('name',$name);
		$this->db->limit($page, $segment);
		$query=$this->db->get('s_info');
		$result=$query->result_array();
		
		return $result;
	}

	/**
     * This function used to get software information by id
     * @param number $userId : This is software id
     * @return array $result : This is software information
     */
    function get_software_by_id($id)
    {
        $this->db->select('id, name, category, location');
        $this->db->from('s_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	/**
     * This function used to get full software list from the table
     * @param var $userId : This table name
     * @return array $result : This is software list
     */
	function get_list($db){
		$this->db->select('id, name, category, location');
		$result=$this->db->get($db);
		return $result->result_array();
	}

	 /**
     * This function is used to update the software information
     * @param array $userInfo : This is software updated information
     * @param number $userId : This is software id
     */
    function edit_Software($softwareInfo, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('s_info', $softwareInfo);
        
        return TRUE;
    }

    /**
     * This function is used to delete the software information
     * @param number $userId : This is software id
     * @return boolean $result : TRUE / FALSE
     */
    function delete_Software($id, $softwareInfo)
    {
        $this->db->where('id', $id);
        $this->db->update('s_info', $softwareInfo);
        
        return $this->db->affected_rows();
    }

}