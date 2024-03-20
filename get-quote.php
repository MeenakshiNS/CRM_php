<?php include_once('./dbconnection.php');
session_start();
if(isset($_POST['submit']))
{

  $name = $contact = $email = $company = $wdnd = $seo = $swd = $fwd = '';
$whs = $ed = $opi = $dba = $nd = $cms = $smo = $dwd = $dr = '';
$wm = $wta = $ld = $osc = $other = $query = '';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $company=$_POST['company'];
    $wdd=isset($_POST['wdnd']) ? $_POST['wdnd'] : '';
    $seo = isset($_POST['seo']) ? $_POST['seo'] : '';
    $swd=isset($_POST['swd']) ? $_POST['swd'] : '';
    $fwd=isset($_POST['fwd']) ? $_POST['fwd'] : '';
    $whs=isset($_POST['whs']) ? $_POST['whs'] : '';
    $ed=isset($_POST['ed']) ? $_POST['ed'] : '';
    $opi=isset($_POST['opi']) ? $_POST['opi'] : '';
    $dba=isset($_POST['dba']) ? $_POST['dba'] : '';
    $nd=isset($_POST['nd']) ? $_POST['nd'] : '';
    $cms=isset($_POST['cms']) ? $_POST['cms'] : '';
    $smo=isset($_POST['smo']) ? $_POST['smo'] : '';
    $dwd=isset($_POST['dwd']) ? $_POST['dwd'] : '';
    $dr=isset($_POST['dr']) ? $_POST['dr'] : '';
    $wm=isset($_POST['wm']) ? $_POST['wm'] : '';
    $wta=isset($_POST['wta']) ? $_POST['wta'] : '';
    $ld=isset($_POST['ld']) ? $_POST['ld'] : '';
    $osc=isset($_POST['osc']) ? $_POST['osc'] : '';
    $other=isset($_POST['other'])? $_POST['other'] : '';
     $query=$_POST['query'];
    $pd=date('Y-m-d');
$prequest_query="INSERT INTO prequest(name,email,contact,company,wdd,cms,seo,smo,swd,dwd,fwd,dr,whs,wm,ed,wta,opi,ld,da,osc,nd,others,query,posting_date) values('$name','$email','$contact','$company','$wdd','$cms','$seo','$smo','$swd','$dwd','$fwd','$dr','$whs','$wm','$ed','$wta','$opi','$ld','$dba','$osc','$nd','$other','$query','$pd') ";
   
  $prequest_query_run=mysqli_query($conn,$prequest_query);

 if($prequest_query_run){
  ?>
      <script>alert('query inserted successfully')</script>"; 
      <?php
  }else{
      echo "query not inserted";
  }
}


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Request Quote</title>
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
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
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
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
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
			<h3><b>Request Service</b></h3>
     
	
             <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <div class="panel panel-default">
                             
                                <div class="panel-body">
                                    <p>Please click below mention services of your interest to receive quotation for the same:</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                         

    <div class="form-group">
     <label class="col-md-3 control-label">Name </label>
    <div class="col-md-9">                                            
    <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
         <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>" readonly="true" />
          </div>                                            
                                                
        </div>
       </div>

       <?php
       $get_query="SELECT * FROM user WHERE email='$_SESSION[email]'";
       $get_query_run=mysqli_query($conn,$get_query);
       $get_row=mysqli_fetch_assoc( $get_query_run );

       ?>
                                            
        <div class="form-group">                                        
   <label class="col-md-3 control-label">Contact no</label>
  <div class="col-md-9 col-xs-12">
  <div class="input-group">
   <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
    <input type="text" name="contact" class="form-control" value="<?php echo $get_row['mobile']  ?>" readonly="true"/>
     </div>            
       </div>
     </div>
                                      
                                            
                                            
<div class="form-group">
<label class="col-md-3 control-label">Service Required :</label>
    <div class="col-md-9">                                                                                                                                        
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wdnd" value="Website Design & Development" checked="checked"/> Website Design & Development</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="seo" value="SEO (Search Engine Optimization)" />SEO (Search Engine Optimization)	</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="swd" value="Static Website Design" /> Static Website Design</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="fwd" value="Flash Website Development" /> Flash Website Development</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="whs" value="Web Hosting Services" /> Web Hosting Services</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ed"  value="Ecommerce Development"/> Ecommerce Development</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="opi" value="Online Payment Integration" /> Online Payment Integration</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dba" value="Dash board Application" /> Dash board Application</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="nd" value="NewsLetter Design" /> NewsLetter Design</label>
                                                
                                                  
                                                </div>
                                            </div>
                                            
                                          
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']  ?>" readonly="true">                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            
                                               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Company</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="company" class="form-control datepicker" value="" required>                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                       
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                                                                                                        
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="cms" value="CMS (Content Management System)" />CMS (Content Management System)</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="smo" value="SMO (Social Media Optimization)	" />SMO (Social Media Optimization)		</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dwd" value="Dynamic Website Design" /> Dynamic Website Design</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dr" value="Domain Registration" /> Domain Registration </label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wm" value="Website Maintenance" /> Website Maintenance</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wta" value="Walk Through Animation" /> Walk Through Animation</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ld" value="Logo Design" /> Logo Design</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="osc" value="Open Source Customization" /> Open Source Customization</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="other" value="Others" /> Others </label>
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div style="margin-top:20px;" class="col-md-6">
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Query</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="query" required></textarea>
                                                </div>
                                            </div></div>
                                        
                                    </div>
   
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default btn btn-warning ">Clear Form</button>                                    
                                    <input value="Submit" type="submit" name="submit" class="btn btn-warning pull-right">
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