<?php
include("header.php");
?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      
        
      
      <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Date of Submission (yy/mm/dd)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                   
                    <?php
           // error_reporting(0);
                    
            $stmt = $conn->prepare("SELECT * FROM assestment order by id desc");
$stmt->execute();
$result = $stmt->get_result();

            if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        
        $id = $row["id"];

        $name = $row["name"];
        
        $phone = $row["phone"];
       
        $email = $row["email"];
        
        $dob = $row["dob"];
           
        $submit_date = $row["submit_date"]; 
           
           
           

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);

        $name = mysqli_real_escape_string($conn, $name);
        
        $phone = mysqli_real_escape_string($conn, $phone);
        
        $email = mysqli_real_escape_string($conn, $email);
        
        $dob = mysqli_real_escape_string($conn, $dob);
        
        $submit_date = mysqli_real_escape_string($conn, $submit_date);
        
{ ?> 
                    
                    <tr>
                        
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["dob"] ?></td>
                        <td><?php echo $row["submit_date"] ?></td>
                        
                        <td>
                             &nbsp;&nbsp;&nbsp;
                          <a  href="assestment-details?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-eye" style="font-size:18px;color:#ff5c6c"></i></span></a>
                          
                             &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="enquiry?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
                        </td>
                        
                       
                        
                       
                       
                       
                    </tr>
                     <?php } } } ?> 
                  </tbody>      
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
        

     
      
         <?php
error_reporting(0);
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
   
   header('Location: enquiry.php'); //If book.php is your main page where you list your all records
   // exit;
} else {
    //echo "Error deleting record";
}

?>
        
	  
       <!--End Dashboard Content-->
      <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<?php include("footer.php"); ?>