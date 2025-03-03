<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neelhqas_kabir";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) 

{
    echo"";
}

else
{
    
    die("coonecton failed becaue" . mysqli_connect_error());
}



// sql to create table
/*
$sql = "CREATE TABLE candidate_registration (

id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50),
name VARCHAR(200),
phone VARCHAR(200),
home_phone VARCHAR(200),
email VARCHAR(200)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table  certificate created successfully";
} else {
    echo "Error creating certificate: " . $conn->error;
}
*/
//$conn->close();


?>