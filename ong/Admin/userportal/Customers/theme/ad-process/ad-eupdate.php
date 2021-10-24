<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['eupdate']))
{
  	$id = $_POST['euid'];
	$entrance = $_POST['entrance'];
	$type = $_POST['type'];
	$price = $_POST['price'];
	
	$updateData = array(
		'entrance_id' => $entrance,
		'swimmer_details' => $type,
		'swimmer_price' => $price
		);
	
	$spconn->where('swimmer_id',$id);
	$update = $spconn->update('tb_entrance_swimmers',$updateData);
	
	if($update){
		$response = 'true';
		echo $response;
		}
   
	$response = $aspmember->GetErrorMessage();
	echo $response;
}

?>
