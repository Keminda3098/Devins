<html>
	<head>
		
	</head>
	<body>
		<br /> <br /> <br /> <br /> <br /><br />
		<center><h2>Update Comment</h2></center>
		<br /> <br /> 
		<form action="<?php echo base_url()."index.php/siteFeedback/update_comment/".$this->uri->segment(3); ?> " method="post">
		<center>	<table   class="border123" style="background-color: #9ACFEA">
		<?php echo validation_errors();
		$id =$this->uri->segment(3);
		
		$this->db->where('s_Id', $id);
		$query =$this ->db->get('website_feedback');
		foreach($query->result() as $row){
			?>
				 <tr >
		<p> Comment      :  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <input  style="width: 400px"  type="text" name="name" value="<?php echo $row->suser_feedback ;?>" /></p>	
		
		
		</tr>
		<?php
		}
		?>
		<input style="visibility: hidden" style="width: 400px"  type="text" name="username" value="<?php echo $row->suser_name;?>" />
	
		<p>  <input type="submit" name="EditComment" value="Edit" /></p>
		</table></center>
			<br /> <br /> <br /> <br /> <br /><br />
		</form>
	</body>
</html>