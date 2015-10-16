<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
public function __construct()
	{
        parent::__construct();
		$this->load->model('main_m');
    }

	public function index()
	{
		$this -> load -> view('common/header');
		//$this -> load -> view('pages/Home', $data);
		$this->home();
	//	$this -> load -> view('common/footer');
	}
	
	function home()
	{
	
		$this->load->view('products/home');
		
	}

public function asave()
	{
		$url = $this->do_upload();
		$p_Name= $_POST["name"];
		$p_Category= $_POST["category"];
		$p_SubCategory= $_POST["subcategory"];
		$p_Description= $_POST["description"];
		$p_Price= $_POST["price"];
		$p_Quantity= $_POST["quantity"];
		//$p_Url= $_POST["category"];
		$p_Type= $_POST["type"];
	
		$this->main_m->save($p_Type,$p_Name, $p_Category,$p_SubCategory,$p_Description,$p_Price,$p_Quantity,$url);
		
	}
	
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
				
		return "";
	}
	
      public function save(){

			if($_POST['submit_Add']){
				
				$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Product Name', 'required|trim');
			$this->form_validation->set_rules('category', 'Category', 'required|trim');
				$this->form_validation->set_rules('subcategory', 'SubCategory', 'required|trim ');
				$this->form_validation->set_rules('description', 'Description', 'required|trim');
				$this->form_validation->set_rules('price', 'Price', 'required|trim ');
				$this->form_validation->set_rules('quantity', 'Quantity', 'required|trim ');
				//$this->do_upload();
				if($this->form_validation->run() == FALSE)
				{
					$this->home();
					//echo "Error";
				}
				else
					{
						$url = $this->do_upload();
						$p_Name= $_POST["name"];
						$p_Category= $_POST["category"];
						$p_SubCategory= $_POST["subcategory"];
						$p_Description= $_POST["description"];
						$p_Price= $_POST["price"];
						$p_Quantity= $_POST["quantity"];
						//$p_Url= $_POST["category"];
						$p_Type= $_POST["type"];
					
						$this->main_m->save($p_Type,$p_Name, $p_Category,$p_SubCategory,$p_Description,$p_Price,$p_Quantity,$url);
		
					}
	   
				redirect('http://localhost/Devins/index.php?page=addproductinfo');
				
			}
			else if($_POST['submit_NewCat'])
				{
				
					$this->load->library('form_validation');
		
		
			$this->form_validation->set_rules('newCategory', 'Category', 'required|trim');
			
				
				if($this->form_validation->run() == FALSE)
				{
					$this->home();
				}
				else
					{
						$data= array(
					
							'category'   =>$this->input->post('newCategory'),
							
						);
						$this->db->insert('new_subcategory', $data);
						
						redirect('/main');
					}
				}
					else if($_POST['submit_NewSubCat'])
					{
						$this->load->library('form_validation');
		
		
			$this->form_validation->set_rules('newSubcategory', 'Subcategory', 'required|trim');
			
				
				if($this->form_validation->run() == FALSE)
				{
					$this->home();
				}
				else
					{
						$data= array(
					        'category'   =>$this->input->post('categoryA'),
							'subCat_Name'   =>$this->input->post('newSubcategory'),
							
						);
						$this->db->insert('new_subcategory', $data);
						
						redirect('main');
					}
					}


		}
	 
	
		//-------------
				function addProductTest(){
		$Id=	$this->input->post('pid');
							$data= array( 
							
							'p_Name'  =>$this->input->post('name'),
							'p_Category'   =>$this->input->post('category'),
							'p_SubCategory '   =>$this->input->post('subcategory'),
							'p_Description '   =>$this->input->post('description'),
							'p_Price '   =>$this->input->post('price'),
							'p_Quantity'   =>$this->input->post('quantity'),
							'p_Url' =>$this->input->post('pic',$url),
							'p_Type' =>$this->input->post('type')
								
								);
								$this->load->model('feedbackmodel');
								if($this->feedbackmodel->addProductsTest($data))
								{
										$this->getDatabaseToAddOrder($Id);
									return true;
								}
								else{
									return false;
								} 
		}

	
	function delete()
	{
		$id=  $this->uri->segment(3);  
		
		$this->db->delete('promotional_products',array('p_Id' => $id));
		redirect('http://l/index.php?page=productinfo');
	}
	function deleteComment()
	{
		$id=  $this->uri->segment(3);  
		
		$this->db->delete('feedback',array('f_Id' => $id));
	redirect('addFeedBack/GoBack');
	}
	function form_update()
	{
		$this -> load -> view('common/header');
		$this->load->view('form_update');
	    $this -> load -> view('common/footer');
	}
	function form_updateA()
	{
		$this->load->view('products/EditProductComment');
	}
	
	function update_validation()
	{
			$id=  $this->uri->segment(3);  
		
		   $this->load->library("form_validation");
		   
            	$this->form_validation->set_rules('name', 'Product Name', 'required|trim');
		    	$this->form_validation->set_rules('category', 'Category', 'required|trim');
				$this->form_validation->set_rules('subcategory', 'SubCategory', 'required|trim ');
				$this->form_validation->set_rules('description', 'Description', 'required|trim ');
				$this->form_validation->set_rules('price', 'Price', 'required|trim ');
				$this->form_validation->set_rules('quantity', 'Quantity', 'required|trim ');
				
				if($this->form_validation->run()==FALSE)
				{
					$this->form_update();
				}
				else
					{
						$data= array(
						'p_Name'  =>$this->input->post('name'),
							'p_Category'   =>$this->input->post('category'),
							'p_SubCategory '   =>$this->input->post('subcategory'),
							'p_Description '   =>$this->input->post('description'),
							'p_Price'   =>$this->input->post('price'),
							'p_Quantity'   =>$this->input->post('quantity')
						);
						$this->db->where('p_Id', $id);
						$this->db->update('promotional_products', $data);
						
						redirect('http://localhost/Devins/index.php?page=productinfo');
					}
	}


   }

