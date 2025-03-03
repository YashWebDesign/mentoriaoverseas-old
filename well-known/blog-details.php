<?php include("header.php"); 
include("admin/config.php");
//$id=$_GET['id'];
//$title=$_GET['title'];

$id=$_GET['id'];
$title=$_GET['title'];

//$title = isset($_GET['title']) ? urldecode($_GET['title']) : null;

$stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
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
     $descr = $row["descr"];
     $dte = $row["dte"];
     $month = $row["month"];
     $year = $row["year"];
     $image = $row["image"];
    
        
     $id = mysqli_real_escape_string($conn, $id);
     $title = mysqli_real_escape_string($conn, $title);
     $descr = mysqli_real_escape_string($conn, $descr);
     $dte = mysqli_real_escape_string($conn, $dte);
     $month = mysqli_real_escape_string($conn, $month);
     $year = mysqli_real_escape_string($conn, $year);
     $image = mysqli_real_escape_string($conn, $image); 
   {  
   
?>


        
        <div class="blog-details-area section-gap-equal">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <div class="entry-content">
                                <h3 class="title"><?php echo $title ?></h3>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i><?php echo $month ?> <?php echo $dte ?>, <?php echo $year ?></li>
                                </ul>
                                <div class="thumbnail">
                                    <img src="blog-photos/<?php echo $row["image"]; ?>" alt="">
                                </div>
                            </div>
                            <p style="color:black"><?php echo $row["descr"]; ?> </p>
                            
                            
                            
                           
                            
                        </div>

                        

                        

                        
                        
                    </div>
                    





                    <div class="col-lg-4">
                        <div class="edu-blog-sidebar sticky-sidebar">
                            
                            
                            <div class="edu-blog-widget widget-latest-post">
                                <div class="inner">
                                    <h4 class="widget-title">Latest Blogs</h4>
                                    <div class="content latest-post-list">
                                         <?php 
//using prepared statement//
$record_per_page = 10;
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
$stmt = $conn->prepare("SELECT * FROM blogs order by id DESC LIMIT $start_from, $record_per_page");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
    {
     $id = $row["id"];
     $title = $row["title"];
     $descr = $row["descr"];
     $dte = $row["dte"];
     $month = $row["month"];
     $year = $row["year"];
     $image = $row["image"];
    
        
     $id = mysqli_real_escape_string($conn, $id);
     $title = mysqli_real_escape_string($conn, $title);
     $descr = mysqli_real_escape_string($conn, $descr);
     $dte = mysqli_real_escape_string($conn, $dte);
     $month = mysqli_real_escape_string($conn, $month);
     $year = mysqli_real_escape_string($conn, $year);
     $image = mysqli_real_escape_string($conn, $image); 
   {  
   
?>  
                                        
                    <?php
// Assuming $row is the fetched row from the database
//$category = $row["category"];
//$title = $row["title"];
//$id = $row["id"];

// Format category and title for URL
//$categorySlug = strtolower(str_replace(' ', '-', $category));
$titleSlug = strtolower(str_replace(' ', '-', $title));

// Create the user-friendly URL with id first and title later
$productUrl = "blog-details/{$id}/{$titleSlug}";
?>                    
                                        
                                        <div class="latest-post">
                                            
                                            <div class="thumbnail">
                                                <a href="<?php echo $productUrl; ?>">
                                                    <img src="blog-photos/<?php echo $row["image"]; ?>" alt="" style="width:100px">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                
                                                
                                                <h6 class="title"><a href="<?php echo $productUrl; ?>" ><?php echo implode(' ', array_slice(explode(' ', $title), 0, 8)) ?>...</a></h6>
                                                
                                                
                                                <ul class="blog-meta">
                                                    <li><i class="icon-27"></i><?php echo $dte ?> <?php echo $month ?>, <?php echo $year ?></li>  
                                                </ul>
                                            </div>
                                        </div>
                                        <?php } } }  ?>
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

 <?php } } }  ?>
                    
<!-- sticky Sidebar-->
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .header {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f1f1f1; /* Change this to your header background color */
        z-index: 1000;
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f1f1f1; /* Change this to your footer background color */
        z-index: 1000;
    }

    .content {
        margin-top: 80px; /* Adjust this value based on your header height */
        margin-bottom: 60px; /* Adjust this value based on your footer height */
        position: relative;
        z-index: 1; /* Ensure the content is below the header and footer */
    }

    .sticky-sidebar {
        position: -webkit-sticky;
        position: sticky;
        top: 20px; /* Adjust the top spacing as needed */
        z-index: 2; /* Ensure the sidebar is above the content but below the header */
    }

    .sticky-sidebar.fixed {
        position: fixed;
        width: 30%;
    }
    
    /* Media query for screens smaller than 768px (typical mobile devices) */
    @media (max-width: 768px) {
        .sticky-sidebar,
        .sticky-sidebar.fixed {
            position: relative;
            top: auto;
            width: 100%;
        }
    }
</style>




        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                    <script>
    window.onscroll = function() { myFunction() };

    var sidebar = document.querySelector('.sticky-sidebar');
    var offsetTop = sidebar.offsetTop;

    function myFunction() {
        if (window.pageYOffset > offsetTop) {
            sidebar.classList.add('fixed');
        } else {
            sidebar.classList.remove('fixed');
        }
    }
</script>
<!-- sticky Sidebar-->

<!--clean url-->
<script>
    function submitForm(title, id) {
        var encodedTitle = encodeURIComponent(title);
        var lowercaseTitle = encodedTitle.toLowerCase(); // Convert to lowercase
        document.getElementById('form_' + id).elements['title'].value = lowercaseTitle;
        document.getElementById('form_' + id).submit();
    }
</script>
       <?php include("footer.php"); ?>