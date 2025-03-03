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
            <div class="card-header"><i class="fa fa-table"></i> Total Country</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                         <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                   
                    
                    <?php
           // error_reporting(0);
                    
            $stmt = $conn->prepare("SELECT * FROM country order by id desc");
$stmt->execute();
$result = $stmt->get_result();

            if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        
        $id = $row["id"];

        $title = $row["title"];

        $country_name = $row["country_name"];
        
        

       

        // Escape special characters

        $id = mysqli_real_escape_string($conn, $id);

        $title = mysqli_real_escape_string($conn, $title);

        $country_name = mysqli_real_escape_string($conn, $country_name); 
        
{ ?> 
                    
                    <tr>
                        
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["country_name"] ?></td>
                        
                       
                        
                        <td>
                           &nbsp;&nbsp;&nbsp;
                          <a  href="update-country-details?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-edit" style="font-size:18px;color:#ff5c6c"></i></span></a>
                            
                             &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="manage-countries?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
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

$sql = "DELETE FROM universites WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
   
   header('Location: manage-university'); //If book.php is your main page where you list your all records
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