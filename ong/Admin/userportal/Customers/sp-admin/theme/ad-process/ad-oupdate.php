<?PHP
require_once '../../../sp-config.php';

if(isset($_POST['confirm']))
{
  	$id = $_POST['select'];
	
	for($i=0; $i < count($id); $i++){
		$data = $aspmember->update($id[$i]);
	}
	if($data){
		echo 'true';
	}
		
}
?>
