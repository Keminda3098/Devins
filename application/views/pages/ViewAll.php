<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
		
		<title>Devins Lanka Advertising</title>
	</head>
<body>
	<br />
	<center>
		<h1>Promotional Products</h1>
	</center>
	<center>
<div style="background-color: #FCFCFC">	

<table border="0" style="background-color: #D7D7D7", cellpadding="2" cellspacing="50" >
	<tr>
		<?php foreach($query as $row) { ?>
		<td><div>
			<img src="<?php print $row -> p_Url; ?>" style="width:250px;height:250px" />
		</div></td>
		
		<td>
			<form>

				Product Name        <br /><br />
				Price  <br />	<br />
				
			</form>
		</td>
		
		<td>
			<?php echo form_open(''); ?>
	<br /><br />
			
				<label for="lable1"><?php print $row -> p_Name; ?></label><br /><br />
				<label for="lable2"><?php print $row -> p_Price; ?></label><br /><br />
				<input type="submit" name=<?php print $row -> p_Id; ?> class="Button_login" value= "Order"/>
		</td>
		
		<tr>
			<td></td>
			<td>
				
				<?php //echo form_hidden('price',$row->p_Price);
					echo form_hidden('View', 'ViewAll');
					echo form_hidden('p_ID', $row -> p_Id);
					//echo form_hidden('qty',$row->p_Id);
					//echo form_close();
	?>
							
			
			</td>
		</tr>
		 <?php print "<br>";

			}
 ?> 
	</tr>
	
</table><br /><br />
</div>
<br /><br /><br />
</center>
</body>
</html>