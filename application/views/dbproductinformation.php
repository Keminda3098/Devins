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
					<table style="width:100%">
						<tr>
							<td>
								<h4 class="title">Product Information</h4>
							</td>
							<td align="right" style="padding-right: 21px">
									<a class="buttonaction" href="http://devins.altairsl.us/index.php?page=addproductinfo">
										<input type="submit" value= "Add New Product" title="Add New" name="addproduct">
									</a>
							</td>	
						</tr>
					</table>
				
<div>
	<?php 
	$this->db->order_by('p_Name', 'ASC'); 
		$query= $this->db->get('promotional_products'); {?>
		<table style="width:100%; font-size: 12px">
							<tr style="text-align: left ; font-weight: bold; font-size: 13px; padding: 5px;border-bottom: 2px solid #5F5D5D; border-collapse: collapse;">
								<th style="padding: 5px">Name</th>
								<th style="padding: 5px">Category</th>
								<th style="padding: 5px">Subcategory</th>
								<th style="padding: 5px">Description</th>
								<th style="padding: 5px">Price</th>
								<th style="padding: 5px">Quantity</th>
								<th style="padding: 5px">Action</th>
							</tr>
	<?php	foreach($query->result() as $row)
		{?>
			
			<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
										<td style="padding: 5px"><?php print $row -> p_Name; ?></td>
										<td style="padding: 5px"><?php print $row -> p_Category; ?></td>
										<td style="padding: 5px"><?php print $row -> p_SubCategory; ?></td>
										<td style="padding: 5px"><?php print $row -> p_Description; ?></td>
										<td style="padding: 5px"><?php print $row -> p_Price; ?></td>
										<td style="padding: 5px"><?php print $row -> p_Quantity; ?></td>
										<td><a href="<?php echo base_url()."index.php/main/delete/".$row->p_Id; ?> " class="confirmation">Delete </a> </td>
										<td><a href="<?php echo base_url()."index.php/main/form_update/".$row->p_Id; ?>">Edit</a></td>
		 </tr>

	<?php	} ?> 
 </table> 
		
		<?php	}
		?>
</div  > 
				 <script type="text/javascript">
				    var elems = document.getElementsByClassName('confirmation');
				    var confirmIt = function (e) {
				        if (!confirm('Are you sure you want to delete this product?')) e.preventDefault();
				    };
				    for (var i = 0, l = elems.length; i < l; i++) {
				        elems[i].addEventListener('click', confirmIt, false);
				    }
				</script>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
