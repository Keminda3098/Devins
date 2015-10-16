<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Demo PayPal Payment</title>
</head>	
	<body>
		
		<form method="post" action="<?php echo $this->config->item('posturl'); ?>"> 
			<input type="hidden" name="upload" value="1"/>
			<input type="hidden" name="return" value="<?php echo $this->config->item('returnurl'); ?>"/>
			<input type="hidden" name="cmd" value="_cart"/>
			<input type="hidden" name="business" value="<?php echo $this->config->item('business'); ?>"/>
		
			<input type="hidden" name="item_name_1" value="Product 1"/>
			<input type="hidden" name="item_number_1" value="p1"/>
			<input type="hidden" name="amount_1" value="2"/>
			<input type="hidden" name="quantity_1" value="3"/>
			
		
			<input type="hidden" name="item_name_2" value="Product 2"/>
			<input type="hidden" name="item_number_2" value="p2"/>
			<input type="hidden" name="amount_2" value="2"/>
			<input type="hidden" name="quantity_2" value="3"/>
			
			<input type="hidden" name="item_name_3" value="Product 3"/>
			<input type="hidden" name="item_number_3" value="p3"/>
			<input type="hidden" name="amount_3" value="2"/>
			<input type="hidden" name="quantity_3" value="3"/>
			
			<input type="hidden" name="item_name_4" value="Product 4"/>
			<input type="hidden" name="item_number_4" value="p4"/>
			<input type="hidden" name="amount_4" value="2"/>
			<input type="hidden" name="quantity_4" value="3"/>
			
			 <input type="image" src="https://www.paypal.com/en_US/i/btn_xpressCheckout" />
		</form>
		
		
	</body>
</html>