<?php
include("header.php");
error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from course where id='$id'";
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
             <div class="card-header text-uppercase">Update course Detail</div>
             <div class="card-body">
			
			 
                 
			 <?php
                 while($row=mysqli_fetch_array($result))
    
                 {
                     ?>
                 
                 
                 <form method="post" enctype="multipart/form-data" action="">
                     
                     
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Name</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="student_code" class="form-control"  value="<?php echo $row["course_name"]; ?>" name="course_name"  style="text-transform: capitalize;border-radius:350px">
                      <label id="msg2"></label>
				  </div>
                    
				</div>
                     
                   
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Intakes</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["intakes"]; ?>" name="intakes"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Duration</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  value="<?php echo $row["duration"]; ?>" name="duration"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
                    
				</div>    
                     
				
				<div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">campus</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["campus"]; ?>" name="campus"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">url</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["url"]; ?>" name="url"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Application Deadline</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["application_deadline"]; ?>" name="application_deadline"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     
                  <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Application Fee</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["application_fee"]; ?>" name="application_fee"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     
                     
                     
                      <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Yearly Tuition Fee</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["yearly_tuition_fee"]; ?>" name="yearly_tuition_fee"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                   
				 <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">ielts overall</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["ielts_overall"]; ?>" name="ielts_overall"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">ielts no band less than</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["ielts_no_band_less_than"]; ?>" name="ielts_no_band_less_than"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">test requirements</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["test_requirements"]; ?>" name="test_requirements"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">entry requirements</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["entry_requirements"]; ?>" name="entry_requirements"  style="text-transform: capitalize;border-radius:350px" >
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">remarks</label>
				  <div class="col-sm-9">
					<input type="text" id="placeholder-input" class="form-control"  value="<?php echo $row["remarks"]; ?>" name="remarks"  style="text-transform: capitalize;border-radius:350px" >
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
    $course_name = filter_var($_POST['course_name'], FILTER_SANITIZE_STRING);
    $intakes = filter_var($_POST['intakes'], FILTER_SANITIZE_STRING);
    $duration = filter_var($_POST['duration'], FILTER_SANITIZE_STRING);
    $campus = filter_var($_POST['campus'], FILTER_SANITIZE_STRING);
    $url = filter_var($_POST['url'], FILTER_SANITIZE_STRING);
    $application_deadline = filter_var($_POST['application_deadline'], FILTER_SANITIZE_STRING);
    $application_fee = filter_var($_POST['application_fee'], FILTER_SANITIZE_STRING);
    $yearly_tuition_fee = filter_var($_POST['yearly_tuition_fee'], FILTER_SANITIZE_STRING);
    $ielts_overall = filter_var($_POST['ielts_overall'], FILTER_SANITIZE_STRING);
    $ielts_no_band_less_than = filter_var($_POST['ielts_no_band_less_than'], FILTER_SANITIZE_STRING);
    $test_requirements = filter_var($_POST['test_requirements'], FILTER_SANITIZE_STRING);
    $entry_requirements = filter_var($_POST['entry_requirements'], FILTER_SANITIZE_STRING);
     $remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);   
      //$pte_overall = filter_var($_POST['pte_overall'], FILTER_SANITIZE_STRING);   
        
       
        $sql = "UPDATE course SET course_name=?, intakes=?, duration=?, campus=?, url=?, application_deadline=?, application_fee=?, yearly_tuition_fee=?, ielts_overall=?, ielts_no_band_less_than=?, test_requirements=?, entry_requirements=?, remarks=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssi", $course_name, $intakes, $duration, $campus, $url, $application_deadline, $application_fee, $yearly_tuition_fee,$ielts_overall,$ielts_no_band_less_than,$test_requirements,$entry_requirements,$remarks,$id);
    
   

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
                swal({
                    title: "Wow!",
                    text: "Course Updated Successfully",
                    type: "success"
                });
              </script>';
    } else {
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