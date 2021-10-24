<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['entrance']))
{								
								$entrance = $_POST['entrance'];
								$type = $_POST['type'];
								$price = $_POST['price'];			
	
								$Data = array(
									'swimmer_details' => $type,
									'swimmer_price' => $price,
									'entrance_id' => $entrance
									);
									
								$categoryadd = $spconn->insert('tb_entrance_swimmers',$Data);
								
								if($categoryadd){
									echo 'true';
								}
   
		$response = $aspmember->GetErrorMessage();
		echo $response;
}

?>
