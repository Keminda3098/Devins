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
		<body>
			
			<div class="main">
			<div class="wrap">
					<div class="content-bottom">
			<?php 
			$this->db->order_by('p_Name', 'ASC'); 
		$query=$this->db->query('SELECT *  FROM promotional_products WHERE p_Type = "Advertising"');
		
			$count = 0;
			foreach($query->result() as $row)
			//////
			 { $count++; ?>
						<?php if($count == 1){ ?>
						<div class="box1">
							<?php } ?>
							<div class="col_1_of_3 span_1_of_3"><a>
				      <div class="view view-fifth">
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
					<!--	ratings
						
						<?php echo form_open(''); ?>
					    <span class="rating">
						<!-- 
							
								<input type="hidden" value=<?php print $row -> p_Id; ?>  name="hidden">		
					        <input type="submit" id="rating-input-1" name="rating-input-1" class="button-rating" value=" ">
					        <input type="submit" id="rating-input-2" name="rating-input-2" class="button-rating" value=" ">
					        <input type="submit" id="rating-input-3" name="rating-input-3" class="button-rating" value=" ">
					        <input type="submit" id="rating-input-4" name="rating-input-4" class="button-rating" value=" ">
					        <input type="submit" id="rating-input-5" name="rating-input-5" class="button-rating" value=" "> 
		        	   (<?php print $row -> p_Rating; ?>)
		    	   </span> -->
						 </a>
						 <ul class="list">
									<li>
										<a> <img src="<?php echo base_url(); ?>images/plus.png" alt=""> </a>
										<ul class="icon1 sub-icon1 profile_img">
											<li>
												<a class="active-icon c1">Order </a>
											</li>
										</ul>
									</li>
								</ul>
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
		 <?php	} ?> 
							<div class="clear"></div>
					</div>
				</div>
			</div>
			</body>
</html>