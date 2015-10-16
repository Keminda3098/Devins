<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/etalage.css">
		<link rel="stylesheet" type="text/css" href="css/megamenu.css">
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
					//window.alert('Accepted ');
				}
				else if(value==2){
					//window.alert('Non Accepted '); 
					document.getElementById("myButton").click();
				}
				else if(value==3){
					//window.alert('Non Accepted '); 
					document.getElementById("myButtonReject").click();
				}
				else if(value==4){
					//window.alert('Non Accepted '); 
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
						<option value="1">Accepted Orders</option>
						<option value="2">Non Accepted Orders</option>
						<option value="3">Rejected Orders</option>
						<option value="4">Cancellation Requests</option>
						
						</select>
					</form>
					<?php echo form_open(); ?>
					<input type="submit" id="myButton" style="visibility: hidden"/>
					<?php echo form_hidden('order','NonAccept');
						echo form_close();
					?>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonReject" style="visibility: hidden"/>
					<?php echo form_hidden('change','Reject');
						echo form_close();
					?>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonCancel" style="visibility: hidden"/>
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
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Name</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Sub Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Unit Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Ordered Quantity</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Total Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Status</span></td>
			</tr>
			<?php foreach($Accepted as $row) { ?>
				<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
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
						<div class="complete">
								<input type="submit" id="accept" value="Complete" />
						</div>
						<?php echo form_hidden('Complete','Complete');
							$user=$row->Cus_ID;
							echo form_hidden('user',$user);
							echo form_hidden('ID',$row->ID);
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