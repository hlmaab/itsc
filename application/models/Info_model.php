<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Info_model extends CI_MODEL
{
	function get_software_count($name=NULL)
	{
        $this->db->where('is_deleted',0);
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
        /*$this->db->where('id', $id);
        $this->db->where('is_deleted',0);
        $query = $this->db->get('s_info');*/

		$query=$this->db->from('s_info');
		$query=$this->db->join('s_detail','s_info.id=s_detail.id');
		$query=$this->db->where('s_info.id', $id);
		$query=$this->db->where('is_deleted',0);
		$query=$this->db->get();
        
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
        $this->db->where('is_deleted',0);
		return $result->result_array();
	}

	 /**
     * This function is used to update the software information
     * @param array $userInfo : This is software updated information
     * @param number $userId : This is software id
     */
    function edit_Software($softwareInfo, $id)
    {
        $info = array();
        $detail = array();

        foreach($softwareInfo as $key => $value) {

            // check if the attributes in table match the form fields
			if ($this->db->field_exists( $key, 's_info')){								
                $info += [ $key => $value];
            }
            if ($this->db->field_exists( $key, 's_detail')){								
                $detail += [ $key => $value];
            }

            // insert new location/category if it is not exist in s_type table
            if ($key=="location" || $key=="category"){
                $query = $this->db->like('name', $value);
                $query = $this->db->get('s_type');
                if ($query->num_rows()==0){
                    $type = array();
                    $type += [ 'name' => $value, 'type'=>$key];
                    $this->db->insert('s_type', $type); 
                }
            }
        }

        $this->db->where('id', $id);
        $this->db->update('s_info', $info);
        $this->db->where('id', $id);
        $this->db->update('s_detail', $detail);

        
        return TRUE;
    }

    /**
     * This function is used to delete the software information
     * @param array $userInfo : This is software deleted information
     * @param number $userId : This is software id
     * @return boolean $result : TRUE / FALSE
     */
    function delete_Software($id, $softwareInfo)
    {
        $this->db->where('id', $id);
        $this->db->update('s_info', $softwareInfo);
        
        return $this->db->affected_rows();
    }

    /**
     * This function is used to add the software information
     * @param array $userInfo : This is new software information
     * @return boolean $result : TRUE / FALSE
     */
    function add_Software($softwareInfo)
    {
        $info = array();
        $detail = array();

        foreach($softwareInfo as $key => $value) {

            // check if the attributes in table match the form fields
			if ($this->db->field_exists( $key, 's_info')){								
                $info += [ $key => $value];
            }
            if ($this->db->field_exists( $key, 's_detail')){								
                $detail += [ $key => $value];
            }

            // insert new location/category if it is not exist in s_type table
            /*if ($key=="location" || $key=="category"){

                $cats =  explode(", ", $value);
                foreach($cats as $cat) {
                    $cat = trim($cat);
                    $categories .= "<category>" . $cat . "</category>\n";
                }

                $query = $this->db->like('name', $value);
                $query = $this->db->get('s_type');
                if ($query->num_rows()==0){
                    $type = array();
                    $type += [ 'name' => $value, 'type'=>$key];
                    $this->db->insert('s_type', $type); 
                }
            }*/
        }
        $this->db->insert('s_info', $info); 
        $this->db->insert('s_detail', $detail); 
        return TRUE;
    }

}