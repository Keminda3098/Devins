<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/etalage.css">
		<link rel="stylesheet" type="text/css" href="css/megamenu.css">
		<title>Devins Lanka Advertising</title>
<script>
			function changeOrder(value){ 
				
				if(value==1){
				
				}
				else if(value==2){
					
					document.getElementById("myButton").click();
				}
			}
		</script>
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
				<div class="rsidebar span_1_of_left" style="height: 400px">
					<section class="sky-form">
						<div style="overflow: hidden; padding: 0px;" class="row row1 scroll-pane">

							<div style="height: 300px;" class="jspContainer">
								<div style="padding: 18px; top: 0px; left: 0px;" class="jspPane">
									<div class="col col-4">

									</div>
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
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="cont span_2_of_3"style="padding-top: 24px">
					<table style="width:100%">
						<tr>
							<td>
								<h4 class="title"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Webpage Feedback</h4> 
							</td>
								
						</tr>
					</table>
					<br />
				

	 <?php 
	$this->db->order_by('s_Id', 'ASC'); 
		$query= $this->db->get('website_feedback');
		
		{?>
				<table style="width:90%; font-size: 12px">
					<tr>
						<td height="44" align="right" valign="middle"><span style="font-size: 16px">Feedback Type&nbsp;&nbsp; &nbsp;</span></td>
          <td><span style="font-size: 16px">
         <select     id="selection" name="menu" onchange="changeOrder(this.value)" >
						<option value="1">Website Feedbacks</option>
						<option value="2">Product Feedbacks</option>
						
						
						</select>
						<?php echo form_open(); ?>
						
						<input     style="visibility: hidden"  name ="selection"type="submit" id="myButton" />
						 
						<?php echo form_hidden('selection','site');
						echo form_close(); ?>
					</tr>
							<tr style="text-align: left ; font-weight: bold; font-size: 13px; padding: 5px;border-bottom: 2px solid #5F5D5D; border-collapse: collapse;">
								<th style="padding: 5px">Feedback</th>
								<th style="padding: 5px">Action</th>
								
							</tr>
				<tr>
	
				</tr>
								<?php foreach($query ->result() as $row) { ?>
									<tr onMouseOver="this.className='hoverhighlight'" onMouseOut="this.className='hovernormal'">
										
										<td style="padding: 5px"><?php print $row -> suser_feedback; ?></td>
										<td> 	<a href="<?php echo base_url()."index.php/adminView/delete/" .$row->s_Id; ?>" class="confirmation">Delete</a>	</td>
										
										
									</tr>
								<?php } ?> 
								</table>
									<?php	}
		?>
</div  > 
					<div class="clear"></div>
				</div>
				 <script type="text/javascript">
				    var elems = document.getElementsByClassName('confirmation');
				    var confirmIt = function (e) {
				        if (!confirm('Are you sure you want to delete this comment?')) e.preventDefault();
				    };
				    for (var i = 0, l = elems.length; i < l; i++) {
				        elems[i].addEventListener('click', confirmIt, false);
				    }
				</script>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
