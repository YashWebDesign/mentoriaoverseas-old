<?php

include("header.php");

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
        
    
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card">
             <div class="card-header text-uppercase">Add Location</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
                 
                 
                 
                 
                 <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label"> Location</label>
				  <div class="col-sm-9">
                      <input type="text" id="placeholder-input" class="form-control" name="location_name" required  style="border-radius:350px">
				  </div>
				</div>
                 <div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Add Location" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>
                      
                
				
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->

        
        
        
        
        
          <?php
          
          if(isset($_REQUEST['submit'])) {   
          
//error_reporting(0);
$location_name = $_POST['location_name'];
$query="insert into location 
    (location_name)
    values ('$location_name')";
   $data = mysqli_query($conn, $query);
   
   if($data)
   {
     echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Hello!",
		      text: "Location Added Succesfully",
		      type: "success"
		    })';
       echo'.then(function() {
    window.history.go(-1);
});';
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