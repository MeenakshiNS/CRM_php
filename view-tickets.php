<?php include_once('./dbconnection.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>User | Ticket Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  <?php include("leftbar.php");?>
    <div class="clearfix"></div>
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
      <ul class="breadcrumb">
        <li>
          <p>Home</p> 
        </li>
        <li><a href="#" class="active">View Ticket</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Ticket Support</h3>
      </div>
      <div class="clearfix"></div>
      
      <h4> <span class="semi-bold">Tickets</span></h4>
      <br>
      <?php
      $sql_view_ticket="SELECT * FROM ticket WHERE email_id='$_SESSION[email]'";
      $sql_view_ticket_run=mysqli_query($conn,$sql_view_ticket);
      // print_r($sql_view_ticket_row);
      $sql_view_ticket_total=mysqli_num_rows( $sql_view_ticket_run);
      echo $sql_view_ticket_total;

      if($sql_view_ticket_total>0){
        while($sql_view_ticket_row=mysqli_fetch_array($sql_view_ticket_run)){

    

      ?>
    
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold"><?php echo $sql_view_ticket_row['subject']  ?></h4>
              <p ><span class="text-success bold">Ticket #<?php echo $sql_view_ticket_row['ticket_id'] ?></span> - Created on <?php echo $sql_view_ticket_row['posting_date'] ?>
             <span class="label label-important"><?php echo $sql_view_ticket_row['status'] ?></span></p>
              <div class="actions"> <a class="view" href="javascript:;"><i class="fa fa-search"></i></a>  </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/user.jpeg" data-src="assets/img/user.jpeg" src="assets/img/user.jpeg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"><?php echo $sql_view_ticket_row['ticket']  ?> </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>

              
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="./admin/images.png"
                     data-src="assets/img/admin.png" src="./admin/images.png" alt="Admin"> </div>
                  </div>
                  <div class="info-wrapper">
                  <?php echo $sql_view_ticket_row['admin_remark'] ?>
 
                      <br>
                     
                      <hr>
                      <p class="small-text">Posted on :<?php echo $sql_view_ticket_row['admin_remark_date'] ?></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
             

              </div>
            </div>
           
<?php
      }
    }else{
?>
              
<h3 align="center" style="color:red;">No Record found</h3>
<?php
}
?>
               
          </div>
        </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- BEGIN CHAT --> 

</div>


<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/support_ticket.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>