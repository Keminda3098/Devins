<?php
class Design_request_db extends CI_Model{
	
	
function __construct() {
parent::__construct();
}

function Insertrequest($input,$input1,$input2,$input3,$input4,$input5,$input6,$input7,$input8,$input9)
	{
	$this->db->query("INSERT INTO design_request(rqproname,procategory,rquname,exemail,proexprice,examount,proexdate,exmobile,prodescrpt,upimage) VALUES('$input','$input1','$input2','$input3','$input4','$input5')");
	}
	
function Insertshirtdesignonlinerequest($type,$input,$input1,$input2,$input3,$input4,$input5,$input6,$input7)
	{
	$this->db->query("INSERT INTO online_design_request(examount,exdate,urlp,exprice,exmobile,exdescrpt,designtype,exsize,username) VALUES($type,'$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')");
	}
	
function Insertumbdesignonlinerequest($type,$input,$input1,$input2,$input3,$input4,$input5,$input6,$input7)
	{
	$this->db->query("INSERT INTO online_design_request(examount,exdate,urlp,exprice,exmobile,exdescrpt,designtype,exsize,username) VALUES($type,'$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')");
	}
	
function Insertmugsdesignonlinerequest($type,$input,$input1,$input2,$input3,$input4,$input5,$input6,$input7)
	{
	$this->db->query("INSERT INTO online_design_request(examount,exdate,urlp,exprice,exmobile,exdescrpt,designtype,exsize,username) VALUES($type,'$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')");
	}
	
function Inserttemplate($input,$input1,$input2,$input3)
	{
	$this->db->query("INSERT INTO design_templates(temptype,tempcolorcode,tempdescrpt,templocation) VALUES('$input','$input1','$input2','$input3')");
	}

function getlocation($colrcode) {

		$query = $this->db->query("Select templocation,templocation2 from design_templates where tempcolorcode = '$colrcode' and designcatogory='shirts' ");
		return $query->result();
	}
	
		function getlocationcaps($colrcode) {
		
		$query = $this->db->query("Select templocation from design_templates where tempcolorcode = '$colrcode' and designcatogory='caps' ");
		return $query->result();
	}
		function getlocationumbs($colrcode) {
		
		$query = $this->db->query("Select templocation from design_templates where tempcolorcode = '$colrcode' and designcatogory='umbrellas' ");
		return $query->result();
	}
	
	function getlocationmugs($colrcode) {
		
		$query = $this->db->query("Select templocation from design_templates where tempcolorcode = '$colrcode' and designcatogory='mugs' ");
		return $query->result();
	}
	
	
	
		function getallDesignsuploaded() {
		
		$query = $this->db->query("Select * from  online_design_request ");
		return $query->result();
	}
	
	function getprmprdctcatogoriesToView() {
		
		$query = $this->db->query("SELECT DISTINCT `p_SubCategory` FROM `promotional_products` ");
		return $query->result();
	}
	
		function getplogos($cat) {
		
		$query = $this->db->query("SELECT urllogo from design_logos where catogory = '$cat' ");
		return $query->result();
	}
	
	function deletedesignrequest($designid) {
		
		$query = $this->db->query("DELETE from  online_design_request where designid = '$designid' ");
		
	}
	
	function getemail($user) {
		
		$query = $this->db->query("SELECT DISTINCT email from customer_info where username = '$user' ");
		return $query->result();
	}
	
	
}