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
		<br />
		
		<div >
		<table style="background-color:#FCFCFC  " cellspacing="10"><tr>
			<td width="100"></td>
		<td><img src="MyImages/downloadstep1.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		
		<td><img src="MyImages/downloadSep2.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		<td><img src="MyImages/download2.jpg" alt="Order Details" style="width:120;height:120px"></td>
		<td width="100"></td>
		</tr></table></div>
		<br />
		
		<h1>Order Details</h1>
		
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
				Unit Price  <br />	<br />
				Quantity <br /><br />
				Total Price
			
			</form>
		</td>
		
		<td><br />
			<?php
	echo form_open();

	?>			
				<label for="lable1"><?php print $row->p_Name; ?></label><br /><br />
				<label for="lable2"><?php print $row->p_Category; ?></label><br /><br />
				<label for="lable3"><?php print $row->p_SubCategory; ?></label><br /><br />
				<label for="lable4"><?php print $row->p_Price; ?></label><br /><br />
				
				<label for="lable2"><?php echo $car; ?></label><br /><br />
				<label for="lable5"><b><?php echo $total; ?></b></label><br /><br />
				
		</td>
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnAccept" id="btnAccept" value="Accept Order" onclick="" class="Button_login"/>	
					
	<?php			
			echo form_hidden('name',$row->p_Name);
			echo form_hidden('cat',$row->p_Category);
			echo form_hidden('Display','order_display');
			echo form_hidden('cat',$row->p_Category);
			echo form_hidden('sub',$row->p_SubCategory);
			echo form_hidden('price',$row->p_Price);	
			echo form_hidden('car',$car);
			echo form_hidden('total',$total);
			//echo form_submit('btnAccept','Accept Order');
			//echo form_submit('btnReject','Reject Order');
				
			echo form_close();
	
	?>
</td>
<td>
	
 <?php
	echo form_open();
	?>		
	
 <input type="submit" name="btnReject" id="btnReject" value="Reject Order" onclick="" class="Button_login"/>	
 
 <?php			
			
			echo form_hidden('Display','Reject_Order');
			
				
			//echo form_close();
	
	?>
		 <?php print "<br>"; } ?> 
 
			</td>
		</tr>
	</tr>
	
</table><br /><br />
</div>
<br /><br /><br/>
</center>
</body>
</html>