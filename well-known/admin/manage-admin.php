<?php
include("header.php");
?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      
        
      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
		  <div class="card-header border-0">
                Total Admin
				<!--<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>-->
                </div>
               <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                     
                     <thead>
                   <tr>
                     <th>Admin Email</th>
                       <th>Action</th>
                       
                     
                   </tr>
                   </thead>
                     
                      <?php
            //include("config.php");
            //error_reporting(0);
            
            $record_per_page = 35;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;
            
//$query="select * from members";
            $query = "SELECT * FROM admin  order by id DESC limit $start_from, $record_per_page";
				$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result))
    {
    
      	?>          
                     
                     
                  
                   <tr>
                       <td><span class="badge gradient-quepal text-white"><?php echo $row["email"] ?></span></td>
                       
                      <td>
                          
                          
                          
                           &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="manage-admin?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
                          
                          
                        
                            
                          
                        
                      </td>

                     </tr>

                   
                   
                   <?php
}
    ?>
				   
                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->

      
        
     
        
        <?php
error_reporting(0);
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
   
   header('Location: manage-admin'); //If book.php is your main page where you list your all records
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