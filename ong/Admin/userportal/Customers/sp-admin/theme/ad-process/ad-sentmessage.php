<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['database']))
{
   if($aspmember->backup())
   {
        $response = 'true';
		echo $response;
   }
   
		$response = $aspmember->GetErrorMessage();
		echo $response;
}

?>
