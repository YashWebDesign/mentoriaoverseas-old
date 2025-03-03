<?php
include("header.php");
?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Manage Blogs</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Posted Date</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
           // error_reporting(0);
                    
            $stmt = $conn->prepare("SELECT * FROM blogs order by id desc");
$stmt->execute();
$result = $stmt->get_result();
            if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        
        $id = $row["id"];
        $title = $row["title"];
        $dte = $row["dte"];
        $month = $row["month"];
        $year = $row["year"];
        $image = $row["image"];

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);
        $title = mysqli_real_escape_string($conn, $title);
        $dte = mysqli_real_escape_string($conn, $dte);
        $month = mysqli_real_escape_string($conn, $month);
        $year = mysqli_real_escape_string($conn, $year);
        $image = mysqli_real_escape_string($conn, $image);    
        
{ ?> 
                    <tr>
                        
                        <td><?php echo $row["title"]; ?></td>
                        <td><?php echo $row["dte"]; ?> <?php echo $row["month"]; ?> <?php echo $row["year"]; ?></td>
                        <td><a href="<?php echo $row["image"]; ?>" target="_blank"><img  src="<?php echo $row["image"]; ?>" alt="Wedding Photography" style="width:50px"></a></td>
                       
                        
                        <td>
                          
                            &nbsp;&nbsp;&nbsp;
                          <a  href="update-blogs?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-edit" style="font-size:18px;color:#ff5c6c"></i></span></a>
                            
                             &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="manage-blogs?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
                            
                            
                            
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

$sql = "DELETE FROM blogs WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
   
   header('Location: manage-blogs'); //If book.php is your main page where you list your all records
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