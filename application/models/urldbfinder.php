<?php

/**
 *
 */
class urldbfinder extends CI_Model {

function getpromotionalproducts($ID) {
		
		$query = $this->db->query("Select * from promotional_products where p_Type = '$ID'");
		return $query->result();
	}
	
	
	function InsertAll($input,$input1,$input2,$input3,$input4,$input5,$CusID)
	{
		$status= "NonAccepted";
	$this->db->query("INSERT INTO product_orders(Name,Cat,Sub,UPrice,Qty,Total,Status,Cus_ID) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$status','$CusID')");
	}
	
	function getAllView() {
		
		$query = $this->db->query("Select p_Id,p_Name,p_Price,p_Quantity,p_Url from promotional_products");
		return $query->result();
	}
	
		
	function updateQuantity($id,$newQty){
		$this->db->query("update promotional_products set p_Quantity = '$newQty' where p_Id ='$id'");
	}
	
	
	function getOrders($status) {
		if($status=="Rejected"){
			$query = $this->db->query("Select * from product_orders where Status != 'Accepted' And Status != 'NonAccepted'  And Status != 'Completed'");
		}
		else{
			$query = $this->db->query("Select * from product_orders where status = '$status'");
		}
		//$query = $this->db->query("Select * from product_orders where status = '$status'");
		return $query->result();
	}
	
	function updateStatus($id,$status){
		$this->db->query("update product_orders set Status = '$status' where ID ='$id'");
	}
	
	function getEmail($User) {
		
		$query = $this->db->query("Select email from customer_info where username = '$User'");
		$data = $query->row_array();
		$value = $data['email'];
		return $value;
	}
	
	function InsertRejectedOrder($ID,$reason)
	{
	$this->db->query("INSERT INTO rejected_orders(Id,reason) VALUES('$ID','$reason')");
	}
	
///////////////////////////////PIUMI/////////////////
	function SearchProduct($NAME) {

		$query = $this -> db -> query("SELECT * FROM `promotional_products` WHERE `p_Name` LIKE '%$NAME%'");
		return $query -> result();
	}

	function getAllDBToView() {

		$query = $this -> db -> query("SELECT `p_Id`,`p_Name`,`p_Description`,`p_Price`,`p_Url`,(`r_Rating` DIV `r_Noofraters`) as 'p_Rating' FROM `promotional_products` RIGHT JOIN `product_rating` ON `p_Id` = `r_Pid`");
		
		return $query -> result();
	}
	
	function getSliderToView() {

		$query = $this -> db -> query("SELECT * FROM `slider_images`");
		return $query -> result();
	}

	function checkLoginType($username) {

		$query = $this -> db -> query("SELECT `type` FROM `customer_info` WHERE `username` = '$username' ");
		return $query -> result();
	}

	function getAllproduct() {

		$query = $this -> db -> query("SELECT * FROM `promotional_products`");
		return $query -> result();
	}

	function getAllAdmin() {

		$query = $this -> db -> query("SELECT * FROM `customer_info`WHERE `type`='administrator'");
		return $query -> result();
	}

	function getAllStaff() {

		$query = $this -> db -> query("SELECT * FROM `customer_info`WHERE `type`='staff'");
		return $query -> result();
	}

	function getAllUser() {

		$query = $this -> db -> query("SELECT * FROM `customer_info`WHERE `type`='user'");
		return $query -> result();
	}

	function getAllorder() {

		$query = $this -> db -> query("SELECT * FROM `product_orders`");
		return $query -> result();
	}

	function DeletePromotionalProduct($input) {
		$this -> db -> query("DELETE FROM `promotional_products` WHERE `p_Id` = '$input'");
		$this -> db -> query("DELETE FROM `product_rating` WHERE `r_Pid` = '$input'");
	}

	function DeleteClient($input) {
		$this -> db -> query("DELETE FROM `customer_info` WHERE `cus_id` = '$input'");
	}

	function DeleteOrder($input) {
		$this -> db -> query("DELETE FROM `product_orders` WHERE `ID` = '$input'");
	}

	function SelectPromotionalProduct($pid) {

		$query = $this -> db -> query("SELECT * FROM `promotional_products` WHERE `p_Id` = '$pid'");
		return $query -> result();
	}

	function SelectSliderImage($sid) {

		$query = $this -> db -> query("SELECT * FROM `slider_images` WHERE `s_Id` = '$sid'");
		return $query -> result();
	}

	function UpdateProduct($input, $input1, $input2, $input3, $input4, $input5, $input6, $input7) {
		$this -> db -> query("UPDATE `promotional_products` SET `p_Name`= '$input1',`p_Category`='$input2',`p_SubCategory`='$input3',`p_Description`='$input4',`p_Price`='$input5',`p_Quantity`='$input6',`p_Url`= '$input7' WHERE `p_Id` = '$input'");
	}

	function UpdateSlider($input, $input1, $input2, $input3, $input4) {
		$this -> db -> query("UPDATE `slider_images` SET `s_Bname`= '$input1',`s_Sname`='$input2',`s_Description`='$input3',`s_Url`='$input4' WHERE `s_Id` = '$input'");
	}

	function UpdateProductRating($pid,$rating) {
		$this -> db -> query("UPDATE `product_rating` SET `r_Rating` = (`r_Rating` + $rating),`r_Noofraters` = (`r_Noofraters` + 1) WHERE `r_Pid` = $pid");
	}

	function AddProduct($input1, $input2, $input3, $input4, $input5, $input6, $input7) {
		$this -> db -> query("INSERT INTO `promotional_products`(`p_Name`, `p_Category`, `p_SubCategory`, `p_Description`, `p_Price`, `p_Quantity`, `p_Url`) VALUES ('$input1','$input2','$input3','$input4','$input5','$input6','$input7')");
		$this -> db -> query("INSERT INTO `product_rating`(`r_Pid`, `r_Rating`, `r_Noofraters`) VALUES ((SELECT `p_Id` FROM promotional_products ORDER BY p_Id DESC LIMIT 1),5,1)");
	}

}
