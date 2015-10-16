<html>
    <head>


    </head>
    <body>

        <div id="formd1">
            <div id="formd2">
                <div style="background: #00405D;  padding: 15px; text-align: center;"><span style="font-family: verdana,arial; color: #FFFFFF; font-size: 1.00em; font-weight:bold; "> Please fill in the form below.</span> </div>


                <style type="text/css" scoped>
                    .error {
                        font-family: verdana, arial;
                        color: #D41313;
                        font-size: 1.00em;
                    }
                </style>




                <center style="background-color: #333333">
                    <div style="width:950px; background-color:#FFFFFF; text-align: left">
                        <div class="comments-area">

                            <table style="width:600px;  text-align:left; margin-left: 60px">
                                <tr>
                                    <td height="28">&nbsp;</td>
                                    <td><div class="error"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="28"><label class="textlabel">Add New Catogory</label></td>
                                    <td>
                                        <form><input name="productname" value="<" type="text">  
                                        </form></td></tr>
                                <tr>
                                    <td height="28">&nbsp;</td>
                                    <td></td></tr>
                                <tr>
                                    <td height="28" width="211"><label class="textlabel">Catogory:</label></td>
                                    <td>
                                        <select name="catogory" id="select" style="width: 330px; height: 30px">
                                            <option>Promotional Products</option>
                                            <option>Hotel Products</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>


                                <tr>
                                    <td>

                                    </td>
                                    <td><?php echo form_open_multipart('gallery'); ?>

                                        <?php echo form_upload('userfile'); ?>
                                        <?php echo form_submit('subtemp', 'Upload'); ?>
                                        <?php echo form_close(); ?> </td>
                                    <td> 	

                                    </td>







                                </tr>
                                <tr>
                                    <td>&nbsp;</td>


                                    <td></td>
                                </tr>
                                <tr>

                                    <td><label class="textlabel">Upload File</label></td>
                                    <td> 
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td><span class="error"></span></td>
                                </tr>
                                <tr>
                                    <td><label class="textlabel">Description</label></td>
                                    <td <div="" class="error"><br><textarea style="width: 400px;height: 90px" name="description" "="" value=""></textarea></td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label class="textlabel">Email</label></td>
    <td><br><textarea name="email" style="width: 400px;height: 90px"></textarea> 
<input name="prodsubmitemail" value="Send" type="submit">
</td>
  </tr>
<tr>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>
  	 </td></tr>


<tr><td></td>
  <td>&nbsp;</td></tr>
</tbody></table>
 </div>
</div>
</center>

</form>

</div></div></div>
</body>
</html>