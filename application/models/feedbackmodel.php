<?php
class feedbackmodel extends  CI_Model

{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addFeedback($data)
	{
			$mydata=array(
			'feedback'    => $data['feedback'],
			'p_Id'    =>$data['p_Id'],
			'user'=>$data['user']
			);
		if($this->db->insert('feedback',$mydata))
		{
			$insert_id=$this->db->insert_id();
			return true;
			
		}
		else {
			return false;
		}
	}
	
	public function addProductsTest($data)
	{
			$mydata=array(
			
			
							'p_Name'  =>$data['p_Name'],
							'p_Category'   =>$data['p_Category'],
							'p_SubCategory'   =>$data['p_SubCategory'],
							'p_Description'   =>$data['p_Description'],
							'p_Price'   =>$data['p_Price'],
							'p_Quantity'   =>$data['p_Quantity'],
							'p_Url' =>$data['p_Url'],
							'p_Type' =>$data['p_Type']
		
			);
		if($this->db->insert('promotional_products',$mydata))
		{
			$insert_id=$this->db->insert_id();
			return true;
			
		}
		else {
			return false;
		}
	}
	public function save($p_Name, $p_Category,$p_SubCategory,$p_Description,$p_Price,$p_Quantity,$url,$p_Type)
	{
		$this->db->set('p_Name', $p_Name);
		$this->db->set('p_Category',  $p_Category);
		$this->db->set('p_SubCategory', $p_SubCategory);
		$this->db->set('p_Description', $p_Description);
		$this->db->set('p_Price', $p_Price);
		$this->db->set('p_Quantity', $p_Quantity);
		$this->db->set('p_Url', $url);
		$this->db->set('$p_Type', $p_Type);
		$this->db->insert('promotional_products');
	}
}



?>