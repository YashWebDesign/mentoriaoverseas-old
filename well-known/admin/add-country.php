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
             <div class="card-header text-uppercase">Add Country</div>
             <div class="card-body">
			 
			 <form action=""  method="post" enctype="multipart/form-data">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Title</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="title" required style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Country Name</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="country_name" required style="border-radius:350px">
				  </div>
				</div>
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Intro</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="intro" required style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'intro' );
                 </script>
                 
                     <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Salary per annum</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="salary_per_annum"  style="border-radius:350px">
				  </div>
				</div> 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">No. of Students</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="no_of_students"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Global Ranking</label>
				  <div class="col-sm-9">
					<input type="text"  class="form-control" placeholder="" name="ranking"  style="border-radius:350px">
				  </div>
				</div>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 1</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why1"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why1' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 2</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why2"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why2' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Why Study 3</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="why3"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'why3' );
                 </script>
                 
                 
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Monthly Cost Of Living</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="cost_of_living_monthly"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'cost_of_living_monthly' );
                 </script>
                 
                 
                 <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Yearly Cost Of Living</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="cost_of_living_yearly"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'cost_of_living_yearly' );
                 </script>
                 
                 
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Overview</label>
				  <div class="col-sm-9">
					<textarea class="form-control" name="overview"  style="border-radius:350px"></textarea>
				  </div>
				</div>
                 <script>
                    CKEDITOR.replace( 'overview' );
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
              
     $sql = "INSERT INTO country (title,country_name,intro,salary_per_annum,no_of_students,ranking,why1,why2,why3,cost_of_living_monthly,cost_of_living_yearly,overview,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql); 
              
              
  
    $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
    $title = mysqli_real_escape_string($conn, $title);
              
    $country_name = filter_var($_POST['country_name'],FILTER_SANITIZE_STRING);
    $country_name = mysqli_real_escape_string($conn, $country_name);
              
     $intro = $_POST['intro'];
              
    $salary_per_annum = filter_var($_POST['salary_per_annum'],FILTER_SANITIZE_STRING);
    $salary_per_annum = mysqli_real_escape_string($conn, $salary_per_annum);  
              
     $no_of_students = filter_var($_POST['no_of_students'],FILTER_SANITIZE_STRING);
    $no_of_students = mysqli_real_escape_string($conn, $no_of_students);
                       
    $ranking = filter_var($_POST['ranking'],FILTER_SANITIZE_STRING);
    $ranking = mysqli_real_escape_string($conn, $ranking); 
       
    $why1 = $_POST['why1'];
    
     $why2 = $_POST['why2']; 
              
      $why3 = $_POST['why3'];
              
    $cost_of_living_monthly = $_POST['cost_of_living_monthly'];
              
    $cost_of_living_yearly = $_POST['cost_of_living_yearly'];
              
    $overview = $_POST['overview'];
              
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
      $folder="../countries/".$filename;
      move_uploaded_file($tempname, $folder); 
   
   
$stmt->bind_param("sssssssssssss", $title,$country_name,$intro,$salary_per_annum,$no_of_students,$ranking,$why1,$why2,$why3,$cost_of_living_monthly,$cost_of_living_yearly,$overview,$folder);
    $stmt->execute();
   
   if($stmt)
   {
      
    echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Wow!",
		      text: "Country Added Successfully",
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
       
