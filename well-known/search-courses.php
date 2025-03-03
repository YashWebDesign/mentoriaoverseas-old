<?php
include("admin/config.php");

$query = $_POST['query'];
$sql = "SELECT DISTINCT course_name FROM course WHERE course_name LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<div style='background-color:#1ab69d; padding:10px;'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p style='color:white'>" . $row["course_name"] . "</p>";
    }
    echo "</div>";
} else {
    echo "<p>No courses found!</p>";
}
?>

