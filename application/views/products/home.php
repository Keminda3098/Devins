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
	height: 600px;
	width: 600px;
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
#A{
	background-color:#CF3333;
}
	
#LeftL {
	float: left;
	/* [disabled]height: 400px; */
	background-color:#D8D8D8;
	font-style: normal;
	font-weight: bold;
	font-size: 16px;
	height: 550px;
	width: 540px;
	
}
#Right {
	height: 200px;
	width: 450px;
	float: right;
	background-color:#A9D0F5;
}
#SubCat {
	float: right;
	height: 250px;
	width: 450px;
	background-color:#819FF7;
}
#Space {
	float: right;
	height: 6px;
	width: 300px;
	border-width: 0px;
	border-style: solid;
}
	#button_Add
			{
				font-size:14px;
				background-color:#000000;
				border-color:#FDF59A;
				border-width:medium;
				color:#FFFFFF;
				width: 150px;
				height: 25px;
			}
			
</style>
	
</head>
<body>
	
	
	<div  id="Container">
  <div id="NavBar"></div>
  <div id="MainContainer">
    <div id="LeftL" >
    	<br />
    	<center>
      <p style="text-align: center; font-size: 24px;">New Products</p>
      <p style="font-size: 16px">&nbsp;</p>
        
<?php echo form_open_multipart('main/save/'); ?>

	<?php echo validation_errors(); ?>
	
      <table  width="450" border="3" >
      	
      	<form method="post" enctype="multipart/form-data">
        <tr>
          <td width="331" height="49" align="left" valign="middle"><span style="font-size: 16px">Product Name</span></td>
          <td width="284"><span style="font-size: 16px">
            <input type="text" name="name"/>
          </span></td>
        </tr>
        <tr>
          <td height="44" align="left" valign="middle"><span style="font-size: 16px">Product Category</span></td>
          <td><span style="font-size: 16px">
             <select class='inputField'  name='category' >
 
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
    
          </span></td>
        </tr>
        <tr>
          <td height="43" align="left" valign="middle"><span style="font-size: 16px"> Product Subcategory</span></td>
          <td><span style="font-size: 16px">
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
          </span></td>
        </tr>
        <tr>
          <td   height="39" align="left">Description</td>
          <td><span style="font-size: 16px">
            <input type="text" name="description"/>

          </span></td>
        </tr>
        <tr>
          <td height="42" align="left" valign="middle">Unit Price</td>
          <td><span style="font-size: 16px">
          <input type="text" name="price"/>

          </span></td>
        </tr>
        <tr>
          <td height="59" align="left" valign="middle">Quantity</td>
          <td><span style="font-size: 16px">
          <input type="text" name="quantity" />
          </span></td>
        </tr>
        <tr>
  	  <tr>
          <td height="42" align="left" valign="middle">Product Image</td>
          <td><span style="font-size: 16px">
         <?php echo form_upload('pic'); ?>

          </span></td>
        </tr>
        
         <tr>
          <td height="44" align="left" valign="middle"><span style="font-size: 16px">Type</span></td>
          <td><span style="font-size: 16px">
             <select class='inputField' name='type'>
             	   <option name ="webpage" > 
				Promotional Products

				</option>
	<option name ="product"> 
				Advertising
				</option>
    			<option name ="product"> 
			Online Store
				</option>
    			
    		
   <option name ="webpage" > 
				Hotel Products

				</option>
	<option name ="product"> 
				Fashion

				</option>
    		
        </select>

        </select>
          </span></td>
        </tr>
         
        </tr>
        <tr>	
        
          <td  align="right" valign="middle"><input id="button_Add" type="submit"  name="submit_Add" value="   ADD  "  /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
      </table>
      <p style="font-size: 16px">&nbsp;</p>
      </center>
    </div>
    <!-- Add new categories-->
    <div id="Right">
    	<br />
    	<center>
      <p style="font-size: 22px; text-align: center; font-weight: bold;">Product Categories</p>
      <table width="400" border="0">
        <tr>
          <td width="147">&nbsp;</td>
          <td width="143">&nbsp;</td>
        </tr>
        <tr>
          <td height="57" >    Product Category</td>
          <td><input type="text" name="newCategory">
        </tr>
        <tr>
          <td height="36" align="right"><input id="button_Add" type="submit" name="submit_NewCat" value="ADD CATEGORY" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      </center>
    </div>
    <!-- Add new subcategories-->
    <div id="Space"></div>
    <div id="SubCat">	 
    	<br />
    	<center>
      <p style="font-size: 22px; font-weight: bold;">Product Subcategory</p>
      <br />
      <table width="400" border="0">
        <tr>
          <td width="139" height="49">Product Category</td>
          <td width="151"><select class='inputField' name='categoryA'>
    
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

        </select><br></td>
        </tr>
        <tr>
          <td height="49">Product Subcategory</td>
          <td><input type="text" name="newSubcategory"></td>
        </tr>
        <tr>
          <td height="74" align="right"><input  id="button_Add" type="submit" name="submit_NewSubCat" value="ADD SUBCATEGORY"/></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
      <p style="font-size: 22px; font-weight: bold;">&nbsp;</p>
      </center>
    </div>
  </div>
  <div id="Footer"></div>
</div>
	
	

</body>
</html>