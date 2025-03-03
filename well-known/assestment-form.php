

<?php include("header.php"); 
include("admin/config.php");

$id = $_GET['id'];
$query = "select * from contacts where id='$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die(mysqli_error($conn));
}
?>
    
    

        <section class="account-page-area section-gap-equal" style="background-color:#f7f7f7">
            <div class="container position-relative">
                <div class="row g-5 justify-content-center">
                    
                    <div class="col-lg-12">
                        <div class="login-form-box registration-form" style="background-color:#f7f7f7">
                             <h3 class="title" style="color:#0A4D9B">Personal Information</h3><br><br>
                            <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <form name="myform" method="post" action="">
                                <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    <div class="form-group col-lg-4">
                                    <b><label>Name*</label></b>
                                    <input type="text" name="name"  placeholder="Full name" required value="<?php echo $row["name"]; ?>" readonly>
                                    </div> 
                                  
                                    <div class="form-group col-lg-4">
                                    <b><label>Email*</label></b>
                                    <input type="email" name="email"  placeholder="Enter Email Address" required value="<?php echo $row["email"]; ?>" readonly>
                                    </div> 
                                    
                                    <div class="form-group col-lg-4">
                                    <b><label>Contact*</label></b>
                                    <input type="text" name="phone"  placeholder="Contact No" required value="<?php echo $row["phone"]; ?>" readonly>
                                    </div> 
                                    
                                    <div class="form-group col-lg-4">
                                   <b><label>Date of Birth*</label></b>
                                   <input type="date" name="dob" placeholder="Date of Birth" required>
                                   </div>
                                    
                                    <div class="form-group col-lg-4">
                                   <b><label>Gender*</label></b>
                                   <select name="gender" required>
                                   <option value="" selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                   <option value="Other">Other</option>
                                  </select>
                                  </div>
                                    
                                    

                                 <div class="form-group col-lg-4">
                                 <b><label>Marital Status*</label></b>
                                  <select name="marital_status" required>
                                 <option value="" selected>Select</option>
                                  <option value="Married">Married</option>
                                 <option value="Unmarried">Unmarried</option>
                                  <option value="Other">Other</option>
                                 </select>
                                 </div>
                                </div>
                                    
                                    
                                    
                                    <br><br>
                                    
                                   <h3 class="title" style="color:#0A4D9B">Mailing Address</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    <div class="form-group col-lg-6">
                                    <b><label>Address 1*</label></b>
                                    <input type="text" name="address1"  placeholder="Enter Address" required>
                                    </div> 
                                  
                                    <div class="form-group col-lg-6">
                                    <b><label>Address 2</label></b>
                                    <input type="text" name="address2" placeholder="Enter Address">
                                    </div> 
   
                                       

                                       
                                  <div class="form-group col-lg-6">
                                    <b><label>Country*</label></b>
                                  <select name="country" required id="countryDropdown" onchange="fetchStates()">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>

                                    <!--<div class="form-group col-lg-6">
                                    <b><label>State*</label></b>
                                    <select name="state" required id="stateDropdown">
                                    <option value="" selected>Select</option>
                                    </select>
                                    </div>-->
                                       
                                    <div class="form-group col-lg-6">
                                    <b><label>State</label></b>
                                    <input type="text" name="state" placeholder="Enter State">
                                    </div> 


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    async function fetchCountries() {
        try {
            const response = await fetch("https://restcountries.com/v3.1/all");
            const data = await response.json();

            console.log("Countries Data:", data);

            const countryDropdown = document.getElementById("countryDropdown");

            // Iterate through the list of countries and add options to the country dropdown
            data.forEach(country => {
                const option = document.createElement("option");
                option.value = country.name.common;
                option.text = country.name.common;
                countryDropdown.appendChild(option);
            });
        } catch (error) {
            console.error("Error fetching countries:", error);
        }
    }

    async function fetchStates() {
        const countryDropdown = document.getElementById("countryDropdown");
        const stateDropdown = document.getElementById("stateDropdown");
        const selectedCountry = countryDropdown.value;

        // Clear existing options in the state dropdown
        stateDropdown.innerHTML = '<option value="" selected>Select</option>';

        if (selectedCountry) {
            try {
                // Fetch the list of states for the selected country
                const response = await fetch(`https://countriesnow.space/api/v0.1/countries/${selectedCountry}`);
                const data = await response.json();

                console.log("API Response:", data);

                // Check if states data is available for the selected country
                const states = data.data.states;

                if (states && states.length > 0) {
                    console.log("States Data:", states);

                    // Add options to the state dropdown
                    states.forEach(state => {
                        const option = document.createElement("option");
                        option.value = state;
                        option.text = state;
                        stateDropdown.appendChild(option);
                    });
                } else {
                    console.log("No states data found for the selected country");
                }
            } catch (error) {
                console.error("Error fetching states:", error);
            }
        }
    }

    // Fetch the list of countries when the script is loaded
    fetchCountries();
