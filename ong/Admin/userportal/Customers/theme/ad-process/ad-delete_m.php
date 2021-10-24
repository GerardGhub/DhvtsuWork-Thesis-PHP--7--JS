<?php

require_once '../../../sp-config.php';

$id=$_POST['id'];
$spconn->where('message_id',$id);
$spconn->delete('tb_message');

?>


