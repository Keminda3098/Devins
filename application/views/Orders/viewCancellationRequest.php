<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		<script src="js/sweetalert.min.js"></script>
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
					document.getElementById("myButtonNonAccepted").click();
				}
				else if(value==3){
					//window.alert('rejected '); 
					document.getElementById("myButtonAccepted").click();
				}
				
				else if(value==4){
					//window.alert('rejected '); 
					document.getElementById("myButtonReject").click();
				}
			}
			
			function acceptCancellation(val) {
			  swal({   title: "Do you want to accept this cancellation request?",    
			  type: "warning",  
			  confirmButtonText: "YES", 
			  showCancelButton: true,   
			  confirmButtonColor: "#DD6B55",     
			  closeOnConfirm: false }, 
			  function(){  
			  	val2 = "accept"+val.toString();
				val ="acceptID"+val.toString(); 
			  	document.getElementById(val.toString()).value = val ;
			  	document.getElementById(val2.toString()).click();
			  	emailSent (); });
			}
		
			function rejectCancellation(val) {
			  swal({   title: "Do you want to reject this cancellation request?",    
			  type: "warning",  
			  confirmButtonText: "YES", 
			  showCancelButton: true,   
			  confirmButtonColor: "#DD6B55",     
			  closeOnConfirm: false }, 
			  function(){  
			  	val2 = "reject"+val.toString();
				val ="rejectID"+val.toString(); 
			  	document.getElementById(val.toString()).value = val ;
			  	document.getElementById(val2.toString()).click();
			  	emailSent (); });
			  	
			}
		
			function emailSent () {
			  swal({   title: "Email Sent to the Customer",    
			  type: "success",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false }, 
			  function(){   document.getElementById("hiddenA").click(); });
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
						<option value="1">Cancellation Requests</option>
						<option value="2">Non Accepted Orders</option>
						<option value="3">Accepted Orders</option>
						<option value="4">Rejected Orders</option>
						
						</select>
					</form>
					<?php echo form_open(); ?>
					<input type="submit" id="myButtonNonAccepted" style="visibility: hidden" />
					<?php echo form_hidden('order','NonAccept');
						echo form_close();
					?>
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
				</td>
			</tr>
		
		</table>
		</center>
		<center>
		<table class="border111">
			<tr class="border111">
				<td style="padding: 10px"><span style='font-weight:bold;'>Product Name</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Product Category</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Product Sub Category</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Unit Price</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Ordered Quantity</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Total Price</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'>Customer</span></td>
				<td style="padding: 10px"><span style='font-weight:bold;'></span></td>
			</tr>
			<?php 
			$tempval = 1;
			foreach($cancallation as $row) { ?>
				<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
					
					<td style="padding: 10px">
						<?php print $row->Name; ?>
					</td>
					<td style="padding: 10px">
						<?php print $row->Cat; ?>
					</td>
					<td style="padding: 10px">
						<?php print $row->Sub; ?>
					</td>
					<td style="padding: 10px">
						Rs.<?php print $row->UPrice; ?>.00
					</td>
					<td style="padding: 10px">
						<center><?php print $row->Qty; ?></center>
					</td>
					<td style="padding: 10px">
						Rs.<?php print $row->Total; ?>.00
					</td>
					<td style="padding: 10px">
						<?php print $row->Cus_ID; ?>
					</td>
					<td style="padding: 10px">
						<?php echo form_open(); ?>
						<div class="cancellation">
							<input type="button" id="accept" value="Accept Cancellation" <?php echo "onclick='acceptCancellation($tempval)';"; ?>/>
							<input type="submit" <?php echo "id='accept$tempval'"; ?> value="cancellation" style="visibility: hidden;position: absolute;" />
							<input type="text" <?php echo "id='acceptID$tempval'"; ?> value="pid" name= "pid" style="visibility: hidden;position: absolute;" />
						</div>
						<?php echo form_hidden('Accept','cancellation');
						echo form_hidden('ID',$row->ID);
						$user=$row->Cus_ID;
						echo form_hidden('user',$user);
						echo form_close();
						?>
						
						<?php echo form_open(); ?>
						<div class="cancellation">
							<input type="button" id="reject" value="Reject Cancellation"  <?php echo "onclick='rejectCancellation($tempval)';"; ?>/> <br />
							<input type="submit" <?php echo "id='reject$tempval'"; ?> value="cancellation" style="visibility: hidden;position: absolute;" />
							<input type="text" <?php echo "id='rejectID$tempval'"; ?> value="pid" name= "pid" style="visibility: hidden;position: absolute;" />
						
						</div>
						
						<?php echo form_hidden('Reject','cancellation');
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