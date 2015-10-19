<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin User Control</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php $this->load->helper('date'); ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/AdminLTE.min.css">
          <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/skins/_all-skins.min.css">

        <?php $this->load->helper('date'); ?>
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
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/SessionDetailCaller?page=usermanage">
                                <i class="fa fa-dashboard"></i> <span>User Data</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/SessionDetailCaller?page=useract">
                                <i class="fa fa-files-o"></i>
                                <span>Online Users</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>

                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Pending Removal</span> <small class="label pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">


                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>On Hold</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

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
      </div>
            </aside>
             <div style="min-height:3700px;" class="content-wrapper">
               <div class="content body">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">

                                <div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div>
                                        <div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
                                            <div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper">
                                                <div class="row"><div class="col-sm-6"></div>
                                                    <div class="col-sm-6"></div>                                                        
                                                </div><div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper">
                                                            <div class="row"><div class="col-sm-6"></div><div class="col-sm-6">

                                                                </div></div><div class="row"><div class="col-sm-12">
                                                                    <div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper">
                                                                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6">

                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="example2_wrapper">
                                                                                    <div class="row"><div class="col-sm-6"></div><div class="col-sm-6">

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="example2_wrapper">
                                                                                                <div class="row"><div class="col-sm-6"></div><div class="col-sm-6">

                                                                                                    </div>

                                                                                                </div>


                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <table aria-describedby="example2_info" role="grid" id="example2" class="table table-bordered table-hover dataTable no-footer">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th aria-sort="ascending"  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting_asc"></th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"> <?php echo form_open_multipart('ProfileControllers/SessionDetailCaller/CallDropDown_Date') ?>  
                                                                                                                        <select name ="selectn1" class="form-control">
                                                                                                                            <?php
                                                                                                                            $datestring = "%Y / %m / %d ";
                                                                                                                            date_default_timezone_set('Asia/Kolkata');

                                                                                                                            foreach ($groups1 as $row1) {
                                                                                                                                $datevalue = mdate($datestring, $row1->session_start);
                                                                                                                                echo '<option value="' . $datevalue . '" name="' . $datevalue . '">' . $datevalue . '</option>';
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <input type="submit" name="submit1" value="Filter"/>

                                                                                                                        </select>
                                                                                                                        <?php echo form_close() ?></th>

                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"><?php echo form_open_multipart('ProfileControllers/SessionDetailCaller/CallDropDown_User') ?>  
                                                                                                                        <select name ="selectn2" class="form-control">
                                                                                                                            <?php
                                                                                                                            foreach ($groups as $row2) {
                                                                                                                                echo '<option value="' . $row2->username . '" name="' . $row2->username . '">' . $row2->username . '</option>';
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <input type="submit" name="submit2" value="Filter"/>

                                                                                                                        </select>
                                                                                                                        <?php form_close() ?>
                                                                                                                    </th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"></th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"></th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"></th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"></th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting"></th>
                                                                                                                </tr>
                                                                                                                </tr>
                                                                                                                <tr role="row">
                                                                                                                    <th aria-sort="ascending"  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting_asc">IP Address</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Date</th>

                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Username</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Login Time</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Logout Time</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">User Agent</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Status</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Actions</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <?php
                                                                                                                $i = 1;
                                                                                                                foreach ($query as $row3) {
                                                                                                                    $i = $i + 1;
                                                                                                                    ?>
                                                                                                                    <tr class="odd" role="row">

                                                                                                                        <td><?php print $row3->ip_address; ?></td>


                                                                                                                        <td><?php
                                                                                                                            print mdate($datestring, $row3->session_start);
                                                                                                                            ?> </td>

                                                                                                                        <td class="sorting_1">

                                                                                                                            <?php
                                                                                                                            if ($row3->username == '') {

                                                                                                                                $this->session->set_userdata('username', 'Guest');
                                                                                                                                print 'Guest';
                                                                                                                            } else {
                                                                                                                                print $row3->username;
                                                                                                                            }
                                                                                                                            ;
                                                                                                                            ?>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <?php
                                                                                                                            $datestring = "%Y / %m / %d - %h:%i %a";
                                                                                                                            date_default_timezone_set('Asia/Kolkata');
                                                                                                                            echo mdate($datestring, $row3->session_start);
                                                                                                                            ?> 
                                                                                                                        </td>
                                                                                                                        <td> <?php
                                                                                                                            if ($row3->session_end == 0) {
                                                                                                                                echo '0';
                                                                                                                            } else {
                                                                                                                                echo mdate($datestring, $row3->session_end);
                                                                                                                            }
                                                                                                                            ?></td>
                                                                                                                        <td class="sorting_1"><?php print $row3->user_agent; ?></td>
                                                                                                                        <td>                                                                                                                     

                                                                                                                            <?php if ($row3->session_end == 0) { ?>
                                                                                                                                <span class="label label-success"><?php print "Online" ?><span>
                                                                                                                                    <?php } ?>

                                                                                                                                    <?php if ($row3->session_end != 0) { ?>
                                                                                                                                        <span class="label label-warning"><?php print "Offline" ?><span>
                                                                                                                                            <?php } ?>
                                                                                                                                            </td>   
                                                                                                                                            <?php
                                                                                                                                            if ($i == 20) {
                                                                                                                                                break;
                                                                                                                                            }
                                                                                                                                            ?>                                                      


                                                                                                                                            <td>
                                                                                                                                                <div class="social_single">
                                                                                                                                                    <ul>

                                                                                                                                                        <div class="buttonaction">
                                                                                                                                                            <a>
                                                                                                                                                                <input type="submit" value= "View Details" title="View Details" name="deleteorder">
                                                                                                                                                            </a> <div class="buttonaction"><a>
                                                                                                                                                                    <input type="submit" value= "Delete Session" title="Delete Session" name="deleteorder">

                                                                                                                                                                </a>
                                                                                                                                                            </div>
                                                                                                                                                    </ul>
                                                                                                                                                </div>
                                                                                                                                            </td>
                                                                                                                                        <?php } ?>
                                                                                                                                        </tr>

                                                                                                                                        </table></div></div><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example2" href="#">1</a></li><li id="example2_next" class="paginate_button next disabled"><a tabindex="0" data-dt-idx="2" aria-controls="example2" href="#">Next</a></li></ul></div></div></div></div></div></div></div></div></div></div></div></div><div class="row"></div></div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"><div id="example2_paginate" class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li id="example2_previous" class="paginate_button previous disabled"><a tabindex="0" data-dt-idx="0" aria-controls="example2" href="#">Previous</a></li><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example2" href="#">1</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="2" aria-controls="example2" href="#">2</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="3" aria-controls="example2" href="#">3</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="4" aria-controls="example2" href="#">4</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="5" aria-controls="example2" href="#">5</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="6" aria-controls="example2" href="#">6</a></li><li id="example2_next" class="paginate_button next"><a tabindex="0" data-dt-idx="7" aria-controls="example2" href="#">Next</a></li></ul></div></div></div></div>
                                                                                                                                        </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="box">

                                                                                                                                        </div>
                                                                                                                                        </div>


                                                                                                                                        <div style="position: fixed; height: auto;" class="control-sidebar-bg"></div>
                                                                                                                                        </section></div></div>


                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/plugins/jQuery/jQuery-2.1.4.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/bootstrap/js/bootstrap.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/plugins/datatables/jquery.dataTables.min.js"></script>
                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/plugins/datatables/dataTables.bootstrap.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/plugins/slimScroll/jquery.slimscroll.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/plugins/fastclick/fastclick.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/dist/js/app.min.js"></script>

                                                                                                                                        <script src="<?php echo base_url(); ?>profile_css/dist/js/demo.js"></script>

                                                                                                                                        <script>
                                                                                                                                            $(function () {
                                                                                                                                                $("#example1").DataTable();
                                                                                                                                                $('#example2').DataTable({
                                                                                                                                                    "paging": true,
                                                                                                                                                    "lengthChange": false,
                                                                                                                                                    "searching": false,
                                                                                                                                                    "ordering": true,
                                                                                                                                                    "info": true,
                                                                                                                                                    "autoWidth": false
                                                                                                                                                });
                                                                                                                                            });
                                                                                                                                        </script>


                                                                                                                                        </div></body></html>