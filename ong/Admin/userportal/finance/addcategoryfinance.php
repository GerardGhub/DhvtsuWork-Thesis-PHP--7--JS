<?php



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");



?>

<?php
if(isset($_POST['item_save']))

{
$classname = $_POST['classname'];


 
 $check_item="select category_id from financecategory WHERE category_id='category_id'";
    $run_query=mysqli_query($dbcon,$check_item);




				
	
		

	
					$saveitem="insert into financecategory (classname,date_added) VALUE ('$classname',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('managecatfinance.php','_self')</script>";
				}
				else{
					
					
				}
		

				
				   
				
	
		
	
		


?>


      <!--<a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle">-->





