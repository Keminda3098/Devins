<!doctype html>
<html>
   <head>
      <title>Sign In</title>
   </head>
   <body>
      <div id="formd1">
         <div id="formd2">
            <div style="color: red">
               <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open('verifylogin'); ?>
            <div id="aa" style="padding: 35px; width: 855px; margin-left: auto; margin-right: auto;">
               <form method="post"  name="aform" target="_top">
                  <div class="cont span_2_of_3" style="border: 1px solid #bfbfbf; width: 855px">
                     <div class="cont1" style="padding: 15px;">
                        <h4 class="title" style="background: #bfbfbf; text-align: center; padding: 5px">Login to Devins</h4>
                        <table>
                           <tr>
                              <td style="padding: 5px;">
                                 <input type="text" class="signin_text" name="username" placeholder="Username">
                              </td>
                           </tr>
                           <tr>
                              <td style="padding: 5px;">
                                 <input type="password" class="signin_text" name="password" placeholder="Password">
                              </td>
                           </tr>
                           <tr>
                              <td style="text-align: center;">
                                 <div class="buttonpage">
                                    <a>
                                    <input type="submit" value="Login" style="padding: 4px 10px 4px 10px;">										
                                    </a>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div class="cont1" style="margin: 15px; border-left: 1px solid #bfbfbf">
<div style="padding-left:15px;">
                        <h4 class="title" style="padding: 5px">Already a Member?</h4>
				<p style="font-size: 14px; margin-left: 5px; margin-top: -9px">Please Login to Devins Lanka by entering your Username & Password.</p>
                        <h4 class="title" style="padding: 5px;margin-top: 5px;">Not a Member Still?</h4>
                        	<p style="font-size: 14px; margin-left: 5px; margin-top: -9px">Click on the button below to Register yourself as a Member.</p>
<ul style="width: 110px; margin: 10px 10px 10px 150px;" class="list">
                        <li>
                           <a> <img style="margin: 0 0 0 6%" src="images/signup_icn.png" alt=""> </a>
                           <ul class="icon1 sub-icon1 profile_img">
                              <li>
                                 <a href="http://localhost/Devins/index.php?page=signup" class="active-icon c1">Sign Up</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
</div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>