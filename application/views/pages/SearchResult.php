<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/form.css">
		<link rel="stylesheet" type="text/css" href="../css/etalage.css">
		<link rel="stylesheet" type="text/css" href="../css/megamenu.css">
		
		<title>Devins Lanka Advertising</title>
	</head>
<body>
		<div class="pagetitle"><h1>Search Result:</h1></div>
	
<div class="main">
	<div class="wrap">
					<div class="content-top">
						<div class="clear"></div>
					</div>
					<div class="content-bottom">
<?php 
$count = 0;
foreach($query as $row) { $count++; ?>
							<?php if($count == 1){ ?>
						<div class="box1">
							<?php } ?>
							<div class="col_1_of_3 span_1_of_3">
								<a>
								<div class="view view-fifth">
									<div class="top_box">
										<h3 class="m_1"><?php print $row -> p_Name; ?></h3>
										<p class="m_2">
											<?php print $row -> p_Description; ?>
										</p>
										<div class="grid_img">
											<div class="css3"><img src="<?php echo base_url()?><?php print $row -> p_Url; ?>">
											</div>
										</div>
									</div>
								</div> <span class="rating">
									<div class="price" style="height: 20px">
										Rs. <?php print $row -> p_Price; ?>
									</div> </span> </a>
								<ul class="list">[]][
									<a href="single.html"> </a>
									<li>
										<a> <img src="<?php echo base_url()?>/images/plus.png" alt=""> </a>
										<ul class="icon1 sub-icon1 profile_img">
											<li>
												<a name=<?php print $row -> p_Id; ?> class="active-icon c1">Order </a>
											</li>
										</ul>
									</li>
								</ul>
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