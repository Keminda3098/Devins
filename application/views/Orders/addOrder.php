<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		
		<script src="js/sweetalert.min.js"></script>
		
		<script>
		
			function checkAvilability( avail){
			
			 var qty = document.getElementById('txtQty').value ;
			
			 if(qty==""){
			  swal({   title: "Quantity field can't be empty!",    
			  type: "warning",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false });
			}
			else if(qty<=0){
					 swal({   title: "Quantity field can't be a minus value or Zero!",    
			  type: "warning",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false });
			}
			else if(qty>avail){
					 swal({   title: "Available quantity is not sufficient for this order!",    
			  type: "warning",   
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",   
			  confirmButtonText: "OK",   
			  closeOnConfirm: false });
			}
			else{
					document.getElementById("btnOrder1").click();
				}
			}
		
		</script>
		
		<title>Devins Lanka Advertising</title>
		
	</head>
	
<body>


	<center>
	    <br /><br /><br />
		<h3 class="m_3">Product Details</h3>
	</center>
		
	

<div class="comments-area">	
<br />
<center>
<table class="border123">
	<?php foreach($query as $row) { ?>
	<tr>
		<td>
			<div class="top_box">
				<h3 class="m_1"><?php print $row->p_Name; ?></h3>
				<br />
					<div class="grid_img">
						<div class="css3"><img src="<?php print $row->p_Url; ?>" width ="400px" height="300px" alt="">
						</div>
					</div>
			</div>
		</td>
		
		<td>
			<div class="top_box">
				<table >
					<?php echo form_open(); ?>
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
							Available Quantity
						</td>
						<td></td>
						<td style="padding: 15px">
							<label for="lable2"><?php print $row->p_Quantity; ?></label>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px">
							Quantity 
						</td>
						<td></td>
						<td style="padding: 15px">
							<input type="number" name="txtQty" id="txtQty" size="10"/>
						</td>
					</tr>
					
					<?php 
						echo form_hidden('price',$row->p_Price);
						echo form_hidden('ids','oder_display');
						echo form_hidden('idss',$row->p_Id);
						echo form_hidden('qty',$row->p_Id);
						echo form_hidden('Availability',$row->p_Quantity);										
					?>
				</table>
			</div>
		</td>
	</tr>
	
	<tr>
		<td style="background-color: #055B69; padding-bottom: 7px">
			<center><span style='font-weight:bold;'><label for="lable1">Rs.<?php print $row->p_Price; ?>.00</label></span></center>
		</td>
		<td style="background-color: #000000">
				<div class="order">
					<center><input type="button" name="btnOrder" id="btnOrder" value="Place an Order" onClick="checkAvilability(<?php echo $row->p_Quantity ?>)"/></center>
					<input type="submit" name="btnOrder1" id="btnOrder1" style="visibility: hidden;position: absolute;" />
				</div>
		</td>
	</tr>
	<?php 
	echo form_close();
	?> 
</table>
</center>
</div>



<br />

<!--Chathu--> 
<style type="text/css">
	
			#InnerMain {
				
					height: 320px;
					width: 410px;
					right: 20px;
					border-style: solid; 
					border-width:thin; 
					border-color: #000000;
					margin-left: 50px;
				
					}
					
			
					
			#TxtColor{
				 	
					color:#FFFFFF;
					height: 8px;
					width: 400px;
					}
					
		
			#D {
					background-color:#D8D8D8;
					height: 25px;
					width: 405px;
					}
					
			#tablestyle{
					 height: 60px;
					 width:300px;
			}
			
			#button_Add
			{
				font-size: =14px;
				background-color:#084B8A;
				border:#060E43;
				color:#FFFFFF;
				width: 100px;
				height: 25px;
			}
			
			#spacing{
				background-color:#FFFFFF ;
				
					padding-left: 175px;
			}
			
				#Display{
				
					border-style: solid; 
					border-width:thin; 
					background-color: #FFFFFF;
					margin-top:-320px ;		
					margin-right:270px; 
					border-color: #D8D8D8;			
			}
		
				#DisplayA{
				
					border-style: solid; 
					border-width:thin; 
					background-color: #FFFFFF;
								
			}
		
			
		</style>
	
			<br />
			<div id="InnerMain">
			<center>			
						<table>
							<form action="" method="post">
								<?php foreach($query as $row) { ?>
							<tr>
								
								<center><input style= "visibility: hidden"  name="pid" width="100" height="100"  value="  <?php print $row->p_Id; ?>"/></center>	
								
							</tr>
							
							<tr>
								<div id="D">
									<center>
										<h3 class="m_3">Feedback</h3>
									</center>
						
								</div>
							</tr>
					
								<div id="InnerTable">	
									<br />
				
						<article style="position: relative; width: 100%; opacity: 0;">
			
						</article>

						
							<div class="col_1_of_3 span_1_of_3"  style="width: 350px" style="height: 250px">
				      <div class="view view-fifth" >
					  <br />
					  	
                        <label class="price"><?php print $this->session->userdata('username'); ?></label>
					 
					<input  class="m_2" type="text" name="newfeedback" id="tablestyle"/></td>
                     
					 
					    </div>
					    <br>
					    
					
						 
						
							<center><input id="button_Add" type="submit" name ="submit_Add" value="ADD"/></center>	
							<input style="visibility: hidden"     type="text" name="user"value="<?php print $this->session->userdata('username');?>" width="10" height="10"/> <br><br>
			
			<?php echo form_open(); ?>

						<?php echo form_hidden('submit_Add','product');
						echo form_close(); ?>	
						<?php 
	
	 } ?> 
				
			    	    <div class="clear"></div>
			    	</div>
						
							</div>
						</table>
					
			
</center>
</div>

<center>
<table id="Display" >
	<?php 
	
	$newQ="SELECT * FROM feedback WHERE p_Id = ".$row->p_Id;
	$query1=$this->db->query($newQ);
		//$query= $this->db->get('feedback');
		foreach($query1->result() as $row)
		{?>
			
			
			<tr>
		<td  >
	<span style='font-weight:bold;'><label style="padding: 20px" for="lable1"><?php print $row->user; ?></label></span>
		
		</td>
		</tr>
		<tr>
		<td style="" style="padding: 80px">
			<label style="padding: 20px" for="lable1" ><?php print $row->feedback; ?></label><br/>
			
			
			
				<?php   if($this->session->userdata('username') == $row->user) 
				{?>
				<a style="padding-left: 400px"  style="padding-right: 40px" href="<?php echo base_url()."index.php/welcome/deleteProductComment/".$row->f_Id; ?>"class="confirmation">Delete</a>	
			<a href="<?php echo base_url()."index.php/welcome/editComment/".$row->f_Id; ?>">Edit</a>	
				
				<?php }?> 
		
		<hr size="2"  width="450" align="center" /><br/>
		<?php	}
		?>
	
			
		
		</td>

		</tr>
		<script type="text/javascript">
				    var elems = document.getElementsByClassName('confirmation');
				    var confirmIt = function (e) {
				        if (!confirm('Are you sure you want to delete this product?')) e.preventDefault();
				    };
				    for (var i = 0, l = elems.length; i < l; i++) {
				        elems[i].addEventListener('click', confirmIt, false);
				    }
				</script>
	</table>

</center>	
	</form>
	</center>
<?php print "<br>"; } ?> 
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>