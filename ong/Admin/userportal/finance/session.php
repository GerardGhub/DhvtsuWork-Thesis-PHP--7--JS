<?php
session_start();
$_SESSION['id'] = $row['id'];
if (!isset($_SESSION['id'])){
header('location:message.php');
}
$session_id = $_SESSION['sess_user_id'];
$session_query = $conn->query("select * from ongusers where id = '$session_id'");
$user_row = $session_query->fetch();
$username = $user_row['fname']." ".$user_row['lastname'];
$image = $user_row['user_image'];
?>

