<?php
include('dbcon.php');
include('session.php');
$friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
//$name = $_POST['item_image'];
//	$name = $row['item_image'];
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submitlaarnie'])!=""){	
	$name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
   
 move_uploaded_file($temp,"../item_images/".$name);
	
$conn->query("insert into message(reciever_id,content,item_image,date_sended,sender_id) values('$friend_id','$my_message','$name',NOW(),'$session_id')");
if($query){
	
 echo "<script>window.open('managefilefinance.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>
<script>alert('Message Sent');</script>
<script>window.location = 'message.php'; </script>
<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>