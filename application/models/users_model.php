<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {
	 
	/**
	 * Constructor 
	 *
	 */
	 
	function __Construct()
    {
        parent::__Construct();
    }
	
	
	// --------------------------------------------------------------------
		
	/**
	 * Get Users
	 *
	 * @access	private
	 * @param	array	conditions to fetch data
	 * @return	object	object with result set
	 */
	 function getUsers($conditions=array(),$fields='')
	 {
	 	
		parent::__construct(); 
		
		
		if(count($conditions)>0)		
	 		$this->db->where($conditions);
			
		$this->db->from('customer_info');

		$this->db->order_by("customer_info.cus_id", "asc");

		
		if($fields!='')
				$this->db->select($fields);
		else 		
	 		$this->db->select('customer_info.cus_id,customer_info.username,customer_info.email,customer_info.online');
		
		$result = $this->db->get();
		
		return $result;
		

      }//End of getUsers Function
 }