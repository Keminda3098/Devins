<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Promotional Products</title>
<style type="text/css">
body {
	margin-left: 0pt;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#Container {
	margin-right: auto;
	margin-left: auto;
	border-width: 0px;
	border-style: solid;
}
#Header {
	height: 100px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-width: 0px;
	border-style: solid;
}
#NavBar {
	height: 50px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-width: 0px;
	border-style: solid;
}
#MainContainer {
	height: auto;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-width: 0px;
	border-style: solid;
}
#Footer {
	height: 100px;
	width: 800px;
	margin-right: auto;
	margin-left: auto;
	border-width: 0px;
	border-style: solid;
}
#Left {
	float: left;
	height: 60px;
	width: 300px;
}
#LeftL {
	float: left;
	/* [disabled]height: 400px; */
	font-style: normal;
	font-weight: bold;
	font-size: 16px;
}
#Right {
	height: 200px;
	width: 300px;
	float: right;
}
#SubCat {
	float: right;
	height: 400px;
	width: 300px;
}
#Space {
	float: right;
	height: 40px;
	width: 300px;
	border-width: 0px;
	border-style: solid;
}
</style>
	
</head>
<body>
<form action="<?php echo base_url()."index.php/main/form_validation"; ?>" method="post">
	<?php echo validation_errors(); ?>
	
	
		<br /><br />
	<?php echo form_open_multipart('main/save/'); ?>
	<table  style="background-color: #B4BABA" cellpadding="10" cellspacing="20">
	<form action="<?php echo site_url('index.php/main/upload_file'); ?>" method="post" enctype="multipart/form-data">
		
		<tr>
			<td>
			
				Product Name: <br><br>
				Product Category: <br><br>
				Product Subcategory: <br><br>
				Product Description: <br><br>
				Unit Price: <br><br>
				Quantity: <br><br>
				Add Image: <br><br>
			</td>
			
		<td>
					
<input type="text" name="name"/> <br><br>
 <select class='inputField' name='category'>
    
    <?php 
	
		$query=$this->db->query('SELECT DISTINCT category FROM new_subcategory');
		
		foreach ($query->result()as $row)
		{?>
			
			<option> 
		<?php	echo $row->category; ?>

				</option>
	<?php	}
		?>
	
        </select><br/>

        </select><br>
<select class='inputField' name='subcategory'>
    
    <?php 
    
	
//	$query=$this->db->query('SELECT DISTINCT subCat_Name FROM new_subcategory WHERE subCat_Name = "'+category+'"'); -->
		$query=$this->db->query('SELECT DISTINCT subCat_Name FROM new_subcategory ');
		foreach ($query->result()as $row)
		{?>
			
			<option> 
		<?php	echo $row->subCat_Name; ?>

				</option>
	<?php	}
		?>
	
        </select><br/>

        </select><br>
<input type="text" name="description"/><br><br>
<input type="text" name="price"/> <br><br>
<input type="text" name="quantity"/><br><br>
<?php echo form_upload("pic"); ?>

			</td>
		</tr>
<tr>

	<td>
<center><input type="submit" name="submit_Add" value="Add" class="btn btn-primary" /></center</td></tr><br /><br />
	
</table>




<!--Table -> Add Category -->

	<table align="right" style="background-color: #B4BABA" cellpadding="10" cellspacing="20">
<!--	<form name = "2" action="" method="post">  -->
		
		<tr>
			<td>
				
				Product Category: <br><br>
				
			</td>
			
		<td>
					

<input type="text" name="newCategory"><br><br>

			</td>
		</tr>
<tr>
	<td>
<center><input type="submit" name="submit_NewCat" value="Add Category" /></center</td></tr><br /><br />
</table></center>
<!--</form>


<!--Table -> Add SubCategory -->

	<table align="right" style="background-color: #B4BABA" cellpadding="10" cellspacing="20">
	<form action="" method="post">
		
		<tr>
			<td>
				
				Product Category: <br><br>
				Product Subcategory: <br><br>
				
			</td>
			
		<td>
					
 <select class='inputField' name='categoryA'>
    
    <?php 
	
		$query=$this->db->query('SELECT DISTINCT category FROM new_subcategory');
		
		foreach ($query->result()as $row)
		{?>
			
			<option> 
		<?php	echo $row->category ; ?>

				</option>
	<?php	}
		?>
	
        </select><br/>

        </select><br>
<input type="text" name="newSubcategory"><br><br>



			</td>
		</tr>
<tr>
	<td>
<center><input type="submit" name="submit_NewSubCat" value="Add Subcategory"/></center</td></tr><br /><br />
</table></center>
</form>
</form>

<!-- View
<div>
	<?php 
	$this->db->order_by('p_Name', 'ASC'); 
		$query= $this->db->get('promotional_products');
		foreach($query->result() as $row)
		{?>
		<p><strong>Product Name</strong> <?php	echo $row->p_Name; ?> <br />
			&nbsp;&nbsp; &nbsp;<strong> Category</strong> <?php	echo $row->p_Category; ?> <br />
			&nbsp;&nbsp; &nbsp;<strong>Subcategory  </strong> <?php	echo $row->p_SubCategory; ?> </p>
			&nbsp;&nbsp; &nbsp;<strong>Description  </strong> <?php	echo $row->p_Description; ?> </p>
			&nbsp;&nbsp; &nbsp;<strong> Price</strong> <?php	echo $row->p_Price; ?> <br />
			&nbsp;&nbsp; &nbsp;<strong> Quantity</strong> <?php	echo $row->p_Quantity; ?> <br />
				<a href="<?php echo base_url()."index.php/main/delete/".$row->p_Id; ?>">Delete</a>	
				<a href="<?php echo base_url()."index.php/main/form_update/".$row->p_Id; ?>">Edit</a>
			<hr size="1" width="250" align="left" />
	<?php	}
		?>
</div  > -->

</body>
</html>