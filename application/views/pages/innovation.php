<?php
	session_start(); // This is need.Otherwise not getting your name in the chat box.
	$_SESSION['username'] = $this->session->userdata('username'); // Must be already set
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Devins Lanka</title>

<head>
	<style type ="text/css">
.gallery-background {

    background-image: url("<?php echo base_url();?>img/innovation.png");
   

</style>
</head>
<body class="gallery-background">
	
</body>

</html>