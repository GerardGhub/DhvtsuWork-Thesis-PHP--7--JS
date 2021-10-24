<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('roomID',$id);
$spconn->delete('tb_rooms');
  
?>


