<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		
		<script src="js/sweetalert.min.js"></script>
		<script>
			function submitA () {
			  swal({   title: "Order palced successfully!",    
			  type: "success",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false }, 
			  function(){   document.getElementById("hiddenA").click(); });
			}
			
			function submitR () {
			   swal({   title: 'Order Rejected!',     
			  type: "warning",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false }, 
			  function(){   document.getElementById("hiddenR").click(); });
			}
		</script>
		<title>Devins Lanka Advertising</title>
	</head>
<body>
	<center>
		<br /><br /><br />
		<h3 class="m_3">Order Details</h3>	
	</center>

<div>	
<center>
<table class="border123">
	<?php foreach($query as $row) { ?>
	<tr>
		<td>
			<div class="top_box">
				<h3 class="m_1"><?php print $row->p_Name; ?></h3>
				<br />
					<div class="grid_img">
						<div class="css3"><img src="<?php print $row->p_Url; ?>" alt="">
						</div>
					</div>
					</div>
		</td>
		
		<td>
			<div class="top_box">
				<table >
					
					<br /><br />
					<tr >
						<td style="padding: 15px">
							Product Category    
						</td>
						<td></td>
						<td style="padding: 15px">
							<label for="lable1"><?php print $row->p_Category; ?></label>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px">
							Product Sub Category 
						</td>
						<td></td>
						<td style="padding: 15px">
							<label for="lable1"><?php print $row->p_SubCategory; ?></label>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px">
							Quantity 
						</td>
						<td></td>
						<td style="padding: 15px">
							<label for="lable2"><?php echo $qty; ?></label>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px">
							<span style='font-weight:bold;'>Total Price</span>
						</td>
						<td></td>
						<td style="padding: 15px">
							<span style='font-weight:bold;'><label for="lable5">Rs.<?php echo $total; ?>.00</label></span>
						</td>
					</tr>
					
				</table>
			</div>
		</td>
	</tr>
	
	<tr>
		<td style="background-color: #999999" style="padding: 20px">
			<center><span style='font-weight:bold;'><label for="lable1">Rs.<?php print $row->p_Price; ?>.00</label></span></center>
		</td>
		<td>
			<table>
				<tr>
					<td style="background-color: #000000"><center>
					<?php echo form_open(); ?>
					<div class="order">
						<input type="button" name="btnAccept" id="btnAccept" value="Accept Order" onclick="submitA()"/>	
						<input type="submit" id="hiddenA" value="Accept Order" style="visibility: hidden;position: absolute;" />	
					</div>
					<?php 
						echo form_hidden('name',$row->p_Name);
						echo form_hidden('cat',$row->p_Category);
						echo form_hidden('Display','order_display');
						echo form_hidden('cat',$row->p_Category);
						echo form_hidden('sub',$row->p_SubCategory);
						echo form_hidden('price',$row->p_Price);	
						echo form_hidden('car',$qty);
						echo form_hidden('total',$total);
						echo form_hidden('avail',$Availability);
						echo form_hidden('pID',$row->p_Id);
						echo form_hidden('orderdDate',date("y-M-d"));
						echo form_hidden('User',$this->session->userdata('username'));;
						echo form_close();					
					?>
					</center>
					</td>
					<td style="background-color: #000000"><center>
					<?php echo form_open();?>	
					<div class="order">
						 <input type="button" name="btnReject" id="btnReject" value="Reject Order" onclick="submitR()" />
						 <input type="submit" id="hiddenR"  style="visibility: hidden;position: absolute;" />		
					</div>

					<?php echo form_hidden('Display','Reject_Order');
						echo form_close();?>
		 			<?php print "<br>"; ?> 
		 			</center>
					</td>
				</tr>
			</table>
				    
				
		
		</td>
	</tr>
	<?php print "<br>"; }  ?> 
</table>
</center>
</div>
<br /><br />
<?php print "<br>";  ?> 
<br /><br /><br/>
</body>
</html>