<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<title>Devins Lanka Advertising</title>
		
		<style>
			.hovernormal {
				background: #FFFFFF;
			}
			.hoverhighlight {
				background-color: #71bee4;
			}
		</style>
	
		<script>
			function changeOrder(value){ 
				
				if(value==1){
					//window.alert('Non Accepted ');
				}
				else if(value==2){
					//window.alert('NonAccepted '); 
					document.getElementById("myButtonNon").click();
				}
				else if(value==3){
					//window.alert('Accepted '); 
					document.getElementById("myButtonAccept").click();
				}
				else if(value==4){
					//window.alert('Accepted '); 
					document.getElementById("myButtonCancel").click();
				}
			}
			
		</script>
		
		
	</head>
	
	<body>
		<br /><br /><br />
		<center>
		<table>
			<tr>
				<td>
					<div class="buttonside">
										<a href="http://localhost/Devins/index.php?page=productinfo">
										<input name="productinfo" value="Product Information" type="submit">
										</a>
									</div>
				</td>
				<td>
					<div class="buttonside">
										<a href="http://localhost/Devins/index.php?page=clientinfo">
										<input name="clientinfo" value="Client Information" type="submit">
										</a>
									</div>
				</td>
				<td>
					<div class="buttonside">
										<a href="http://localhost/Devins/index.php?page=chat">
										<input name="chat" value="chat" type="submit">
										</a>
									</div>
				</td>
				<td>
					<div class="buttonside">
										<a href="http://localhost/Devins/index.php?page=sliderinfo">
										<input name="sliderinfo" value="Update Image Slider" type="submit">
										</a>
									</div>
				</td>
			</tr>
		</table>
		</center>
		
		<br /><br />
		
		<center>
		<table>
			<tr>
				<td>Display Orders By : </td>
				<td>
					<form>
						<select id="order" name="menu" onchange="changeOrder(this.value)" >
						<option value="1">Rejected Orders</option>
						<option value="2">Non Accepted Orders</option>
						<option value="3">Accepted Orders</option>
						<option value="4">Cancellation Requests</option>
						
						</select>
					</form>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonAccept" style="visibility: hidden" />
					<?php echo form_hidden('order','Accept');
						echo form_close();
					?>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonNon" style="visibility: hidden" />
					<?php echo form_hidden('order','NonAccept');
						echo form_close();
					?>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonCancel" style="visibility: hidden" />
					<?php echo form_hidden('change','cancellationRequests');
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
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Details</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Ordered Quantity</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Total Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Reason</span></td>
			</tr>
			<?php foreach($Rejected as $row) { ?>
				<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
					<td style="padding: 15px">
						<?php print $row->ID; ?>
					</td >
					<td style="padding: 15px">
						Product Name         : <?php print $row->Name; ?><br />
						Product Category     : <?php print $row->Cat; ?><br />
						Product Sub Category : <?php print $row->Sub; ?><br />
						Unit Price           : Rs.<?php print $row->UPrice; ?>.00
					</td>
					<td style="padding: 15px">
						<center><?php print $row->Qty; ?></center>
					</td>
					<td style="padding: 15px">
						Rs.<?php print $row->Total; ?>.00
					</td>
					<td style="padding: 15px">
						<?php print $row->Status; ?>
					</td>
				</tr>
			<?php print "<br>"; } ?> 
		</table>
		
		</center>
		<br /><br /><br />
	</body>
</html>