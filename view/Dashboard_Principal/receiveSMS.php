<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'std_db';

	$message = isset($_GET['message']) ? $_GET['message'] : null;
	$phoneNumber = isset($_GET['phoneNumber']) ? $_GET['phoneNumber'] : null ;

		$conn = new mysqli($servername, $username, $password, $dbname);

		if($conn->connect_error){
			die('Connection failed'.$conn->connect_error);
		}

		if($message){
			$sql = "INSERT INTO inbox (phone_number, message) 
			Values ('".$phoneNumber."', '".$message."')";

			if($conn->query($sql) === TRUE){
				echo "New record created successfully";
			}else{
				echo "Error: ".$sql. "<br> ".$conn->error;
			}
		}else{
			$sql = "SELECT * FROM inbox";
			$result = $conn->query($sql);

			if($result){
				echo "<table border=1> <th>ID</th> <th>PHONE</th> <th>MESSAGE</th>";
				foreach($result as $row){
					echo "<tr><td>".$row['id']."</td><td>".$row['phone_number']."</td><td>".$row['message']."</td></tr>";
				}
				echo "</table>";
			}else{
				echo "Error: ".$sql. "<br>".$conn->error;
			}

		}

		$conn->close();
?>