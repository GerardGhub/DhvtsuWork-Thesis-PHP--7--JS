<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['entrance']))
{	


	if($aspmember->GuestItem()){
	
		echo 'true';
	
	}
		$response = $aspmember->GetErrorMessage();
		echo $response;

		
}

?>
