<?php



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");



?>

<?php
if(isset($_POST['item_save']))

{
$classname = $_POST['classname'];
//$blink = $_POST['blink'];

 
 $check_item="select category_id from misdepfinal WHERE category_id='category_id'";
    $run_query=mysqli_query($dbcon,$check_item);



		
	//$logs= $_POST['logs'];
		
	//$saveitem="insert into tblcheck (checkid,username,activity,department,dateaccess) VALUE ('','$classname','Add New HR //Memoradum.','$department',now())";
		//			mysqli_query($dbcon,$saveitem);
				
	
		

	
					$saveitem="insert into misdepfinal (classname,blink,date_added) VALUE ('$classname','1',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('managesection.php','_self')</script>";
				}
				else{
					
					
				}
		

				
				   
				
	
		
	
		


?>


      <!--<a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle">-->





