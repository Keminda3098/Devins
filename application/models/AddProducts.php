<?php
  class AddProducts extends My_model{

const DB_TABLE = 'promotional_products';
const DB_TABLE_PK = 'p_Id';
/*
	public $p_Name;
	public $p_Category="ABC";
	public $p_SubCategory;
	public $p_Price;
	public $p_Quantity;

*/
public function addProduct($p_Name,$p_Category,$p_SubCategory,$p_Price,$p_Quantity) {
        
        
        $query = "Insert into promotional_products (p_Name,p_Category,p_SubCategory,p_Price,p_Quantity) VALUES(?,?,?,?,?)";
        
        $this-> db->query($query,array($p_Name,$p_Category,$p_SubCategory,$p_Price,$p_Quantity));
        
       
    
}

public function addProductA($p_Name,$p_Category,$p_SubCategory,$p_Price,$p_Quantity) {
        
        
        $query = "Insert into promotional_products (p_Name,p_Category,p_SubCategory,p_Price,p_Quantity) VALUES(?,?,?,?,?)";
        
        $this-> db->query($query,array($p_Name,$p_Category,$p_SubCategory,$p_Price,$p_Quantity));
        
       
    
}

	}
	?>