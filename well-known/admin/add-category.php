<?php

include("header.php");

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
        
    
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card">
             <div class="card-header text-uppercase">Add Category</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
                 
                 
                 
                 
                 <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label"> Category</label>
				  <div class="col-sm-9">
                      <input type="text" id="placeholder-input" class="form-control" name="category" required  style="border-radius:350px">
				  </div>
				</div>
                 <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label"> Image</label>
				  <div class="col-sm-9">
                      <input type="file"  class="form-control" name="image" required  style="border-radius:350px" id="fileName">
				  </div>
				</div>
                 <!-- CV Size validation-->  
                 <script>                                    
var uploadField = document.getElementById("fileName");
uploadField.onchange = function() {
    if(this.files[0].size > 500000){
       alert("File is too big File should not be more than 500 KB in Size!");
       this.value = "";
    };
};
</script>
<!-- CV Size validation-->    
                 <div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Add Records" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
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
$category = $_POST['category'];
              
$filename =$_FILES["image"]["name"];
      $tempname =$_FILES["image"]["tmp_name"];
      $folder="../cat_image/".$filename;
      move_uploaded_file($tempname, $folder); 
              
$query="insert into category_menu 
    (category,image)
    values ('$category','$folder')";
   $data = mysqli_query($conn, $query);
   
   if($data)
   {
     echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Hello!",
		      text: "Catgory Added Succesfully",
		      type: "success"
		    })';
       //echo'.then(function() {
    //window.location = "manage-course";
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