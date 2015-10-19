<?php
$_SESSION['username'] = $this->session->userdata('username');
$username = $_SESSION['username']; // Must be already set
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/AdminLTE.min.css">
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

                        <li class="treeview active">
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
                 
              
<div style="min-height:1096px;" class="content-wrapper">
       <div class="content body">
           <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="" >
                  <h3 class="profile-username text-center">Keminda Samaraweera</h3>
                  <p class="text-muted text-center"></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                     
                    </li>
                    <li class="list-group-item">
                    
                    </li>
                    <li class="list-group-item">
                     
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Upload Image</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i></strong>
                  <p class="text-muted">
                   
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> </strong>
                  <p class="text-muted">a</p>

                  <hr>

                

                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  <p></p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
               
                <div class="tab-content">
                  <div class="active tab-pane" id="maininfo">
             
     
                    
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputfName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" placeholder="First Name" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputlName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" placeholder="Last Name" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputuName" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" placeholder="Username" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Address"></textarea>
                        </div>
                      </div>
                         <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputName" placeholder="Experience"></textarea>
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" placeholder="Skills" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

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
