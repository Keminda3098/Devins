<?php
class UserProfileDatabaseAccess extends CI_Model{
	
	
function __construct() {
parent::__construct();
}


function getuserdetails($user)
	{
	$query=$this->db->query("Select username,fname,lname,email,address,mob,age,country,profilepicurl from customer_info where username = '$user'");
	return $query->result();
        
        }
function getuserpaymentsdetails($user)
	{
	$query=$this->db->query("Select ID,Name,Cat,Sub,UPrice,Qty,Total,OrderedDate,Status,Cus_ID,paid from product_orders where Cus_ID = '$user'");
	return $query->result();
        
        }
} 



