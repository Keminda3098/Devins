
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/order.css">
		<title>Devins Lanka Advertising</title>
	</head>
	<meta charset="utf-8">
	<title>Add Site Feedbacks</title>
	<body>
		<style type="text/css">
		
			#heading1{

				background-color:#D9EDF7;
				/*font-style: normal;
				font-weight: bold;
				font-size: 16px;*/
				height: 25px;
				width: 540px;
				
	
					}
				#heading2{

				background-color:#FFFFB7;
			
				height: 32px;
				width: 545px;
				
	
					}
					#name{
						font:  "Arial Narrow";
						font-family:"Century Gothic";
						font-size: 16px;
						color: #002166;
						
					
					}
						#feedback{
						font:  "Arial Narrow";
						font-family:"Century Gothic";
						font-size: 14px;
						color: #363636;

					}
		
			#Main {
					background-color:#084B8A;
				border:#060E43;
					height: 330px;
					width: 420px;
					padding-left: 5px;
				
					}
			#InnerMain {
					background-color:#0489B1;
				border:#000000;
					height: 305px;
					width: 410px;
					right: 20px;
					}
					
			#Border{
					border-color: #0489B1;
					border-width:5px;
					height: 300px;
					width: 400px;
					}
					
			#InnerTable {
					background-color:#FFFFFF;
					height: 240px;
					width: 400px;
					}
					
			#TxtColor{
				 	
					color:#FFFFFF;
					height: 8px;
					width: 400px;
					}
					
			#A {
				 	
					background-color:#0489B1;
					height: 8px;
					width: 400px;
					
					}
		    #B {
					background-color:#01A9DB;
					height: 8px;
					width: 400px;
					}
			#C {
					background-color:#A9E2F3;
					height: 18px;
					width: 400px;
					font-size: 12px;
					}
			#D {
					background-color:#F2F2F2;
					height: 25px;
					width: 400px;
					}
					
			#tablestyle{
					 height: 60px;
					 width:300px;
			}
			
			#button_Add
			{
				font-size: =14px;
				background-color:#084B8A;
				border:#060E43;
				color:#FFFFFF;
				width: 100px;
				height: 25px;
			}
			
			#spacing{
				background-color:#FFFFFF ;
				
					padding-left: 175px;
			}
			
			#Border{
				 border-color: #084B8A;
				 background-color:#084B8A;
			}
			#Border2{
				background-color: #FFFFFF;
			
				 margin-left: 425px;
				 
			}
			#BorderA{
				 border-color: #084B8A;
				 background-color:#084B8A;
			}
			#ViewTable{
				background-color:#000000;
				width: 600px; 
			}
			
			#heading{

				background-color:#D8D8D8;
				/*font-style: normal;
				font-weight: bold;
				font-size: 16px;*/
				height: 25px;
				width: 540px;
				
	
					}
		</style>
		<br><br>
<center>
<div id="heading" align="center">
				<center>
					<h3 class="m_3">Customer Feedbacks</h3>
				</center>
</div><br/><br/>
</center>
<div id="">
		<table style=" border: solid thin" id="Border2"  >

		<?php 

	//$this->db->order_by('p_Name', 'ASC'); 
		$query= $this->db->get('website_feedback');
		foreach($query->result() as $row)
		{?>
			<tr >
		<td   style="padding: 6px">
			<div id="heading1">
	<span style='font-weight:bold;'><label    id="name"  style="padding: 40px"   for="lable1"><?php print $row->suser_name; ?></label></span>
			</div>
		</td>
	</tr >
		<tr >
		<td style="background-color: #FFFFFF" border="#000000" style="padding: 10px">
			<div id="heading2">	
			<label  style="padding: 50px"  id="feedback" for="lable1" ><?php print $row->suser_feedback; ?></label><br/>
		</div>
			
			
			
		<center>	<hr size="2" width="500"  id="Sepetrater"/></center><br/>
		
		</td>

		</tr>
		
		<?php	}
		?>
	
	
	</table> </div>
	<br /><br /><br /><br /><br />


	 <script type="text/javascript">
				    var elems = document.getElementsByClassName('confirmation');
				    var confirmIt = function (e) {
				        if (!confirm('Are you sure you want to delete this comment?')) e.preventDefault();
				    };
				    for (var i = 0, l = elems.length; i < l; i++) {
				        elems[i].addEventListener('click', confirmIt, false);
				    }
				</script>
				


	

</body>
</html>