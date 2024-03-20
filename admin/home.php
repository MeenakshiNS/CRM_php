<?php include_once('./dbconnection.php');
// session_start(); 
// echo "console.log('" . $_SESSION['name'] . "')";


//overall visitors
$overall_visit="SELECT * FROM usercheck";
$overall_visit_run=mysqli_query($conn,$overall_visit);
$overall_visit_num=mysqli_num_rows($overall_visit_run);

//todays overall visitors
$date=date("Y/m/d");
$overall_visit_today="SELECT * FROM usercheck WHERE  logindate='$date' ";
// echo $overall_visit_today;
$overall_visit_run_today=mysqli_query($conn,$overall_visit_today);
$overall_visit_num_today=mysqli_num_rows($overall_visit_run_today);
// echo $overall_visit_num_today;

//registered users
$registered_users="SELECT * FROM user";
$registered_users_run=mysqli_query($conn,$registered_users);
$registered_users_num=mysqli_num_rows($registered_users_run);

//today registered
$date=date('Y-m-d');
$registered_today="SELECT * FROM user WHERE  posting_date='$date' ";
echo $registered_today;
$registered_run_today=mysqli_query($conn,$registered_today);
$registered_num_today=mysqli_num_rows($registered_run_today);
// echo $overall_visit_num_today;

//overall quotes
$overall_quotes="SELECT * FROM prequest";
$overall_quotes_run=mysqli_query($conn,$overall_quotes);
$overall_quotes_num=mysqli_num_rows($overall_quotes_run);

//todays quotes
$date=date("Y/m/d");
$overall_quotes_today="SELECT * FROM prequest WHERE  posting_date='$date' ";
// echo $overall_visit_today;
$overall_quotes_run_today=mysqli_query($conn,$overall_quotes_today);
$overall_quotes_num_today=mysqli_num_rows($overall_quotes_run_today);

//not replied quotes
$not_replied="SELECT * FROM prequest WHERE remark='' ";
$not_replied_run=mysqli_query($conn,$not_replied);
$not_replied_num=mysqli_num_rows($not_replied_run);

//overall tickets
$total_tickets="SELECT * FROM  ticket";
$ticket_run=mysqli_query($conn,$total_tickets);
$totaltickets_num=mysqli_num_rows($ticket_run);

//pending tickets
$pending_tickets="SELECT * FROM ticket WHERE status = ''";
$pendings= mysqli_query($conn, $pending_tickets);
$pending_num=mysqli_num_rows($pendings);

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
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  
      <?php include("leftbar.php");?>
    
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
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
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
	   <!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles green m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Overall Visitors </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                     
						<span class="item-title">Overall Visitors</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $overall_visit_num?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                      			
									
						
						<span class="item-title">Today</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $overall_visit_num_today ?>" data-animation-duration="700">0</span> 								
									
								
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles blue m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Registered Users  </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent">
                     
						<span class="item-title">Registered Users</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $registered_users_num?>" data-     animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                    
						<span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $registered_num_today?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
		</div>
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles purple m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Quote Requests </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                   
						<span class="item-title">Overall Quotes</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $overall_quotes_num?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats">
                      <div class="wrapper transparent">
                  
						<span class="item-title">Todays Quotes's</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $overall_quotes_num_today?>" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                     
						<span class="item-title">Not replied</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $not_replied_num ?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                  
                    
			  </div>			
			</div>	
		</div>	
        
        
        
        
   <div class="row">	 
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles red m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Overall Tickets </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                     
						<span class="item-title">All Tickets</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $totaltickets_num ?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                   
									
									
						
						<span class="item-title">Pending Tickets</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $pending_num?>" data-animation-duration="700">0</span> 									
									
									
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
	
        </div>     
		
	 </div>
	  <!-- END DASHBOARD TILES -->
           <!-- START DASHBOARD CHART -->



                    <div class="col-lg-12" style="min-height:280px;">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> All User Visit </h3>
								
								<script type="text/javascript">
								var visitorsCount = [];
								var myCat =[];
								</script>
								
										<script type="text/javascript">
										// var myKey = "Day " + '<?php echo $i; ?>';
										
										// myCat.push(myKey);
										</script>
								
											
											
										
									<script type="text/javascript">
									visitorsCount.push(value);
									</script>
								
									
								
										
							
								<script type="text/javascript">
								var d = new Date();
								var month = new Array();
								month[0] = "January";
								month[1] = "February";
								month[2] = "March";
								month[3] = "April";
								month[4] = "May";
								month[5] = "June";
								month[6] = "July";
								month[7] = "August";
								month[8] = "September";
								month[9] = "October";
								month[10] = "November";
								month[11] = "December";
								var n = month[d.getMonth()];
								$(function () {
								$('#container').highcharts({
									title: {
										text: 'Daily Visitors Chart of ' + n,
										x: -20 //center
									},
									subtitle: {
										text: '',
										x: -20
									},
									xAxis: {
										categories: myCat
									},
									yAxis: {
										min:0,
										title: {
											text: 'Visitors Count'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: ' Users'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'visitorsCount',
										data: visitorsCount
									}]
								});
							});
								</script>
								<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
             
                    <!-- END DASHBOARD CHART --> 
			
               
          
		  </div></div>
<!-- BEGIN CHAT --> 
	  
</div>
<script src="../assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="../assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="../assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="../assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="../assets/plugins/skycons/skycons.js"></script>
<script src="../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="../text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="../assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
<script src="assets/plugins/Mapplic/js/jquery.easing.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/js/hammer.js" type="text/javascript"></script>
<script src="../assets/plugins/Mapplic/mapplic/mapplic.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript" ></script>
<script src="../assets/js/core.js" type="text/javascript"></script>
<script src="../assets/js/chat.js" type="text/javascript"></script>
<script src="../assets/js/demo.js" type="text/javascript"></script>
<script src="../assets/js/dashboard_v2.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
</script>
</body>
</html>
