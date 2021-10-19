
<?php
extract($_REQUEST);
include('db.php');

$sql=mysql_query("select * from filemgrmis where id='$del'");
$row=mysql_fetch_array($sql);

unlink("../item_images/$row[item_image]");

mysql_query("delete from filemgrmis where item_id='$del'");

header("Location:../managefilemis.php");

?>