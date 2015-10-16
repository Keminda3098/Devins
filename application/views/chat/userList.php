<?php
	session_start(); // This is need.Otherwise not getting your name in the chat box.
	$_SESSION['username'] = $this->session->userdata('username'); // Must be already set
	
	 //print_r($_SESSION);
?>



 <div id="container">
<!-- 	<script type="text/javascript" src="http://localhost/devinsnew/js/jquery.js"></script>
-->	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/Devins/js/chat.js"></script>
  
    <link type="text/css" rel="stylesheet" media="all" href="http://localhost/Devins/css/chat.css" />
    <link type="text/css" rel="stylesheet" media="all" href="http://localhost/Devins/css/screen.css" />
    
    <!--[if lte IE 7]>
    <link type="text/css" rel="stylesheet" media="all" href="hhttp://localhost/devinsnew/css/screen_ie.css" />
    <![endif]--> 
	<h2>Online Users</h2>

     <table width="45%" cellspacing="1" cellpadding="2" class="tableContent" style="margin-left:0px !important;">
        <tbody>
          <tr style="background-color:#9EB0E9;  font-size:13px; font-weight:bold; color:#fff;">
            <th>Online</th>
            <th>User Id</th>
            <th>User Name</th>
          </tr>
                              
		<?php
								
		if(isset($listOfUsers))
		{
			foreach($listOfUsers->result() as $res)
			{
		?>

          <tr style="background-color:#efefef;">
            <td><?php if($res->online==1) echo 'Active'; else echo 'Inactive'; ?></td>
            <td><?php echo $res->cus_id; ?></td>
            <td><?php if($_SESSION['username']==$res->username) { ?>
                 		<a href="#" style="text-decoration:none">
                      <?php } else { ?>  
                        <a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $res->username; ?>');">
                <?php } ?>      
                <?php echo $res->username;  ?>
                        </a>
                  </td>
            </tr>
			<?php 	
										 
			} // end foreach loop
		} // end if condition
		?>	  	  	
			
		</tbody>
	</table>
    
 </div>

 