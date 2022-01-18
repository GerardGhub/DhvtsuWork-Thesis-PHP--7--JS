<?php 




$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"std_db");





?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file_img[]" multiple/>
<input type="submit" name="btn_upload" value="Upload">	
</form>

<?php
if(isset($_POST['btn_upload']))
{
	$policy_title = $_POST['policy_title'];
$department = $_POST['department'];
$dh = $_POST['dh'];
$revisionno = $_POST['revisionno'];
$category_id = $_POST['category_id'];
$issuedate = $_POST['issuedate'];
$effectivedate = $_POST['effectivedate'];
	
	
	
	
	for($i=0; $i<count($_FILES["file_img"]["name"]); $i++)
	{
	$filetmp = $_FILES["file_img"]["tmp_name"][$i];
	$filename = $_FILES["file_img"]["name"][$i];
	$filetype = $_FILES["file_img"]["type"][$i];
    $filesize = $_FILES["file_img"]["size"];
	//	$filepath = "/larni/item_images/";
	$filepath = "../item_images/".$filename;
	if($filetmp == "")
	{
		
	echo "Please Select a image";
	}
	else
	{
		
			move_uploaded_file($filetmp,$filepath);
		
	
	//	if($filesize > 2097152)
	//	{
	//		echo "photo > 2mb";
		//}
	//	else
		//{
		if($filetype != "image/jpeg"
		&& $filetype != "image/png"
		&& $filetype != "image/gif")
		{
			
			  echo "<script>alert('Please upload jpeg png only ! !');</script>";
			  echo "<script>window.open('managedata.php','_self')</script>";
		}
		else
			   
		{  	
	
	//				$saveitem="insert into mis (policy_title,department,item_image,dh,revisionno,category_id,item_date) VALUES ('$policy_title','$department','$itempic','$dh','$revisionno','$category_id',CURDATE())";
			//		mysqli_query($dbcon,$saveitem);
		
					

    echo "<script>alert('Succesfuly Saved!!!');</script>";
    echo "<script>window.open('managedata.php','_self')</script>";
   
			//move_uploaded_file($filetmp,$filepath);
			

						$saveitem = "INSERT INTO mis (policy_title,department,item_image,dh,revisionno,category_id,img_name,img_path,img_type,issuedate,effectivedate,item_date) 
			VALUES ('$policy_title','$department','$itempic','$dh','$revisionno','$category_id','$filename','$filepath','$filetype','$issuedate','$effectivedate',CURDATE())";
			
			//$result = mysql_query($sql);
			mysqli_query($dbcon,$saveitem);
//	}
		}
	 }
	}
}
?>

</body>
</html>

