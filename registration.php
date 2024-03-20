<?php include_once('dbconnection.php');

if(isset( $_POST['submit'])){
  $name= $_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $date=date( 'Y-m-d' );
  $sql="INSERT INTO user(name,email,password,mobile,gender,posting_date)  VALUES('$name','$email','$password','$phone','$gender','$date')";
  $sql_run=mysqli_query($conn,$sql);
  if($sql_run){
    echo "inserted";
    header('location:http://localhost/smallcrmnew/smallcrm/crm/login.php');
  }else{
    echo "not inserted";
  }
 
}

?>
<!DOCTYPE html>
<html>
<head>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.cpassword.value)
{
alert('New Password and Re-Password field does not match');
document.signup.cpassword.focus();
return false;
}
return true;
}   

</script>


</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2><b>Sign in to CRM </b></h2>
          <p>            <a href="login.php">Sign in Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

		  
        </div>
        <div class="col-md-5 "> <br>
		 <form id="signup" name="signup" class="login-form" onsubmit="return checkpass();" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Name</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="name" id="name" class="form-control" required="true">                                
				</div>
            </div>
          </div>
          </div>
           <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Email id</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="email" name="email" id="email" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
          </div>
           <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="password" id="password" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Re-Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="cpassword" id="cpassword" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Contact no.</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="phone" id="txtpassword" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required="true">                                 
				</div>
                
            </div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Gender</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="radio" value="m" name="gender" checked > Male
          <input type="radio" value="f" name="gender" > Female
                                
				</div>
            </div>
          </div>
          </div>
         <div class="row">
            <div class="col-md-10">
              <input   class="btn btn-warning btn-cons pull-right" name="submit" value="Submit" type="submit" />
            </div>
          </div>
		  </form>
        </div>
     
    
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>