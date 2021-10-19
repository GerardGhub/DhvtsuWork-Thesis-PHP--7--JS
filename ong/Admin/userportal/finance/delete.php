
<?php
extract($_REQUEST);
include('db.php');

$sql=mysql_query("select * from filemgrfinance where id='$del'");
$row=mysql_fetch_array($sql);

unlink("../item_images/$row[item_image]");

mysql_query("delete from filemgrfinance where item_id='$del'");

header("Location:managefilefinance.php");

?>