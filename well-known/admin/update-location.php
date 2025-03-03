<?php
include("header.php");
//error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from location where id=$id";
				$result=mysqli_query($conn, $query);
				//while($row=mysqli_fetch_array($result))
				
if (!$result) {
    die(mysqli_error($conn));
}


	

?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     
    <!-- End Breadcrumb-->
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
            
          <div class="card">
             <div class="card-header text-uppercase">Update Location</div>
             <div class="card-body">
			
			 
                 
			 <?php
                 while($row=mysqli_fetch_array($result))
    
                 {
                     ?>
                 
                 
                 <form method="post">
                 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Location</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["location_name"]; ?>" name="location_name"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
				
				
				
				
              
				
				<div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Update" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>
				
               
                 
			 </form>
                     
                 
                    
                  <?php
                 }
                 ?>
                 
                
             </div>
          </div>
            
        </div>
      </div><!--End Row-->

        
        
        
        <!--appointment--code-->
        
         <?php
        
        
          if(isset($_REQUEST['submit'])) {   
          
error_reporting(0);
    //Connection to MySQL
   //include("config.php");


     $location_name = $_POST['location_name'];
  
  
  
$query="update location SET location_name='$location_name'  where id='$id'";
    
              $data = mysqli_query($conn, $query);
    
   if($data)
   {
       
      echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Hello!",
		      text: "Location Updated Succesfully",
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

        
        <!--appointment code-->
        
        
        
        
        
	  
      
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