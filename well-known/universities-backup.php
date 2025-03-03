<?php include("header.php"); ?>

        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">Course Style 2</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="#">Courses</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">Course Style 2</li>
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


                <div class="edu-sorting-area">
                    <div class="sorting-left">
                        <h6 class="showing-text">We found <span>71</span> courses available for you</h6>
                    </div>
                    <div class="sorting-right">
                        <div class="layout-switcher">
                            <label>Grid</label>
                            <ul class="switcher-btn">
                                <li><a href="course-one.html" class="active"><i class="icon-53"></i></a></li>
                                <li><a href="course-four.html" class=""><i class="icon-54"></i></a></li>
                            </ul>
                        </div>
                        <div class="edu-sorting">
                            <div class="icon"><i class="icon-55"></i></div>
                            <select class="edu-select">
                                <option>Filters</option>
                                <option>Low To High</option>
                                <option>High Low To</option>
                                <option>Last Viewed</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    
                    <?php
include("admin/config.php");
 //using prepared statement//
$record_per_page = 9;
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
                            
$stmt = $conn->prepare("SELECT * FROM universites order by id DESC LIMIT $start_from, $record_per_page");

// Execute the query
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $id = $row["id"];

        $title = $row["title"];

        $image = $row["image"];

        //$descr = $row["descr"];

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);

        $title = mysqli_real_escape_string($conn, $title);

        $image = mysqli_real_escape_string($conn, $image);
        
        //$descr = mysqli_real_escape_string($conn, $descr);
        
        
        
{ ?>    
                <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                    <div class="col-md-6 col-lg-4 " data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" >
                        <div class="edu-course course-style-3 course-box-shadow">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="university-details?title=<?php echo $row["title"]; ?>&id=<?php echo $row["id"]; ?>">
                                        <img src="university/<?php echo $row["image"]; ?>" alt="Course Meta">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <center><a href="university-details?title=<?php echo $row["title"]; ?>&id=<?php echo $row["id"]; ?>"><?php echo $title; ?></a></center>
                                    </h5>
                                   
                                       <center> <a class="edu-btn btn-small btn-secondary" href="university-details?title=<?php echo $row["title"]; ?>&id=<?php echo $row["id"]; ?>">Explore Now <i class="icon-4"></i></a></center>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </table>
                    </div>
                        
                    
                   <?php } } } ?> 
                   
                   
                </div><br>
                <ul class="edu-pagination top-space-30">
                     <?php
    $stmt = $conn->prepare("SELECT * FROM universites order by id DESC");
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
                    <li><a href="universities?page=<?php echo $page - 1 ?>" aria-label="Previous" style="background-color:#1ab69d"><i class="icon-west" style="color:white"></i></a></li>
                    
                     <?php 
    }
                                        
                                        
                                        for($i=$start_loop; $i<=$end_loop; $i++)
    {   
        
    // echo "<a href='news-events.php?page=".$i."'>".$i."</a>";
    }
                                        
                                         if($page <= $end_loop)
                                    { ?>
                    
                    <li><a href="universities?page=<?php echo $page + 1 ?>" aria-label="Next" style="background-color:#1ab69d"><i class="icon-east" style="color:white"></i></a></li>
                    
                     <?php } ?>
                </ul>

            </div>
        </div>
       <?php include("footer.php"); ?>