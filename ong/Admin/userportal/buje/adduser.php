<?php




$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");



?>

<?php
if(isset($_POST['item_save']))
{
$item_name = $_POST['username'];
$item_price = $_POST['user_password'];
$stud_no = $_POST['Fullname'];
$lrn_no = $_POST['department'];
 
 $check_item="select * from users WHERE item_image='$item_image'";
    $run_query=mysqli_query($dbcon,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Users is already exist, Please try another one!')</script>";
 echo"<script>window.open('userdashboard.php','_self')</script>";
exit();
    }
 
$imgFile = $_FILES['item_image']['name'];
$tmp_dir = $_FILES['item_image']['tmp_name'];
$imgSize = $_FILES['item_image']['size'];

$upload_dir = 'item_images/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt;


				
	
			if(in_array($imgExt, $valid_extensions)){			
		
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
					$saveitem="insert into users (UserName,user_password,Fullname,department,updationDate) VALUE ('$item_name','$item_price','$itempic','$stud_no','$lrn_no',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('dashboard.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Sorry, your file is too large.')</script>";				
					 echo "<script>window.open('managepolicyhr.php','_self')</script>";
				}
			}
			else{
				
				 echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";				
					 echo "<script>window.open('managepolicyhr.php','_self')</script>";
				
			}
		
	
		

}

?>









