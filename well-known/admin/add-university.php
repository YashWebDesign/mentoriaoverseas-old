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
             <div class="card-header text-uppercase">Add Venue Details</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Title</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="title" required style="border-radius:350px">
				  </div>
				</div>
                 
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Heading</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="heading" required style="border-radius:350px">
				  </div>
				</div> 
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Location</label>
				  <div class="col-sm-9">
					<select class="form-control" name="area" required style="border-radius:350px">
                         <option value="" selected disabled>--Please Select Location--</option> 
                        
                      <option value="United Kingdom">UK</option>
                        <option value="USA">USA</option>
                      
                      </select>
				  </div>
				</div>
                 
                 
                
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Rank</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  name="rank"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Intake</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  name="intake"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Cost of Living</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  name="cost_of_living"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Tuition Fee</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control"  name="tuition_fee"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                  <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Image</label>
				  <div class="col-sm-9">
					<input type="file"  class="form-control"  name="image" required style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Overview</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="overview" required style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'overview' );
                 </script>
                 
                
                 
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
              
     $sql = "INSERT INTO universites (title,heading,area,rank,intake,cost_of_living,tuition_fee,overview,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql); 
              
              
  
    $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
    $title = mysqli_real_escape_string($conn, $title);  
              
    $heading = filter_var($_POST['heading'],FILTER_SANITIZE_STRING);
    $heading = mysqli_real_escape_string($conn, $heading);  
              
     $area = filter_var($_POST['area'],FILTER_SANITIZE_STRING);
    $area = mysqli_real_escape_string($conn, $area);
                       
    $rank = filter_var($_POST['rank'],FILTER_SANITIZE_STRING);
    $rank = mysqli_real_escape_string($conn, $rank); 
              
    $intake = filter_var($_POST['intake'],FILTER_SANITIZE_STRING);
    $intake = mysqli_real_escape_string($conn, $intake);
              
    $cost_of_living = filter_var($_POST['cost_of_living'],FILTER_SANITIZE_STRING);
    $cost_of_living = mysqli_real_escape_string($conn, $cost_of_living);
              
    $tuition_fee = filter_var($_POST['tuition_fee'],FILTER_SANITIZE_STRING);
    $tuition_fee = mysqli_real_escape_string($conn, $tuition_fee);
              
    $overview = $_POST['overview'];
    //$descr = mysqli_real_escape_string($conn, $descr); 
              
   // $descr = htmlentities ( trim ( $_POST[ "descr" ] ) , ENT_NOQUOTES );
    //$descr = mysqli_real_escape_string($conn, $descr);
              
  
              
       
       //$imgtitle=$_POST['imagetitle'];

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
      $folder="../university/".$filename;
      move_uploaded_file($tempname, $folder); 
   
   
$stmt->bind_param("sssssssss", $title,$heading,$area,$rank,$intake,$cost_of_living,$tuition_fee,$overview,$folder);
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "University Added Successfully",
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
       
