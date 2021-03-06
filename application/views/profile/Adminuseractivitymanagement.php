<html>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin User Control</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/AdminLTE.min.css">
    </head>

    <body class="skin-blue sidebar-mini">    <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/skins/_all-skins.min.css">

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!--[endif]---->


        <div class="wrapper">

            <aside class="main-sidebar">

                <section style="height:500px;" class="sidebar">

                    <div class="user-panel">


                    </div>

                    <form action="#" method="get" class="sidebar-form">

                    </form>


                    <ul class="sidebar-menu">

                        <li class="treeview ">
                            <a href="<?php echo base_url() ?>index.php/ProfileControllers/SessionDetailCaller?page=usermanage">
                                <i class="fa fa-dashboard"></i> <span>User Data</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview active">
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

            </aside>
            <div style="min-height: 3688px;" class="content-wrapper">
                <!-- Content Header (Page header) -->



                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">

                                <div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_wrapper form-inline dt-bootstrap" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="example2_wrapper"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

                                                                                                        <select name="shirts">
                                                                                                            <option value="small">1</option>
                                                                                                            <option value="med">2</option>
                                                                                                            <option value="large" selected="selected">3</option>
                                                                                                            <option value="xlarge">4</option>
                                                                                                        </select>
                                                                                                        <table aria-describedby="example2_info" role="grid" id="example2" class="table table-bordered table-hover dataTable no-footer">
                                                                                                            <thead>
                                                                                                                <tr role="row"><th aria-sort="ascending"  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting_asc">IP Address</th><th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Session ID</th><th aria-label="Logged Out Time: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Username</th><th aria-label="Session ID: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Login Time</th><th aria-label="IP Address: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Logout Time</th><th aria-label="IP Address: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">User Agent</th><th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Actions</th></tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <?php foreach ($query as $row) { ?>

                                                                                                                    <tr class="odd" role="row">

                                                                                                                        <td><?php print $row->ip_address; ?></td>

                                                                                                                        <td><?php print $row->session_id; ?></td>
                                                                                                                        <td class="sorting_1">

                                                                                                                            <?php print $row->username; ?>
                                                                                                                        </td>
                                                                                                                        <td><?php print $row->session_start; ?></td>
                                                                                                                        <td><?php print $row->session_end; ?></td>
                                                                                                                        <td class="sorting_1"><?php print $row->user_agent; ?></td>

                                                                                                                    <?php } ?>
                                                                                                                    <td>
                                                                                                                        <div class="social_single">
                                                                                                                            <ul>
                                                                                                                                <li>

                                                                                                                                    <div class="buttonaction">
                                                                                                                                        <a>
                                                                                                                                            <input type="submit" value= "Delete" title="Remove" name="deleteclient">
                                                                                                                                            <input type="hidden" value=""  name="hidden">
                                                                                                                                        </a>

                                                                                                                                        <a>
                                                                                                                                            <input type="submit" value= "" title="Remove" name="deleteclient">
                                                                                                                                            <input type="hidden" value=""  name="hidden">
                                                                                                                                        </a>
                                                                                                                                    </div>

                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>

                                                                                                        </table></div></div></div></div></div><div class="row"><div class="col-sm-5"><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example2" href="#">1</a></li><li id="example2_next" class="paginate_button next disabled"><a tabindex="0" data-dt-idx="2" aria-controls="example2" href="#">Next</a></li></ul></div></div></div></div></div></div></div></div></div></div></div></div><div class="row"></div></div></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"><div id="example2_paginate" class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li id="example2_previous" class="paginate_button previous disabled"><a tabindex="0" data-dt-idx="0" aria-controls="example2" href="#">Previous</a></li><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example2" href="#">1</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="2" aria-controls="example2" href="#">2</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="3" aria-controls="example2" href="#">3</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="4" aria-controls="example2" href="#">4</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="5" aria-controls="example2" href="#">5</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="6" aria-controls="example2" href="#">6</a></li><li id="example2_next" class="paginate_button next"><a tabindex="0" data-dt-idx="7" aria-controls="example2" href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>

                        <div class="box">

                        </div>
                    </div>


                    <div style="position: fixed; height: auto;" class="control-sidebar-bg"></div>
                </section></div>


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