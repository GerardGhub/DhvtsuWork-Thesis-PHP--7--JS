<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['promocode']))
{
  	$id = $_POST['promoid'];
	$promo = $_POST['promo'];
	$discount = $_POST['discount'];
	
	$updateData = array(
		'promo_id' => $id,
		'promo' => $promo,
		'promo_discount' => $discount
		);
	
	$spconn->where('promo_id',$id);
	$update = $spconn->update('tb_promo',$updateData);
	
	if($update){
		$response = 'true';
		echo $response;
		}
   
	$response = $aspmember->GetErrorMessage();
	echo $response;
}

?>
