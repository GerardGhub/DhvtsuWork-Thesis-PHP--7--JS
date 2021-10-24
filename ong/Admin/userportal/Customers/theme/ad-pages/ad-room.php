<?php

if(isset($_POST['cid']))
{ 
		$cid = $_POST['cid'];
		$rname = $_POST['rname'];
		
		$Data = array(
		'room_name' => $rname,
		'category_id' => $cid
		);
									
		$roomadd = $spconn->insert('tb_rooms',$Data);
		
		if($roomadd){
			$aspmember->RedirectToURL('?page=category');
		}
}

?>