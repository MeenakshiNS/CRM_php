<?php include_once('dbconnection.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Login</title>
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

</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2><b>Forgot Password </b></h2>
          <p>
            <a href="registration.php">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

		   
        </div>
        <div class="col-md-5 "> <br>
        <p style="color:#F00; font-size:12px;"> </p>
		 <form id="login-form" class="login-form" action="" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Enter registered mobile number</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="number" name="mobile" id="txtusername" class="form-control">                                 
				</div>
            </div>
          </div>
          </div>
		
		 
          <div class="row">
            <div class="col-md-10">
              <button  class="btn btn-warning btn-cons pull-right" name="send" type="submit">send OTP</button>
            </div>
          </div>
		  </form>
        </div>
     
        <?php
        if(isset( $_POST['send'])){
          $mobile=$_POST['mobile'];
          $otp=rand(1000,9999);
          $API="fec8d47d412bcbeece3d9128ae855a7a";
          $PHONE=$mobile;
          $OTP=$otp;
          $REQUEST_URI="https://sms.renflair.in/V1.php?";
          $URL="https://sms.renflair.in/V1.php?API=$API&PHONE=$PHONE&OTP=$OTP";
          $curl=curl_init($URL);
          curl_setopt($curl,CURLOPT_URL,$URL);
          curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
          $resp=curl_exec($curl);
          curl_close($curl);
          $data=json_decode($resp);
          $status=$data->status;
          $massage=$data->message;
          $sql = "UPDATE user SET otp = '$OTP' WHERE mobile = '$mobile'";
          $result = mysqli_query($conn, $sql);
          echo $sql;
          header('location:otp.php');
          }
        
          
        ?>
    
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>