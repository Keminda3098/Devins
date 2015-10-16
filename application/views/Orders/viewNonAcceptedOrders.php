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
					
				}
				else if(value==2){
					//window.alert('Accepted '); 
					document.getElementById("myButtonAccepted").click();
				}
				else if(value==3){
					//window.alert('rejected '); 
					document.getElementById("myButtonReject").click();
				}
				else if(value==4){
					//window.alert('rejected '); 
					document.getElementById("myButtonCancel").click();
				}
			}
			
			function confirmGetMessage(val) {
			  //display a confirmation box asking the visitor if they want to get a message
			  var Reason = prompt("Please the reason", "Reason");
			  //var Reason = "test";
				//alert(Reason);
				val2 = "reason"+val.toString();
				val ="reject"+val.toString();
				//alert(val);
				
				//alert(val2);
				//alert(document.getElementById("reason").value);
					if (Reason != null) {
						document.getElementById(val2.toString()).value = Reason ;
						//alert(document.getElementById("reason").value);
						
					 document.getElementById(val.toString()).click();
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
						<option value="1">Non Accepted Orders</option>
						<option value="2">Accepted Orders</option>
						<option value="3">Rejected Orders</option>
						<option value="4">Cancellation Requests</option>
						
						</select>
					</form>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonAccepted" style="visibility: hidden" />
					<?php echo form_hidden('order','Accept');
						echo form_close();
					?>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonReject" style="visibility: hidden" />
					<?php echo form_hidden('change','Reject');
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
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Name</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Product Sub Category</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Unit Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Ordered Quantity</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Total Price</span></td>
				<td style="padding: 15px"><span style='font-weight:bold;'>Status</span></td>
			</tr>
			<?php 
			$tempval = 1;
			foreach($nonA as $row) { ?>
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
							<input type="submit" id="accept" value="Accept"/>
						</div>
						<?php echo form_hidden('Accept','order');
						echo form_hidden('ID',$row->ID);
						$user=$row->Cus_ID;
						echo form_hidden('user',$user);
						echo form_close();
						?>
						
						<?php echo form_open(); ?>
						<div class="complete">
							<input type="button" id="reject" value="Reject" <?php echo "onclick='confirmGetMessage($tempval)';"; ?> /> <br />
							<input type="submit" <?php echo "id='reject$tempval'"; ?> value="Reject" style="visibility: hidden;position: absolute;"/>
							<input type="text" <?php echo "id='reason$tempval'"; ?> name= "r" style="visibility: hidden;position: absolute;" />
						</div>
						
						<?php echo form_hidden('Reject','order');
						$user=$row->Cus_ID;
						echo form_hidden('user',$user); 
						echo form_hidden('ID',$row->ID); 
						echo form_close();
						?>
					</td>
				</tr>
			<?php print "<br>";$tempval++;  } ?> 
		</table>
		
		</center>
		<br /><br /><br />
		
	</body>
</html>