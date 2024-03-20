<?php
session_start();
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($conn,"SELECT * FROM admin WHERE name='".$_POST['adname']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
$total=mysqli_num_rows($ret);
if($total>0)
{
$_SESSION['name']=$_POST['adname'];
$_SESSION['password']=$POST['password'];

header('location:home.php');

}
else
{
header('location:index.php');

}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Admin Login</title>
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

<style>
body {
    background-color: #eed771;
}




.login-container {
    background-color: #f9c078;
    border: 3px solid #ddd;
    border-radius: 5px;
    width:30rem;
    height:20rem;
    margin:7rem;
    padding:7rem;
    margin-left:19rem;
   padding-left:22rem;
    
}

.login-container h2 {
    color: #f9CO;
}

.form-label {
    font-weight: bold;
}

.login-form .btn {
    width: 10%;
    margin-top: 10px;
    padding:5px;
    margin-left:60px;
    




}

.error-message {
    color: #f00;
}
</style>

</head>
<body class="error-body no-top">
<div class="container-fluid">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Sign in to CRM Admin</h2>
         
          <br>

		   
        </div>
        <div class="col-md-5 "> <br>
		 <form id="login-form" class="login-form" action="" method="post">
         <p class="error-message"></p>
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Username</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="adname" id="txtusername" class="form-control">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="password" name="password" id="txtpassword" class="form-control">                                 
				</div>
            </div>
          </div>
          </div><br>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-warning btn-cons pull-right" name="login" type="submit">Login</button>
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
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	
</body>
</html>
