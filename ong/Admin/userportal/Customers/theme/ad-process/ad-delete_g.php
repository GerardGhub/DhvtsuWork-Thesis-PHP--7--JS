<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('id_user',$id);
$spconn->delete('tb_guest');
  
?>


