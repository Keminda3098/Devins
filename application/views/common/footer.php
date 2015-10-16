<!DOCTYPE HTML>
<html>
   <head>
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/form.css">
      <link rel="stylesheet" type="text/css" href="../css/etalage.css">
      <link rel="stylesheet" type="text/css" href="../css/megamenu.css">
      <script src="<?php echo base_url();?>product_design_css/js/bootstrap-colorpicker.js"></script>
      <script src="<?php echo base_url();?>product_design_css/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>product_design_css/js/masked_input.js"></script>
      <script src="<?php echo base_url();?>product_design_css/js/custom.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
      <script type="text/javascript">
          $(document).ready(function () {
              $(".dropdown img.flag").addClass("flagvisibility");

              $(".dropdown dt a").click(function () {
                  $(".dropdown dd ul").toggle();
              });

              $(".dropdown dd ul li a").click(function () {
                  var text = $(this).html();
                  $(".dropdown dt a span").html(text);
                  $(".dropdown dd ul").hide();
                  $("#result").html("Selected value is: " + getSelectedValue("sample"));
              });

              function getSelectedValue(id) {
                  return $("#" + id).find("dt a span.value").html();
              }


              $(document).bind('click', function (e) {
                  var $clicked = $(e.target);
                  if (!$clicked.parents().hasClass("dropdown"))
                      $(".dropdown dd ul").hide();
              });

              $("#flagSwitcher").click(function () {
                  $(".dropdown img.flag").toggleClass("flagvisibility");
              });
          });
      </script>
      <!-- start menu -->
      <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
      <script type="text/javascript" src="js/megamenu.js"></script>
      <script>
          $(document).ready(function () {
              $(".megamenu").megamenu();
          });
      </script>
      <!-- end menu -->
      <!-- top scrolling -->
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
          jQuery(document).ready(function ($) {
              $(".scroll").click(function (event) {
                  event.preventDefault();
                  $('html,body').animate({
                      scrollTop: $(this.hash).offset().top
                  }, 1200);
              });
          });
      </script>
   </head>
   <body>
      <div class="wrap">
         <div class="col_1_of_middle span_1_of_middle">
         </div>
         <div class="clear"></div>
      </div>
      </br>
      <div class="footer-bottom">
         <div class="wrap">
            <div class="section group">
               <div class="col_1_of_5 span_1_of_5">
                  <ul class="sub_list">
                     </br>
                     <h4 class="m_10">Promotional Product</h4>
                     <li>
                        <a href="">Promotional Wear/Uniforms</a>
                     </li>
                     <li>
                        <a href="">Promotional Product</a>
                     </li>
                     <li>
                        <a href="">Tailor-made Promotions</a>
                     </li>
                  </ul>
                  <ul class="sub_list">
                     </br>
                     <h4 class="m_10">Advertising</h4>
                     <li>
                        <a href="">Advertising Solutions</a>
                     </li>
                  </ul>
                  <ul class="sub_list">
                     <h4 class="m_10">Hotel Products</h4>
                     <li>
                        <a href="">Hotel Products</a>
                     </li>
                  </ul>
               </div>
               <div class="col_1_of_5 span_1_of_5" style="width: 200px">
                  <ul class="sub_list">
                     </br>
                     <h4 class="m_10">Online Store</h4>
                     <li>
                        <a href="">Online Store</a>
                     </li>
                  </ul>
                  <ul class="sub_list">
                     <h4 class="m_10">Fashion</h4>
                     <li>
                        <a href="">Fashion</a>
                     </li>
                  </ul>
                  <ul class="sub_list">
                     <h4 class="m_10">Innovation</h4>
                     <li>
                        <a href="">Innovation</a>
                     </li>
                  </ul>
                  </ul>
               </div>
               <div class="col_1_of_5 span_1_of_5" style="margin-left: 0%;font-size: 18px;margin-top: 7px;width: 350px">
                  <ul class="main_sub_list">
                     </br>
                     <li>
                        <a href="">Home</a>
                     </li>
                  </ul>
                  <ul class="main_sub_list">
                     <li>
                        <a href="">About Us</a>
                     </li>
                  </ul>
                  <ul class="main_sub_list">
                     <li>
                        <a href="">Site Map</a>
                     </li>
                  </ul>
                  <ul class="main_sub_list">
                     <li>
                        <a href="">Future Plans</a>
                     </li>
                  </ul>
               </div>
               <div style="width: 350px; height: 240px; float: left">
                  </br>
                  <h3 class="contactus" style="font-size: 22px; font-weight: bold">Contact Us</h3>
                  <pre style="font-size: 14px;color:#fff;padding-top: 4px">
 Address			: Devins Lanka, Negambo.
 Email Address 		: devinslanka@gmail.com
 Phone Number 		: +94113456789
 Mobile Number		: +94773456789
</pre>
                  </br>
                  <div class="social_single">
                     <ul>
                        <li class="fb">
                           <a href="https://www.facebook.com"><span> </span></a>
                        </li>
                        <li class="tw">
                           <a href="https://twitter.com"><span> </span></a>
                        </li>
                        <li class="g_plus">
                           <a href="https://plus.google.com/"><span> </span></a>
                        </li>
                        <li class="mail">
                           <a href="https://www.gmail.com/"><span> </span></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
      </div>
      <div class="copy">
         <div class="wrap">
            <p>
               Copyright © 2015 Devins Lanka. All Rights Reserved.<a href=""> </a>
            </p>
         </div>
      </div>
      <script type="text/javascript">
          $(document).ready(function () {

              var defaults = {
                  containerID: 'toTop', // fading element id
                  containerHoverID: 'toTopHover', // fading element hover id
                  scrollSpeed: 1200,
                  easingType: 'linear'
              };

              $().UItoTop({
                  easingType: 'easeOutQuart'
              });

          });
      </script>
      <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
   </body>
</html>