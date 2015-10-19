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
                            <a href="../mailbox/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>





                        <li></li>
                    </ul>
                </section>

            </aside>
        </div>
        <div style="min-height:700px;" class="content-wrapper">
        <div class="content body">

                   
                    <section class="content">
 <?php foreach ($query as $row) { ?>
          <div class="row">
            <!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  
                  <li class="active"></li>
                  <li></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#"></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description"></span>
                      </div><!-- /.user-block -->
                      <p>
                       
                      </p>
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" placeholder="Type a comment" type="text">
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#"></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description"></span>
                      </div><!-- /.user-block -->
                      <p>
                      
                      </p>

                      <form class="form-horizontal">
                        <div class="form-group margin-bottom-none">
                          <div class="col-sm-9">
                            <input class="form-control input-sm" placeholder="Response">
                          </div>                          
                          <div class="col-sm-3">
                            <button class="btn btn-danger pull-right btn-block btn-sm"></button>
                          </div>                          
                        </div>                        
                      </form>
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#"></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description"></span>
                      </div><!-- /.user-block -->
                   

                      <ul class="list-inline">
                        
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> </a></li>
                      </ul>

                      <input class="form-control input-sm" placeholder="Type a comment" type="text">
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane active" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-green">
                         <?php print $row->OrderedDate; ?>
                        </span>
                      </li>
                     
                      <li>
                        <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> </span>
                          <h3 class="timeline-header">You Purchased <?php print $row->Name;?> </h3>
                          <div class="timeline-body">
                          
                          </div>
                          <div class="timeline-footer">
                         
                             <div class="timeline-footer">
                             Category : <?php print $row->Cat;?>
                          </div> 
                               <div class="timeline-footer">
                             Quantity : <?php print $row->Qty;?>
                          </div> 
                         
                        </div>
                      </li>
                   
                  
                    
 <!- <?php }?>
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
                    </div>
                    </form>
                  </div><!-- /.tab-pane -->
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
