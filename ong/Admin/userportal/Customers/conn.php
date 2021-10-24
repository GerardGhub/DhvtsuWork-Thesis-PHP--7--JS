<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","srms");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
//MySQLi Object-oriented
//$conn = new mysqli("localhost","root","","download");
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
 
?>