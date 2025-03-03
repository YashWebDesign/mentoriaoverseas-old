<?php include("header.php"); 
include("admin/config.php");
$stmt = $conn->prepare("SELECT * FROM country WHERE country_name = ?");
$stmt->bind_param("s", $country_name);
$country_name = "Ireland";   
$country_name = mysqli_real_escape_string($conn, $country_name); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
    {
     $id = $row["id"];
     $title = $row["title"];
     $country_name = $row["country_name"];
     $salary_per_annum = $row["salary_per_annum"];
     $no_of_students = $row["no_of_students"];   
     $ranking = $row["ranking"];
      $why1 = $row["why1"]; 
      $why2 = $row["why2"]; 
     $why3 = $row["why3"]; 
     $cost_of_living_monthly = $row["cost_of_living_monthly"];          
      $cost_of_living_yearly = $row["cost_of_living_yearly"];
      $image = $row["image"];
      $intro = $row["intro"];
      $overview = $row["overview"];
        
     $id = mysqli_real_escape_string($conn, $id);
     $title = mysqli_real_escape_string($conn, $title);
     $country_name = mysqli_real_escape_string($conn, $country_name);
    $salary_per_annum = mysqli_real_escape_string($conn, $salary_per_annum);
       $no_of_students = mysqli_real_escape_string($conn, $no_of_students);
        $ranking = mysqli_real_escape_string($conn, $ranking);
        $why1 = mysqli_real_escape_string($conn, $why1);
        $why2 = mysqli_real_escape_string($conn, $why2);
        $why3 = mysqli_real_escape_string($conn, $why3);
        $cost_of_living_monthly = mysqli_real_escape_string($conn, $cost_of_living_monthly);
         $cost_of_living_yearly = mysqli_real_escape_string($conn, $cost_of_living_yearly);
        $image = mysqli_real_escape_string($conn, $image);
        $intro = mysqli_real_escape_string($conn, $intro);
        $overview = mysqli_real_escape_string($conn, $overview);
   {  
?>

        <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image" style="background-image: url(countries/<?php echo $row["image"]; ?>);">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title"><?php echo $country_name; ?></h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="">Country</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $country_name; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="edu-section-gap course-details-area">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-12">
                        <div class="course-details-content course-details-2" style="color:black">
                            <div class="course-overview">
                                <h3 class="heading-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="font-size:20px"><?php echo $title; ?></h3>
                                <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color:black"><?php echo $row["intro"]; ?></p>
                                
                                
                                <div class="course-enroll-box">
                                <div class="single-item course-price">
                                    <h6 class="title">Average Salary per annum</h6>
                                    <span class="price"><?php echo $salary_per_annum; ?></span>
                                </div>
                                <div class="single-item course-price">
                                    <h6 class="title">No. of International Students</h6>
                                    <span class="price"><?php echo $no_of_students; ?></span>
                                </div>
                                <div class="single-item course-price">
                                    <h6 class="title">Global Employability Ranking</h6>
                                    <span class="price"><?php echo $ranking; ?></span>
                                </div>
                            </div>
                                
                                
                           <br><br>     
                                
                        
                          
        <div class="edu-blog-area blog-area-4">
            <div class="container">
                 <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title">Why Study in <?php echo $country_name; ?></h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="content">
                                    <p><?php echo $row["why1"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="content">
                                    <p><?php echo $row["why2"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="content">
                                    <p><?php echo $row["why3"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
                                
              <br><br><br>                  
            <div class="edu-blog-area blog-area-4">
            <div class="container">
                 <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title">Cost of Living and Studying in <?php echo $country_name; ?></h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="content">
                                    <p><?php echo $row["cost_of_living_monthly"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-6 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="content">
                                    <p><?php echo $row["cost_of_living_yearly"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                
                 <br><br>    
                <p><?php echo $row["overview"]; ?></p>
            </div>
        </div>
                              
                               
                                
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } } }  ?>
    <?php include("footer.php"); ?>