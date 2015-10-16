<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/datepicker.css">
        <link href="<?php echo base_url(); ?>product_design_css/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>product_design_css/js/fileinput.min.js" type="text/javascript"></script>
        <script src="../js/fileinput_locale_es.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>product_design_css/css/colorpicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>product_design_css/css/bootstrap.min.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>product_design_css/fabric/lib/fabric.js"></script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#datepicker").datepicker();
            });
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "c6a110d8-110a-4565-bb7d-0bdb8c67a863"});</script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

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




        <style type="text/css">

            .div-left{
                float:left;
                padding-left:10px;
            }
            .div-right{
                float:right;
                padding-right:10px;
            }

            .div-middle{
                float:center;

            }
        </style>	

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
        <?php echo form_open('Designrequestemailer'); ?>
        <table style="width:830px; margin-left:10px " >
            <tr>
                <td height="28">&nbsp;</td>
                <td ></td><td ></td>
            </tr>

            <tr>
                <td  scope="row" style="font-size: 12px;">User</td>
                <td height="28"><input type="text"  name="user" value ="<?php echo $selectuser ?>" readonly>  </td>
                <td><div class="error"><?php echo form_error('user'); ?></div></td></tr> 
            <?php foreach ($emailgot as $row) { ?>
                <tr>
                    <td scope="row" style="font-size: 12px; "> Email</td>
                    <td width="300"><input type="text" name="uname"  value ="<?php echo $row->email ?>" readonly />
                    </td><td>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td  scope="row" style="font-size: 12px">Subject</td>
                <td width="300"><input type="text" name="submitsubj"  value ="" /> </td>
                <td> </div>
                </td>
            </tr>

            <tr>
                <td  style="font-size: 12px;"  >Description</td>
                <td ><textarea name="textdescrpt"  value ="<?php echo set_value('textdescrpt') ?>" width="480px" height="500px"> </textarea></td>
                <td><div class="error"><?php echo form_error('textdescrpt'); ?></div>
                </td>
            </tr>
            <tr><td ></td>
                <td ></td>
                <td ></td>
            </tr>
            <tr><td ></td>
                <td scope="row">
                    <input type="submit" name="submitsubj" value="Submit" class="btn btn-success"></td>
                <td >

                    <img id="uploadPreview1" src= "<?php echo $url ?>" width="400px" height="400px"/>
                </td> </tr>

        </table>

        <?php echo form_close(); ?>
   

</body>
</html>
