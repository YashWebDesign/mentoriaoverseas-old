<?php
include("header.php");
error_reporting(0);
//include("config.php");
$id=$_GET['id'];


				$query="select * from assestment where id='$id'";
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
             <div class="card-header text-uppercase">Detail</div>
             <div class="card-body">
			
			 
                 
			 <?php
                 while($row=mysqli_fetch_array($result))
    
                 {
                     ?>
                 
                 
                 <form method="post" enctype="multipart/form-data" action="">
                     
                   <!-- Personal Information-->
                
                    <h4>Personal Information</h4> 
                     <br>
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Name</label>
                    
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["name"]; ?>" name="name"  style="text-transform: capitalize;border-radius:350px" readonly>
                      <label id="msg2"></label>
				  </div>
                    
				</div>
                     
                   
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Email</label>
                    
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["email"]; ?>" name="email"  style="border-radius:350px" readonly>
				  </div>
                    
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Phone</label>
                    
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["phone"]; ?>" name="phone"  style="border-radius:350px" readonly>
				  </div>
                    
				</div>    
                     
				
				<div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Dob (yy/mm/dd)</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["dob"]; ?>" name="dob"  style="border-radius:350px" readonly>
				  </div>
				</div>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Gender</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["gender"]; ?>" name="gender"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Marital Status</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["marital_status"]; ?>" name="marital_status"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div> 
                    <!-- Personal Information--> 
                    
                     
                    <!-- Mailing Address--> 
                     <br><br>
                     <h4>Mailing Address</h4> 
                     <br>
                  <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Address1</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["address1"]; ?>" name="address1"  style="border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Address2</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["address2"]; ?>" name="address2"  style="border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     
                      <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["country"]; ?>" name="country"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div> 
                   
				 <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">State</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["state"]; ?>" name="state"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">City</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["city"]; ?>" name="city"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Pincode</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["pin"]; ?>" name="pin"  style="text-transform: capitalize;border-radius:350px" readonly>
				  </div>
				</div> 
                    <!-- Mailing Address-->   
                     
                     
                     <br><br>
                     <h4>Passport Information</h4> 
                     <br>
                    <!-- Passport Info-->  
                <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Passport No</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["passport_no"]; ?>" name="passport_no"  style="border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Passport Issue Date (yy/mm/dd)</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["issue_date"]; ?>" name="issue_date"  style="border-radius:350px" readonly>
                      
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Passport Expiry Date (yy/mm/dd)</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["expiry_date"]; ?>" name="expiry_date"  style="border-radius:350px" readonly>
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Issue Country</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["passport_country"]; ?>" name="passport_country"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Birth City</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["birth_city"]; ?>" name="birth_city"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Birth</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["birth_country"]; ?>" name="birth_country"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     <!-- Passport Info-->  
                     
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Birth</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["birth_country"]; ?>" name="birth_country"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     
                     
                      <!-- Nationality Info--> 
                     <br><br>
                     <h4>Nationality</h4> 
                     <br>
                    
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Nationality</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["nationality"]; ?>" name="nationality"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Citizenship</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["citizenship"]; ?>" name="citizenship"  style="border-radius:350px;text-transform: capitalize;" readonly>
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Are You a citizen of more than one country?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["more_than_one_citizen"]; ?>" name="more_than_one_citizen"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Are You living and studying in any other country?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["living_other_country"]; ?>" name="living_other_country"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     <!-- Nationality Info-->
                     
                     
                     <br><br>
                     <h4>Background Info</h4> 
                     <br>
                    <!-- Background Info-->
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Are You applied for any type of immigration into any country?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["type_of_immigration"]; ?>" name="type_of_immigration"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Did You suffer from a serious medical condition?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["medical_condition"]; ?>" name="medical_condition"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Did you have Visa refusal for any country?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["visa_refusal"]; ?>" name="visa_refusal"  style="border-radius:350px;" readonly>
				  </div>
				</div>   
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Are You ever been convicted of a criminal offence?</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["criminal_offence"]; ?>" name="criminal_offence"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     <!-- Background Info-->
                     
                     
                     
                     <!-- Emergency Info-->
                     
                     <br><br>
                     <h4>Emergency Contact Info</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Emergency Contact Person</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["emergency_name"]; ?>" name="emergency_name"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Emergency Contact No</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["emergency_contact"]; ?>" name="emergency_contact"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Emergency Contact Email</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["emergency_email"]; ?>" name="emergency_email"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Emergency Contact Relation</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["emergency_relation"]; ?>" name="emergency_relation"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     <!-- Emergency Info-->
                     
                     
                     <!--10th grade-->
                   <br><br>
                    <h4>Education Summary (Grade 10th or equivalent)</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Education</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["education_country_10th"]; ?>" name="education_country_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Board</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["board_name_10th"]; ?>" name="board_name_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Institution</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["institution_name_10th"]; ?>" name="institution_name_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of College</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_name_10th"]; ?>" name="college_name_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Percentage</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["percentage_10th"]; ?>" name="percentage_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">City / State</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_city_state_10"]; ?>" name="college_city_state_10"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended From</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["start_date_10th"]; ?>" name="start_date_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended to</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["end_date_10th"]; ?>" name="end_date_10th"  style="border-radius:350px;" readonly>
				  </div>
				</div>  
                   <!--10th grade--> 
                     
                     
                     
                  <!--12th grade-->
                   <br><br>
                    <h4>Education Summary (Grade 12th or equivalent)</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Education</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["education_country_12th"]; ?>" name="education_country_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Board</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["board_name_12th"]; ?>" name="board_name_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Institution</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["institution_name_12th"]; ?>" name="institution_name_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of College</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_name_12th"]; ?>" name="college_name_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Percentage</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["percentage_12th"]; ?>" name="percentage_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">City / State</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_city_state_12th"]; ?>" name="college_city_state_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended From</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["start_date_12th"]; ?>" name="start_date_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended to</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["end_date_12th"]; ?>" name="end_date_12th"  style="border-radius:350px;" readonly>
				  </div>
				</div>  
                   <!--12th grade--> 
                     
                     
                     
                     <!--graduation-->
                   <br><br>
                    <h4>Education Summary (Graduation)</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Education</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["education_country_grad"]; ?>" name="education_country_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Board</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["board_name_grad"]; ?>" name="board_name_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Institution</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["institution_name_grad"]; ?>" name="institution_name_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of College</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_name_grad"]; ?>" name="college_name_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Backlogs</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["backlogs_grad"]; ?>" name="backlogs_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">City / State</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_city_state_grad"]; ?>" name="college_city_state_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended From</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["start_date_grad"]; ?>" name="start_date_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended to</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["end_date_grad"]; ?>" name="end_date_grad"  style="border-radius:350px;" readonly>
				  </div>
				</div>  
                   <!--graduation-->
                     
                     
                     
                        <!--Postgraduation-->
                   <br><br>
                    <h4>Education Summary (Postgraduation)</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Country of Education</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["education_country_postgrad"]; ?>" name="education_country_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Board</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["board_name_postgrad"]; ?>" name="board_name_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Institution</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["institution_name_postgrad"]; ?>" name="institution_name_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of College</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_name_postgrad"]; ?>" name="college_name_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Backlogs</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["backlogs_postgrad"]; ?>" name="backlogs_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">City / State</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["college_city_state_postgrad"]; ?>" name="college_city_state_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended From</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["start_date_postgrad"]; ?>" name="start_date_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Attended to</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["end_date_postgrad"]; ?>" name="end_date_postgrad"  style="border-radius:350px;" readonly>
				  </div>
				</div>  
                   <!--Postgraduation-->
                     
                     
                     
                     
                      <!--Work Info-->
                   <br><br>
                    <h4>Work Experience</h4> 
                     <br>
                     
                     <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Position</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["position"]; ?>" name="position"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Name of Company</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["name_of_company"]; ?>" name="name_of_company"  style="border-radius:350px;" readonly>
				  </div>
				</div> 
                     
                    
                     
                     
                    <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">Start Date</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["job_start_date"]; ?>" name="job_start_date"  style="border-radius:350px;" readonly>
				  </div>
				</div>
                     
                     
                   <div class="form-group row">
				  <label for="placeholder-input" class="col-sm-3 col-form-label">End Date</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  value="<?php echo $row["job_end_date"]; ?>" name="job_end_date"  style="border-radius:350px;" readonly>
				  </div>
				</div>  
                   <!--work info-->
                     
                     
				
				<!--<div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit"  name="submit" id="submit" value="Update Details" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>-->
				
				
               
                 
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
    $pte_overall = filter_var($_POST['pte_overall'], FILTER_SANITIZE_STRING);   
    $pte_no_bands = filter_var($_POST['pte_no_bands'], FILTER_SANITIZE_STRING);
    $toefl_ibt_overall = filter_var($_POST['toefl_ibt_overall'], FILTER_SANITIZE_STRING);
    $toefl_no_bands = filter_var($_POST['toefl_no_bands'], FILTER_SANITIZE_STRING);
    $dte = filter_var($_POST['dte'], FILTER_SANITIZE_STRING);
    
        $sql = "UPDATE course SET course_name=?, intakes=?, duration=?, campus=?, url=?, application_deadline=?, application_fee=?, yearly_tuition_fee=?, ielts_overall=?, ielts_no_band_less_than=?, test_requirements=?, entry_requirements=?, remarks=?, pte_overall=?, pte_no_bands=?, toefl_ibt_overall=?, toefl_no_bands=?, dte=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssssssi", $course_name, $intakes, $duration, $campus, $url, $application_deadline, $application_fee, $yearly_tuition_fee,$ielts_overall,$ielts_no_band_less_than,$test_requirements,$entry_requirements,$remarks,$pte_overall,$pte_no_bands,$toefl_ibt_overall,$toefl_no_bands,$dte,$id);
    
   

    if ($stmt->execute()) {
    echo '<script type="text/javascript">
            swal({
                title: "Wow!",
                text: "Course Updated Successfully",
                type: "success"
            }).then(function() {
                window.history.go(-1);
            });
          </script>';
}
    
    else 
    
    {
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