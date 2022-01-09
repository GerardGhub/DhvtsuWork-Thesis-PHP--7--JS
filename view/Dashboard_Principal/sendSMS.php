<html>
	<head>
		<title>Sending SMS</title>
	</head>

	<body>
			<h3>Sending SMS</h3>
			<form method='GET' action='sendSMS.php'>
				Phone <input type='phone' name = 'phone' autocomplete='off'> <br>
				Message <input type='message' name='message'><br>
				<input type='submit' value='Send'/>
			 </form>
	</body>
</html>
<!-- //12 -->
<?php
try{
	$message = isset($_GET['message']) ? $_GET['message'] : null;
	$phoneNumber = isset($_GET['phone']) ? $_GET['phone'] : null;

	if($message !=null && $phoneNumber !=null){
		$url = "http://192.168.0.15:8090/SendSMS?username=sae&password=sae&phone=".$phoneNumber."&message=".urlencode($message);
		$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);

		if($curl_response === false){
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('Error occurred'.var_export($info));
		}

		curl_close($curl);

		$response  = json_decode($curl_response);
		if($response->status == 200){
			echo 'Message has been sent';
		}else{
			'Technical Problem';
		}

	}
}catch(Exception $ex){
	echo "Exception: ".$ex;
}
?>

