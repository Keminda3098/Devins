<?php
//Getting Session User's name
$_SESSION['username'] = $this->session->userdata('username');
$username = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Devins Lanka</title>

    <head>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/datepicker.css">

            <link href="<?php echo base_url(); ?>product_design_css/css/colorpicker.css" rel="stylesheet">

                <link href="<?php echo base_url(); ?>product_design_css/css/box1.css" rel="stylesheet">
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
                        <script type="text/javascript">
                            function PreviewImage(no) {

                                var oFReader = new FileReader();
                                oFReader.readAsDataURL(document.getElementById("uploadImage" + no).files[0]);
                                oFReader.onload = function (oFREvent) {
                                    document.getElementById("uploadPreview" + no).src = oFREvent.target.result;
                                };
                            }
                        </script> 



                        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                        <script type="text/javascript">
                            stLight.options({
                                publisher: "c6a110d8-110a-4565-bb7d-0bdb8c67a863"
                            });
                        </script>
                        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

                            <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
                            <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                            <script></script>



                            <script src='<?php echo base_url(); ?>product_design_css/js/jquery.zoom.js'></script>

                            <script src="<?php echo base_url(); ?>product_design_css/js/bootstrap-datepicker.js"></script>

                            <style type="text/css">
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

                                <?php echo form_close(); ?>

                                <table style="width:800px; margin-left:10px " >
                                    <tr>

                                        <td></br>
                                            <?php if ($_SESSION['username'] == null) { ?>
                                                <p style="background-color:red;color:white; font-style:bold; text-align:center;">Please Sign in before Submitting your Design</p>
                                            <?php } ?>
                                            <?php if ($_SESSION['username']) { ?>

                                            <?php } ?>
                                            <table width="630px" >
                                                <tr>
                                                    <td><label style="font-size: 13px; "> Attach Your Design</label></td>
                                                    <?php echo form_open_multipart('DesignControllers/Uploadforcapdesign/do_upload'); ?>

                                                    <td><span class="btn btn-default btn-file">
                                                            Add Your Created image<input id="uploadImage1" type="file" name="userfile" onchange="PreviewImage(1);" />
                                                        </span>
                                                    </td>                                                                                         

                                                    <td>
                                                        <img id="uploadPreview1" src="http://localhost/devinsnew/templates/yourimage.png"  width="100px" height="100px"/>
                                                        <input type="submit" name="submitimage" value="Attach" class="btn btn-success" >
                                                    </td> 
                                                    <?php echo form_close(); ?>
                                                    <?php echo form_open('DesignControllers/Capscontroller'); ?>
                                                </tr>
                                                <tr>
                                                    <td  width="300" style="font-size: 13px" ></td>
                                                    <td width="300"><input type="text" name="imagetext"  value ="<?php echo $urlname; ?>" readonly /></td>
                                                    <td>  <div class="noterror">Image name will be displayed once you attach image</div>



                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row" style="font-size: 12px; ">Your Username</td>
                                                    <td width="300"><input type="text" name="uname"  value ="<?php echo $_SESSION['username'] ?> " readonly />
                                                    </td><td>
                                                        <div class="error"><?php echo form_error('uname'); ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row" style="font-size: 12px; ">Expected Price</td>
                                                    <td width="300">
                                                        <input type="number" step="any" name="pricetext" value ="<?php echo set_value('pricetext') ?>" /> </td>
                                                    <td width="329"> <div class="error"><?php echo form_error('pricetext'); ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  scope="row" style="font-size: 12px">Expected Amount</td>
                                                    <td width="300"><input type="number" step="any" name="amounttext"  value ="<?php echo set_value('amounttext') ?>" /> </td>
                                                    <td> <div class="error"><?php echo form_error('amounttext'); ?></div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="300" style="font-size: 12px" >Expected Date</td>
                                                    <td width="300" style="font-size: 12px"><input type="text" name="datetext" id ="datepicker"  value ="<?php echo set_value('datetext') ?>" readonly /></td>
                                                    <td><div class="error"><?php echo form_error('datetext'); ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="300" style="font-size: 12px">Mobile Number</td>
                                                    <td width="300"><input type="text" maxlength="10" name="mobile"  value ="<?php echo set_value('mobile') ?>" />
                                                    </td><td>
                                                        <div class="error"><?php echo form_error('mobile'); ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="300" style="font-size: 13px">Size</td>
                                                    <td width="300">
                                                        <label for="textfield"></label>

                                                        <select name="sizetext">
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>

                                                        </select> 
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td  width="300" style="font-size: 13px;"  >Description</td>
                                                    <td width="300"><textarea name="textdescrpt"  value ="<?php echo set_value('textdescrpt') ?>" > </textarea></td>
                                                    <td><div class="error"><?php echo form_error('textdescrpt'); ?></div>
                                                    </td>
                                                </tr>

                                                <tr><td ></td>
                                                    <td width="300">

                                                </tr>
                                                <tr><td ></td>
                                                    <td width="300">
                                                        <input type="submit" name="submitrqst" value="Submit" class="btn btn-success"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <?php echo form_close(); ?>


                                        </td>

                                        <td>

                                            </br>
                                            <div align="bottom"> <button id="loadimage" onclick="addima()" class="btn btn-success">Add to Canvas</button></div>
                                            </br>
                                            </br>
                                            <table width="470px" height="100px" bgcolor="#000000" >
                                                <?php echo form_open('DesignControllers/Capsimagedisplayer'); ?>
                                                <tbody>
                                                    <tr><span class='zoom' id='ex1'>

                                                            <?php foreach ($locat as $row) { ?>


                                                                <img src="<?php print $row->templocation; ?>" style="width:450px; height:350px; " id="myImage"   >



                                                                <?php } ?> 
                                                        </span>
                                                        <?php echo form_close(); ?>

                                                    </tr>
                                            </table> 
                                            <table  width="300px" >
                                                <? form_open('DesignControllers/Capscontroller') ?>
                                                <tr bgcolor="yellow" align="left">
                                                    <p style="background-color:#0EB1C5;width:290px; color:#ffffff;font-style: bold " >Design Images</p>
                                                </tr>
                                                <tr bgcolor="#00FF99">
                                                    <td bgcolor="#993300"><img src="<?php print $logo[0]->urllogo; ?>" style="width:90px; height:80px; " id="myimage1" onclick="addimage()"  ></td>
                                                    <td><img src="<?php print $logo[1]->urllogo; ?>" style="width:90px; height:80px; " id="myimage2" onclick="addimage2()"  ></td>
                                                    <td bgcolor="#993300"><img src="<?php print $logo[2]->urllogo; ?>" style="width:90px; height:70px; " id="myimage3" onclick="addimage3()"  ></td>
                                                    <td><img src="<?php print $logo[3]->urllogo; ?>" style="width:90px; height:70px; " id="myimage1" onclick="addimage4()"  ></td>
                                                </tr>
                                                <tr bgcolor="#00CC66">
                                                    <td bgcolor="#993300"><img src="<?php print $logo[4]->urllogo; ?>" style="width:90px; height:80px; " id="myimage1" onclick="addimage()"  ></td>
                                                    <td><img src="<?php print $logo[5]->urllogo; ?>" style="width:90px; height:80px; " id="myimage2" onclick="addimage2()"  ></td>
                                                    <td bgcolor="#993300"><img src="<?php print $logo[6]->urllogo; ?>" style="width:80px; height:80px; " id="myimage3" onclick="addimage3()"  ></td>
                                                    <td><img src="<?php print $logo[1]->urllogo; ?>" style="width:90px; height:80px; " id="myimage1" onclick="addimage4()"  ></td>
                                                </tr>
                                                <tr bgcolor="#00FF99">
                                                    <td bgcolor="#993300"><img src="<?php print $logo[0]->urllogo; ?>" style="width:80px; height:70px; " id="myimage1" onclick="addimage()"  ></td>
                                                    <td><img src="<?php print $logo[1]->urllogo; ?>" style="width:80px; height:70px; " id="myimage2" onclick="addimage2()"  ></td>
                                                    <td bgcolor="#993300"><img src="<?php print $logo[2]->urllogo; ?>" style="width:80px; height:70px; " id="myimage3" onclick="addimage3()"  ></td>
                                                    <td><img src="<?php print $logo[3]->urllogo; ?>" style="width:80px; height:70px; " id="myimage1" onclick="addimage4()"  ></td>
                                                </tr>

                                                <?php echo form_close(); ?>
                                                <?php echo form_open('DesignControllers/Capsimagedisplayer'); ?>
                                            </table>	
                                        </td>
                                        <td>
                                            <table border="1"  width="175px"  >
                                                <tr>

                                                    <td  style="font-size: 13px; width:35px ;height:60px"   >



                                                    </td >
                                                    <td  width="35px" height="60px">


                                                    </td>
                                                    <td  width="35px" height="60px">



                                                    </td>
                                                    <td  width="35px" height="60px">



                                                    </td>
                                                    <td  width="35px" height="60px">



                                                    </td>
                                                </tr>		<tr>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitwhitefrontcap"  value="..." style="background-color:#f6f6f6; color:#f6f6f6 ;border:none">

                                                    </td>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submityellowfrontcap"  value="..." style="background-color:#f2ba00; color:#f2ba00;border:none">

                                                    </td>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitgreenfrontcap"  value="..." style="background-color:#008946; color:#008946;border:none">

                                                    </td> 
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitpurplefrontcap"  value="..." style="background-color:#71387d; color:#71387d;border:none">

                                                    </td>
                                                    <td  width="35px" height="60px">  

                                                        <input type="submit"  name="submitredfrontcap"  value="..." style="background-color:#cc0d1a; color:#cc0d1a;border:none">

                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td  width="35px" height="60px"> 
                                                        <input type="submit" name="submitdarkbluefrontcap" value="..." style="background-color:#373f54; color:#373f54;border:none; " >

                                                    </td>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit" name="submitgreyfrontcap" value="..." style="background-color:#b8b8b8; color:#b8b8b8;border:none; " >

                                                    </td>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitbrownfrontcap"  value="..." style="background-color:#534631; color:#534631;border:none">

                                                    </td>

                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitblackfrontcap"  value="..." style="background-color:#313131; color:#313131;border:none">

                                                    </td>
                                                    <td  width="35px" height="60px">

                                                        <input type="submit"  name="submitbluefrontcap"  value="..." style="background-color:#3a3d87; color:#3a3d87;border:none">

                                                    </td>
                                                </tr>

                                                <?php echo form_close(); ?>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>


                                <?php echo form_close(); ?>

                                <style type="text/css">
                                    .div-left {
                                        float: left;
                                        padding-left: 10px;
                                    }
                                    .div-right {
                                        float: right;
                                        padding-right: 20px;
                                    }

                                    .div-middle {
                                        float: center;
                                    }
                                </style>
                                <div class="div-left">




                                    <canvas id="canvas"  width="700px" height="600px" style="border:1px solid #000; background-color:#FFE862;border-color: #red "></canvas>

                                </div>

                                <div class="div-right">


                                    <ul class="nav nav-tabs" id="demoTabs">
                                        <li class="active"><a href="#text_pane"><i class="icon-pencil"></i> Text</a></li>

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="product">
                                                <input type="text" name="text" id="text" placeholder="Enter Some Text">

                                                    <br>
                                                        <select id="font_family">
                                                            <option value="arial">Arial</option>
                                                            <option value="helvetica">Helvetica</option>
                                                            <option value="myriad pro">Myriad Pro</option>
                                                            <option value="delicious">Delicious</option>
                                                            <option value="verdana">Verdana</option>
                                                            <option value="georgia">Georgia</option>
                                                            <option value="courier">Courier</option>
                                                            <option value="comic sans ms">Comic Sans MS</option>
                                                            <option value="impact">Impact</option>
                                                            <option value="monaco">Monaco</option>
                                                            <option value="optima">Optima</option>
                                                            <option value="hoefler text">Hoefler Text</option>
                                                            <option value="plaster">Plaster</option>
                                                            <option value="engagement">Engagement</option>
                                                        </select>
                                                        <select id="font_size" style="width: 97px;">
                                                            <?php foreach ($font_size as $size): ?>
                                                                <option value="<?php echo $size; ?>" <?php if ($size == 40) echo 'selected="selected"' ?>><?php echo $size; ?> px</option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <br>
                                                            <button id="add-text" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Text</button>
                                                            <button onclick="deleteimg()"  class="btn btn-success"> Delete</button>
                                                            <hr>
                                                                </div>

                                                                <div align="left"><button id="circle" class="btn btn-success"> Add Circle</button>
                                                                    <button id="rect" class="btn btn-success"> Add Rectangle</button>
                                                                    <button  onclick ="clearcnv()" class="btn-danger">Clear</button></div>


                                                                </div>
                                                                <div class="row">
                                                                    <div class="span12">
                                                                        <div class="navbar">
                                                                            <div class="navbar-inner">
                                                                                <ul class="nav">
                                                                                    <li>
                                                                                        <span class="input-append color" data-color="#000" data-color-format="rgb" id="cp3">
                                                                                            <input id="text_color" name="text_color" class="span1" value="#000" readonly="" style="margin-top: 4px;" type="text">
                                                                                                <span class="add-on" style="margin-top: 4px;"><i style="background-color: rgb(0, 0, 0);"></i></span>
                                                                                        </span>
                                                                                    </li>
                                                                                    <li class="divider-vertical"></li>
                                                                                    <li> 
                                                                                        <button class="btn btn-small" data-toggle="button" id="drawing_button"><i class="icon-pencil"></i></button>
                                                                                        <span class="input-prepend" id="drawing_width_span" style="display:none;">
                                                                                            <span class="add-on" style="margin-top: 4px;">Width</span>
                                                                                            <input style="margin-top: 4px; width: 30px;" id="drawing_width" value="3" type="text">
                                                                                        </span>
                                                                                    </li>

                                                                                    <ul class="nav pull-right">
                                                                                        <li class="pull-left"><button disabled="disabled" id="remove_selected" class="btn btn-small btn-danger"><i class="icon-trash icon-white"></i></button></li>
                                                                                    </ul>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="span12">
                                                                            <div class="navbar">
                                                                                <div class="navbar-inner">
                                                                                    <ul class="nav" >

                                                                                    </ul>
                                                                                    <ul class="nav pull-right" >
                                                                                        <li> <img id="uploadPreview2" src="http://localhost/devinsnew/templates/yourimage.png"  width="100px" height="100px"/><br />
                                                                                            <input id="uploadImage2" type="file" name="p1" onchange="PreviewImage(2);" /></li>
                                                                                        <li><button onclick="adtocn2()" class="btn btn-success">
                                                                                                Add Your image
                                                                                            </button></li>
                                                                                        <li><button class="btn btn-success" id="generate"><i class="icon-download-alt icon-white"></i> Generate SVG</button></li>
                                                                                        <li class="divider-vertical"></li>
                                                                                        <li><button class="btn btn-warning" id="generate_image"><i class="icon-picture icon-white"></i> Download Image</button></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="span12">
                                                                            <div id="svg"></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                </ul>
                                                                </ul>
                                                                </div>
                                                        </br>


                                                        </p>






                                                        <script>
                                                            var canvas = new fabric.Canvas('canvas', {
                                                                hoverCursor: 'pointer',
                                                                selection: false
                                                            });


                                                            $(document).ready(function () {

                                                                $('#generate').click(function () {
                                                                    $('#svg').html(canvas.toSVG());
                                                                });

                                                                $('#circle').click(function () {
                                                                    canvas.add(new fabric.Circle({radius: 30, fill: '#f55', top: 100, left: 100}));

                                                                    canvas.item(0).set({
                                                                        borderColor: 'red',
                                                                        cornerColor: 'green',
                                                                        cornerSize: 4,
                                                                        transparentCorners: false
                                                                    });
                                                                    canvas.setActiveObject(canvas.item(0));
                                                                    this.__canvases.push(canvas);


                                                                });
                                                                $('#rect').click(function () {
                                                                    canvas.add(new fabric.Rect({width: 50, height: 50, fill: '#77f', top: 100, left: 100}));
                                                                    canvas.item(0).lockRotation = true;
                                                                    this.__canvases.push(canvas);


                                                                });



                                                                $('#generate_qr_code').click(function () {
                                                                    var qr_text = $("#qr_text").val();
                                                                    if (qr_text == '')
                                                                    {
                                                                        $("#qr_text").val('Enter some text');
                                                                        return false;
                                                                    }
                                                                    else
                                                                    {
                                                                        custom_data = {
                                                                            qr_image: 'http://chart.apis.google.com/chart?cht=qr&chl=' + escape(qr_text) + '&chs=320x320'
                                                                        }
                                                                        $.ajax({
                                                                            url: "<?= base_url(); ?>
                                                                            site / download_qr_image",
                                                                                    type: 'GET',
                                                                            data: custom_data,
                                                                            success: function (relative_image) {
                                                                                fabric.Image.fromURL(relative_image, function (image2) {
                                                                                    image2.set({
                                                                                        left: 300,
                                                                                        top: 200,
                                                                                        angle: 0,
                                                                                        padding: 10,
                                                                                        cornersize: 10
                                                                                    });
                                                                                    image2.scale(0.5).setCoords();
                                                                                    image2.lockRotation = !image2.lockRotation;
                                                                                    canvas.add(image2);
                                                                                });
                                                                            }
                                                                        });
                                                                    }
                                                                });

                                                                $('#add-text').click(function () {
                                                                    var colorpicker_value = $('input[name=text_color]').val();
                                                                    var font_family = $('#font_family').val();
                                                                    var font_size = $('#font_size').val();
                                                                    var text = $("#text").val();
                                                                    if (text == '')
                                                                    {
                                                                        $("#text").val('Enter some text');
                                                                        return false;
                                                                    }
                                                                    else
                                                                    {
                                                                        var textSample = new fabric.Text(text, {
                                                                            left: 300,
                                                                            top: 200,
                                                                            fontFamily: font_family,
                                                                            angle: 0,
                                                                            fill: colorpicker_value,
                                                                            scaleX: 1,
                                                                            scaleY: 1,
                                                                            fontWeight: 'bold',
                                                                            fontSize: parseInt(font_size, 10)
                                                                        });
                                                                        canvas.add(textSample);
                                                                    }

                                                                });

                                                                $('#generate_image').click(function () {
                                                                    var activeObject = canvas.getActiveObject(),
                                                                            activeGroup = canvas.getActiveGroup();
                                                                    if (activeObject) {
                                                                        canvas.discardActiveObject();
                                                                    }
                                                                    else if (activeGroup) {
                                                                        canvas.discardActiveGroup();
                                                                    }

                                                                    if (!fabric.Canvas.supports('toDataURL')) {
                                                                        alert('This browser doesn\'t provide means to serialize canvas to an image');
                                                                    }
                                                                    else {
                                                                        window.open(canvas.toDataURL('png'));
                                                                    }
                                                                });
                                                            });

                                                            var getRandomInt = fabric.util.getRandomInt;
                                                            function getRandomColor() {
                                                                return (
                                                                        pad(getRandomInt(0, 255).toString(16), 2) +
                                                                        pad(getRandomInt(0, 255).toString(16), 2) +
                                                                        pad(getRandomInt(0, 255).toString(16), 2)
                                                                        );
                                                            }
                                                            function pad(str, length) {
                                                                while (str.length < length) {
                                                                    str = '0' + str;
                                                                }
                                                                return str;
                                                            }
                                                            ;
                                                            var supportsInputOfType = function (type) {
                                                                return function () {
                                                                    var el = document.createElement('input');
                                                                    try {
                                                                        el.type = type;
                                                                    }
                                                                    catch (err) {
                                                                    }
                                                                    return el.type === type;
                                                                };
                                                            };
                                                            var supportsSlider = supportsInputOfType('range'),
                                                                    supportsColorpicker = supportsInputOfType('color');
                                                            var supportsSlider = supportsInputOfType('range'),
                                                                    supportsColorpicker = supportsInputOfType('color');
                                                            if (supportsSlider()) {
                                                                (function () {
                                                                    var controls = document.getElementById('controls');

                                                                    /*var sliderLabel = document.createElement('label');
                                                                     sliderLabel.htmlFor = 'opacity';
                                                                     sliderLabel.innerHTML = 'Opacity: ';*/

                                                                    var slider = document.createElement('input');

                                                                    try {
                                                                        slider.type = 'range';
                                                                    } catch (err) {
                                                                    }

                                                                    slider.id = 'opacity';
                                                                    slider.value = 100;

                                                                    //controls.appendChild(sliderLabel);
                                                                    controls.appendChild(slider);

                                                                    canvas.calcOffset();

                                                                    slider.onchange = function () {
                                                                        var activeObject = canvas.getActiveObject(),
                                                                                activeGroup = canvas.getActiveGroup();

                                                                        if (activeObject || activeGroup) {
                                                                            (activeObject || activeGroup).setOpacity(parseInt(this.value, 10) / 100);
                                                                            canvas.renderAll();
                                                                        }
                                                                    };
                                                                })();
                                                            }

                                                            fabric.loadSVGFromURL('skin/assets/century_21.svg', function (objects, options) {
                                                                var loadedObject = fabric.util.groupSVGElements(objects, options);

                                                                loadedObject.set({
                                                                    left: 300,
                                                                    top: 200,
                                                                    angle: 0,
                                                                    padding: 10,
                                                                    cornersize: 10
                                                                });
                                                                loadedObject.scaleToHeight(400).setCoords();

                                                                // loadedObject.hasRotatingPoint = true;

                                                                canvas.add(loadedObject);
                                                                canvas.calcOffset();
                                                            });

                                                            $('#remove_selected').click(function () {
                                                                var activeObject = canvas.getActiveObject(),
                                                                        activeGroup = canvas.getActiveGroup();
                                                                if (activeObject) {
                                                                    canvas.remove(activeObject);
                                                                }
                                                                else if (activeGroup) {
                                                                    var objectsInGroup = activeGroup.getObjects();
                                                                    canvas.discardActiveGroup();
                                                                    objectsInGroup.forEach(function (object) {
                                                                        canvas.remove(object);
                                                                    });
                                                                }
                                                            });

                                                            var activeObject = canvas.getActiveObject(),
                                                                    activeGroup = canvas.getActiveGroup();
                                                            if (activeObject) {
                                                                canvas.remove(activeObject);
                                                                $('#remove_selected').removeAttr('disabled');
                                                            }
                                                            else if (activeGroup) {
                                                                var objectsInGroup = activeGroup.getObjects();
                                                                canvas.discardActiveGroup();
                                                                objectsInGroup.forEach(function (object) {
                                                                    canvas.remove(object);
                                                                    $('#remove_selected').removeAttr('disabled');
                                                                });
                                                            }
                                                            else {
                                                                $('#remove_selected').attr('disabled', 'disabled');
                                                            }

                                                            canvas.on('object:selected', function (e) {
                                                                var selected = true;
                                                                $('#remove_selected').removeAttr('disabled');
                                                            });

                                                            function clearcnv() {
                                                                canvas.clear();

                                                            }

                                                            function deleteimg() {
                                                                canvas.remove(canvas.getActiveObject());
                                                            }
                                                            $(function () {
                                                                $("#datepicker").datepicker();
                                                                //Pass the user selected date format
                                                                $("#format").change(function () {
                                                                    $("#datepicker").datepicker("option", "dateFormat", $(this).val());
                                                                });
                                                            });

                                                            function adtocn()
                                                            {
                                                                fabric.Image.fromURL(document.getElementById('uploadPreview1').src, function (img) {

                                                                    // apply filters and re-render canvas when done
                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    // add image onto canvas
                                                                    canvas.add(img);
                                                                });
                                                            }

                                                            function adtocn2()
                                                            {
                                                                fabric.Image.fromURL(document.getElementById('uploadPreview2').src, function (img) {

                                                                    // apply filters and re-render canvas when done
                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    // add image onto canvas
                                                                    canvas.add(img);
                                                                });
                                                            }
                                                            function addima() {

                                                                fabric.Image.fromURL(document.getElementById('myImage').src, function (img) {

                                                                    // apply filters and re-render canvas when done
                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    // add image onto canvas
                                                                    canvas.add(img);
                                                                });

                                                                fabric.Image.fromURL(document.getElementById('myImage2').src, function (img) {

                                                                    // apply filters and re-render canvas when done
                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    // add image onto canvas
                                                                    canvas.add(img);
                                                                });

                                                            }
                                                            function addimage() {

                                                                fabric.Image.fromURL(document.getElementById('myimage1').src, function (img) {

                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    canvas.add(img);

                                                                });

                                                            }

                                                            function addimage2() {

                                                                fabric.Image.fromURL(document.getElementById('myimage2').src, function (img) {

                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    canvas.add(img);

                                                                });

                                                            }
                                                            function addimage3() {

                                                                fabric.Image.fromURL(document.getElementById('myimage3').src, function (img) {

                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    canvas.add(img);

                                                                });
                                                            }
                                                            function addimage4() {

                                                                fabric.Image.fromURL(document.getElementById('myimage4').src, function (img) {

                                                                    img.applyFilters(canvas.renderAll.bind(canvas));

                                                                    canvas.add(img);

                                                                });

                                                            }

                                                            function deleteimg() {
                                                                canvas.remove(canvas.getActiveObject());
                                                            }
                                                            $(function () {
                                                                $("#datepicker").datepicker();
                                                                //Pass the user selected date format
                                                                $("#format").change(function () {
                                                                    $("#datepicker").datepicker("option", "dateFormat", $(this).val());
                                                                });
                                                            });

                                                        </script>
                                                        </body>
                                                        </html>