<?php
ob_start();
    include("config.php");
include("modal.php");
    //error_reporting(0);
    session_start();
//echo "welcome ".$_SESSION['email'];
$email = $_SESSION['admin'];
if($email==true)
{
	
}
else
{
	header('location:login.php');
	
}
    
    
    
                     /* $t=time();
                      if (isset($_SESSION['logged']) && ($t - $_SESSION['logged'] > 900)) {
                      session_destroy();
                      session_unset();
                      header('location:login.php');
                      }else {$_SESSION['logged'] = time();} */
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
     <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Panel</title>
    <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--Data Tables -->
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
    <script type="text/javascript" src="script/getData.js"></script>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" style="background-color:black">
     <div class="brand-logo">
      <a href="javaScript:void();">
       <img src="../assets/logo/mentoria-logo.jpg" class="logo-icon" alt="logo icon">
       <h5 class="logo-text" style="color:white">Admin Panel</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      
      <li>
        <a href="index.php" class="waves-effect">
          <i class="fa fa-home" style="color:white"></i> <span style="color:white">Dashboard</span> 
        </a>
        
      </li>
         
        
         
        
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-map" style="color:white"></i>
          <span style="color:white">Location</span> <i class="fa fa-angle-left pull-right" style="color:white"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="add-location" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Add Location</a></li>
            <li><a href="locations.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage Location</a></li>
        </ul>
      </li>
         
         
         <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-home" style="color:white"></i>
          <span style="color:white">Countries</span> <i class="fa fa-angle-left pull-right" style="color:white"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="add-country.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Add Country</a></li>
            <li><a href="manage-countries.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage Country</a></li>
            <!--<li><a href="manage-courses.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage Course</a></li>-->
            
            
        </ul>  
      </li>
        
         
         <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-home" style="color:white"></i>
          <span style="color:white">Universities</span> <i class="fa fa-angle-left pull-right" style="color:white"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="add-university.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Add University</a></li>
            <li><a href="manage-university.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage University</a></li>
            <li><a href="manage-university.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Add Course</a></li>
            <li><a href="manage-courses.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage Course</a></li>
            
        </ul>  
      </li>
         
         
         
   
        
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-rss" style="color:white"></i>
          <span style="color:white">Blogs</span> <i class="fa fa-angle-left pull-right" style="color:white"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="add-blogs.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Add Blog</a></li>
            <li><a href="manage-blogs.php" style="color:white"><i class="fa fa-circle-o" style="color:white"></i>Manage Blogs</a></li>
        </ul>
      </li>
         
       
         
         <li>
        <a href="assestment-form.php" class="waves-effect" style="color:white">
          <i class="fa fa-handshake-o" style="color:white"></i> <span>Assestment Form</span> 
        </a>
        
      </li> 
        
         
         
         <li>
        <a href="enquiry.php" class="waves-effect" style="color:white">
          <i class="fa fa-handshake-o" style="color:white"></i> <span>Enquiry</span> 
        </a>
        
      </li> 
         
         
         
         
          
         
        <li>
        <a href="add-admin.php" class="waves-effect" style="color:white">
          <i class="icon-user" style="color:white"></i> <span>Add Admin</span> 
        </a>
        
      </li>
         
         <li>
        <a href="manage-admin.php" class="waves-effect" style="color:white">
          <i class="icon-user" style="color:white"></i> <span>Manage Admin</span> 
        </a>
        
      </li>
         
         <li>
        <a href="add-home-url.php" class="waves-effect" style="color:white">
          <i class="icon-user" style="color:white"></i> <span>Update Home Url</span> 
        </a>
        
      </li>
         
         <li>
        <a href="logout.php" class="waves-effect" style="color:white">
          <i class="icon-power mr-2" style="color:white"></i> <span>Logout</span> 
        </a>
        
      </li>
         
      

      
      
    </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <!--<li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>-->
  </ul>
     
         
          
  <ul class="navbar-nav align-items-center right-nav-link">
    
    
      
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><i class="fa fa-user"></i></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Admin</h6>
            <p class="user-subtitle"><?php echo $email; ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        
        <li class="dropdown-divider"></li>
        
        <li class="dropdown-divider"></li>
        <a href="add-admin.php"><li class="dropdown-item"><i class="icon-user"></i> Add Admin</li>
            <li class="dropdown-divider"></li></a>
          
          
        <a href="logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->