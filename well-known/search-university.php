<?php
include("admin/config.php");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    
    $search = mysqli_real_escape_string($conn, $_REQUEST["term"]);
    mysqli_set_charset($conn, 'utf8');
    // Prepare a select statement
    $sql = "SELECT * FROM universites WHERE title LIKE '%".$search."%'";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        //mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '
                    <div>
                   <style type="text/css">
                   
table tr td a:focus{
    font-style: italic;
    font-size:18px;
    
}


                   </style>

   <table class="table table bordered" style="margin-bottom:0px">
                    <tr>
    
    <td style="font-size:15px;color:black;"><a href="university-details?id='.$row["id"].'&title='.$row["title"].'" style="color:black"><span>'.$row["title"].'</span></a></td></a>
    
   
    
   
    
   </tr>
    <table>
  ';
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($conn);
?>