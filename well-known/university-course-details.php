<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("header.php");
include("admin/config.php");
$id = isset($_GET['id']) ? $_GET['id'] : '';
$title = isset($_GET['title']) ? $_GET['title'] : '';
//$id=$_GET['id'];
//$title=$_GET['title']; 
?>
        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">Courses</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="#">Courses</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ul>
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
        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container">
  
                <div class="row g-5">
                    <?php

 //using prepared statement//
$record_per_page = 3;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;
                            
$stmt = $conn->prepare("SELECT * FROM course where uid= ? ORDER BY id desc LIMIT $start_from, $record_per_page");
$stmt->bind_param("i", $uid);
$uid = $id;   
$uid = mysqli_real_escape_string($conn, $uid);
// Execute the query
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $id = $row["id"];

        $course_name = $row["course_name"];

        $university = $row["university"];

        $location = $row["location"];
        
        $intakes = $row["intakes"];
        
        $duration = $row["duration"];
        
         $application_fee = $row["application_fee"];

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);

        $course_name = mysqli_real_escape_string($conn, $course_name);

        $university = mysqli_real_escape_string($conn, $university);
        
        $location = mysqli_real_escape_string($conn, $location);
        
        $intakes = mysqli_real_escape_string($conn, $intakes);
        
        $duration = mysqli_real_escape_string($conn, $duration);
        
        $application_fee = mysqli_real_escape_string($conn, $application_fee);
        
        
        
{ ?>    
                    <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-1'">
                            <div class="inner">
                                <div class="content">
                                    <span class="course-level"><?php echo $university; ?></span>
                                    <h5>
                                        <a href="course-details?course_name=<?php echo $row["course_name"]; ?>&university=<?php echo $row["university"]; ?>&location=<?php echo $row["location"]; ?>&id=<?php echo $row["id"]; ?>"><?php echo $course_name; ?></a>
                                    </h5>
                                    
                                    <p>Application Fee : <?php echo $application_fee; ?></p>
                                    <ul class="course-meta">
                                        <li>Duration: <?php echo $duration; ?></li>
                                        <li>Intakes: <?php echo $intakes; ?></li>
                                    </ul><br>
                                    <center><a href="apply-now" class="edu-btn btn-medium">Apply Now</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } } ?> 
                   
                  
                </div>
                
                <br>
                <ul class="edu-pagination top-space-30">
                     <?php
    $stmt = $conn->prepare("SELECT * FROM course where uid='$uid' ORDER BY id desc");
    $stmt->execute(); 
    //$page_query = "SELECT * FROM products ORDER BY id desc";
    $page_result = $stmt->get_result();
    //$page_result = mysqli_query($conn, $stmt);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    { ?>
                   
                    
                    <li><a href="university-course-details?page=<?php echo $page - 1 ?>&uid=<?php echo $uid ?>" aria-label="Previous" style="background-color:#1ab69d"><i class="icon-west" style="color:white"></i></a></li>

                    
                     <?php 
    }
                                        
                                        
                                        for($i=$start_loop; $i<=$end_loop; $i++)
    {   
        
    // echo "<a href='news-events.php?page=".$i."'>".$i."</a>";
    }
                                        
                                         if($page <= $end_loop)
                                    { ?>
                    
                    <li><a href="university-course-details?page=<?php echo $page + 1 ?>&uid=<?php echo $uid ?>" aria-label="Next" style="background-color:#1ab69d"><i class="icon-east" style="color:white"></i></a></li>
                    
                     <?php } ?>
                </ul>
                
                
                
            </div>
        </div>
      <?php include("footer.php"); ?>