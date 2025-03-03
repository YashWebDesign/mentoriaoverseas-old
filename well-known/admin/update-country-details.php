<?php
include("header.php");
error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from country where id='$id'";
				$result=mysqli_query($conn, $query);
				//while($row=mysqli_fetch_array($result))
				
if (!$result) {
    die(mysqli_error($conn));
}


	

?>

 <style type="text/css">
   /* Chrome, Safari, Edge, Opera number inout key removing*/
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield; 
</style>




<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     
    <!-- End Breadcrumb-->
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
            
          <div class="card">
             <div class="card-header text-uppercase">Update University Detail</div>
             <div class="card-body">
			
			 
                 
			 <?php
                 while($row=mysqli_fetch_array($result))
    
                 {
                     ?>
                 
                 
                 <form method="post" enctype="multipart/form-data" action="">
                     
                     
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Title</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="student_code" class="form-control"  value="<?php echo $row["title"]; ?>" name="title"  style="text-transform: capitalize;border-radius:350px">
                      <label id="msg2"></label>
				  </div>
                    
				</div>
                     
                   
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Country</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["country_name"]; ?>" name="country_name"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Intro</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="intro" required style="border-radius:350px"><?php echo $row["intro"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'intro' );
                 </script>
                     
                     
                     
                     
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Salary Per Annum</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["salary_per_annum"]; ?>" name="salary_per_annum"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
                    
				</div>    
                     
                   <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">No of Students</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["no_of_students"]; ?>" name="no_of_students"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
                    
				</div>    
                     
				
				<div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Global Ranking</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["ranking"]; ?>" name="ranking"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div>
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 1</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why1"  style="border-radius:350px"><?php echo $row["why1"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why1' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 2</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why2"  style="border-radius:350px"><?php echo $row["why2"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why2' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 3</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why3"  style="border-radius:350px"><?php echo $row["why3"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why3' );
                 </script>
                     
                     
                     
                     
                   <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Monthly Cost Of Living</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="cost_of_living_monthly"  style="border-radius:350px"><?php echo $row["cost_of_living_monthly"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'cost_of_living_monthly' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Yearly Cost Of Living</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="cost_of_living_yearly"  style="border-radius:350px"><?php echo $row["cost_of_living_yearly"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'cost_of_living_yearly' );
                 </script>
                   
                     
                     
                     
                     
                    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Overview</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="overview"  style="border-radius:350px"><?php echo $row["overview"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'overview' );
                 </script> 
                     
                     
                   
                   
				
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Image</label>
				  <div class="col-sm-9">
					<input type="file"  class="form-control"  name="image"  style="border-radius:350px">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Update Details" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
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

        
        
        
       
        <?php

include("modal.php");

if (isset($_REQUEST['submit'])) {

    // Collect and sanitize data
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $country_name = filter_var($_POST['country_name'], FILTER_SANITIZE_STRING);
    $intro = $_POST['intro'];
    $salary_per_annum = filter_var($_POST['salary_per_annum'], FILTER_SANITIZE_STRING);
    $no_of_students = filter_var($_POST['no_of_students'], FILTER_SANITIZE_STRING);
    $ranking = filter_var($_POST['ranking'], FILTER_SANITIZE_STRING);
    $why1 = $_POST['why1'];
    $why2 = $_POST['why2'];
    $why3 = $_POST['why3'];
    $cost_of_living_monthly = $_POST['cost_of_living_monthly'];
    $cost_of_living_yearly = $_POST['cost_of_living_yearly'];
    $overview = $_POST['overview']; 

    $imageUploaded = false;
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) { // Check if an image is uploaded without error
        $filename = $_FILES["image"]["name"];
        $extension = substr($filename, -4); // Shorter way to get extension

        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif", ".webp");

        if (!in_array($extension, $allowed_extensions)) {
            echo '<script type="text/javascript">
                swal({
                    title: "Sorry!",
                    text: "Invalid format. Only jpg / jpeg/ png /gif format allowed",
                    type: "info"
                }).then(function() {
                    window.history.go(-1);
                });
              </script>';
            exit; // stop execution if file type is not allowed
        } else {
            $tempname = $_FILES["image"]["tmp_name"];
            $filename = time() . $extension;
            $filename = preg_replace("/[^A-Za-z0-9.]/", "", $filename);
            $folder = "../countries/" . $filename;
            move_uploaded_file($tempname, $folder);
            $imageUploaded = true;
        }
    }

    if ($imageUploaded) {
        $sql = "UPDATE country SET title=?, country_name=?, intro=?, salary_per_annum=?, no_of_students=?, ranking=?, why1=?, why2=?, why3=?, cost_of_living_monthly=?, cost_of_living_yearly=?, overview=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssi", $title, $country_name, $intro, $salary_per_annum, $no_of_students, $ranking, $why1, $why2, $why3, $cost_of_living_monthly, $cost_of_living_yearly, $overview, $folder, $id);
    } else {
        $sql = "UPDATE country SET title=?, country_name=?, intro=?, salary_per_annum=?, no_of_students=?, ranking=?, why1=?, why2=?, why3=?, cost_of_living_monthly=?, cost_of_living_yearly=?, overview=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssi", $title, $country_name, $intro, $salary_per_annum, $no_of_students, $ranking, $why1, $why2, $why3, $cost_of_living_monthly, $cost_of_living_yearly, $overview, $id);
    }

    if ($stmt->execute()) {
        echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow !",
		      text: "Updated Successfully",
		      type: "success"
		    })';
       //echo'.then(function() {
    //window.location = "index.php";
//});';
        echo'.then(function() {
    window.history.go(-1);
});';
		echo '</script>';
        
    } 
    
    
    else {
        echo '<script language="javascript">
                alert("Something Went Wrong");
              </script>';
    }
}
?>

        
        
	  <div class="overlay toggle-menu"></div>
    </div>
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<?php
include("footer.php");
?>