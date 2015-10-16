<!DOCTYPE HTML>
<html>
   <head>
      <title>Devins Lanka</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/form.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/etalage.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/megamenu.css">
   </head>
   <body>
      <div class="index-banner">
         <div class="wmuSlider example1" style="height: 438px;">
            <div class="wmuSliderWrapper">
               <?php foreach($query1 as $row) { ?>
               <article style="position: relative; width: 100%; opacity: 0;">
                  <div class="banner-wrap">
                     <div class="slider-left">
                        <img src="<?php print $row -> s_Url; ?>" alt="">
                     </div>
                     <div class="slider-right">
                        <h1><?php print $row -> s_Bname; ?></h1>
                        <h2><?php print $row -> s_Sname; ?></h2>
                        <p>
                           <?php print $row -> s_Description; ?>
                        </p>
                     </div>
                     <div class="clear"></div>
                  </div>
               </article>
               <?php } ?> 
            </div>
         </div>
         <script src="<?php echo base_url(); ?>js/jquery.wmuSlider.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.min.js"></script>
         <script>
            $('.example1').wmuSlider();
         </script>
      </div>
      <div class="footer-middle">
         <div class="wrap">
            <div class="content-bottom">
               <div class="box1">
                  <div class="col_1_of_3 span_1_of_3" style="height: 427px">
                     <a>
                        <div class="view view-fifth">
                           <div class="top_box">
                              <h3 class="m_1"></h3>
                              <p class="m_2"></p>
                              <div class="grid_img">
                                 <div class="css3"> <img src="<?php echo base_url(); ?>images/tshirtsmall.png">
                                 </div>
                              </div>
                              <div style="color: #ffffff; font-size:14px; font-family:Verdana"></br> Design your own product online. Draw it on your own or draw it on our given templates. After you draw it, send your design to us. </div>
                           </div>
                        </div>
                     </a>
                     <ul class="list" style="left: 25%; position: relative;">
                        <li>
                           <a> <img alt="" src="images/designonline.png" style="margin: 0 0 0 6%"> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a class="active-icon c1" href="<?php echo base_url()?>index.php?page=choose">Online Design </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <div class="clear"></div>
                  </div>
                  <div class="col_1_of_3 span_1_of_3" style="height: 427px">
                     <a>
                        <div class="view view-fifth">
                           <div class="top_box">
                              <h3 class="m_1"></h3>
                              <p class="m_2"></p>
                              <div class="grid_img">
                                 <div class="css3"> <img src="<?php echo base_url(); ?>images/iBookAuthor-icon.png">
                                 </div>
                              </div>
                              <div style="color: #ffffff; font-size:14px; font-family:Verdana"></br> Upload your own Designed Product. Send us the details of your product design and a price. We will consider and reply you soon.
                              </div>
                           </div>
                        </div>
                     </a>
                     <ul class="list" style="left: 25%; position: relative;">
                        <li>
                           <a> <img alt="" src="images/upload.png" style="margin: 0 0 0 5%"> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a class="active-icon c1" href="<?php echo base_url()?>index.php?page=ud">Upload Design</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <div class="clear"></div>
                  </div>
                  <div class="col_1_of_3 span_1_of_3" style="height: 427px">
                     <a>
                        <div class="view view-fifth">
                           <div class="top_box">
                              <h3 class="m_1"></h3>
                              <p class="m_2"></p>
                              <div class="grid_img">
                                 <div class="css3"> <img src="<?php echo base_url(); ?>images/New-icon.png">
                                 </div>
                              </div>
                              <div style="color: #ffffff; font-size:14px; font-family:Verdana"></br> Check our Newest Products. We like to bring you the latest products in the market & amazing designs for a good price.
                              </div>
                           </div>
                        </div>
                     </a>
                     <ul class="list" style="left: 25%; position: relative;">
                        <li>
                           <a> <img alt="" src="images/new.png" style="margin: 0 0 0 5%"> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a class="active-icon c1" href="#">New Products</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
      <div class="main">
         <div class="wrap">
            <div class="content-bottom">
               <?php 
                  $count = 0;
                  foreach($query as $row) { $count++; ?>
               <?php if($count == 1){ ?>
               <div class="box1">
                  <?php } ?>
                  <div class="col_1_of_3 span_1_of_3">
                     <a>
                        <div class="view view-fifth">
                           <div class="top_box">
                              <h3 class="m_1"><?php print $row -> p_Name; ?></h3>
                              <p class="m_2"><?php print $row -> p_Description; ?></p>
                              <div class="grid_img">
                                 <div class="css3"><img src="<?php echo base_url();?><?php print $row -> p_Url; ?>"  height="168px">
                                 </div>
                              </div>
                              <div class="price">Rs. <?php print $row -> p_Price; ?></div>
                           </div>
                        </div>
                        <?php echo form_open(''); ?>
                        <span class="rating">
                        <input type="hidden" value=<?php print $row -> p_Id; ?>  name="hidden">		
                        <input type="submit" id="rating-input-1" name="rating-input-1" class="button-rating" value=" ">
                        <input type="submit" id="rating-input-2" name="rating-input-2" class="button-rating" value=" ">
                        <input type="submit" id="rating-input-3" name="rating-input-3" class="button-rating" value=" ">
                        <input type="submit" id="rating-input-4" name="rating-input-4" class="button-rating" value=" ">
                        <input type="submit" id="rating-input-5" name="rating-input-5" class="button-rating" value=" ">
                        (<?php print $row -> p_Rating; ?>)
                        </span>
                     </a>
                     <ul class="list">
                        <li>
                           <a> <img src="images/plus.png" alt=""> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a class="active-icon c1">Order </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <?php echo form_close(); ?>
                     <div class="clear"></div>
                  </div>
                  <?php
                     if($count==3)
                     {$count = 0;?>
               </div>
               <?php } ?>
               <?php
                  echo form_hidden('View', 'ViewAll');
                  echo form_hidden('p_ID', $row -> p_Id);
                  ?>
               <?php	} ?> 
               <div class="clear"></div>
            </div>
         </div>
      </div>
   </body>
</html>