</script>





                                    
                                   <div class="form-group col-lg-6">
                                    <b><label>City</label></b>
                                    <input type="text" name="city" placeholder="Enter City">
                                    </div> 

                                    <div class="form-group col-lg-6">
                                    <b><label>Pincode</label></b>
                                    <input type="text" name="pin" placeholder="Enter Pincode">
                                    </div>
                                    
                                </div>
                                
                                
                                
                                
                                 <br><br>
                                    
                                   <h3 class="title" style="color:#0A4D9B">Passport Information</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    <div class="form-group col-lg-4">
                                    <b><label>Passport Number*</label></b>
                                    <input type="text" name="passport_no"  placeholder="Enter Number" required>
                                    </div> 
                                  
                                    <div class="form-group col-lg-4">
                                    <b><label>Issue Date*</label></b>
                                    <input type="date" name="issue_date" required>
                                    </div> 
   
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Expiry Date*</label></b>
                                    <input type="date" name="expiry_date" required>
                                    </div> 
                                       
                                  <div class="form-group col-lg-4">
                                    <b><label>Issue Country*</label></b>
                                  <select name="passport_country" required id="PassportCountryDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>

<script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('PassportCountryDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>





                                    
                                   <div class="form-group col-lg-4">
                                    <b><label>City of Birth*</label></b>
                                    <input type="text" name="birth_city" placeholder="Enter City" required>
                                    </div> 

                                    <div class="form-group col-lg-4">
                                    <b><label>Country of Birth*</label></b>
                                  <select name="birth_country" required id="BirthCountryDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
                                       
                                    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('BirthCountryDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>
                                    
                                </div>
                                
                                
                                
                                 <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Nationality</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-6">
                                    <b><label>Nationality*</label></b>
                                  <select name="nationality" required id="NationalityDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('NationalityDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Citizenship*</label></b>
                                  <select name="citizenship" required id="CitizenshipDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('CitizenshipDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                    
                                       
                                    <div class="form-group col-lg-6">
                                    <b><label>Are You a citizen of more than one country?</label></b>
                                    <input type="text" name="more_than_one_citizen">
                                    </div>
                                   
                                   <div class="form-group col-lg-6">
                                    <b><label>Are You living and studying in any other country?</label></b>
                                    <input type="text" name="living_other_country">
                                    </div>
                                       
                                </div>
                                
                                
                                
                                 <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Background Info</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-6">
                                    <b><label>Are You applied for any type of immigration into any country?</label></b>
                                  <select name="type_of_immigration"  id="immigrationDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('immigrationDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Did You suffer from a serious medical condition?</label></b>
                                    <input type="text" name="medical_condition" placeholder="Please Specify" required>
                                    </div> 
                                       
                                       
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Did you have Visa refusal for any country?</label></b>
                                  <select name="visa_refusal"  id="VisarefusalDropdown">
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('VisarefusalDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                    
                                       
                                   <div class="form-group col-lg-6">
                                    <b><label>Are You ever been convicted of a criminal offence?</label></b>
                                    <input type="text" name="criminal_offence" placeholder="Please Specify" required>
                                    </div>
                                       
                                </div>
                                
                                
                                
                                
                                
                                <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Important/Emergency Contacts</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Name</label></b>
                                    <input type="text" name="emergency_name" placeholder="Enter Name" required>
                                    </div> 
                                       
                                     <div class="form-group col-lg-6">
                                    <b><label>Phone</label></b>
                                    <input type="text" name="emergency_contact" placeholder="Enter Contact Number" required>
                                    </div>
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Email</label></b>
                                    <input type="email" name="emergency_email" placeholder="Enter Email Address" required>
                                    </div>
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Relation with Applicant</label></b>
                                    <input type="text" name="emergency_relation" placeholder="Enter Relation" required>
                                    </div>
                                         
                                      
                                       
                                </div>
                                
                                
                                
                                
                                <!--10th education summary start-->
                                
                                <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Education Summary (Grade 10th or equivalent)</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-4">
                                    <b><label>Country of Education</label></b>
                                  <select name="education_country_10th"  id="countryOfDropdown" required>
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('countryOfDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Level of Education</label></b>
                                    <input type="text" name="level_name" value="Grade 10th or equivalent" required readonly>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of Board</label></b>
                                    <input type="text" name="board_name_10th" placeholder="Enter Name of Board" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of the Institution</label></b>
                                    <input type="text" name="institution_name_10th" placeholder="Enter Name of Institution" required>
                                    </div>
                                    
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of College</label></b>
                                    <input type="text" name="college_name_10th" placeholder="Enter Name of College" required>
                                    </div>
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Percentage</label></b>
                                    <input type="text" name="percentage_10th" placeholder="Enter Percentage" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>City & State</label></b>
                                    <input type="text" name="college_city_state_10" placeholder="Enter City & State" required>
                                    </div>
                                 
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended From</label></b>
                                    <input type="date" name="start_date_10th" required>
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended To</label></b>
                                    <input type="date" name="end_date_10th" required>
                                    </div>
                                   <br><br>
                                  </div>
                                
                                <!--10th education summary end-->
                                
                                
                                
                                
                               <!--12th education summary start-->
                                
                                <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Education Summary (Grade 12th or equivalent)</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-4">
                                    <b><label>Country of Education</label></b>
                                  <select name="education_country_12th"  id="12countryOfDropdown" required>
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('12countryOfDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Level of Education</label></b>
                                    <input type="text" name="level_name_12th" value="Grade 12th or equivalent" required readonly>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of Board</label></b>
                                    <input type="text" name="board_name_12th" placeholder="Enter Name of Board" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of the Institution</label></b>
                                    <input type="text" name="institution_name_12th" placeholder="Enter Name of Institution" required>
                                    </div>
                                    
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of College</label></b>
                                    <input type="text" name="college_name_12th" placeholder="Enter Name of College" required>
                                    </div>
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Percentage</label></b>
                                    <input type="text" name="percentage_12th" placeholder="Enter Percentage" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>City & State</label></b>
                                    <input type="text" name="college_city_state_12th" placeholder="Enter City & State" required>
                                    </div>
                                 
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended From</label></b>
                                    <input type="date" name="start_date_12th" required>
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended To</label></b>
                                    <input type="date" name="end_date_12th" required>
                                    </div>
                                   <br><br>
                                  </div>
                                
                                <!--12th education summary end-->
                                
                                
                                
                                
                                <!--Graduation education summary start-->
                                
                                <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Education Summary (Graduation)</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-4">
                                    <b><label>Country of Education</label></b>
                                  <select name="education_country_grad"  id="gradcountryOfDropdown" required>
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('gradcountryOfDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Level of Education</label></b>
                                    <input type="text" name="level_name_grad" value="Graduation" required readonly>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of Board</label></b>
                                    <input type="text" name="board_name_grad" placeholder="Enter Name of Board" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of the Institution</label></b>
                                    <input type="text" name="institution_name_grad" placeholder="Enter Name of Institution" required>
                                    </div>
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Qualification</label></b>
                                    <input type="text" name="quali_grad" placeholder="Qualification" required>
                                    </div> 
                                    
                                       <div class="form-group col-lg-4">
                                    <b><label>Achieved/Degree Awarded</label></b>
                                    <input type="text" name="award_grad" placeholder="Achieved/Degree Awarded" required>
                                    </div> 
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of College</label></b>
                                    <input type="text" name="college_name_grad" placeholder="Enter Name of College" required>
                                    </div>
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Backlogs</label></b>
                                    <input type="text" name="backlogs_grad" placeholder="Enter Backlogs" required>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>City & State</label></b>
                                    <input type="text" name="college_city_state_grad" placeholder="Enter City & State" required>
                                    </div>
                                 
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended From</label></b>
                                    <input type="date" name="start_date_grad" required>
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended To</label></b>
                                    <input type="date" name="end_date_grad" required>
                                    </div>
                                   <br><br>
                                  </div>
                                
                                <!--graduation education summary end-->
                                
                                
                                
                                 <!--Graduation education summary start-->
                                
                                <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Education Summary (Postgraduation)</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                 <div class="form-group col-lg-4">
                                    <b><label>Country of Education</label></b>
                                  <select name="education_country_postgrad"  id="postgradcountryOfDropdown" required>
                                  <option value="" selected>Select</option>
                                  </select>
                                   </div>
    <script>
    // Fetch data from Rest Countries API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Get the select element
            const selectElement = document.getElementById('postgradcountryOfDropdown');

            // Iterate through the data and populate the dropdown
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
</script>   
                                       
                                       
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Level of Education</label></b>
                                    <input type="text" name="level_name_postgrad" value="Postgraduation" readonly>
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of Board</label></b>
                                    <input type="text" name="board_name_postgrad" placeholder="Enter Name of Board">
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of the Institution</label></b>
                                    <input type="text" name="institution_name_postgrad" placeholder="Enter Name of Institution">
                                    </div>
                                       
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Qualification</label></b>
                                    <input type="text" name="quali_post_grad" placeholder="Qualification" required>
                                    </div> 
                                    
                                       <div class="form-group col-lg-4">
                                    <b><label>Achieved/Degree Awarded</label></b>
                                    <input type="text" name="award_post_grad" placeholder="Achieved/Degree Awarded" required>
                                    </div> 
                                    
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Name of College</label></b>
                                    <input type="text" name="college_name_postgrad" placeholder="Enter Name of College">
                                    </div>
                                       
                                       <div class="form-group col-lg-4">
                                    <b><label>Backlogs</label></b>
                                    <input type="text" name="backlogs_postgrad" placeholder="Enter Backlogs">
                                    </div>
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>City & State</label></b>
                                    <input type="text" name="college_city_state_postgrad" placeholder="Enter City & State">
                                    </div>
                                 
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended From</label></b>
                                    <input type="date" name="start_date_postgrad">
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-4">
                                    <b><label>Attended To</label></b>
                                    <input type="date" name="end_date_postgrad">
                                    </div>
                                   <br><br>
                                  </div>
                                
                                <!--graduation education summary end-->
                               
                                
                                   
                                     
                                     <br><br>
                                   <h3 class="title" style="color:#0A4D9B">Work Experience</h3><br><br>
                                   <div class="row g-5" style="background-color:white;border-radius:20px;box-shadow: 0 0 7px #E1E4E6;">
                                    
                                
                                    
                                    
                                       
                                       
                                       <div class="form-group col-lg-6">
                                    <b><label>Position</label></b>
                                    <input type="text" name="position" placeholder="Enter Position">
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-6">
                                    <b><label>Name Of Company</label></b>
                                    <input type="text" name="name_of_company" placeholder="Enter Name of Company">
                                    </div>
                                 
                                       
                                    <div class="form-group col-lg-6">
                                    <b><label>Start Date</label></b>
                                    <input type="date" name="job_start_date">
                                    </div>
                                       
                                       
                                    <div class="form-group col-lg-6">
                                    <b><label>End Date</label></b>
                                    <input type="date" name="job_end_date">
                                    </div>
                                   
                                  </div>
                                
                                  
                                  
                                
                                
                                
                                <br><br>
                                <div  class="form-group col-12">
                                        <center><input type="submit" class="edu-btn submit-btn fixed-submit-btn" name="submit" value="submit" style="background-color:black;color:white;width:150px" onclick="validateForm()"></center>
                                        
                                    </div>
                            </form> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
      
<style>
    /* Add this style to your existing stylesheet or in the head of your HTML document */
    .fixed-submit-btn {
        position: fixed;
        bottom: 20px; /* You can adjust the distance from the bottom as needed */
        left: 50%;
        transform: translateX(-50%);
        z-index: 999; /* Ensure the button appears on top of other elements */
    }
</style>
                
<script>
    function validateForm() {
        // Get the values of required fields
        var name = document.forms["myform"]["name"];
        var email = document.forms["myform"]["email"];
        // Add other required fields as needed
        var phone = document.forms["myform"]["phone"];
        var dob = document.forms["myform"]["dob"];
        var gender = document.forms["myform"]["gender"];
        var maritalStatus = document.forms["myform"]["marital_status"];
        var address1 = document.forms["myform"]["address1"];
        var country = document.forms["myform"]["country"];
        var state = document.forms["myform"]["state"];
        var city = document.forms["myform"]["city"];
        var pin = document.forms["myform"]["pin"];
        var passportNo = document.forms["myform"]["passport_no"];
        var issueDate = document.forms["myform"]["issue_date"];
        var expiryDate = document.forms["myform"]["expiry_date"];
        var passportCountry = document.forms["myform"]["passport_country"];
        var birthCity = document.forms["myform"]["birth_city"];
        var birthCountry = document.forms["myform"]["birth_country"];
        var nationality = document.forms["myform"]["nationality"];
        var citizenship = document.forms["myform"]["citizenship"];
        var medicalCondition = document.forms["myform"]["medical_condition"];
        var criminalOffence = document.forms["myform"]["criminal_offence"];
        var emergencyName = document.forms["myform"]["emergency_name"];
        var emergencyContact = document.forms["myform"]["emergency_contact"];
        var emergencyEmail = document.forms["myform"]["emergency_email"];
        var emergencyRelation = document.forms["myform"]["emergency_relation"];
        var countryOfEducation = document.forms["myform"]["country_of_education"];
        var levelOfEducation = document.forms["myform"]["level_of_education"];
        var collegeName = document.forms["myform"]["college_name"];
        var collegeCityState = document.forms["myform"]["college_city_state"];
        var startDate = document.forms["myform"]["start_date"];
        var endDate = document.forms["myform"]["end_date"];

        // Check if required fields are empty
        var isValid = true;

        function validateField(field) {
            if (field.value === "") {
                field.style.borderColor = "red";
                isValid = false;
            } else {
                field.style.borderColor = ""; // Reset border color
            }
        }

        validateField(name);
        validateField(email);
        validateField(phone);
        validateField(dob);
        validateField(gender);
        validateField(maritalStatus);
        validateField(address1);
        validateField(country);
        validateField(state);
        validateField(city);
        validateField(pin);
        validateField(passportNo);
        validateField(issueDate);
        validateField(expiryDate);
        validateField(passportCountry);
        validateField(birthCity);
        validateField(birthCountry);
        validateField(nationality);
        validateField(citizenship);
        validateField(medicalCondition);
        validateField(criminalOffence);
        validateField(emergencyName);
        validateField(emergencyContact);
        validateField(emergencyEmail);
        validateField(emergencyRelation);
        validateField(countryOfEducation);
        validateField(levelOfEducation);
        validateField(collegeName);
        validateField(collegeCityState);
        validateField(startDate);
        validateField(endDate);

        if (!isValid) {
            // If any required field is empty, find and focus on the first one
            var emptyField = document.querySelector('input:invalid, select:invalid');
            if (emptyField) {
                emptyField.focus();
            }

            // Scroll to the first empty required field
            emptyField.scrollIntoView({ behavior: 'smooth' });

            // Display a pop-up message
            alert("Please fill in all required fields.");

            // Prevent the form from being submitted
            return false;
        }

        // If all required fields are filled, proceed with form submission
        // You can remove or keep this block based on your requirements
        // alert("Form submitted successfully!");

        return true;
    }
</script>


                
                
                
            <?php

          include("admin/modal.php");
          include("admin/config.php");
          if(isset($_REQUEST['submit'])) 
          
          
          {
              
     $sql = "INSERT INTO assestment (name,email,phone,dob,gender,marital_status,address1,address2,country,state,city,pin,passport_no,issue_date,expiry_date,passport_country,birth_city,birth_country,nationality,citizenship,more_than_one_citizen,living_other_country,type_of_immigration,medical_condition,visa_refusal,criminal_offence,emergency_name,emergency_contact,emergency_email,emergency_relation,education_country_10th,level_name,board_name_10th,institution_name_10th,college_name_10th,percentage_10th,college_city_state_10,start_date_10th,end_date_10th,position,name_of_company,job_start_date,job_end_date,education_country_12th,level_name_12th,board_name_12th,institution_name_12th,college_name_12th,percentage_12th,college_city_state_12th,start_date_12th,end_date_12th,education_country_grad,level_name_grad,board_name_grad,institution_name_grad,quali_grad,award_grad,college_name_grad,backlogs_grad,college_city_state_grad,start_date_grad,end_date_grad,education_country_postgrad,level_name_postgrad,board_name_postgrad,institution_name_postgrad,quali_post_grad,award_post_grad,college_name_postgrad,backlogs_postgrad,college_city_state_postgrad,start_date_postgrad,end_date_postgrad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql); 
              
              
  
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $name);  
              
    $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $email);
              
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
    $phone = mysqli_real_escape_string($conn, $phone);  
              
                       
    $dob = filter_var($_POST['dob'],FILTER_SANITIZE_STRING);
    $dob = mysqli_real_escape_string($conn, $dob); 
    
    $gender = filter_var($_POST['gender'],FILTER_SANITIZE_STRING);
    $gender = mysqli_real_escape_string($conn, $gender);
              
    $marital_status = filter_var($_POST['marital_status'],FILTER_SANITIZE_STRING);
    $marital_status = mysqli_real_escape_string($conn, $marital_status);
              
              
    $address1 = filter_var($_POST['address1'],FILTER_SANITIZE_STRING);
    $address1 = mysqli_real_escape_string($conn, $address1);
              
              
    $address2 = filter_var($_POST['address2'],FILTER_SANITIZE_STRING);
    $address2 = mysqli_real_escape_string($conn, $address2);
              
              
    $country = filter_var($_POST['country'],FILTER_SANITIZE_STRING);
    $country = mysqli_real_escape_string($conn, $country);
              
              
    $state = filter_var($_POST['state'],FILTER_SANITIZE_STRING);
    $state = mysqli_real_escape_string($conn, $state);
              
              
    $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
    $city = mysqli_real_escape_string($conn, $city);
              
              
    $pin = filter_var($_POST['pin'],FILTER_SANITIZE_STRING);
    $pin = mysqli_real_escape_string($conn, $pin);
              
              
    $passport_no = filter_var($_POST['passport_no'],FILTER_SANITIZE_STRING);
    $passport_no = mysqli_real_escape_string($conn, $passport_no);
              
              
   
    $issue_date = filter_var($_POST['issue_date'],FILTER_SANITIZE_STRING);
    $issue_date = mysqli_real_escape_string($conn, $issue_date);
              
              
    $expiry_date = filter_var($_POST['expiry_date'],FILTER_SANITIZE_STRING);
    $expiry_date = mysqli_real_escape_string($conn, $expiry_date);
              
              
    $passport_country = filter_var($_POST['passport_country'],FILTER_SANITIZE_STRING);
    $passport_country = mysqli_real_escape_string($conn, $passport_country);
              
              
    $birth_city = filter_var($_POST['birth_city'],FILTER_SANITIZE_STRING);
    $birth_city = mysqli_real_escape_string($conn, $birth_city);
              
              
     $birth_country = filter_var($_POST['birth_country'],FILTER_SANITIZE_STRING);
    $birth_country = mysqli_real_escape_string($conn, $birth_country);
              
              
    $nationality = filter_var($_POST['nationality'],FILTER_SANITIZE_STRING);
    $nationality = mysqli_real_escape_string($conn, $nationality);
              
              
    $citizenship = filter_var($_POST['citizenship'],FILTER_SANITIZE_STRING);
    $citizenship = mysqli_real_escape_string($conn, $citizenship);
              
              
    $more_than_one_citizen = filter_var($_POST['more_than_one_citizen'],FILTER_SANITIZE_STRING);
    $more_than_one_citizen = mysqli_real_escape_string($conn, $more_than_one_citizen);
              
              
    $living_other_country = filter_var($_POST['living_other_country'],FILTER_SANITIZE_STRING);
    $living_other_country = mysqli_real_escape_string($conn, $living_other_country);
              
              
     $type_of_immigration = filter_var($_POST['type_of_immigration'],FILTER_SANITIZE_STRING);
    $type_of_immigration = mysqli_real_escape_string($conn, $type_of_immigration);
              
              
    $medical_condition = filter_var($_POST['medical_condition'],FILTER_SANITIZE_STRING);
    $medical_condition = mysqli_real_escape_string($conn, $medical_condition);
              
              
    $visa_refusal = filter_var($_POST['visa_refusal'],FILTER_SANITIZE_STRING);
    $visa_refusal = mysqli_real_escape_string($conn, $visa_refusal);
              
        
    $criminal_offence = filter_var($_POST['criminal_offence'],FILTER_SANITIZE_STRING);
    $criminal_offence = mysqli_real_escape_string($conn, $criminal_offence);
              
              
    $emergency_name = filter_var($_POST['emergency_name'],FILTER_SANITIZE_STRING);
    $emergency_name = mysqli_real_escape_string($conn, $emergency_name);
              
              
    $emergency_contact = filter_var($_POST['emergency_contact'],FILTER_SANITIZE_STRING);
    $emergency_contact = mysqli_real_escape_string($conn, $emergency_contact);
              
              
              
    $emergency_email = filter_var($_POST['emergency_email'],FILTER_SANITIZE_STRING);
    $emergency_email = mysqli_real_escape_string($conn, $emergency_email);
              
              
              
    $emergency_relation = filter_var($_POST['emergency_relation'],FILTER_SANITIZE_STRING);
    $emergency_relation = mysqli_real_escape_string($conn, $emergency_relation);
              
              
    $education_country_10th = filter_var($_POST['education_country_10th'],FILTER_SANITIZE_STRING);
    $education_country_10th = mysqli_real_escape_string($conn, $education_country_10th);
              
              
    $level_name = filter_var($_POST['level_name'],FILTER_SANITIZE_STRING);
    $level_name = mysqli_real_escape_string($conn, $level_name);
              
              
    $board_name_10th = filter_var($_POST['board_name_10th'],FILTER_SANITIZE_STRING);
    $board_name_10th = mysqli_real_escape_string($conn, $board_name_10th);
              
              
    $institution_name_10th = filter_var($_POST['institution_name_10th'],FILTER_SANITIZE_STRING);
    $institution_name_10th = mysqli_real_escape_string($conn, $institution_name_10th);
              
              
    $college_name_10th = filter_var($_POST['college_name_10th'],FILTER_SANITIZE_STRING);
    $college_name_10th = mysqli_real_escape_string($conn, $college_name_10th);
              
              
    $percentage_10th = filter_var($_POST['percentage_10th'],FILTER_SANITIZE_STRING);
    $percentage_10th = mysqli_real_escape_string($conn, $percentage_10th);
              
              
    $college_city_state_10 = filter_var($_POST['college_city_state_10'],FILTER_SANITIZE_STRING);
    $college_city_state_10 = mysqli_real_escape_string($conn, $college_city_state_10);
              
              
              
    $start_date_10th = filter_var($_POST['start_date_10th'],FILTER_SANITIZE_STRING);
    $start_date_10th = mysqli_real_escape_string($conn, $start_date_10th);
              
              
    
    $end_date_10th = filter_var($_POST['end_date_10th'],FILTER_SANITIZE_STRING);
    $end_date_10th = mysqli_real_escape_string($conn, $end_date_10th);
              
              
    $position = filter_var($_POST['position'],FILTER_SANITIZE_STRING);
    $position = mysqli_real_escape_string($conn, $position);
              
              
    $name_of_company = filter_var($_POST['name_of_company'],FILTER_SANITIZE_STRING);
    $name_of_company = mysqli_real_escape_string($conn, $name_of_company);
              
              
              
    $job_start_date = filter_var($_POST['job_start_date'],FILTER_SANITIZE_STRING);
    $job_start_date = mysqli_real_escape_string($conn, $job_start_date);
              
              
    $job_end_date = filter_var($_POST['job_end_date'],FILTER_SANITIZE_STRING);
    $job_end_date = mysqli_real_escape_string($conn, $job_end_date);
              
              
    $education_country_12th = filter_var($_POST['education_country_12th'],FILTER_SANITIZE_STRING);
    $education_country_12th = mysqli_real_escape_string($conn, $education_country_12th);
              
              
    $level_name_12th = filter_var($_POST['level_name_12th'],FILTER_SANITIZE_STRING);
    $level_name_12th = mysqli_real_escape_string($conn, $level_name_12th);
              
              
    $board_name_12th = filter_var($_POST['board_name_12th'],FILTER_SANITIZE_STRING);
    $board_name_12th = mysqli_real_escape_string($conn, $board_name_12th);
              
              
    $institution_name_12th = filter_var($_POST['institution_name_12th'],FILTER_SANITIZE_STRING);
    $institution_name_12th = mysqli_real_escape_string($conn, $institution_name_12th);
              
              
    $college_name_12th = filter_var($_POST['college_name_12th'],FILTER_SANITIZE_STRING);
    $college_name_12th = mysqli_real_escape_string($conn, $college_name_12th);
              
              
    $percentage_12th = filter_var($_POST['percentage_12th'],FILTER_SANITIZE_STRING);
    $percentage_12th = mysqli_real_escape_string($conn, $percentage_12th);
              
              
    $college_city_state_12th = filter_var($_POST['college_city_state_12th'],FILTER_SANITIZE_STRING);
    $college_city_state_12th = mysqli_real_escape_string($conn, $college_city_state_12th);
              
              
    $start_date_12th = filter_var($_POST['start_date_12th'],FILTER_SANITIZE_STRING);
    $start_date_12th = mysqli_real_escape_string($conn, $start_date_12th);
              
              
    $end_date_12th = filter_var($_POST['end_date_12th'],FILTER_SANITIZE_STRING);
    $end_date_12th = mysqli_real_escape_string($conn, $end_date_12th);
              
              
     $education_country_grad = filter_var($_POST['education_country_grad'],FILTER_SANITIZE_STRING);
    $education_country_grad = mysqli_real_escape_string($conn, $education_country_grad);
    
    
    $level_name_grad = filter_var($_POST['level_name_grad'],FILTER_SANITIZE_STRING);
    $level_name_grad = mysqli_real_escape_string($conn, $level_name_grad);
    
    
    
    $board_name_grad = filter_var($_POST['board_name_grad'],FILTER_SANITIZE_STRING);
    $board_name_grad = mysqli_real_escape_string($conn, $board_name_grad);
    
    
    $institution_name_grad = filter_var($_POST['institution_name_grad'],FILTER_SANITIZE_STRING);
    $institution_name_grad = mysqli_real_escape_string($conn, $institution_name_grad);
    
    $quali_grad = filter_var($_POST['quali_grad'],FILTER_SANITIZE_STRING);
    $quali_grad = mysqli_real_escape_string($conn, $quali_grad);
              
              
    $award_grad = filter_var($_POST['award_grad'],FILTER_SANITIZE_STRING);
    $award_grad = mysqli_real_escape_string($conn, $award_grad);
              
    
    $college_name_grad = filter_var($_POST['college_name_grad'],FILTER_SANITIZE_STRING);
    $college_name_grad = mysqli_real_escape_string($conn, $college_name_grad);
    
    
    $backlogs_grad = filter_var($_POST['backlogs_grad'],FILTER_SANITIZE_STRING);
    $backlogs_grad = mysqli_real_escape_string($conn, $backlogs_grad);
    
    
    $college_city_state_grad = filter_var($_POST['college_city_state_grad'],FILTER_SANITIZE_STRING);
    $college_city_state_grad = mysqli_real_escape_string($conn, $college_city_state_grad);
    
    
    $start_date_grad = filter_var($_POST['start_date_grad'],FILTER_SANITIZE_STRING);
    $start_date_grad = mysqli_real_escape_string($conn, $start_date_grad);
    
    
    $end_date_grad = filter_var($_POST['end_date_grad'],FILTER_SANITIZE_STRING);
    $end_date_grad = mysqli_real_escape_string($conn, $end_date_grad);    
              
              
    $education_country_postgrad = filter_var($_POST['education_country_postgrad'],FILTER_SANITIZE_STRING);
    $education_country_postgrad = mysqli_real_escape_string($conn, $education_country_postgrad); 
              
    
    $level_name_postgrad = filter_var($_POST['level_name_postgrad'],FILTER_SANITIZE_STRING);
    $level_name_postgrad = mysqli_real_escape_string($conn, $level_name_postgrad);
              
              
    $board_name_postgrad = filter_var($_POST['board_name_postgrad'],FILTER_SANITIZE_STRING);
    $board_name_postgrad = mysqli_real_escape_string($conn, $board_name_postgrad);
              
              
    $institution_name_postgrad = filter_var($_POST['institution_name_postgrad'],FILTER_SANITIZE_STRING);
    $institution_name_postgrad = mysqli_real_escape_string($conn, $institution_name_postgrad);
              
              
    $quali_post_grad = filter_var($_POST['quali_post_grad'],FILTER_SANITIZE_STRING);
    $quali_post_grad = mysqli_real_escape_string($conn, $quali_post_grad);
              
              
    $award_post_grad = filter_var($_POST['award_post_grad'],FILTER_SANITIZE_STRING);
    $award_post_grad = mysqli_real_escape_string($conn, $award_post_grad);
              
              
     $college_name_postgrad = filter_var($_POST['college_name_postgrad'],FILTER_SANITIZE_STRING);
    $college_name_postgrad = mysqli_real_escape_string($conn, $college_name_postgrad);
              
              
    $backlogs_postgrad = filter_var($_POST['backlogs_postgrad'],FILTER_SANITIZE_STRING);
    $backlogs_postgrad = mysqli_real_escape_string($conn, $backlogs_postgrad);
              
              
    $college_city_state_postgrad = filter_var($_POST['college_city_state_postgrad'],FILTER_SANITIZE_STRING);
    $college_city_state_postgrad = mysqli_real_escape_string($conn, $college_city_state_postgrad);
              
              
    $start_date_postgrad = filter_var($_POST['start_date_postgrad'],FILTER_SANITIZE_STRING);
    $start_date_postgrad = mysqli_real_escape_string($conn, $start_date_postgrad);
              
              
    $end_date_postgrad = filter_var($_POST['end_date_postgrad'],FILTER_SANITIZE_STRING);
    $end_date_postgrad = mysqli_real_escape_string($conn, $end_date_postgrad);
              
  
   
$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", $name,$email,$phone,$dob,$gender,$marital_status,$address1,$address2,$country,$state,$city,$pin,$passport_no,$issue_date,$expiry_date,$passport_country,$birth_city,$birth_country,$nationality,$citizenship,$more_than_one_citizen,$living_other_country,$type_of_immigration,$medical_condition,$visa_refusal,$criminal_offence,$emergency_name,$emergency_contact,$emergency_email,$emergency_relation,$education_country_10th,$level_name,$board_name_10th,$institution_name_10th,$college_name_10th,$percentage_10th,$college_city_state_10,$start_date_10th,$end_date_10th,$position,$name_of_company,$job_start_date,$job_end_date,$education_country_12th,$level_name_12th,$board_name_12th,$institution_name_12th,$college_name_12th,$percentage_12th,$college_city_state_12th,$start_date_12th,$end_date_12th,$education_country_grad,$level_name_grad,$board_name_grad,$institution_name_grad,$quali_grad,$award_grad,$college_name_grad,$backlogs_grad,$college_city_state_grad,$start_date_grad,$end_date_grad,$education_country_postgrad,$level_name_postgrad,$board_name_postgrad,$institution_name_postgrad,$quali_post_grad,$award_post_grad,$college_name_postgrad,$backlogs_postgrad,$college_city_state_postgrad,$start_date_postgrad,$end_date_postgrad);
              
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "Details have been submitted Successfully",
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
                
                <ul class="shape-group">
                    <li class="shape-1 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="Shape"></li>
                    <li class="shape-2 scene"><img data-depth="-2" src="assets/images/about/shape-13.png" alt="Shape"></li>
                    <li class="shape-3 scene"><img data-depth="2" src="assets/images/counterup/shape-02.png" alt="Shape"></li>
                </ul>
            </div>
        </section>



 
        <?php include("footer.php"); ?>