<?php
include("header.php");
error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from blogs where id='$id'";
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
             <div class="card-header text-uppercase">Update Blogs</div>
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
				  <label for="basic-input" class="col-sm-3 col-form-label">Date / Month / Year</label>
				  <div class="col-sm-3">
					<select class="form-control" name="dte" required style="border-radius:350px">
                         <option value="" selected disabled>--Select Date--</option> 
                        
                      <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        
                      </select>
				  </div>
                     
                     <div class="col-sm-3">
					<select class="form-control" name="month" required  style="border-radius:350px">
                         <option value="" selected disabled>--Select Month--</option> 
                        
                      <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                      </select>
				  </div>
                     
                     <div class="col-sm-3">
					<select class="form-control" name="year" required  style="border-radius:350px">
                         <option value="" selected disabled>--Select Year--</option> 
                        
                      <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
				  </div>
                     
                     
				</div>
                     
                     
                     
                    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Description</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="descr"  style="border-radius:350px"><?php echo $row["descr"]; ?></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'descr' );
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
    $dte = filter_var($_POST['dte'], FILTER_SANITIZE_STRING);
    $month = filter_var($_POST['month'], FILTER_SANITIZE_STRING);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_STRING);
    $descr = $_POST['descr'];

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
            $folder = "../blog-photos/" . $filename;
            move_uploaded_file($tempname, $folder);
            $imageUploaded = true;
        }
    }

    if ($imageUploaded) {
        $sql = "UPDATE blogs SET title=?, dte=?, month=?, year=?, descr=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $title, $dte, $month, $year, $descr, $folder, $id);
    } else {
        $sql = "UPDATE blogs SET title=?, dte=?, month=?, year=?, descr=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $title, $dte, $month, $year, $descr, $id);
    }

    if ($stmt->execute()) {
    echo '<script type="text/javascript">
            swal({
                title: "Wow!",
                text: "Blog Updated Successfully",
                type: "success"
            }).then(function() {
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