<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('category_id',$id);
$spconn->delete('tb_category');

$spconn->where('category_id',$id);
$spconn->delete('tb_rooms');
  
?>


