<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/etalage.css">
		<link rel="stylesheet" type="text/css" href="css/megamenu.css">
		<title>Devins Lanka Advertising</title>

		<style>
			.hovernormal {
				background: #FFFFFF;
			}
			.hoverhighlight {
				background-color: #71bee4;
			}
		</style>
	</head>

	<body>
		<div>
			<div class="wrap">
				<div class="rsidebar span_1_of_left">
               <section class="sky-form">
                  <div style="overflow: hidden; padding: 0px;" class="row row1 scroll-pane">
                     <div style="height: 700px;" class="jspContainer">
                        <div style="padding: 18px; top: 0px; left: 0px;" class="jspPane">
                           <div class="col col-4">
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php/adminView">
                              <input name="feedbackinfo" value="Feedback Information" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=productinfo">
                              <input name="productinfo" value="Product Information" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=clientinfo">
                              <input name="clientinfo" value="Client Information" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=sliderinfo">
                              <input name="online_users" value="View online Users" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=chat">
                              <input name="chat" value="chat" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=orderinfo">
                              <input name="orderinfo" value="Order Information" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=sliderinfo">
                              <input name="sliderinfo" value="Update Image Slider" type="submit">
                              </a>
                           </div>
                           <div class="clear"></div>
                           <div class="buttonside">
                              <a href="http://devins.altairsl.us/index.php?page=admindesign">
                              <input name="clientinfo" value="Design Requests" type="submit">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
				<div class="cont span_2_of_3"style="padding-top: 24px">
					<h4 class="title">Update Image Slider</h4>
					<table style="width:100%; font-size: 12px">
							<tr style="text-align: left ; font-weight: bold; font-size: 13px; padding: 5px;border-bottom: 2px solid #5F5D5D; border-collapse: collapse;">
								<th style="padding: 5px">ID</th>
								<th style="padding: 5px">Title Part I</th>
								<th style="padding: 5px">Tilte Part II</th>
								<th style="padding: 5px">Description</th>
								<th style="padding: 5px">Action</th>
							</tr>
								<?php foreach($query as $row) { ?>
									<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
										<td style="padding: 5px"><?php print $row -> s_Id; ?></td>
										<td style="padding: 5px"><?php print $row -> s_Bname; ?></td>
										<td style="padding: 5px"><?php print $row -> s_Sname; ?></td>
										<td style="padding: 5px"><?php print $row -> s_Description; ?></td>
										<td style="padding: 5px">
													<?php echo form_open('');?>
													<div class="buttonaction">
														<a>
															<input type="submit" value= "Update" title="Update"  name="updateslider">		
															<input type="hidden" value=<?php print $row -> s_Id; ?>  name="hidden">								
														</a>
													</div>
													<?php echo form_close();?>
										</td>
									</tr>
								<?php } ?> 
								</table>
								<br />
					<h1 style="font-size: 11px; color: red; background: #f7b7b7" align="center">*Slider should always contain five images.</h1>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
