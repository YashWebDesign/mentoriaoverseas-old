<?php

include("header.php");

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
        
    
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card">
             <div class="card-header text-uppercase">Add Admin</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Email</label>
				  <div class="col-sm-9">
					<input type="email" id="placeholder-input" class="form-control" placeholder="Enter Email" name="email" required style="border-radius:350px">
				  </div>
				</div>
                 
                      
				
              <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Password</label>
				  <div class="col-sm-9">
					<input type="password" id="placeholder-input" class="form-control" placeholder="Enter Password" name="password" required style="border-radius:350px">
				  </div>
				</div>
				
				
                 
                 
                 
                 
				
				<div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Add Admin" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>
				
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->

        
        
        
        
        
          <?php
          
          if(isset($_REQUEST['submit'])) {   
          

  $email = $_POST['email'];
  $password = $_POST['password'];
              $password=md5($password);
  
  
   
    
 
 
 
 $query="insert into admin 
 (email,password)
 values 
     ('$email','$password')";
   $data = mysqli_query($conn, $query);
   
   if($data)
   {
       
      echo '<script language="javascript">';
echo 'alert("Admin Has Been Added Successfully")';
echo '</script>'; 
       
       
   }
           

            else
            {
                echo '<script language="javascript">';
echo 'alert("Something Went Wrong")';
echo '</script>';
            }
 
     
          }

?>

        
        
	  
      
	   <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<?php
include("footer.php");
?>