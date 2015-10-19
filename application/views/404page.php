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
    <body>
        <div style="float:left">
           
               <section class="content">
         <aside class="main-sidebar">

               <section class="content">
          <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
              <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
              </p>
              <form class="search-form">
                <div class="input-group">
                  
                  
                </div><!-- /.input-group -->
              </form>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section>

            
            </aside>
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
