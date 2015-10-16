<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/etalage.css">
        <link rel="stylesheet" type="text/css" href="css/megamenu.css">
        <title>Devins Lanka Advertising</title>

        <style>
            .hovernormal {
                background: #FFFFFF;
            }
            .hoverhighlight {
                background-color: #71bee4;
            }



        </style>


        <script src="js/sweetalert.min.js"></script>
        <script>
            function submitA() {
                swal({title: "Order palced successfully!",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    closeOnConfirm: false},
                function () {
                    document.getElementById("hiddenA").click();
                });
            }

            function submitR() {
                swal({title: 'Order Rejected!',
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    closeOnConfirm: false},
                function () {
                    document.getElementById("rjctreqst").click();
                });
            }
        </script>
    </head>

    <body>
        <div>
            <div class="wrap">
                <div class="rsidebar span_1_of_left" style="height: 400px">
                    <section class="sky-form">
                        <div style="overflow: hidden; padding: 0px;" class="row row1 scroll-pane">

                            <div style="height: 700px;" class="jspContainer">
                                <div style="padding: 4px; top: 0px; left: 0px;" class="jspPane">
                                    <div class="col col-4">
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php/adminView">
                                            <input name="feedbackinfo" value="Feedback Information" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=productinfo">
                                            <input name="productinfo" value="Product Information" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=clientinfo">
                                            <input name="clientinfo" value="Client Information" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=sliderinfo">
                                            <input name="online_users" value="View online Users" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=chat">
                                            <input name="chat" value="chat" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=orderinfo">
                                            <input name="orderinfo" value="Order Information" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="http://localhost/devinsnew/index.php?page=innovationadmin">
                                            <input name="orderinfo" value="Innovations" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url(); ?>/index.php?page=sliderinfo">
                                            <input name="sliderinfo" value="Update Image Slider" type="submit">
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="buttonside">
                                        <a href="<?php echo base_url() ?>index.php/DesignControllers/DesignControllersUrlCaller?page=admindesign">
                                            <input name="clientinfo" value="Design Requests" type="submit">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="cont span_2_of_3"style="padding-top: 24px">
                    <h4 class="title">Design Requests</h4>
                    <table style="width:100%; font-size: 12px">
                        <tr style="text-align: left ; font-weight: bold; font-size: 13px; padding: 5px;border-bottom: 2px solid #5F5D5D; border-collapse: collapse;">
                            <th style="padding: 10px">ID</th>
                            <th style="padding: 10px">Username</th>
                            <th style="padding: 10px">Date</th>
                            <th style="padding: 10px">URL</th>
                            <th style="padding: 10px">Amount</th>
                            <th style="padding: 10px">Price</th>
                            <th style="padding: 10px">Mobile</th>
                            <th style="padding: 10px">Description</th>
                            <th style="padding: 10px"> Type</th>
                            <th style="padding: 10px">Action</th>
                        </tr>
                        <?php foreach ($query as $row) { ?>
                            <tr onMouseOver="this.className = 'hoverhighlight'" onMouseOut="this.className = 'hovernormal'">
                                <td style="padding: 5px"><?php print $row->designid; ?></td>
                                <td style="padding: 5px"><?php print $row->username; ?></td>
                                <td style="padding: 5px"><?php print $row->exdate; ?></td>
                                <td style="padding: 5px"><?php print $row->urlp; ?></td>
                                <td style="padding: 5px"><?php print $row->examount; ?></td>
                                <td style="padding: 5px"><?php print $row->exprice; ?></td>
                                <td style="padding: 5px"><?php print $row->exmobile; ?></td>
                                <td style="padding: 5px"><?php print $row->exdescrpt; ?></td>
                                <td style="padding: 5px"><?php print $row->designtype; ?></td>
                                <td style="padding: 5px">
                                    <div class="social_single">
                                        <ul>
                                            <li>

                                                <div class="buttonaction">
                                                    <a><?php echo form_open('Acceptrejectdesign'); ?>
                                                        <input type="submit" value= "Accept" title="Accept" name="acpptrequst">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidden1">
                                                        <input type="hidden" value=<?php print $row->username; ?>  name="hiduser">
                                                        <input type="hidden" value=<?php print $row->urlp; ?>      name="hidurl">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Acceptrejectdesign'); ?>
                                                        <input type="submit" value= "Reject" title="Reject" name="rjctreqst" onclick="submitR()">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidden2">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Downloadrqstcntlr/download'); ?>
                                                        <input type="submit" value= "Download" title="Download" name="downloadreqst">

                                                        <input type="hidden" value=<?php print $row->urlp; ?>  name="hiddendownload">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Sendingtoinnovations'); ?>
                                                        <input type="submit" value= "Send to Innovations" title="innosend" name="innosend">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidid">
                                                        <input type="hidden" value=<?php print $row->username; ?>  name="hiduser">
                                                        <input type="hidden" value=<?php print $row->urlp; ?>  name="hidurl">
                                                        <input type="hidden" value=<?php print $row->exprice; ?> name="hidprice">
                                                    </a>
                                                    <?php echo form_close(); ?>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?> 
                    </table>
                    <div class="clear"></div>


                    <h4 class="title">Online Design Requests</h4>
                    <table style="width:100%; font-size: 12px">
                        <tr style="text-align: left ; font-weight: bold; font-size: 13px; padding: 5px;border-bottom: 2px solid #5F5D5D; border-collapse: collapse;">
                            <th style="padding: 10px">ID</th>
                            <th style="padding: 10px">Username</th>
                            <th style="padding: 10px">Date</th>
                            <th style="padding: 10px">URL</th>
                            <th style="padding: 10px">Amount</th>
                            <th style="padding: 10px">Price</th>
                            <th style="padding: 10px">Mobile</th>
                            <th style="padding: 10px">Description</th>
                            <th style="padding: 10px"> Type</th>
                            <th style="padding: 10px">Action</th>
                        </tr>
                        <?php foreach ($query as $row) { ?>
                            <tr onMouseOver="this.className = 'hoverhighlight'" onMouseOut="this.className = 'hovernormal'">
                                <td style="padding: 5px"><?php print $row->designid; ?></td>
                                <td style="padding: 5px"><?php print $row->username; ?></td>
                                <td style="padding: 5px"><?php print $row->exdate; ?></td>
                                <td style="padding: 5px"><?php print $row->urlp; ?></td>
                                <td style="padding: 5px"><?php print $row->examount; ?></td>
                                <td style="padding: 5px"><?php print $row->exprice; ?></td>
                                <td style="padding: 5px"><?php print $row->exmobile; ?></td>
                                <td style="padding: 5px"><?php print $row->exdescrpt; ?></td>
                                <td style="padding: 5px"><?php print $row->designtype; ?></td>
                                <td style="padding: 5px">



                                    <div class="row text-center">
                                        <div class="col-lg-12">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#">&laquo;</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">1</a>
                                                </li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">4</a>
                                                </li>
                                                <li>
                                                    <a href="#">5</a>
                                                </li>
                                                <li>
                                                    <a href="#">&raquo;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                    <div class="social_single">
                                        <ul>
                                            <li>

                                                <div class="buttonaction">
                                                    <a><?php echo form_open('Acceptrejectdesign'); ?>
                                                        <input type="submit" value= "Accept" title="Accept" name="acpptrequst">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidden1">
                                                        <input type="hidden" value=<?php print $row->username; ?>  name="hiduser">
                                                        <input type="hidden" value=<?php print $row->urlp; ?>      name="hidurl">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Acceptrejectdesign'); ?>
                                                        <input type="submit" value= "Reject" title="Reject" name="rjctreqst" onclick="submitR()">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidden2">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Downloadrqstcntlr/download'); ?>
                                                        <input type="submit" value= "Download" title="Download" name="downloadreqst">

                                                        <input type="hidden" value=<?php print $row->urlp; ?>  name="hiddendownload">
                                                    </a><?php echo form_close(); ?>
                                                    <a><?php echo form_open('Sendingtoinnovations'); ?>
                                                        <input type="submit" value= "Send to Innovations" title="innosend" name="innosend">

                                                        <input type="hidden" value=<?php print $row->designid; ?>  name="hidid">
                                                        <input type="hidden" value=<?php print $row->username; ?>  name="hiduser">
                                                        <input type="hidden" value=<?php print $row->urlp; ?>  name="hidurl">
                                                        <input type="hidden" value=<?php print $row->exprice; ?> name="hidprice">
                                                    </a>
                                                    <?php echo form_close(); ?>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?> 
                    </table>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </body>
</html>
