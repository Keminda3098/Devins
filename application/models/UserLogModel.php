<?php
class UserLogModel extends CI_Model{
	
	
function __construct() {
parent::__construct();
}

function getonlinedetails()
	{
	$query=$this->db->query("Select session_id,ip_address,user_agent,session_start,session_end,user_data,username from ci_sessions where session_end = '0'");
        return $query->result();
        
        }
} 


