<?php
class main_m extends CI_Model 
{	
	function __construct() 
	{
		parent::__construct();
	}
	
	public function save($p_Type,$p_Name, $p_Category,$p_SubCategory,$p_Description,$p_Price,$p_Quantity,$url)
	{
		$this->db->set('p_Type', $p_Type);
		$this->db->set('p_Name', $p_Name);
		$this->db->set('p_Category',  $p_Category);
		$this->db->set('p_SubCategory', $p_SubCategory);
		$this->db->set('p_Description', $p_Description);
		$this->db->set('p_Price', $p_Price);
		$this->db->set('p_Quantity', $p_Quantity);
		$this->db->set('p_Url', $url);		
		$this->db->insert('promotional_products');
	}
}
