<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/form.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/etalage.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/megamenu.css"> 
		<link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<script src="js/sweetalert.min.js"></script>
		
		
		
		<script>
			$(document).ready(function(){
				
			   txt=$("#numberOfItems").val();
			   num= parseInt(txt);
			   
			   var i;
			   for(i=1;i<=num-1;i++){
			   		var itemID = '#check'+i;
			   		$(itemID.toString()).css("display","none");
			   }
			   $('#addMultiple').hide("fast");

				// Add onclick handler to button1
			   $("#button1").click(function(){
			   	
					for(i=1;i<=num-1;i++){
			   		var itemID = '#check'+i;
			   		$(itemID.toString()).show("fast");
			   		}
			   		
			   		for(i=1;i<=num-1;i++){
			   		var listID = '#addtowishlist'+i;
			   		$(listID.toString()).hide("fast");
			   		}
			   		
			   		$('#addMultiple').show("fast");

			  });
			  
			  $("#addMultiple").click(function(){
					
					var index=0;
			   		var name = [];
			   		var names="";
					for(i=1;i<=num-1;i++){
			   		var itemID = '#check'+i;
			   		$(itemID.toString()).show("fast");
			   		
			   		if ($(itemID.toString()).is(":checked"))
					{
						//var name = [];
						name[index] = $(itemID.toString()).attr('name');	
						names= names+' ' +$(itemID.toString()).attr('name');
						index++;
					}
			   		else{
			   			
			   		}
			   		
			   		}
			   		
			   		swal({   title: "Item "+names,    
				  		type: "warning",  
				  		confirmButtonText: "OK", 
				  		showCancelButton: false,   
				  		confirmButtonColor: "#DD6B55",     
				  		closeOnConfirm: true }, 
						  function(){ 
						  	document.getElementById("numberOfItems").value  = names;
			   				document.getElementById("addMultipleHidden").click();
						  	
						  	});
			   		
						
				});
		
			});
		
			function addToMyWishList(val) {
			  swal({   title: "Item added to your WishList",    
			  type: "warning",  
			  confirmButtonText: "OK", 
			  showCancelButton: false,   
			  confirmButtonColor: "#DD6B55",     
			  closeOnConfirm: false }, 
			  function(){  
			  	val2 = "product"+val.toString();
				val ="productID"+val.toString(); 
			  	document.getElementById(val.toString()).value = val ;
			  	document.getElementById(val2.toString()).click(); });
			}
			
		</script>
	
		
		</head>
		<body>

			<div class="main">
			<div class="wrap">
				<br />
				<input class="btnPay" id="button1" type="button" value="Add Multiple Products to My Wish List"/>
					<div class="content-bottom">
			<?php 
			$this->db->order_by('p_Name', 'ASC'); 
			$query= $this->db->get('promotional_products');
			$count = 0;
			$tempval = 1;
			foreach($query->result() as $row)
			//////
			 { $count++; ?>
						<?php if($count == 1){ ?>
						
						<div class="box1">
							<?php } ?>
							<div class="col_1_of_3 span_1_of_3"><a>
				      <div class="view view-fifth">
				      	<div align="left"><input type="checkbox" name="<?php print $row -> p_Id; ?>"  <?php echo "id='check$tempval'"; ?> style="width: 30px;height: 30px"></div>
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php print $row -> p_Name; ?></h3>
					  	<p class="m_2"><?php print $row -> p_Description; ?></p>
					  	<div class="grid_img">
						<div class="css3"><img src="<?php print $row -> p_Url; ?>">
						</div>
						</div>
                        <div class="price">Rs. <?php print $row -> p_Price; ?></div>
					    </div>
					    </div>
					
						 </a>
						 <div class="row">
						 <ul class="list">
									<li>
										<a> <img src="<?php echo base_url(); ?>images/plus.png" alt=""> </a>
										<ul class="icon1 sub-icon1 profile_img">
											<li>
												<?php echo form_open();
												echo form_hidden('p_ID',$row -> p_Id);
												if ($this->session->userdata('username') == null) { ?>
													<a href="http://localhost/Devins/index.php?page=signin" class="active-icon c1">Order </a>
												<?php } 
												else { ?>
													<a href="http://localhost/Devins/index.php?page=ViewforOrder&ID=<?php print $row -> p_Id; ?>" class="active-icon c1">Order </a>
												<?php } echo form_close(); ?>
											</li>
											
										</ul>
									</li>
								</ul>
								<ul class="list" <?php echo "id='addtowishlist$tempval'"; ?>>
									<li>
										<a> <img src="<?php echo base_url(); ?>images/plus.png" alt=""> </a>
										<ul class="icon1 sub-icon1 profile_img">
											<li>
												<?php echo form_open();
												echo form_hidden('p_ID',$row -> p_Id);
												if ($this->session->userdata('username') == null) { ?>
													<a href="http://localhost/Devins/index.php?page=signin" class="active-icon c1">My WishList</a>
												<?php } 
												else { ?>
													<a href="#" <?php echo "onclick='addToMyWishList($tempval)';"; ?> class="active-icon c1" >MY WISHLIST </a>
													<input type="submit" <?php echo "id='product$tempval'"; ?> value="cancellation" style="visibility: hidden;position: absolute;" />
													<input type="text" <?php echo "id='productID$tempval'"; ?> value="pid" name= "pid" style="visibility: hidden;position: absolute;" />
													<?php  echo form_hidden('wish','Mylist');
													
													} echo form_close(); ?>
											</li>
											
										</ul>
									</li>
								</ul>
								</div>
						<?php echo form_close(); ?>
			    	    <div class="clear"></div>
			    	</div>
							<?php
							if($count==3)
							{$count = 0;?>
						</div>
						<?php } ?>
				
				<?php
				echo form_hidden('View', 'ViewAll');
				echo form_hidden('p_ID', $row -> p_Id);
	?>
	

		 <?php $tempval++;	} ?> 
		 <?php echo form_open();?>
		 <input type="text" id="numberOfItems" <?php echo "value='$tempval'"; ?> name= "numberOfItems" style="visibility: hidden;position: absolute;" />
							<div class="clear"></div>
					</div>
				</div>
			</div>
			<center><input id="addMultiple" type="button" value="Add Selected Products to My Wish List"/>
				
				<input id="addMultipleHidden" type="submit" value="AddList" style="visibility: hidden;position: absolute;"/>
				
				</center>
				
				<?php  echo form_hidden('multiple','Mylist');
				echo form_close(); ?>
			</body>
</html>