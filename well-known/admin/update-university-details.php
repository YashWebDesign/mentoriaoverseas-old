<?php
include("header.php");
error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from universites where id='$id'";
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
				  <label for="basic-input" class="col-sm-3 col-form-label">Name</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="student_code" class="form-control"  value="<?php echo $row["title"]; ?>" name="title"  style="text-transform: capitalize;border-radius:350px">
                      <label id="msg2"></label>
				  </div>
                    
				</div>
                     
                   
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Heading</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["heading"]; ?>" name="heading"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Rank</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["rank"]; ?>" name="rank"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
                    
				</div>    
                     
				
				<div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Intake</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["intake"]; ?>" name="intake"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Cost of living</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["cost_of_living"]; ?>" name="cost_of_living"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Tuition fee</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["tuition_fee"]; ?>" name="tuition_fee"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     
                     
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
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Location</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["area"]; ?>" name="area"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                   
				
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
    $heading = filter_var($_POST['heading'], FILTER_SANITIZE_STRING);
    $area = filter_var($_POST['area'], FILTER_SANITIZE_STRING);
    $rank = filter_var($_POST['rank'], FILTER_SANITIZE_STRING);
    $intake = filter_var($_POST['intake'], FILTER_SANITIZE_STRING);
    $cost_of_living = filter_var($_POST['cost_of_living'], FILTER_SANITIZE_STRING);
    $tuition_fee = filter_var($_POST['tuition_fee'], FILTER_SANITIZE_STRING);
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
            $folder = "../university/" . $filename;
            move_uploaded_file($tempname, $folder);
            $imageUploaded = true;
        }
    }

    if ($imageUploaded) {
        $sql = "UPDATE universites SET title=?, heading=?, area=?, rank=?, intake=?, cost_of_living=?, tuition_fee=?, overview=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssi", $title, $heading, $area, $rank, $intake, $cost_of_living, $tuition_fee, $overview, $folder, $id);
    } else {
        $sql = "UPDATE universites SET title=?, heading=?, area=?, rank=?, intake=?, cost_of_living=?, tuition_fee=?, overview=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssi", $title, $heading, $area, $rank, $intake, $cost_of_living, $tuition_fee, $overview, $id);
    }

    if ($stmt->execute()) 
    {
        echo '<script type="text/javascript">
                swal({
                    title: "Wow!",
                    text: "University Updated Successfully",
                    type: "success"
                })
                .then(function() {
                window.history.go(-1);
            });
              </script>';
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