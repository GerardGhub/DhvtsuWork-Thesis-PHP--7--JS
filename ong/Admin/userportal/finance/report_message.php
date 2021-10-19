

<?php 




$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");

$get_id = $_GET['id'];

$savelisa = "INSERT INTO messagereport (reciever_id,content,item_image,date_sended,sender_id,department,user_image,sender_name)
SELECT reciever_id,content,item_image,date_sended,sender_id,department,user_image,sender_name FROM message WHERE message_id='$get_id';";

//				select * from tb_equipment where item_category=1;";
			mysqli_query($dbcon,$savelisa);
			?>
			


			
			
			
			
			
			<?php
include('dbcon.php');


$get_id = $_GET['id'];
$conn->query("delete from message where message_id = '$get_id'");

//"INSERT INTO messageread (reciever_id,content,item_image,date_sended,sender_id,department,user_image,sender_name)
//SELECT from message WHERE message_id = '$get_id'");


//("delete from message where message_id = '$get_id'");

header('location:message.php');
?>