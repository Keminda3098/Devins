<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		<link rel='stylesheet' type='text/css' href='css/myOrderDropDown.css'>
		<script src="js/sweetalert.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
		<title>Devins Lanka Advertising</title>
	
		
	</head>
<body>
	
	<center>
		<br /><br /><br />
		<h3 class="m_3">My Devins : My Cart</h3>	
	</center>
	<?php echo form_open(); ?>
	<span style="padding-right: 20px"></span> <input type="submit" value="Pay For All by PayPal" class="btnPay" />
	<?php 
		echo form_hidden('pay','ForAll'); 
		echo form_close(); ?>
	
<center>
	
	<table class="borderForHistory" >
		<?php foreach($cartItems  as $row) { ?>
				<tr class="borderForHistory">
					<td style="padding-left: 20px;padding-right: 200px;padding-bottom: 20px;padding-top: 20px">
						<h3 class="m_1">ORDER DATE<br>20<?php print $row->OrderedDate; ?></h3><br>
						
						<div><h3 class="m_1"><?php print $row->Name; ?> </h3> <img class="borderForHistoryImage" src="<?php print $row->p_Url; ?>" /></div>
						
					<td style="padding-left: 20px;padding-right: 200px;padding-bottom: 20px;padding-top: 20px">
						<h3 class="m_1">ORDER TOTAL<br>Rs.<?php print $row->Total; ?>.00</h3><br>
						<h3 class="m_1">ITEM PRICE<br>Rs.<?php print $row->UPrice; ?>.00</h3><br>
						<h3 class="m_1">NO OF ITEMS : <?php print $row->Qty; ?></p><br>
						
						<h3 class="m_1" > STATUS : Order has been Accepted. You need to pay</h3>
						<br>
							
						<?php echo form_open(); ?>	
							<div class="orderHistory">
								<input type="hidden" name="upload" value="1"/>
								<input type="hidden" name="return" value="<?php echo $this->config->item('returnurl'); ?>"/>
								<input type="hidden" name="cmd" value="_cart"/>
								<input type="hidden" name="business" value="<?php echo $this->config->item('business'); ?>"/>
								
								<input type="hidden" name="item_name_1" value="<?php print $row->Name; ?>"/>
								<input type="hidden" name="item_number_1" value="p1"/>
								<input type="hidden" name="amount_1" value="<?php print $row->UPrice; ?>"/>
								<input type="hidden" name="quantity_1" value="<?php print $row->Qty; ?>"/>
								<input id="myPayPalSubmit" type="submit" value="Pay by PayPal" class="btnPay"/>
							</div>
							
						<?php 
							echo form_hidden('pay','payPal'); 
							echo form_hidden('orderID',$row->ID); 
							echo form_close();
						?>
					</td>
				</tr>
			<?php print "<br>"; } ?> 
</table></center>
</body>
</html>