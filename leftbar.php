<?php include_once('./dbconnection.php');
session_start();
 include ('./checklogin.php');
check_login();

?>


 <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="assets/img/user.jpeg"  alt="" data-src="assets/img/user.jpeg" data-src-retina="assets/img/user.jpeg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting" style="font-size:14px;">Welcome</div>
          <div class="username" style="font-size:12px;"><i><?php echo $_SESSION['name']?></i></div>
          <div class="status" style="font-size:10px;"><a href="#">
            <div class="status-icon green"></div>
           <i>Online</i> </a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title" >BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
   
    <ul>	
      <li class="start"> <a href="dashboard.php"> <i class="icon-custom-home " ></i> <span class="title" style="color:orange">Dashboard</span> <span class="selected"></span>  </a> 
		    </li>
    
          <li><a href="change-password.php" ><span class="fa fa-file-text-o" ></span> <span style="color:orange">Change Password</span> </a></li>
                            <li><a href="profile.php"><span class="fa fa-user"></span> <span style="color:orange">profile</span></a></li>
                         
                            
                              <li ><a href="get-quote.php"> <span class="fa fa-tasks"></span><span style="color:orange">Request service</span></a></li>
							     <li ><a href="create-ticket.php"><span class="fa fa-ticket"></span> <span style="color:orange">Create Ticket </span> </a></li>
                                <li ><a href="view-tickets.php"><span class="fa fa-ticket"></span><span style="color:orange">view Ticket </span></a></li>
                           
    </ul>
    
	