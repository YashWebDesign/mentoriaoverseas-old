<?php
include("header.php");
//error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from universites where id=$id";
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
             <div class="card-header text-uppercase">Add Course</div>
             <div class="card-body">
			
			 
                 
			 <?php
                 while($row=mysqli_fetch_array($result))
    
                 {
                     ?>
                 
                 
                 <form method="post">
                     
                     <input type="hidden" id="basic-input" class="form-control"  value="<?php echo $row["id"]; ?>" name="uid"  style="border-radius:350px">
                     <input type="hidden" id="basic-input" class="form-control"  value="<?php echo $row["title"]; ?>" name="university"  style="border-radius:350px">
                     
                     <input type="hidden" id="basic-input" class="form-control"  value="<?php echo $row["area"]; ?>" name="location"  style="border-radius:350px">
                     
                    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Course Name</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="course_name"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Intakes</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="intakes"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Duration</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="duration"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Campus</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="campus"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Course URL</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="url"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Application Deadline</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="application_deadline"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Application Fee</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="application_fee"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Year Tuition Fee</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="yearly_tuition_fee"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">IELTS Overall</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="ielts_overall"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">IELTS no Band Less Than</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="ielts_no_band_less_than"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Test Requirement</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="test_requirements"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Entry Requirements</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="entry_requirements"  style="text-transform: capitalize;border-radius:350px">
				  </div>
                    
				</div>
                     
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Remarks</label>
                    
				  <div class="col-sm-9">
					<input type="text" id="basic-input" class="form-control"  name="remarks"  style="text-transform: capitalize;border-radius:350px">
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

        
        
        
        <?php

          include("modal.php");
          if(isset($_REQUEST['submit'])) 
          
          
          {
              
     $sql = "INSERT INTO course (course_name,uid,university,location,intakes,duration,campus,url,application_deadline,application_fee,yearly_tuition_fee,ielts_overall,ielts_no_band_less_than,test_requirements,entry_requirements,remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql); 
              
     $course_name = filter_var($_POST['course_name'],FILTER_SANITIZE_STRING);
    $course_name = mysqli_real_escape_string($conn, $course_name);         
  
    //$uid = filter_var($_POST['uid'],FILTER_SANITIZE_STRING);
    //$uid = mysqli_real_escape_string($conn, $uid);  
              
    //$university = filter_var($_POST['university'],FILTER_SANITIZE_STRING);
    //$university = mysqli_real_escape_string($conn, $university);  
              
     //$location = filter_var($_POST['location'],FILTER_SANITIZE_STRING);
    //$location = mysqli_real_escape_string($conn, $location);  
              
    $intakes = filter_var($_POST['intakes'],FILTER_SANITIZE_STRING);
    $intakes = mysqli_real_escape_string($conn, $intakes);  
              
     $duration = filter_var($_POST['duration'],FILTER_SANITIZE_STRING);
    $duration = mysqli_real_escape_string($conn, $duration);
                       
    $campus = filter_var($_POST['campus'],FILTER_SANITIZE_STRING);
    $campus = mysqli_real_escape_string($conn, $campus); 
              
    $url = filter_var($_POST['url'],FILTER_SANITIZE_STRING);
    $url = mysqli_real_escape_string($conn, $url);
              
    $application_deadline = filter_var($_POST['application_deadline'],FILTER_SANITIZE_STRING);
    $application_deadline = mysqli_real_escape_string($conn, $application_deadline);
              
    $application_fee = filter_var($_POST['application_fee'],FILTER_SANITIZE_STRING);
    $application_fee = mysqli_real_escape_string($conn, $application_fee);
              
              
    $yearly_tuition_fee = filter_var($_POST['yearly_tuition_fee'],FILTER_SANITIZE_STRING);
    $yearly_tuition_fee = mysqli_real_escape_string($conn, $yearly_tuition_fee);
              
              
    $ielts_overall = filter_var($_POST['ielts_overall'],FILTER_SANITIZE_STRING);
    $ielts_overall = mysqli_real_escape_string($conn, $ielts_overall);
              
    
    $ielts_no_band_less_than = filter_var($_POST['ielts_no_band_less_than'],FILTER_SANITIZE_STRING);
    $ielts_no_band_less_than = mysqli_real_escape_string($conn, $ielts_no_band_less_than);
              
    $test_requirements = filter_var($_POST['test_requirements'],FILTER_SANITIZE_STRING);
    $test_requirements = mysqli_real_escape_string($conn, $test_requirements);
              
     $entry_requirements = filter_var($_POST['entry_requirements'],FILTER_SANITIZE_STRING);
    $entry_requirements = mysqli_real_escape_string($conn, $entry_requirements);
              
              
    $remarks = filter_var($_POST['remarks'],FILTER_SANITIZE_STRING);
    $remarks = mysqli_real_escape_string($conn, $remarks);
              
    //$overview = $_POST['overview'];
    //$descr = mysqli_real_escape_string($conn, $descr); 
              
   // $descr = htmlentities ( trim ( $_POST[ "descr" ] ) , ENT_NOQUOTES );
    //$descr = mysqli_real_escape_string($conn, $descr);
              
  
              
      
   
$stmt->bind_param("ssssssssssssssss", $course_name,$uid,$university,$location,$intakes,$duration,$campus,$url,$application_deadline,$application_fee,$yearly_tuition_fee,$ielts_overall,$ielts_no_band_less_than,$test_requirements,$entry_requirements,$remarks);
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "Course Added Successfully",
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