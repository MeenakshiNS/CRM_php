 <?php include_once('./dbconnection.php');
 session_start();
//  echo $_SESSION['name'];
//  echo "console.log('" . $_SESSION['name'] . "')";
include ('./checklogin.php');
check_login();
 ?>
 
 <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper" style="border:solid #fff 1px;"> <img src="../admin/images.png"  alt="" data-src="../admin/images.png" data-src-retina="../admin/images.png" width="69" height="69"  /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username"><?php echo $_SESSION['name']?></div>

        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title"> <span style="color:orange">BROWSE</span> <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>

    <ul>	
      <li class="start"> <a href="home.php"> <i class="icon-custom-home"></i> <span class="title"><span style="color:orange">Dasboard</span></span>  </a> 
		    </li>
    
          <li><a href="change-password.php"><span class="fa fa-file-text-o"></span><span style="color:orange">Change Password</span></a></li>
                            <li><a href="manage-users.php"><span class="fa fa-users"></span><span style="color:orange">Users</span> </a></li>
                          <li><a href="manage-tickets.php"><span class="fa fa-ticket"></span><span style="color:orange">Manage Ticket</span></a></li>
                              <li ><a href="manage-quotes.php"> <span class="fa fa-tasks"></span> <span style="color:orange">Manage Quotes</span></a></li> 
                            <li><a href="user-access-log.php"><span class="fa fa-users"></span>&nbsp;&nbsp;<span style="color:orange">User Acces Log</span></a></li>
                             
							    
                          
							
                           
    </ul>