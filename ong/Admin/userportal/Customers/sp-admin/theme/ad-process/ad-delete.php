<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$tb = asp_table;
$spconn->where('id_user',$id);
$spconn->delete($tb);
  
?>


