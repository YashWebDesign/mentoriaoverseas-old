<?php
include("admin/config.php");

$query = $_POST['query'];
$sql = "SELECT DISTINCT title FROM universites WHERE title LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<div'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p style='color:white'>" . $row["title"] . "</p>";
    }
    echo "</div>";
} else {
    echo "<p>No universities found!</p>";
}
?>
