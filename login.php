<?php include_once('dbconnection.php');
// use GeoIp2\Database\Reader;
// $reader = new Reader('/usr/local/GeoLite2-City-CSV_20180530/GeoLite2-City-CSV.mmdb');  // Create a reader
// require_once './phpmailer/vendor/autoload.php';
session_start();
if(isset($_POST['login'])){
  $email=$_POST['email'];
$password=$_POST['password'];

  $sql="SELECT * FROM user WHERE email='$email' AND password='$password' ";
  $sql_run=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($sql_run);
   if($row>0){
      $_SESSION['id']=$row['id'];  //$_SESSION is a superglobal variable in PHP 
      $_SESSION['email']= $row['email'];  
      $_SESSION['name']= $row['name']; 
      $_SESSION['mobile']=$row['mobile'];
      // $_SESSION['password']=$row['password'];
      // echo $_SESSION['name'];
      $date=date("Y/m/d");
      date_default_timezone_set("Asia/Calcutta");//after writing this sentence only we get asian time
      $time=date("h:i:sa");


//       function getCityCountryFromIP($ip_address) {
//         $databasePath = $_SERVER['DOCUMENT_ROOT'] . './GeoLite2-City_20240315/GeoLite2-City.mmdb';
//         // $reader = new Reader($databasePath);
//         try {
//           $reader = new GeoIp2\Database\Reader($databasePath); // Path to GeoLite2 database file
//             $record = $reader->city($ip_address);
//             $city = $record->city->name;
//             $country = $record->country->name;
//             return array('city' => $city, 'country' => $country);
//         } catch (Exception $e) {
//             return array('city' => 'Unknown', 'country' => 'Unknown');
//         }
//     }

    $ip_address=$_SERVER['REMOTE_ADDR'];


//     $location = getCityCountryFromIP($ip_address);
// $city = $location['city'];
// $country = $location['country'];

//steps for getting mac id/////
      ob_start();
     system('ipconfig /all');
      $mycom=ob_get_contents();
      ob_clean();
      $findme="Physical";
      $pmac = strpos($mycom, $findme);
      $mac=substr($mycom,($pmac+36),17);
  /////////////////////////////////////

      $usercheck_query="INSERT INTO usercheck(logindate,logintime,user_id,username,email,ip,mac) VALUES('$date','$time',' ".$_SESSION['id']."',' ".$_SESSION['name']."','".$_SESSION['email']."','$ip_address','$mac')";
      $usercheck_run=mysqli_query($conn,$usercheck_query);
      header('location:http://localhost/smallcrmnew/smallcrm/crm/dashboard.php');

}else{
  echo "not logged in .something went wrong";

}
}

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
          <h2><b>Sign in to CRM </b></h2>
          <p>
            <a href="registration.php">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

		   
        </div>
        <div class="col-md-5 "> <br>
             <p style="color:#F00"></p>
		 <form id="login-form" class="login-form" action="" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Email</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="email" name="email" id="txtusername" class="form-control" required="true">                                 
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
					<input type="password" name="password" id="txtpassword" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="control-group  col-md-10">
            <div class="checkbox checkbox check-success"> <a href="forgot-password.php">Forgot Password </a>&nbsp;&nbsp;
         </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-warning  btn-cons pull-right" name="login" type="submit">Login</button>
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