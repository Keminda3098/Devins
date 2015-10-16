<!DOCTYPE html>
<html lang="en">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="<?php echo base_url()?>images/DevinsIcon.png">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/form.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/etalage.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/megamenu.css">
	  <link rel='stylesheet' type='text/css' href='css/myOrderDropDown.css'>
      <script src="<?php echo base_url();?>js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript">
         var switchTo5x = true;
         	$(document).ready(function() {
         		$(".dropdown img.flag").addClass("flagvisibility");
         
         		$(".dropdown dt a").click(function() {
         			$(".dropdown dd ul").toggle();
         		});
         
         		$(".dropdown dd ul li a").click(function() {
         			var text = $(this).html();
         			$(".dropdown dt a span").html(text);
         			$(".dropdown dd ul").hide();
         			$("#result").html("Selected value is: " + getSelectedValue("sample"));
         		});
         
         		function getSelectedValue(id) {
         			return $("#" + id).find("dt a span.value").html();
         		}
         
         
         		$(document).bind('click', function(e) {
         			var $clicked = $(e.target);
         			if (! $clicked.parents().hasClass("dropdown"))
         				$(".dropdown dd ul").hide();
         		});
         
         		$("#flagSwitcher").click(function() {
         			$(".dropdown img.flag").toggleClass("flagvisibility");
         		});
         	});
      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script>
      <script>
         $(document).ready(function() {
         	$(".megamenu").megamenu();
         	$("#scorecard").hide();
         	$("#radiotab").hide();
         });
      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
         	$(".scroll").click(function(event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop : $(this.hash).offset().top
         		}, 1200);
         	});
         });
      </script>
   </head>
   <body>
      <div class="header-top">
         <div class="wrap">
            <div class="logo">
               <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo2.png"  alt=""/></a><br />
            </div>
            <div class="cssmenu">
               <a style="cursor:pointer">
               <img style="margin: 0 0 0 53%;" src="<?php echo base_url()?>images/radio_button.png" alt="" onclick="$('#scorecard').hide();$('#radiotab').slideToggle();">
               </a>			
               
         <div id="radiotab" style="display: none; z-index: 10; position: absolute;">
            <img src="<?php echo base_url()?>images/radioheader.jpg"  alt=""/>
            <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="http://www.surfmusic.de/radio-station/player/jwplayer.js" type="text/javascript"></script>
            <div id="mediaplayer_wrapper" style="position: relative; width: 280px; height: 24px; margin-top: -4px;">
               <object width="100%" height="100%" type="application/x-shockwave-flash" data="http://www.surfmusic.de/radio-station/player/player.swf" bgcolor="#000000" id="mediaplayer" name="mediaplayer" tabindex="0">
                  <param name="allowfullscreen" value="true">
                  <param name="allowscriptaccess" value="always">
                  <param name="seamlesstabbing" value="true">
                  <param name="wmode" value="opaque">
                  <param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.surfmusic.de%2Fradio-station%2Fsun-fm-98-9%2C16431.html&amp;id=mediaplayer&amp;type=sound&amp;autostart=true&amp;file=http%3A%2F%2F37.130.229.188%3A8090%2F%3Bstream.nsv&amp;controlbar.position=bottom">
               </object>
            </div>
            <script type="text/javascript">
               jwplayer('mediaplayer').setup({
               'flashplayer': '',
               'id': 'playerID',
               'width': '200',
               'height': '24',
               'type': 'sound',
               'autostart': 'true',
               'file': '',
               'controlbar': 'bottom'
               });
            </script>
            <a href="" alt"hey">
            <img src="<?php echo base_url()?>images/radiofooter.jpg"  alt=""/>
            </a>
         </div>

               <a style="cursor:pointer">
               <img style="margin: 0 0 0 5%;" src="<?php echo base_url()?>images/cricketscore.png" alt="" onclick="$('#radiotab').hide();$('#scorecard').slideToggle();">
               </a>			
               <div id="scorecard" style="display: none; z-index: 10; position: absolute;">
                  <iframe src="http://batsman.com/widgets/BWLiveScoreV2.aspx"
                     name="MagicIframe" width="315" height="355" scrolling="no"
                     marginheight="0" marginwidth="0" frameborder="0">
                  </iframe>
               </div>
               <ul style="float: right">
               	
               	<?php if($this->session->userdata('username') == null) {?>
                  <li>
                     <a href="http://localhost/Devins/index.php?page=signin">Sign In</a>
                  </li>
                  <li>
                     <a href="http://localhost/Devins/index.php?page=signup">Sign Up</a>
                  </li>
                  <?php  }
                  elseif ($this->session->userdata('username') != null){?>
                  <li>
                     <a> Hello <?php echo $this->session->userdata('username') ?></a>
                  </li>
                  <li>
                     <a href="http://localhost/Devins/index.php?page=logout">Log Out</a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
	    <div class="clear"></div>
         </div>
      </div>
      <div class="header-bottom">
         <div class="wrap">
            <ul class="megamenu skyblue">
               <li class="grid">
                  <a class="color2" href="http://devins.altairsl.us/index.php?page=viewPromotional">Promotional Products</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Promotional Wear/ Uniforms</h4>
                              viewPromotional
                              <ul>
                                 <li>
                                    <a href="http://devins.altairsl.us/index.php?page=promotionalproducts">Promotional T-Shirts</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Sport Wear</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">School Wear</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Office Wear</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Work Wear</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Hospital Wear</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Promotional Products</h4>
                              <ul>
                                 <li>
                                    <a href="shop.html">Bags</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Business Card Folders</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Caps</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Car Sun Shades</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Ceremics</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Electric Items</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Gift Items</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Identification Bands</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Key Tags</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Lanyards</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Organizers</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Paper Weight</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Pen Drives</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Car Sun Shades</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Torch</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Organizers</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Tailor-made Promotion</h4>
                              <ul>
                                 <li>
                                    <a href="shop.html">New Project</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="MyImages/promo_header.png" alt="" align="right"/>
                     </div>
                  </div>
               </li>
               <li class="grid">
                  <a class="color2" href="http://devins.altairsl.us/index.php?page=viewAdvertising">Advertising</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Advertising Solution</h4>
                              <ul>
                                 <li>
                                    <a href="shop.html">Web Sites</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Membership Cards</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">ID Cards</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Leaflets</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Business Cards</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="MyImages/adv_header.jpg" alt="" align="right"/>
                     </div>
                  </div>
               </li>
               <li class="grid">
                  <a class="color2" href="http://devins.altairsl.us/index.php?page=viewHotelProducts">Hotel Products</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Hotel Products</h4>
                              <ul>
                                 <li>
                                    <a href="shop.html">Hotel Wear</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Hotel Linen</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Hotel Signs</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Name Tags</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Tailor Made Items</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="MyImages/hotel_header.png" alt="" align="right"/>
                     </div>
                  </div>
               </li>
               <li class="grid">
                  <a class="color2" href="<?php echo base_url(); ?>index.php?page=online">Online Store</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col1">
                           <div class="h_nav">
                              <h4>Online Store</h4>
                              <ul>
                                 <li>
                                    <a href="shop.html">Give Aways</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Lankan Prodcuts</a>
                                 </li>
                                 <li>
                                    <a href="shop.html">Fashion Store</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="MyImages/store_header.png" alt="" align="right"/>
                     </div>
                  </div>
               </li>
               <li class="grid">
                  <a class="color2" href="http://devins.altairsl.us/index.php?page=viewFashion">Fashion</a>
               </li>
               <li class="grid">
                  <a class="color2" href="<?php echo base_url(); ?>index.php/siteFeedbackGuest">Feedback</a>
               </li>
                <?php if( $this->session->userdata('username') != null && $this->session->userdata('username') != 'admin')  { ?>   
               <li class="grid">
				<a class="color2" href="#">My Orders</a>
					<div class="megapanel">
                     <div class="row">
                        <div class="col1">
                           <div class="h_nav">
                             
                              <ul>
                                <li><a href="<?php echo base_url()?>index.php?page=ViewMyHistory"><img src="<?php echo base_url(); ?>images/orderImages/orderHistory.png" alt="" style="width: 30px"/> My Order History</a></li><br>
								<li><a href="<?php echo base_url()?>index.php?page=ViewMyCart"><img src="<?php echo base_url(); ?>images/orderImages/cart.png" alt="" style="width: 30px"/> My Cart</a></li><br>
								<li><a href="<?php echo base_url()?>index.php?page=ViewMyWishList"><img src="<?php echo base_url(); ?>images/orderImages/wishList.png" alt="" style="width: 30px"/> My Wish List</a></li><br>
                              </ul>
                           </div>
                        </div>
                         <img src="<?php echo base_url(); ?>MyImages/store_header.png" alt="" align="right"/>
                     </div>
                   </div>	
               </li>
               <?php } ?>
               <div class="search" align="right">
                  <?php echo form_open('search'); ?>
                  <input type="text" name="searchtext" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                  <input type="submit" value="Subscribe"  name="searchsubmit">
                  <?php echo form_close(); ?>
               </div>
            </ul>
         </div>
         <div class="clear"></div>
      </div>
   </body>
</html>