<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('swimmer_id',$id);
$spconn->delete('tb_entrance_swimmers');

?>


