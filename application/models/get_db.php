<?php

/**
 *
 */
class get_db extends CI_Model {

//---------------------------Piumi ----------------------------------//

//get a particular promotional product details to view for order
function getAll($ID) {
		
		$query = $this->db->query("Select * from promotional_products where p_Id = '$ID'");
		return $query->result();
	}
	
//insert the order details to the database	
	function InsertAll($input,$input1,$input2,$input3,$input4,$input5,$date,$CusID)
	{
		$status= "NonAccepted";
	$this->db->query("INSERT INTO product_orders(Name,Cat,Sub,UPrice,Qty,Total,OrderedDate,Status,Cus_ID,paid) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$date','$status','$CusID','NotPaid')");
	}

//	get all promotional product details to view in online store
	function getAllView() {
		
		$query = $this->db->query("Select p_Id,p_Name,p_Price,p_Quantity,p_Url from promotional_products");
		return $query->result();
	}
	
//update the quantity when an order is placed		
	function updateQuantity($id,$newQty){
		$this->db->query("update promotional_products set p_Quantity = '$newQty' where p_Id ='$id'");
	}
	
//get the order details to view to the admin	
	function getOrders($status) {
		if($status=="Rejected"){
			$query = $this->db->query("Select * from product_orders where Status != 'Accepted' And Status != 'NonAccepted'  And Status != 'Completed'");
		}
		else{
			$query = $this->db->query("Select * from product_orders where status = '$status'");
		}
		return $query->result();
	}

//to update the status of an order	
	function updateStatus($id,$status){
		$this->db->query("update product_orders set Status = '$status' where ID ='$id'");
	}

//to get the email address of a customer to send mails	
	function getEmail($User) {
		
		$query = $this->db->query("Select email from customer_info where username = '$User'");
		$data = $query->row_array();
		$value = $data['email'];
		return $value;
	}
	
//get order details to view the order history
	function getToViewMyHistory($user) {
		
		$query = $this->db->query("select pp.p_Url,  pr.* from promotional_products pp ,product_orders pr
			where pr.Cus_ID='$user' and pp.p_Name= pr.Name and (pr.Status='NonAccepted' or pr.Status='Completed'or pr.Status='Rejected' or (pr.Status='Accepted' and paid='paid'))  order by pr.Status DESC");
		return $query->result();
	}
	
//delete an order when order cancellation is accepted
	function acceptCancellation($rowID) {
		
		$this->db->query("delete from product_orders where ID='$rowID'");
		
	}
	
//get cart item details to view	
	function getToViewMyCart($user) {
		
		$query = $this->db->query("select pp.p_Url,  pr.* from promotional_products pp ,product_orders pr
			where pr.Cus_ID='$user' and pp.p_Name= pr.Name and (pr.Status='Accepted' and pr.paid='NotPaid')  order by pr.Status DESC");
		return $query->result();
	}

//get wishlist item details to view		
	function getToViewMyWishList($user) {
		
		$query = $this->db->query("select pp.*,w.WLID
								   from promotional_products pp ,wishlist w
			                       where w.cusID='$user' and pp.p_ID= w.productID");
		return $query->result();
	}
	
//to insert an item to the wishlist	
	function InsertToWishList($PID,$User)
	{
	$this->db->query("INSERT INTO wishlist(productID,cusID) VALUES('$PID','$User')");
	}
	
//to delete an item from the wishlist	
	function deleteFromMyList($WLID) {
		
		$this->db->query("delete from wishlist where WLID='$WLID'");
		
	}
// to get the email config values from the database 	
	function getEmailConfig() {
		
		$query = $this->db->query("select * from emailconfiguration");
		return $query->result();
	}
//to update the paid column of an order	
	function updatePaid($id,$status){
		$this->db->query("update product_orders set paid = '$status' where ID ='$id'");
	}
	
	function getMyAllOrdersToPay($user)
	{
		$query = $this->db->query("Select * from product_orders where Cus_ID = '$user' and Status = 'Accepted' and paid='NotPaid' order by ID");
		return $query->result();
	}
	
	function updateAllPaid($User){
		$this->db->query("update product_orders 
		set paid = 'Paid' where Cus_ID = '$User' and Status = 'Accepted' and paid='NotPaid'");
	}
	
//----------------------- End of Piumi -----------------------------//





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
