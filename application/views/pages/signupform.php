<!DOCTYPE html>
<html>
  <head>
    <title>
      New Registration
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" media="screen">
 
 
 
 
  </head>
  <body>
    <div class="container" style="margin: 10px;">
      <div class="row"><h2>New Registration</h2>
  </div>
 <div style="color: red">
  <?php echo validation_errors(); ?></div>
	<?php echo form_open('validate_ctrl'); ?>
    <div class="form-group">
    	
      <label for="firstname" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
      </div>
 
 
    </div>
 
 
 </br> </br> 
    <div class="form-group">
      <label for="lastname" class="col-md-2">
        Last Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
      </div>
 
 
    </div>
  </br> </br> 
    <div class="form-group">
      <label for="emailaddress" class="col-md-2">
        Email address:
      </label>
      <div class="col-md-10">
        <input type="email" class="form-control"  name="email" placeholder="Enter email address">
        <p class="help-block">
          Example: yourname@domain.com
        </p>
      </div>
 
 
    </div>
    
     <div class="form-group">
      <label for="username" class="col-md-2">
      User Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="un" placeholder="Enter Username">
        <p class="help-block">
         
        </p>
      </div>

    <div class="form-group">
      <label for="password" class="col-md-2">
     Choose password:
      </label>
      <div class="col-md-10">
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
        <p class="help-block">
          Min: 6 characters (Alphanumeric only)
        </p>
      </div>
      <div class="form-group">
      <label for="password" class="col-md-2">
      Verify password:
      </label>
      <div class="col-md-10">
        <input type="password" class="form-control" name="cpassword" placeholder="Enter Password">
        <p class="help-block">
          Min: 6 characters (Alphanumeric only)
        </p>
      </div>
 
   <div class="form-group">
      <label for="address" class="col-md-2">
     Address:
      </label>
      <div class="col-md-10">
        <textarea class = "form-control"  name="add"  > </textarea>
        <p class="help-block">
         
        </p>
      </div>
    </div>
 
   <div class="form-group">
      <label for="age" class="col-md-2">
    Age:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="ag" placeholder="Enter Age">
        <p class="help-block">
         
        </p>
      </div>
    </div>
 
 
     <div class="form-group">
      <label for="phonenumer" class="col-md-2">
     Phone Number:
      </label>
      <div class="col-md-10">
         <input type="text" class="form-control" name="pn" placeholder="Enter Phonenumber">
        <p class="help-block">
         
        </p>
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="country" class="col-md-2">
        Country:
      </label>
      <div class="col-md-10">
        <select  name="cntry" class="form-control">
        
          <option>Srilanka</option>
          <option>United States</option>
          <option>China</option>
          <option>United Kingdom</option>
          <option>Russia</option>
        </select>
      </div>
 
 
 
 
    </div>
 
  
 
 
    </div>
 
    <div class="checkbox">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <label>
          <input type="checkbox">Terms and Conditions</label>
      </div>
 
 
    </div>
 
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <input type="submit"  value ="Register" class="btn btn-info">
         
       
      </div>
    </div>

  </div>
  </div>
  </div>
  
 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>