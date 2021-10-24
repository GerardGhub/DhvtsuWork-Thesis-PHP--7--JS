<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('id',$id);
$spconn->delete('tb_slider');


?>


