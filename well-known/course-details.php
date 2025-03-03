<?php include("header.php"); 
include("admin/config.php");
$id=$_GET['id'];
$course_name=$_GET['course_name']; 
$university=$_GET['university'];
$location=$_GET['location'];

$stmt = $conn->prepare("SELECT * FROM course WHERE id = ?");
$stmt->bind_param("i", $id);
$id = $id;   
$id = mysqli_real_escape_string($conn, $id); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
    {
     $id = $row["id"];
     $course_name = $row["course_name"];
     $university = $row["university"];
     $location = $row["location"];
     $intakes = $row["intakes"];   
     $duration = $row["duration"];
      $campus = $row["campus"]; 
      $url = $row["url"]; 
    $application_deadline = $row["application_deadline"]; 
     $application_fee = $row["application_fee"];   
     $yearly_tuition_fee = $row["yearly_tuition_fee"];   
      $ielts_overall = $row["ielts_overall"];   
      $ielts_no_band_less_than = $row["ielts_no_band_less_than"]; 
      $test_requirements = $row["test_requirements"];  
      $entry_requirements = $row["entry_requirements"]; 
      $pte_overall = $row["pte_overall"];
      $pte_no_bands = $row["pte_no_bands"];
      $toefl_ibt_overall = $row["toefl_ibt_overall"];
      $toefl_no_bands = $row["toefl_no_bands"];
      $dte = $row["dte"];
       $remarks = $row["remarks"];              
        
     $id = mysqli_real_escape_string($conn, $id);
     $course_name = mysqli_real_escape_string($conn, $course_name);
     $university = mysqli_real_escape_string($conn, $university);
    $location = mysqli_real_escape_string($conn, $location);
        
       $intakes = mysqli_real_escape_string($conn, $intakes);
        $duration = mysqli_real_escape_string($conn, $duration);
        $campus = mysqli_real_escape_string($conn, $campus);
        $url = mysqli_real_escape_string($conn, $url);
        $application_deadline = mysqli_real_escape_string($conn, $application_deadline);
        $application_fee = mysqli_real_escape_string($conn, $application_fee);
        $yearly_tuition_fee = mysqli_real_escape_string($conn, $yearly_tuition_fee);
        $ielts_overall = mysqli_real_escape_string($conn, $ielts_overall);
        $ielts_no_band_less_than = mysqli_real_escape_string($conn, $ielts_no_band_less_than);
        $test_requirements = mysqli_real_escape_string($conn, $test_requirements);
        $entry_requirements = mysqli_real_escape_string($conn, $entry_requirements);
        $pte_overall = mysqli_real_escape_string($conn, $pte_overall);
        $pte_no_bands = mysqli_real_escape_string($conn, $pte_no_bands);
        $toefl_ibt_overall = mysqli_real_escape_string($conn, $toefl_ibt_overall);
        $toefl_no_bands = mysqli_real_escape_string($conn, $toefl_no_bands);
        $dte = mysqli_real_escape_string($conn, $dte);
        $remarks = mysqli_real_escape_string($conn, $remarks);
    
   {  
?>   

          <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title" style="font-size:25px"><?php echo $course_name; ?></h1>
                    </div>
                    
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <span></span>
                </li>
                <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
                <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
                <li class="shape-4">
                    <span></span>
                </li>
                <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
            </ul>
        </div>


        <section class="edu-section-gap course-details-area">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="course-details-content course-details-2">
                            
                            <div class="course-curriculam mb--90">
                                <div class="accordion edu-accordion" id="accordionExample" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Course Introduction
                                            </button>
                                        </h3>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="course-lesson">
                                                    <ul>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Intakes</div>
                                                            <div class="icon"><?php echo $intakes; ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Duration</div>
                                                            <div class="icon"><?php echo $duration; ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Course Url</div>
                                                            <div class="badge-list">
                                                                <span class="badge badge-secondary"><a href="<?php echo $url; ?>">Click Me</a></span>
                                                            </div>
                                                        </li>
                                                        
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Application Deadline</div>
                                                            <div class="icon"><?php echo $application_deadline; ?></div>
                                                        </li>
                                                        
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Application Fees</div>
                                                            <div class="icon"><?php echo $application_fee; ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Yearly Tuition Fees</div>
                                                            <div class="icon"><?php echo $yearly_tuition_fee; ?></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                English Proficiency Test Requirements
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="course-lesson">
                                                    <ul>
                                                        <?php
                                                       if(!empty ($ielts_overall))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> IELTS Overall</div>
                                                            <div class="icon"><?php echo $ielts_overall; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        <?php
                                                       if(!empty ($ielts_no_band_less_than))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> IELTS no Band Less Than</div>
                                                            <div class="icon"><?php echo $ielts_no_band_less_than; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        <?php
                                                       if(!empty ($pte_overall))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> PTE OVERALL</div>
                                                            <div class="icon"><?php echo $pte_overall; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        <?php
                                                       if(!empty ($pte_no_bands))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> PTE NO BANDS LESS THAN</div>
                                                            <div class="icon"><?php echo $pte_no_bands; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        
                                                        <?php
                                                       if(!empty ($toefl_ibt_overall))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> TOEFL IBT OVERALL</div>
                                                            <div class="icon"><?php echo $toefl_ibt_overall; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        <?php
                                                       if(!empty ($toefl_no_bands))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> TOEFL IBT NO BANDS LESS THAN</div>
                                                            <div class="icon"><?php echo $toefl_no_bands; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        <?php
                                                       if(!empty ($dte))
                                                       { ?>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> DTE</div>
                                                            <div class="icon"><?php echo $dte; ?></div>
                                                        </li>
                                                        <?php } ?>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Standardized Test Requirements
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="course-lesson">
                                                    <ul>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Test Requirements</div>
                                                            
                                                        </li>
                                                        <li>
                                                          
                                                            <div class="icon"><?php echo $test_requirements; ?></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Standardized Test Requirements
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="course-lesson">
                                                    <ul>
                                                        <li>
                                                            <div class="text"><i class="icon-65"></i> Entry Requirements</div>
                                                            
                                                        </li>
                                                        <li>
                                                           
                                                            <div class="icon"><?php echo $entry_requirements; ?></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Remarks
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                
                                                   <p style="margin-left:10px;color:black"><?php echo $remarks; ?></p> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                   <?php include("course-sidebar.php");?>
                </div>
            </div>
        </section>
<?php } } }  ?>
       <?php include("footer.php"); ?>