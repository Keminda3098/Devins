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
    <body>

        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">

                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Profile</span></a></li>	
                            <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
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
                        <li><a href="#">Profile</a></li>
                    </ul>

                    <!-- start: Content -->
                    <table style=" width:830px;text-align: left;height: 630px" >
                        <tr>
                            <th>

                        <table >  
                           <?php foreach ($query as $row) { ?>

                            <tr style="height:70px;">
                                <td  scope="row">User Name</td>
                                <td ><?php print $row->username; ?>
                                        <td></td></tr> 

                            <tr style="height:100px;">
                                <td  width="300" >First Name</td>
                                <td width="300">
                                    <?php print $row->fname; ?>

                                </td><td ></td>
                            </tr>
                            <tr style="height:70px;">
                            <td width="300" heigth = "50px">Last name</td>
                            <td width="300"><?php print $row->lname; ?>
                            </td><td>
                             
                            </td>
                            </tr>

                            <tr style="height:70px;">
                                <td scope="row" >Email </td>
                                <td width="300">
                                 <?php print  $row->email;  ?>  </td>
                                <td width="329"> 
                                </td>
                            </tr>   <?php } ?>
                        </table>
                        </th>
                        <th>

                        <table>
                          

                             <tr style="height:70px;">
                                <td  width="300" >Age</td>
                                <td width="300">
                                 <?php print $row->age;  ?>
                                <td>
                            </td>
                        </tr>
                        <tr>
                            <td  scope="row" >Address</td>
                           
                            </td><td>
<?php print $row->address;  ?>
                            </td>
                        </tr>
                      


                </table>

           
                  
               
                </th>

 <th>
                    
                    
                                                  <span class="btn btn-default btn-file">
                                                         <input id="uploadImage1" type="file" name="userfile" onchange="PreviewImage(1);" />
                                                        </span>
                                                                                                                                         

                                                 
                                                        <img id="uploadPreview1" src="http://localhost/devinsnew/templates/yourimage.png" class="img-rounded"/>
                                                       
                </th>
                </tr>
                
               
            </table>

        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->


<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">Ã—</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="clearfix"></div>

<footer>

</footer>



<script src="profile_css/js/jquery-1.9.1.min.js"></script>
<script src="profile_css/js/jquery-migrate-1.0.0.min.js"></script>
<script src="profile_css/js/bootstrap.min.js" rel="stylesheet"></script>
<script src="profile_css/js/jquery-ui-1.10.0.custom.min.js"></script>



</body>

</html>
