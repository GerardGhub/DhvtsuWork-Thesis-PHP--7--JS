<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['update']))
{
  	$id = $_POST['iduser'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$position = $_POST['position'];
	$username = $_POST['username'];
	$password = $aspmember->encode($_POST['password']);
	
	$updateData = array(
		'name' => ucwords($name),
		'lastname' => ucwords($lastname),
		'email' => $email,
		'phone_number' => $phone,
		'type_id' => $position,
		'username' => $username,
		'password' => $password
		);
	
	$spconn->where('id_user',$id);
	$update = $spconn->update('tb_user',$updateData);
	
	if($update){
		$response = 'true';
		echo $response;
		}
   
	$response = $aspmember->GetErrorMessage();
	echo $response;
}

?>
