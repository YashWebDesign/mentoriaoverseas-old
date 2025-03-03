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
            <div class="card-header"><i class="fa fa-table"></i> Total Course</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
           // error_reporting(0);
                    
            $stmt = $conn->prepare("SELECT * FROM course order by id desc");
$stmt->execute();
$result = $stmt->get_result();

            if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        
        $id = $row["id"];

        $course_name = $row["course_name"];

        $university = $row["university"];
        
         $campus = $row["campus"];

       

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);

        $course_name = mysqli_real_escape_string($conn, $course_name);

        $university = mysqli_real_escape_string($conn, $university);   
        
        $campus = mysqli_real_escape_string($conn, $campus);   
        
{ ?> 
                    <tr>
                        
                        <td><?php echo $row["course_name"] ?></td>
                        
                       
                        
                        <td>
                           &nbsp;&nbsp;&nbsp;
                          <a  href="update-course?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-edit" style="font-size:18px;color:#ff5c6c"></i></span></a>
                            
                             &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="manage-courses?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
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

$sql = "DELETE FROM course WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
   
   header('Location: manage-courses'); //If book.php is your main page where you list your all records
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