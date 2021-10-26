<?php



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");



?>

<?php
if(isset($_POST['item_saved']))

{
$classname = $_POST['classname'];
$dep_sec = $_POST['dep_sec'];
//$department =$_SESSION['sess_department'];
 //$department = $_POST['department'];
 
 $check_item="select category_id from miscategory WHERE category_id='category_id'";
    $run_query=mysqli_query($dbcon,$check_item);



		
	//$logs= $_POST['logs'];
		
	//$saveitem="insert into tblcheck (checkid,username,activity,department,dateaccess) VALUE //('','$classname','Add New MIS Category.','MIS',now())";
		//			mysqli_query($dbcon,$saveitem);
				
	
		

	
			$saveitem="insert into miscategory (classname,dep_sec,date_added) VALUE ('$classname','$dep_sec',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('managecategory.php','_self')</script>";
				}
				else{
					
					
				}
		

				
				   
				
	
		
	
		


?>


 >





