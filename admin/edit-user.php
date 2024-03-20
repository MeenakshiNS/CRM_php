<?php include_once('./dbconnection.php');
$id= $_GET['id'];  
$query="SELECT * FROM user WHERE id='$id'";
$query_run=mysqli_query( $conn, $query );
$query_array=mysqli_fetch_assoc($query_run);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <link href="../assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="../assets/plugins/owl-carousel/owl.theme.css" />
<link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="../assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="../assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
       <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/plugins/morris.css" rel="stylesheet">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
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
			<h3><b><?php echo $query_array['name']?></b><strong>'s Profile </storng></h3>
              <div class="row">
                        <div class="col-md-12"> 
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>EDIT <?php echo $query_array['name']?>'s PROFILE</h3>
                                   <div align="right">
                                        Registration Date :<?php echo $query_array['posting_date']?>
                                    </div>
                                </div>
                             
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="name" value="<?php echo $query_array['name']?>" class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Email </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="email" value="<?php echo $query_array['email']?>" class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
									 
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contact no </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  name="phone" value="<?php echo $query_array['mobile']?>"  maxlength="10" class="form-control"/>
                                            </div>                                            

                                      
                                        </div>
                                    </div>
									
                                </div>
								
                                <div class="panel-footer">
                                    <button class="btn btn-default btn btn-warning " type="reset">Clear Form</button>                                    
                                    <input type="submit" value="Update" name="update" class="btn btn-warning pull-right">

                                    <?php

                                    if(isset($_POST['update'])){
                                      $name= $_POST["name"];
                                      $email=$_POST["email"];
                                      $phone =$_POST["phone"];

                                      $update_byadmin_sql="UPDATE user SET name='$name',email='$email',mobile='$phone' WHERE id='$id'";
                                      $update_byadmin_sql_run=mysqli_query($conn,$update_byadmin_sql);
                                      if($update_byadmin_sql_run){
                                        echo "admin updated users profile";
                                      }else{
                                        echo "error in updation";
                                      }
                                    }

                                    ?>
                                    
                                </div>
                            </div>
                            </form>   
                        </div>
                    </div>                                       
             
            	
		</div>
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