<html>
	<head>
		
	</head>
	<body>
		<br /> <br /> <br /> <br /> <br /><br />
		<center><h2>Update Comment</h2></center>
		<br /> <br /> 
		<form action="<?php echo base_url()."index.php/welcome/update_comment/".$this->uri->segment(3); ?> " method="post">
		<center>	<table   class="border123" style="background-color: #9ACFEA">
		<?php echo validation_errors();
		$id =$this->uri->segment(3);
		
		$this->db->where('f_Id', $id);
		$query =$this ->db->get('feedback');
		foreach($query->result() as $row){
			?>
				 <tr >
		<p> Comment      :  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <input  style="width: 400px"  type="text" name="name" value="<?php echo $row->feedback ;?>" /></p>	
		<input   style="visibility: hidden"  type="text" name="pid" width="100" height="100"  value="  <?php print $row->p_Id; ?>"/>
		
		</tr>
		<?php
		}
		?>
		
	
		<p>  <input type="submit" name="submit" value="Edit" /></p>
		</table></center>
			<br /> <br /> <br /> <br /> <br /><br />
		</form>
	</body>
</html>