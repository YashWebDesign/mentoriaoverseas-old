<?php include("header.php"); 
include("admin/config.php");
$id=$_GET['id'];
$title=$_GET['title']; 
//$university=$_GET['university'];
//$location=$_GET['location'];

$stmt = $conn->prepare("SELECT * FROM universites WHERE id = ?");
$stmt->bind_param("i", $id);
$id = $id;   
$id = mysqli_real_escape_string($conn, $id); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
    {
     $id = $row["id"];
     $title = $row["title"];
     $heading = $row["heading"];
     $rank = $row["rank"];
     $intake = $row["intake"];   
     $cost_of_living = $row["cost_of_living"];
      $tuition_fee = $row["tuition_fee"]; 
      $image = $row["image"]; 
    $overview = $row["overview"]; 
     $area = $row["area"];          
        
     $id = mysqli_real_escape_string($conn, $id);
     $title = mysqli_real_escape_string($conn, $title);
     $heading = mysqli_real_escape_string($conn, $heading);
    $rank = mysqli_real_escape_string($conn, $rank);
       $intake = mysqli_real_escape_string($conn, $intake);
        $cost_of_living = mysqli_real_escape_string($conn, $cost_of_living);
        $tuition_fee = mysqli_real_escape_string($conn, $tuition_fee);
        $image = mysqli_real_escape_string($conn, $image);
        $overview = mysqli_real_escape_string($conn, $overview);
        $area = mysqli_real_escape_string($conn, $area);
    
   {  
?>



        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title"><?php echo $title; ?></h1>
                    </div>
                    <p style="color:black;font-size:20px"><?php echo $heading; ?></p>
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
                        <div class="course-details-content course-details-3">
                           
                            <div class="course-enroll-box" style="margin-top:0px">
                                 <?php
                                    if(!empty($rank))
                                     { ?>
                                <div class="single-item">
                                    <h6 class="title">Rank</h6>
                                    <span class="price"><?php echo $rank; ?></span>
                                </div>
                                <?php } ?>
                                
                                <?php
                                    if(!empty($intake))
                                     { ?>
                                <div class="single-item course-price">
                                    <h6 class="title">Intake</h6>
                                    <span class="price"><?php echo $intake; ?></span>
                                </div>
                                 <?php } ?>
                                
                                <?php
                                    if(!empty($cost_of_living))
                                     { ?>
                                <div class="single-item course-price">
                                    <h6 class="title">Cost of Living</h6>
                                    <span class="price"><?php echo $cost_of_living; ?></span>
                                </div>
                                 <?php } ?>
                            </div>
                            <!--<center><a href="apply-now" class="edu-btn btn-medium enroll-btn">Apply Now</a>
                                </center>-->
                            <div class="nav-tab-wrap">
                                
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                        <div class="course-tab-content">
                                            <div class="course-overview">
                                                <h3 class="heading-title">Overview</h3>
                                                <p><?php echo $row["overview"]; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="carriculam" role="tabpanel" aria-labelledby="carriculam-tab">
                                        <div class="course-tab-content">
                                            <div class="course-curriculam">
                                                <div class="heading-title">
                                                    <h3 class="title">Course Content</h3>
                                                    <div class="expand-btn">
                                                        <button class="edu-btn btn-medium">Expand All <i class="icon-31"></i></button>
                                                    </div>
                                                </div>
                                                <div class="accordion edu-accordion" id="accordionExample">
                                                    <h4 class="heading-title">Introduction</h4>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Lesson 1.1
                                                                <span class="expand">Expand</span>
                                                            </button>
                                                        </h3>
                                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="course-lesson">
                                                                    <div class="reading-status">
                                                                        <h5 class="title"><i class="icon-65"></i> Lesson Content</h5>
                                                                        <span class="complete-text">
                                                                            <span>0% COMPLETE</span>
                                                                            <span>0/1 Steps</span>
                                                                        </span>
                                                                    </div>
                                                                    <ul>
                                                                        <li>Topic 1 – Grounding</li>
                                                                        <li>Topic 2 – Igniting</li>
                                                                        <li>Topic 3 – Awareness</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 1.2
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 1.3
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <h4 class="heading-title">Section 2</h4>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 2.1
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 2.2
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <h4 class="heading-title">Section 3</h4>
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                                Lesson 3.1
                                                                <span class="topics">3 Topics</span>
                                                                <span class="expand">Expand</span>
                                                            </button>
                                                        </h3>
                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="course-lesson">
                                                                    <ul>
                                                                        <li>Topic 1 – Grounding</li>
                                                                        <li>Topic 2 – Igniting</li>
                                                                        <li>Topic 3 – Awareness</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 3.2
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div class="accordion-item no-collapsed">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button">Lesson 3.3
                                                            </button>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("university-sidebar.php");?>
                </div>
            </div>
        </section>
<?php } } }  ?>




        <?php include("footer.php"); ?>
