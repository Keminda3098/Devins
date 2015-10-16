<?php
class UserProfileDatabaseAccess extends CI_Model{
	
	
function __construct() {
parent::__construct();
}


function getuserdetails()
	{
	$query=$this->db->query("Select username,fname,lname,email,address,mob,age,country from customer_info where username = 'Smith'");
	return $query->result();
        
        }

} 



