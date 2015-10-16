<?php
class SessionDetailModel extends CI_Model{
	
	
function __construct() {
parent::__construct();
}


function getsessiondetails()
	{
	$query=$this->db->query("Select session_id,ip_address,user_agent,session_start,session_end,user_data,username from ci_sessions");
        return $query->result();
        }

function gettodropdown()
{
 $query=$this->db->query("Select DISTINCT username from ci_sessions");
        return $query->result();
}

function gettallbyuname($val)
{
 $query=$this->db->query("Select session_id,ip_address,user_agent,session_start,session_end,user_data,username from ci_sessions where username ='$val'");
        return $query->result();
}
function gettallbydate($val2)
{
 $query=$this->db->query("Select session_id,ip_address,user_agent,session_start,session_end,user_data,username from ci_sessions where session_start ='$val2'");
        return $query->result();
}
}

  ?>



