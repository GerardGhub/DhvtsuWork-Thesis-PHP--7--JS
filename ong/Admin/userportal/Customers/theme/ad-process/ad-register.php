<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['submitted']))
{
   if($aspmember->RegisterUser())
   {
        $response = 'true';
		echo $response;
   }
   
		$response = $aspmember->GetErrorMessage();
		echo $response;
}

?>
