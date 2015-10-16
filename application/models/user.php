<?php
Class User extends CI_Model
{
function login($username, $password)
{
   $this -> db -> select('cus_id, username, password');
   $this -> db -> from('customer_info');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}

public function read_user_information($sess_array) {

$condition = "username =" . "'" . $sess_array['username'] . "'";
$this->db->select('*');
$this->db->from('customer_info');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}
}
?>