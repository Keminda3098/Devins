<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		<link rel='stylesheet' type='text/css' href='css/myOrderDropDown.css'>
		<script src="js/sweetalert.min.js"></script>
		<title>Devins Lanka Advertising</title>
		
		<script>
			function cancellationRequest(val) {
			  swal({   title: "Are you sure want to send a cancellation request?",    
			  type: "warning",  
			  confirmButtonText: "Yes", 
			  showCancelButton: true,   
			  confirmButtonColor: "#DD6B55",     
			  closeOnConfirm: false }, 
			  function(){  val2 = "product"+val.toString();
				val ="productID"+val.toString(); 
			  	document.getElementById(val.toString()).value = val ;
			  	document.getElementById(val2.toString()).click(); });
			}
		
		</script>
		

		
	</head>
<body>
	<center>
		<br /><br /><br />
		<h3 class="m_3">My Devins : Order History</h3>	
	</center>
	
<center>
	<table class="borderForHistory" >
		<?php 
		$tempval = 1;
		foreach($orders as $row) { ?>
				<tr class="borderForHistory">
					<td style="padding-left: 20px;padding-right: 200px;padding-bottom: 20px;padding-top: 20px">
						<h3 class="m_1">ORDER DATE<br>20<?php print $row->OrderedDate; ?></h3><br>
						
						<div><h3 class="m_1"><?php print $row->Name; ?> </h3> <img class="borderForHistoryImage" src="<?php print $row->p_Url; ?>" /></div>
						
					<td style="padding-left: 20px;padding-right: 200px;padding-bottom: 20px;padding-top: 20px">
						<h3 class="m_1">ORDER TOTAL<br>Rs.<?php print $row->Total; ?>.00</h3><br>
						<h3 class="m_1">ITEM PRICE<br>Rs.<?php print $row->UPrice; ?>.00</h3><br>
						<h3 class="m_1">NO OF ITEMS : <?php print $row->Qty; ?></p><br>
						
						<h3 class="m_1" > STATUS</h3>
						<?php    
							if($row->Status == "NonAccepted"){?>
							<img class="borderForHistoryImageForStatus" src="images/orderImages/pending.png" /><br>
						<?php	}
							else if($row->Status == "Completed"){?>
							<img class="borderForHistoryImageForStatus" src="images/orderImages/completed.png" /><br>
						<?php	} 
							else if($row->Status == "Rejected"){?>
							<img class="borderForHistoryImageForStatus" src="images/orderImages/rejected.png" /><br>
						<?php }  else if($row->Status == "Accepted"){?> 
							<img class="borderForHistoryImageForStatus" src="images/orderImages/processing.png" /><br>
						<?php	} ?>
						<br>
							
						<?php echo form_open(); ?>	
						<?php    
							if($row->Status == "NonAccepted"){?>
							<div class="orderHistory">
								<input  type="button" value="Request for Cancellation" <?php echo "onclick='cancellationRequest($tempval)';"; ?>/>
								<input type="submit" <?php echo "id='product$tempval'"; ?> value="cancellation" style="visibility: hidden;position: absolute;" />
								<input type="text" <?php echo "id='productID$tempval'"; ?> value="pid" name= "pid" style="visibility: hidden;position: absolute;" />
							</div>
						<?php 
							echo form_hidden('orderCancellation','cancelRequest');
							echo form_hidden('orderID',$row->ID);
							echo form_close();
						?>
						<?php	} ?>
					</td>
				</tr>
			<?php $tempval++; print "<br>"; } ?> 
</table>
</center>
</body>
</html>