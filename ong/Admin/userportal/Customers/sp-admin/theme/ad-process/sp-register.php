<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['submitted']))
{
   if($spmember->RegisterUser2())
   {
        $response = 'true';
		echo $response;
   }
   
		$response = $spmember->GetErrorMessage();
		echo $response;
}

?>
