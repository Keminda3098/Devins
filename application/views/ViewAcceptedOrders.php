<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<title>Devins Lanka Advertising</title>
	
		<script>
			function changeOrder(value){ 
				
				if(value==1){
					//window.alert('Accepted ');
				}
				else if(value==2){
					//window.alert('Non Accepted '); 
					document.getElementById("myButton").click();
				}
			}
		</script>
		
		
	</head>
	
	<body>
		<br /><br /><br />
		<center>
		<table>
			<tr>
				<td>Display Orders By : </td>
				<td>
					<form>
						<select id="order" name="menu" onchange="changeOrder(this.value)" >
						<option value="1">Accepted Orders</option>
						<option value="2">Non Acceted Orders</option>
						
						
						</select>
					</form>
					<?php echo form_open(); ?>
					<input type="submit" id="myButton" />
					<?php echo form_hidden('order','NonAccept');
						echo form_close();
					?>
				</td>
			</tr>
		</table>
		</center>
		<center>
		<table class="border111">
			<tr class="border111">
				<td style="padding: 15px" ><span style='font-weight:bold;'>Order ID</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Name</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Sub Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Unit Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Ordered Quantity</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Total Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Status</span></td>
			</tr>
			<?php foreach($Accepted as $row) { ?>
				<tr>
					<td style="padding: 15px">
						<?php print $row->ID; ?>
					</td >
					<td style="padding: 15px">
						<?php print $row->Name; ?>
					</td>
					<td style="padding: 15px">
						<?php print $row->Cat; ?>
					</td>
					<td style="padding: 15px">
						<?php print $row->Sub; ?>
					</td>
					<td style="padding: 15px">
						Rs.<?php print $row->UPrice; ?>.00
					</td>
					<td style="padding: 15px">
						<center><?php print $row->Qty; ?></center>
					</td>
					<td style="padding: 15px">
						Rs.<?php print $row->Total; ?>.00
					</td>
					<td style="padding: 15px">
						<?php echo form_open(); ?>	
						<input type="submit" id="accept" value="Complete"/>
						<?php echo form_hidden('Complete','Complete');
							$email="piumifernando18@gmail.com";
							echo form_hidden('email',$email);
							echo form_close();
						?>
					</td>
				</tr>
			<?php print "<br>"; } ?> 
		</table>
		</center>
		<br /><br /><br />
	</body>
</html>