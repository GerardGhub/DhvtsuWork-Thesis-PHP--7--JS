<?php



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"std_db");



?>

<?php
if(isset($_POST['item_saved']))

{
$classname = $_POST['classname'];
$dep_sec = $_POST['dep_sec'];

 
 $check_item="select category_id from miscategory WHERE category_id='category_id'";
    $run_query=mysqli_query($dbcon,$check_item);




	
		

	
			$saveitem="insert into miscategory (classname,dep_sec,date_added) VALUE ('$classname','$dep_sec',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('managecategory.php','_self')</script>";
				}
				else{
					
					
				}
		

				
				   
				
	
		
	
		


?>


 





