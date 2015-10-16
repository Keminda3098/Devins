<!DOCTYPE HTML>
<html>
   <head>
      <title>Devins Lanka</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/form.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/etalage.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/megamenu.css">
      <link rel='stylesheet' type='text/css' href='css/sweetalert.css'>
		<script src="js/sweetalert.min.js"></script>
		
		<script>
			function RemoveFromMyList(val) {
			  swal({   title: "Do you want to remove this item from your Wish List?",    
			  type: "warning",  
			  confirmButtonText: "YES", 
			  showCancelButton: true,   
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
   	
   		<center>
		<br /><br /><br />
		<h3 class="m_3">My Devins : My WishList</h3>	
		</center>
   		
      <div class="main">
         <div class="wrap">
            <div class="content-bottom">
               <?php 
                  $count = 0;
				  $tempval = 1;
                  foreach($wishList as $row) { $count++; ?>
               <?php if($count == 1){ ?>
               <div class="box1">
                  <?php } ?>
                  <div class="col_1_of_3 span_1_of_3">
                     <a>
                        <div class="view view-fifth">
                           <div class="top_box">
                              <h3 class="m_1"><?php print $row -> p_Name; ?></h3>
                              <p class="m_2"><?php print $row -> p_Description; ?></p>
                              <div class="grid_img">
                                 <div class="css3"><img src="<?php echo base_url();?><?php print $row -> p_Url; ?>"  height="168px">
                                 </div>
                              </div>
                              <div class="price">Rs. <?php print $row -> p_Price; ?></div>
                           </div>
                        </div>
                        <?php echo form_open(''); ?>
                     </a>
                     <div class="row">
                     <ul class="list">
                        <li>
                           <a> <img src="images/plus.png" alt=""> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a href="http://localhost/Devins/index.php?page=ViewforOrder&ID=<?php print $row -> p_Id; ?>" class="active-icon c1">Order </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <ul class="list">
									<li>
										<a> <img src="<?php echo base_url(); ?>images/plus.png" alt=""> </a>
										<ul class="icon1 sub-icon1 profile_img">
											<li>
												<?php echo form_open(); ?>
													<a href="#" <?php echo "onclick='RemoveFromMyList($tempval)';"; ?> class="active-icon c1" >REMOVE </a>
													<input type="submit" <?php echo "id='product$tempval'"; ?> value="cancellation" style="visibility: hidden;position: absolute;" />
													<input type="text" <?php echo "id='productID$tempval'"; ?> value="pid" name= "pid" style="visibility: hidden;position: absolute;" />
													<?php  echo form_hidden('wish','remove');
													echo form_hidden('WLID',$row -> WLID);
													echo form_close(); ?>
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
               <div class="clear"></div>
            </div>
         </div>
      </div>
   </body>
</html>