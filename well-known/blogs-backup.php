<?php include("header.php"); ?>

        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">Blogs</h1>
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

        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container">


               

                <div class="row g-5">
                 
                    <?php
include("admin/config.php");
 //using prepared statement//
$record_per_page = 12;
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
    while($row = $result->fetch_assoc()) {
       $id = $row["id"];
        $image = $row["image"];
        $title = $row["title"];
        $dte = $row["dte"];
        $month	 = $row["month"];
        $year	 = $row["year"];
        
        $id = mysqli_real_escape_string($conn, $id);
        $image = mysqli_real_escape_string($conn, $image);   
        $title = mysqli_real_escape_string($conn, $title);
        $dte = mysqli_real_escape_string($conn, $dte);
        $month = mysqli_real_escape_string($conn, $month);
        $year = mysqli_real_escape_string($conn, $year);
{ ?>        
                    <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-3'">
                            <div class="inner">
                                 <?php
                                 $titleForUrl = urlencode(strtolower(str_replace(":", "", str_replace(" ", "-", $row["title"]))));
                                 ?>
                                <div class="thumbnail">
                                    <a href="" onclick="submitForm('<?php echo $titleForUrl; ?>', '<?php echo $row["id"]; ?>'); return false;">
                                        <img src="blog-photos/<?php echo $row["image"]; ?>" alt="Course Meta">
                                    </a>
                                </div>
                                <div class="content">
                                    
                                    <h5 class="title">
                                       
<a href="#" onclick="submitForm('<?php echo $titleForUrl; ?>', '<?php echo $row["id"]; ?>'); return false;">
    <?php echo $title; ?>
</a>

<form action="blog-details/<?php echo $titleForUrl; ?>" method="post" style="display: none;" id="form_<?php echo $row["id"]; ?>">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="hidden" name="title" value="<?php echo $row["title"]; ?>">
</form>

                                        
                                    </h5> 

                                    
                                    <a href="" onclick="submitForm('<?php echo $titleForUrl; ?>', '<?php echo $row["id"]; ?>'); return false;"><p><?php echo implode(' ', array_slice(explode(' ', $row["descr"]), 0, 20)) ?>... <i>See More</i></p></a>  
                                    
                                    
                                  

                                </div>
                            </div>
                        </div>
                    </div>
                   <?php } } } ?> 
                   
                </div>
                
                
                <ul class="edu-pagination top-space-30">
                     <?php
    $stmt = $conn->prepare("SELECT * FROM blogs order by id DESC");
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
                    <li><a href="blogs?page=<?php echo $page - 1 ?>" aria-label="Previous" style="background-color:#1ab69d"><i class="icon-west" style="color:white"></i></a></li>
                    
                     <?php 
    }
                                        
                                        
                                        for($i=$start_loop; $i<=$end_loop; $i++)
    {   
        
    // echo "<a href='news-events.php?page=".$i."'>".$i."</a>";
    }
                                        
                                         if($page <= $end_loop)
                                    { ?>
                    
                    <li><a href="blogs?page=<?php echo $page + 1 ?>" aria-label="Next" style="background-color:#1ab69d"><i class="icon-east" style="color:white"></i></a></li>
                    
                     <?php } ?>
                </ul>
                
            </div>
        </div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    function submitForm(title, id) {
        var encodedTitle = encodeURIComponent(title);
        var lowercaseTitle = encodedTitle.toLowerCase(); // Convert to lowercase
        document.getElementById('form_' + id).elements['title'].value = lowercaseTitle;
        document.getElementById('form_' + id).submit();
    }
</script>
        <?php include("footer.php"); ?>