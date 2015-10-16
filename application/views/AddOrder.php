<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
		
		<title>Devins Lanka Advertising</title>
	</head>
<body>
	<center>
	
		<br />
		<br />
		<div >
		<table style="background-color:#FCFCFC  " cellspacing="10"><tr>
			<td width="100"></td>
		<td><img src="MyImages/download.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		
		<td><img src="MyImages/download1.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		<td><img src="MyImages/download2.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		</tr></table></div>
		<br />
		<h1>Product Details</h1>
		
	</center>
	<center>
<div style="background-color: #FCFCFC">	
	
	

	
	
<br />
<table border="0" style="background-color: #D7D7D7", cellpadding="2" cellspacing="50" >
	<tr>
		<?php foreach($query as $row) { ?>
		<td><div>
			<img src="<?php print $row->p_Url; ?>" style="width:250px;height:250px" />
		</div></td>
		
		<td>
			<form>
				Product Name        <br /><br />
				Product Category    <br /><br />
				Product Sub Category<br /><br />
				Price  <br />	<br />
				Quantity 
			
			</form>
		</td>
		
		<td><br />
			<?php
	echo form_open();
	?>
			
				<label for="lable1"><?php print $row->p_Name; ?></label><br /><br />
				<label for="lable1"><?php print $row->p_Category; ?></label><br /><br />
				<label for="lable1"><?php print $row->p_SubCategory; ?></label><br /><br />
				<label for="lable2"><?php print $row->p_Price; ?></label><br /><br />
				<input type="text" name="txtQty" size="10"/><br /><br />
			
		</td>
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnOrder" id="btnOrder" value="Place an Order" class="Button_login" />
				<?php 
	
	
	//$input =print $row->p_Price;
	//echo form_input('text','');
	echo form_hidden('price',$row->p_Price);
	echo form_hidden('ids','oder_display');
	echo form_hidden('idss',$row->p_Id);
	echo form_hidden('qty',$row->p_Id);
	echo form_close();
	
	?>
							
			
			</td>
		</tr>
		 <?php print "<br>";
	
	
 } ?> 
	</tr>
	
</table><br /><br />
</div>
<br /><br /><br />
</center>
</body>
</html>