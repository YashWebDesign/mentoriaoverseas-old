<?php
ob_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
    <div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-3">
		 	<div class="text-center">
					 		<img src="../assets/logo/elogo.png" style="width:60px">
					 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		   
                         <form action="" method="post">
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							   <label for="exampleInputUsername" class="sr-only">Email</label>
								 <input type="email" id="exampleInputUsername" class="form-control" placeholder="Email" name="email" style="border-radius:300px;">
								 <div class="form-control-position">
									<i class="icon-user"></i>
								</div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" class="form-control" placeholder="Password" name="password" style="border-radius:300px;">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <!--<div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-primary">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
							<div class="form-group col-6 text-right">
							 <a href="authentication-reset-password2.html">Reset Password</a>
							</div>
						</div>-->
						<input type="submit" class="btn btn-outline-primary btn-block waves-effect waves-light" name="submit" value="Sign In" style="border-radius:300px;background-color:#ff5c6c;color:white;border:white">
						 
					</form>
             
             <form method="post" action="">
             
             <input type="submit" value="delete" name="delete" style="background-color:white;border:white;color:white">
             </form>
		   </div>
		  </div>
	     </div>
	     </div>
     
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    
	</div>
	
    
    
     
     
     
      <?php




//error_reporting(0);
include ("modal.php");
session_start();

	
	if(isset($_POST['submit']))
{		
        
            //$sql = "SELECT * FROM admin WHERE email='$email' && password='$password'";
        
           
        
            $sql = "select * from admin where email=? && password=?";
            $stmt = $conn->prepare($sql); 
        
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $email = mysqli_real_escape_string($conn, $email);
            
            
            $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
            $password = mysqli_real_escape_string($conn, $password);
            $password=md5($password);
        
        
             mysqli_stmt_bind_param($stmt, "ss", $email,$password);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
			
			 $total = mysqli_num_rows($result);
			//echo $total; (to check true or false )
			if ($total==1)
			{
				$_SESSION['admin']=$email;
                
				header('location:index.php');
			}
			else
			{
				echo '<script type="text/javascript">';
		echo 'swal({
		      title: "OOPS!",
		      text: "Invalid Login Details",
		      type: "error"
		    })';
      
		echo '</script>';
			}
		
    }
		
	?>

     
     
     
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
</body>


</html>
