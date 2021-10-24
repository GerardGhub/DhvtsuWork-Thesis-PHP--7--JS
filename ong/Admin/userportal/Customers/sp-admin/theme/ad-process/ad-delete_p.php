<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('promo_id',$id);
$spconn->delete('tb_promo');
  
?>


