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
                Update Location
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
                     <th>Location</th>
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
            $query = "SELECT * FROM location  order by id DESC limit $start_from, $record_per_page";
				$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result))
    {
    
      	?>          
                     
                     
                  
                   <tr>
                       <td><span class="badge gradient-quepal text-white"><?php echo $row["location_name"] ?></span></td>
                       
                      <td><a  href="update-location?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-edit" style="font-size:18px;color:#ff5c6c"></i></span></a>
                           
                          
                          
                          
                           &nbsp;&nbsp;&nbsp;<a onClick="javascript: return confirm('Do you really want to remove??');" href="manage-location?id=<?php echo $row["id"]; ?>"><span><i class="fa fa-trash" style="font-size:20px;color:#ff5c6c"></i></span></a>
                          
                          
                        
                            
                          
                        
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

      
         <!--paging php-->
     <div class="col-sm-7 text-right text-center-xs">  
         
         <?php
     
     
    $page_query = "SELECT * FROM location ORDER BY id desc";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
        ?>
         
         
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href="manage-location?page=<?php echo $page - 1 ?>"><i class="fa fa-chevron-left"></i></a></li>
            
              <?php 
    }
                                        
                                        
                                        for($i=$start_loop; $i<=$end_loop; $i++)
    {   
        
    // echo "<a href='news-events.php?page=".$i."'>".$i."</a>";
    }
                                        
                                         if($page <= $end_loop)
    {
        ?>
              
            <li><a href="manage-location?page=<?php echo $page + 1 ?>"><i class="fa fa-chevron-right"></i></a></li>
          </ul>
      <?php
    }
    
    ?>
        </div>

     
        
       
        
        
	  
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