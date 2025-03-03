<?php

include("header.php");

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
        
    
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card">
             <div class="card-header text-uppercase">Add Home URL</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">URL</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  name="home_url" required style="border-radius:350px">
				  </div>
				</div>
                 
              
                 
				
				<div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Update URL" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>
				
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->

        
        
        
        
        
      <?php

          include("modal.php");
          if(isset($_REQUEST['submit'])) 
          
          
          {
       
      $home_url = filter_var($_POST['home_url'], FILTER_SANITIZE_STRING);        
              
     $sql = "UPDATE url SET home_url=? ";
     $stmt = $conn->prepare($sql); 
              
              
  
    //$home_url = filter_var($_POST['home_url'],FILTER_SANITIZE_STRING);
    //$home_url = mysqli_real_escape_string($conn, $home_url);  
              
 
    
$stmt->bind_param("s", $home_url);
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "Home Url Updated Added Successfully",
		      type: "success"
		    })';
      //echo'.then(function() {
    //window.history.go(-1);
//});';
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