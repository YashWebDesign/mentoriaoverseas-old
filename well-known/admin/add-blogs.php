<?php

include("header.php");

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
        
    <style type="text/css">
   /* Chrome, Safari, Edge, Opera number inout key removing*/
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield; 
</style>
    
	
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="card">
             <div class="card-header text-uppercase">Add Blogs</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Title</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="title" required style="border-radius:350px">
				  </div>
				</div>
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Date / Month / Year</label>
				  <div class="col-sm-3">
					<select class="form-control" name="dte" required style="border-radius:350px">
                         <option value="" selected disabled>--Select Date--</option> 
                        
                      <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        
                      </select>
				  </div>
                     
                     <div class="col-sm-3">
					<select class="form-control" name="month" required style="border-radius:350px">
                         <option value="" selected disabled>--Select Month--</option> 
                        
                      <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                      </select>
				  </div>
                     
                     <div class="col-sm-3">
					<select class="form-control" name="year" required style="border-radius:350px">
                         <option value="" selected disabled>--Select Year--</option> 
                        
                      <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
				  </div>
                     
                     
				</div>
                
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Description</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="descr" required style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'descr' );
                 </script>
                 
                 
                  <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Image</label>
				  <div class="col-sm-9">
					<input type="file"  class="form-control"  name="image" required style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 
                <div class="form-group row">
				  <label for="basic-textarea" class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" style="border-radius:350px;background-color:#ff5c6c;color:white;border:white">
				  </div>
				</div>
                 
                 
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->

        
       
<?php

          include("modal.php");
          if(isset($_REQUEST['submit'])) 
          
          
          {
              
     $sql = "INSERT INTO blogs (title,descr,dte,month,year,image) VALUES (?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql); 
              
              
  
    $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
    $title = mysqli_real_escape_string($conn, $title);  
              
    $descr = $_POST["descr"];
    //$descr = mysqli_real_escape_string($conn, $descr);  
              
    $dte = filter_var($_POST['dte'],FILTER_SANITIZE_STRING);
    $dte = mysqli_real_escape_string($conn, $dte);
              
    $month = filter_var($_POST['month'],FILTER_SANITIZE_STRING);
    $month = mysqli_real_escape_string($conn, $month);
              
     $year = filter_var($_POST['year'],FILTER_SANITIZE_STRING);
    $year = mysqli_real_escape_string($conn, $year);         

$filename=$_FILES["image"]["name"];
// get the image extension
$extension = substr($filename,strlen($filename)-4,strlen($filename));
// allowed extensions
//$allowed_extensions = array(".pdf",".docx");    
 //$allowed_extensions = array(".pdf",".docx");  
   
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".webp");   
              
                 
              
     if(!in_array($extension,$allowed_extensions))
{
//echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
 echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Sorry!",
		      text: "Invalid format. Only jpg / jpeg/ png /gif format allowed",
		      type: "info"
		    })';
      echo'.then(function() {
    window.history.go(-1);
});';
		echo '</script>';        
}         
      
     else
     {
              
     $filename =$_FILES["image"]["name"];
      $tempname =$_FILES["image"]["tmp_name"];
         $exp = explode(".", $filename);
		$end = end($exp);
        $filename = time().".".$end;
      $filename = preg_replace("/[^A-Za-z0-9.]/", "", $filename);
      $folder="../blog-photos/".$filename;
      move_uploaded_file($tempname, $folder); 
   
   
$stmt->bind_param("ssssss", $title,$descr,$dte,$month,$year,$folder);
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "Blog Added Successfully",
		      type: "success"
		    })';
      //echo'.then(function() {
    //window.history.go(-1);
//});';
		echo '</script>';
      


     
       
   }      
            else
            {
                echo '<script language="javascript">';
echo 'alert("Something Went Wrong")';
echo '</script>';
            }
     }
          }
          

?>
        
     <div class="overlay toggle-menu"></div>
    </div>
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<?php include("footer.php"); ?>
       
