<?php include_once('./dbconnection.php');


session_start(); // Start the session

if(isset($_POST['change'])){
    if(isset($_SESSION['email'])) {
        // // Output to browser console using JavaScript
        // echo '<script>';
        // echo 'console.log("' . $_SESSION['password'] . '");';
        // echo '</script>';
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $sql_pass="SELECT * FROM user WHERE  email='$_SESSION[email]'"; 
        $result=mysqli_query($conn,$sql_pass); 
        $row=mysqli_fetch_array($result) ;  
        
        if($oldpass!==$row['password']) {
            echo "wrong old password";
        }else{
            $password_update_sql="UPDATE user SET password='$newpass' WHERE email='$_SESSION[email]' ";
            $password_update_sql_run=mysqli_query($conn, $password_update_sql);
            if($password_update_sql_run){
                echo "password updated";
            }else{
                echo "something went wrong,password not updated";
            }
        }
    } else {
        echo "Email not set in session."; // Handle case where email is not set
    }
}



?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.form1.oldpass.value=="")
{
alert(" Old Password Field Empty !!");
document.form1.oldpass.focus();
return false;
}
else if(document.form1.newpass.value=="")
{
alert(" New Password Field Empty !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value=="")
{
alert(" Re-Type Password Field Empty !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value.length<6)
{
alert(" Password Field length must be atleast of 6 characters !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value.length<6)
{
alert(" Re-Type Password Field less than 6 characters !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value!= document.form1.confirmpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.form1.newpass.focus();
return false;
}
return true;
}
</script>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3><b>Change Password</b></h3>	
            <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" name="form1" method="post" action="" onSubmit="return valid();">
                            <div class="panel panel-default">
                               
                             
                                <div class="panel-body">                                                                        
                                    <p align="center" style="color:#FF0000"></p>
                               <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label"><i>Current Password</i></label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="oldpass" id="oldpass" value="" class="form-control"/>
                                            </div>            
                                        
                                        </div>
                                    </div>
									
									
									  <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label " ><i>New Password</i></label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="newpass" id="newpass" value="" class="form-control"/>
                                            </div>            
                                          </div>
                                    </div>
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label font-weight-bold"><i>Confirm Password</i></label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="confirmpassword"  id="confirmpassword" class="form-control"/>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default btn btn-warning" >Clear Form</button>                                    
                                    <input type="submit" value="Change" name="change" class="btn btn-warning pull-right">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>                    
		</div>
    </div>
  </div>
  
<!-- BEGIN CHAT --> 


       
    </div>
</div>
 </div>

<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>


</html>