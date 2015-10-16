<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Devins Lanka Advertising</title>
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
				<div class="cont span_2_of_3" style="padding-top: 24px">
					<div class="cont1">
						<h4 class="title">Update Product Information</h4>
						<table>
							<?php echo form_open('');?>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Product Name</h1></td>
								<td style="padding: 5px"><input name="name" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Category</h1></td>
								<td style="padding: 5px">
									<select id="category" name="category" style="width: 506px" class="frm-field required">        
							         	<option value="Promotional Products">Promotional Product</option>
							            <option value="Promotional Wear / Uniforms">Promotional Wear / Uniforms</option>
							            <option value="Tailor-made Promotions">Tailor-made Promotion</option>
							            <option value="Advertising Solutions">Advertising Solution</option>
							            <option value="Hotel Products">Hotel Products</option>
							         </select>
								</td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Sub Category</h1></td>
								<td style="padding: 5px"><input name="subcategory" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Description</h1></td>
								<td style="padding: 5px"><input name="description" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Price</h1></td>
								<td style="padding: 5px"><input id="price" name="price" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Quantity</h1></td>
								<td style="padding: 5px"><input id="quantity" name="quantity" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td style="padding: 5px; padding-left: 50px; padding-right: 50px"><h1 class="title" style="font-size: 14px">Image Location</h1></td>
								<td style="padding: 5px"><input name="url" class="textbox" type="text" style="width: 500px"></td>
							</tr>
							<tr>
								<td colspan="2">
									<div class="buttonpage" align="right">
										<a>
											<input value="Add Product" type="submit" name="addproductinfo">										
										</a>
							<?php echo form_close();?>
										<a href="http://devins.altairsl.us/index.php?page=productinfo">
											<input name="productinfo" value="Cancel" type="submit">
										</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
