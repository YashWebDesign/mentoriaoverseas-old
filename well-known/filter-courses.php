<?php
include("admin/config.php");

$courseName = $_POST['courseName'];
$location = $_POST['location'];
$intakes = $_POST['intakes'];
$duration = $_POST['duration'];

// Pagination handling
$page = isset($_POST['page']) ? $_POST['page'] : 1;
$record_per_page = 9;
$start_from = ($page - 1) * $record_per_page;

// Start building the query
$query = "SELECT * FROM course WHERE 1=1";

if(!empty($courseName)) {
    $query .= " AND course_name LIKE '%" . mysqli_real_escape_string($conn, $courseName) . "%'";
}
if(!empty($location)) {
    $query .= " AND location = '" . mysqli_real_escape_string($conn, $location) . "'";
}
if(!empty($intakes)) {
    $query .= " AND intakes = '" . mysqli_real_escape_string($conn, $intakes) . "'";
}
if(!empty($duration)) {
    $query .= " AND duration = '" . mysqli_real_escape_string($conn, $duration) . "'";
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
    while($row = mysqli_fetch_assoc($result)) {
        // Your display logic for courses
        echo '<div class="col-12 col-xl-4 col-lg-6 col-md-6">';
        echo '<div class="edu-course course-style-5 inline">';
        echo '<div class="inner">';
        echo '<div class="content">';
        echo '<span class="course-level">' . $row["university"] . '</span>';
        echo '<h5><a href="course-details?course_name=' . $row["course_name"] . '&university=' . $row["university"] . '&location=' . $row["location"] . '&id=' . $row["id"] . '">' . $row["course_name"] . '</a></h5>';
        echo '<p>Application Fee : ' . $row["application_fee"] . '</p>';
        echo '<ul class="course-meta">';
        echo '<li>Duration: ' . $row["duration"] . '</li>';
        echo '<li>Intakes: ' . $row["intakes"] . '</li>';
        echo '</ul>';
        echo '<center><a href="course-details?course_name=' . $row["course_name"] . '&university=' . $row["university"] . '&location=' . $row["location"] . '&id=' . $row["id"] . '" class="edu-btn btn-medium">Apply Now</a></center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    // Display the pagination HTML
    echo '<div class="pagination-container">';
    echo '<ul class="edu-pagination top-space-30">';
    if($page > 1) {
        echo '<li><a href="javascript:void(0)" data-page="' . ($page - 1) . '" aria-label="Previous" class="pagination-link"><i class="icon-west"></i></a></li>';
    }

    for($i = 1; $i <= $total_pages; $i++) {
        if($i == $page) {
            echo '<li class="active"><a href="javascript:void(0)" data-page="' . $i . '">' . $i . '</a></li>';
        } else {
            echo '<li><a href="javascript:void(0)" data-page="' . $i . '" class="pagination-link">' . $i . '</a></li>';
        }
    }

    if($page < $total_pages) {
        echo '<li><a href="javascript:void(0)" data-page="' . ($page + 1) . '" aria-label="Next" class="pagination-link"><i class="icon-east"></i></a></li>';
    }
    echo '</ul>';
    echo '</div>';

} else {
    echo "No courses found!";
}
