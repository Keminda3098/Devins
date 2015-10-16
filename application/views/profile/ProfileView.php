<?php
$_SESSION['username'] = $this->session->userdata('username');
$username = $_SESSION['username']; // Must be already set
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link id="bootstrap-style" href="<?php echo base_url(); ?>profile_css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>profile_css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url(); ?>profile_css/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url(); ?>profile_css/style-responsive.css" rel="stylesheet">

        <script>
            $(document).ready(function () {
                $("#datepicker").datepicker();
            });
        </script>

        <script type="text/javascript">
            function PreviewImage(no) {

                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage" + no).files[0]);
                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview" + no).src = oFREvent.target.result;
                };
            }
        </script> 
        <script type="text/javascript">
            $(document).ready(function () {
                $("#datepicker").datepicker();
            });
            $(function () {
                $("#datepicker").datepicker();
//Pass the user selected date format
                $("#format").change(function () {
                    $("#datepicker").datepicker("option", "dateFormat", $(this).val());
                });
            });

            change(val) {
                document.scriptform.action = "<?php echo base_url(); ?>/index.php?page=" + val;

            }</script>



        <style type="text/css" scoped>

            .error {
                font-family: verdana, arial;
                color: #D41313;
                font-size: 0.70em;
                text-align: left;
            }

            .noterror {
                font-family: verdana, arial;
                color: green;
                font-size: 0.70em;
                text-align: left;
            }
        </style>					

    </head>
    <body Style="font-family: Verdana">

        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">

                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Profile &nbsp; <span class="badge">5</span></span></a></li>	
                            <li><a href="<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=messege"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
                            <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Security</span></a></li>
                            <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet">Requests</span></a></li>
                            <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Purchases</span></a></li>


                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>

                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">


                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>

                            <i class="icon-angle-right"></i>
                        </li>
                        <li>Profile</li>
                    </ul>

                    <!-- start: Content -->
                    <table style=" width:930px;text-align: left;height:230px; background-color:#0EB1C5" >
                        <tr>
                            <th width = "30px"></th>
                            <th >
                        <table  >  
                            <?php foreach ($query as $row) { ?>

                                <tr style="height:70px;">
                                    <td style="color: #FFF; width:400px; ">User Name</td>
                                    <td style="color: #FFF; width:400px;"><?php print $row->username; ?></td>
                                    <td></td></tr> 

                                <tr style=  "height:70px;">
                                    <td style="color: #FFF; width:400px; font-family: Verdana " >First Name</td>
                                    <td style="color: #FFF; width:400px;">
                                        <?php print $row->fname; ?>

                                    </td><td ></td>
                                </tr>
                                <tr style="height:70px;">
                                    <td style="color: #FFF;  width:400px; font-family: Verdana">Last name</td>
                                    <td style="color: #FFF; width:400px;"><?php print $row->lname; ?>
                                    </td><td>
                                    </td>
                                </tr>
                                <tr style="height:70px;">
                                    <td style="color: #FFF;  width:400px;font-family: Verdana ">Email </td>
                                    <td style="color: #FFF; width:400px;">
                                        <?php print $row->email; ?>  </td>
                                    <td width="329"> 
                                    </td>
                                </tr>   <?php } ?>
                        </table>
                        </th>
                        <th>

                        <table>


                            <tr style="height:70px;">
                                <td style="color: #FFF;  width:400px; font-family: Verdana" >Age</td>
                                <td width="300">
                                    <?php print $row->age; ?>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td  style="color: #FFF;  width:400px; font-family: Verdana" >Address</td>

                            </td><td>
                            <?php print $row->address; ?>
                        </td>
                    </tr>



                </table>




                </th>

                <th>


                    <span class="btn btn-default btn-file">
                        <input id="uploadImage1" type="file" name="userfile" onchange="PreviewImage(1);" />
                    </span>



                    <img id="uploadPreview1" src="http://localhost/devinsnew/templates/yourimage.png" class="img-circle"/>

                </th>
                
               <?php form_open('') ?>
<input type=button class ="btn btn-info" onClick="location.href='<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=editprofile'" value='Edit Details'>
      <?php form_close('') ?>
                </tr>


            </table>

        </div><!--/.fluid-container-->

        <!-- end: Content --> 
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="clearfix"></div>

<footer>

</footer>



<script src="profile_css/js/jquery-1.9.1.min.js"></script>
<script src="profile_css/js/jquery-migrate-1.0.0.min.js"></script>
<script src="profile_css/js/bootstrap.min.js" rel="stylesheet"></script>
<script src="profile_css/js/jquery-ui-1.10.0.custom.min.js"></script>



</body>

</html>
