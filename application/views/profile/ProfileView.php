<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> User Profile</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php $this->load->helper('date'); ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/AdminLTE.min.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/skins/_all-skins.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    </head>
   
       
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
    <body class="skin-blue sidebar-mini">
        <div style="float:left">
            <aside class="main-sidebar">

                <section style="height:500px;" class="sidebar">

                    <div class="user-panel">


                    </div>

                    <form action="#" method="get" class="sidebar-form">

                    </form>


                    <ul class="sidebar-menu">

                        <li class="treeview ">
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=customprof">
                                <i class="fa fa-dashboard"></i> <span>Profile</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=paymentsprof">
                                <i class="fa fa-files-o"></i>
                                <span>Payments</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>

                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=editprofile">
                                <i class="fa fa-th"></i> <span>Update Profile</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">


                        </li>



                        <li>
                             <a href="<?php echo base_url() ?>index.php/ProfileControllers/ProfileUrlCaller?page=usermailbox">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>





                        <li></li>
                    </ul>
                </section>

            </aside>
        </div>
          <?php foreach ($query2 as $row) { ?>
             <div style="min-height:700px;" class="content-wrapper">
                <div class="content body">
                    <section class="content">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() . '/' . $row->profilepicurl; ?>" >
                                        <h3 class="profile-username text-center"><?php print $row->fname . ' ' . $row->lname; ?> </h3>
                                        <p class="text-muted text-center"></p>
                                        
                                    </div>
                                </div>


                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">About Me</h3>
                                    </div>
                                    <div class="box-body">
                                        <strong>Update Your Profile to Add Something about Your Self</strong>
                                        <p class="text-muted">
                                        </p>


                                    </div>
                                </div>

                            </div>
                             <div style="font-size: 20px" > Hello <?php print $row->fname . ' ' . $row->lname; ?> </div>
                             </br>
                            <div class="col-md-9">
                                <div class="nav-tabs-custom">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="maininfo">
                                            <div class="tab-pane" id="settings">
                                                <form class="form-horizontal">
                                                    
                                                   
                                          
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-sm-2 ">First Name</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->fname; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputlName" class="col-sm-2 ">Last Name</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->lname; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputuName" class="col-sm-2 ">Username</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->username; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputExperience" class="col-sm-2 ">Address</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->address; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputExperience" class="col-sm-2">Age</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->age; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputExperience" class="col-sm-2">Mobile</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->mob; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputExperience" class="col-sm-2">Email</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->email; ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputSkills" class="col-sm-2 ">Country</label>
                                                        <div class="col-sm-10">
                                                            <?php print $row->country; ?>
                                                        </div>
                                                    </div><?php } ?>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
            </div>
        </section>

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
