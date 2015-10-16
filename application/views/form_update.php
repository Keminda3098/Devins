<html>	
	<head>
		
	</head>
	<body>
		
	<style>
			#LeftL {

				background-color:#FFFFFF
				/*font-style: normal;
				font-weight: bold;
				font-size: 16px;*/
				height: 450px;
				width: 540px;
	
					}
	
			#heading{

				background-color:#D8D8D8;
				/*font-style: normal;
				font-weight: bold;
				font-size: 16px;*/
				height: 25px;
				width: 540px;
	
					}
					#button_Add
			{
				font-size: =14px;
				background-color:#000000;
				border-color:#FDF59A;
				border-width:medium;
				color:#FFFFFF;
				width: 150px;
				height: 25px;
			}
		</style>
	
		<br /><br />	<center>
		<div id="LeftL">
		<br />
			<div id="heading">
				<center>
					<h3 class="m_3">Update Product</h3>
				</center>
			</div>
		<form action="<?php echo base_url()."index.php/main/update_validation/".$this->uri->segment(3); ?> " method="post">
		<?php echo validation_errors();
		$id =$this->uri->segment(3);
		
		$this->db->where('p_Id', $id);
		$query =$this ->db->get('promotional_products');
		foreach($query->result() as $row){
			?>
			<center>
				<br>
				<br>
				
				<table>
					
			<tr>
				<td style="padding: 10px">Product Name</td>
				<td style="padding: 10px">
					<input type="text" name="name" value="<?php echo $row->p_Name ;?>" style="width: 200px;">
				</td>
			</tr>
			<tr>
				<td style="padding: 10px">Product Description</td>
				<td style="padding: 10px">
					<input type="text"  name="description" value="<?php echo $row->p_Description ;?> "style="width: 200px;">
				</td>
			</tr>
			<tr>
				<td style="padding: 10px">Price</td>
				<td style="padding: 10px">
					<input type="text" name="price" value="<?php echo $row->p_Price ;?>" style="width: 200px;">
				</td>
			</tr>
			<tr>
				<td style="padding: 10px">Quantity</td>
				<td style="padding: 10px">
					<input type="text"  name="quantity" value="<?php echo $row->p_Quantity ;?>"style="width: 200px;">
				</td>
			</tr>
		</table>

		<?php
		}
		?>
			<table>
				<tr>
					<td style="padding: 10px">Product Category</td>
					<td style="padding: 10px">
						  <select class='inputField' name='category'style="width: 200px;">
    
					    <?php 
						
							$query=$this->db->query('SELECT DISTINCT p_Category FROM promotional_products');
							
							foreach ($query->result()as $row)
							{?>
								
								<option> 
							<?php	echo $row->p_Category; ?>
					
									</option>
						<?php	}
							?>
						
					        </select>
				   </td>
				</tr>
				<tr>
					<td style="padding: 7px">Product Subcategory</td>
					<td style="padding: 8px">
						 <select class='inputField' name='subcategory' style="width: 200px;" >
    
						    <?php 
							
								$query=$this->db->query('SELECT DISTINCT p_SubCategory FROM promotional_products');
								
								foreach ($query->result()as $row)
								{?>
									
									<option> 
								<?php	echo $row->p_SubCategory; ?>
						
										</option>
							<?php	}
								?>
							
						  </select>
					</td>
				</tr>
				<tr>
					<td style="padding: 7px"></td>
					<td style="padding: 7px"></td>
				</tr>
				<tr>
					<td style="padding: 7px"></td>
					<td style="padding: 7px">
						<input id="button_Add" type="submit" name="submit"value="UPDATE" />
					</td>
					
				</tr>
			
			</table>
				
	</center>
		
		</form>
		
		</div></center>
		<br /><br />
		<br /><br /><br />
		
	</body>
</html>