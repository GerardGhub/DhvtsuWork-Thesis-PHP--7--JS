<?PHP
require_once '../../../sp-config.php';

if(isset($_POST['upc']))
{
  	
	$id = $_POST['checkouts'];
	
	$code = $_POST['code'];
	$totalorder = $_POST['totalorder'];
	$roombal = $_POST['roombal'];
	$entrancebal = $_POST['entrancebal'];
	$over = $_POST['over'];
	$guestID = $_POST['guestID'];
	$date = $aspmember->ttime();	
	
	
								$ata = array(
									'id_user' => $guestID,
									'total_order' => $totalorder,
									'room_balance' => $roombal,
									'entrance_balance' => $entrancebal,
									'over_total' => $over,
									'bank_code' => $code,
									'date_paid' => $date
								);
									
								$spconn->insert('tb_payment',$ata);
								
								$aspmember->acupdate($guestID);
	
	for($i=0; $i < count($id); $i++){
		$data = $aspmember->cupdate($id[$i]);
	}
	if($data){
		echo 'true';
	}
		
}
?>
