<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* @Alice 
* Model for inserting new software
* */
class Insert_model extends CI_MODEL
{
	function __construct() {
		parent::__construct();
	}
	
	// Inserting data in Table(s_info) of Database(itsc) 
	function form_insert($data){

		// split new_data by "&"	
		$pieces = explode("&", $data['new_data']);																	
		$sqlpiece = array();

		for ($i = 0; $i < count($pieces); $i++)
		{
			// get attribute name
			$attribute = strtok($pieces[$i], '=');

			// check if the attributes in table match the form fields
			if ($this->db->field_exists( $attribute, 's_name_test')){								

				/** 
				 * split pieces by "=" , 1st element is attribute in db, 2nd element is value
				 * e.g. name=Win becomes 'name'=> "Win"
				 * append to $sqlpiece array
				 * */
				$sqlpiece += [ $attribute => substr($pieces[$i], strrpos($pieces[$i],'=') + 1)];

			}
		}

		$name = ['sname' => 'Windows'];
		$name += ['version' => '4.0'];


		$this->db->insert('s_name_test', $sqlpiece); 

	}

}