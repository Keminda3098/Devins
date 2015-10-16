<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Update Slider Image</title>
	</head>

	<body>
			<div class="wrap">
				<div style="height: 700px;" class="jspContainer">
							
									

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
				<div class="cont span_2_of_3" style="padding-top: 24px">
					<div class="cont1">
						<h4 class="title">Update Slider Image</h4>
						<table>
						<?php foreach($query as $row) { ?>
							<?php echo form_open('');?>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Slider ID</h1></td>
								<td style="padding: 5px"><input name="sliderid" class="textbox" value="<?php print $row -> s_Id; ?>" type="text" style="width: 500px" readonly></td>
							
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Title Part I</h1></td>
								<td style="padding: 5px"><input name="titlep1" class="textbox" value="<?php print $row -> s_Bname; ?>" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Title Part II</h1></td>
								<td style="padding: 5px"><input name="titlep2" class="textbox" value="<?php print $row -> s_Sname; ?>" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Description</h1></td>
								<td style="padding: 5px"><input name="description" class="textbox" value="<?php print $row -> s_Description; ?>" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Image Location</h1></td>
								<td style="padding: 5px"><input name="url" class="textbox" value="<?php print $row -> s_Url; ?>" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td colspan="2">
									<div class="buttonpage" align="right">
										<a>
											<input value="Update" type="submit" name="updatesliderinfo">										
										</a>
							<?php echo form_close();?>
										<a href="http://devins.altairsl.us/index.php?page=sliderinfo">
											<input name="sliderinfo" value="Cancel" type="submit">
										</a>
									</div>
								</td>
							</tr>
						<?php } ?> 
						</table>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
