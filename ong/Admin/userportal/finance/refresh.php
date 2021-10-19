<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chatting", $con);

$result = mysql_query("SELECT * FROM messagefinance ORDER BY id DESC");


while($row = mysql_fetch_array($result))
  {
 echo '<p>'.'<img src="../item_images/'.$row['image_user'].'" class="zoom" width="70" height="70"<img/>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<span style="font-weight: bold;
	color: #3B5998;">'.$row['sender'].'</span><b>'. '&nbsp;&nbsp;' . $row['message'].'</b></p><b style="color:black; font-size:10px; text-align:right:90px;">'. $row['timesend'].'</b><br><b style="font-size:13px;">' . $row['department'].'</b>';
  }

mysql_close($con);
?>
 <!--td class="zoom" style="text-align:center;">
				<center> <img src="../item_images/<?php echo $_SESSION['sess_user_image']?>" class="img img-rounded"  width="50" height="50" /></center>
				 </td-->