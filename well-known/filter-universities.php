<?php
include("admin/config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$universityName = $_POST['UniversityName'];
$area = $_POST['area'];

// Pagination handling
$page = isset($_POST['page']) ? $_POST['page'] : 1;
$record_per_page = 9;
$start_from = ($page - 1) * $record_per_page;

// Start building the query
$query = "SELECT * FROM universites WHERE 1=1";

if(!empty($universityName)) {
    $query .= " AND title LIKE '%" . mysqli_real_escape_string($conn, $universityName) . "%'";
}
if(!empty($area)) {
    $query .= " AND area = '" . mysqli_real_escape_string($conn, $area) . "'";
}

// First, get the total number of records that meet the criteria
$total_query = str_replace("SELECT *", "SELECT COUNT(*) as total", $query);
$total_result = mysqli_query($conn, $total_query);
$total_rows = mysqli_fetch_assoc($total_result)['total'];
$total_pages = ceil($total_rows / $record_per_page);

// Add the LIMIT for pagination to the main query
$query .= " ORDER BY id DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    // Displaying the universities
    while($row = mysqli_fetch_assoc($result))  {?>
        
        
       <div class="col-md-6 col-lg-4">
        <div class="edu-course course-style-3 course-box-shadow">
            <div class="inner">
                <div class="thumbnail">
                    <a href="university-details?title=<?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?>&id=<?php echo $row["id"]; ?>">
                        <img src="university/<?php echo htmlspecialchars($row["image"], ENT_QUOTES, 'UTF-8'); ?>" alt="University">
                    </a>
                </div>
                <div class="content">
                    <h5 class="title">
                        <center><a href="university-details?title=<?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?>&id=<?php echo $row["id"]; ?>"><?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?></a></center>
                    </h5>
                    <center>
                        <a class="edu-btn btn-small btn-secondary" href="university-details?title=<?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?>&id=<?php echo $row["id"]; ?>">Explore Now <i class="icon-4"></i></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
<?php
    }

    // Displaying the pagination
    echo '<div class="pagination-container">';
    echo '    <ul class="edu-pagination top-space-30">';
    if($page > 1) {
        echo '        <li><a href="javascript:void(0)" data-page="' . ($page - 1) . '" aria-label="Previous"><i class="icon-west"></i></a></li>';
    }

    for($i = 1; $i <= $total_pages; $i++) {
        if($i == $page) {
            echo '        <li class="active"><a href="javascript:void(0)" data-page="' . $i . '">' . $i . '</a></li>';
        } else {
            echo '        <li><a href="javascript:void(0)" data-page="' . $i . '" class="pagination-link">' . $i . '</a></li>';
        }
    }

    if($page < $total_pages) {
        echo '        <li><a href="javascript:void(0)" data-page="' . ($page + 1) . '" aria-label="Next"><i class="icon-east"></i></a></li>';
    }
    echo '    </ul>';
    echo '</div>';

} else {
    echo "No universities found!";
}
?>
