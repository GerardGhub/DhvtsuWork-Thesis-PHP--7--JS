<?php

if(isset($_POST['promoid']))
{ 
		$pid = $_POST['promoid'];
		$promocode = $_POST['promocode'];
		$promo = $_POST['promo'];
		$discount = $_POST['discount'];
		
		$Data = array(
		'swimmer_id' => $pid,
		'promo' => $promo,
		'promo_discount' => $discount,
		'promo_code' => $promocode
		);
									
		$promoadd = $spconn->insert('tb_promo',$Data);
		
		if($promoadd){
			$aspmember->RedirectToURL('?page=entrance');
		}
}

?>