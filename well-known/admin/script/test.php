<form method="post" action="">
             
             <input type="submit" value="test" name="delete" style="">
             </form>







 <?php
include("../config.php");
    include("modal.php");
          
          if(isset($_REQUEST['delete'])) {   
          
             
 
 
 $query="delete from leads";
   $data = mysqli_query($conn, $query);
   
   if($data)
   {
       
      
      echo '<script type="text/javascript">';
		echo 'swal({
		      title: "Hello!",
		      text: "Records Deleted Succesfully",
		      type: "success"
		    })';
       echo'.then(function() {
    window.location = "users.php";
});';
		echo '</script>';
       
   }
           

            else
            {
                echo '<script language="javascript">';
echo 'alert("Something Went Wrong")';
echo '</script>';
            }
 
     
          }

?>