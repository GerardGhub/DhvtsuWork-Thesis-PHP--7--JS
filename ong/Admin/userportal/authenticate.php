<?php 
	require 'database-config.php';

	session_start();



$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"srms");


	
	
	
	$username = "";
	$password = "";
	$department = "";

	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	if (isset($_POST['fname'])) {
		$fname = $_POST['fname'];

	}
		if (isset($_POST['role'])) {
		$role = $_POST['role'];

	}
		if (isset($_POST['lastname'])) {
		$lastname = $_POST['lastname'];

	}
	if (isset($_POST['user_image'])) {
		$user_image = $_POST['user_image'];

	}
	
	if (isset($_POST['department'])) {
		$department = $_POST['department'];

	}
	
	
	
	
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM ongusers WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];
		        $_SESSION['sess_user_image'] = $row['user_image'];
		    $_SESSION['sess_fname'] = $row['fname'];
			    $_SESSION['sess_lastname'] = $row['lastname'];
				   $_SESSION['sess_password'] = $row['sess_password'];
				   $_SESSION['sess_department'] = $row['department'];
	  $_SESSION['department'] = $row['department'];
        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			
				$audit=mysql_fetch_assoc($qry);
		$_SESSION['username']=$audit['username'];
				$_SESSION['department']=$audit['department'];
					   $_SESSION['sess_department'] = $row['department'];
					   		   $_SESSION['sess_password'] = $row['sess_password'];
					   	   $_SESSION['sess_user_image'] = $row['user_image'];
				$_SESSION['role']=$audit['role'];
		$_SESSION['signout']=$audit['signout'];
			$_SESSION['id']=$audit['id'];
			
					$huhudepartment=$_SESSION[sess_department];
			
	$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$huhudepartment','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
					
			
			header('Location: ../admin/dashboard.php');
		}elseif ( $_SESSION['sess_userrole'] == "manager"){
			
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: administrative/adminmanageappolicy.php');
		}elseif ( $_SESSION['sess_userrole'] == "mismanager"){
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: admin/dashboard.php');
		}elseif ( $_SESSION['sess_userrole'] == "logisticmanager"){
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: logistic/managelogistic.php');
		}elseif($_SESSION['sess_userrole'] == "hrmanager"){
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: humanresources/managehr.php');
		}elseif($_SESSION['sess_userrole'] == "financemanager"){
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: finance/managefinance.php');
		}elseif($_SESSION['sess_userrole'] == "gsmanager"){
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: generalservices/managegs.php');
				}elseif($_SESSION['sess_userrole'] == "gsmanager"){
						$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: managegs.php');
				}elseif($_SESSION['sess_userrole'] == "operationmanager"){
						$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$password','$sess_role',now())";
	mysqli_query($dbcon,$saveitem);
			header('Location: operationdivision/manageod.php');
		}else{
			$department=$_SESSION["sess_department"];
			echo"	
			<form>
				<input type='text' name='department' value='kupal'>
				
				</form>";
				
				$saveitem="insert into tblcheck (checkid,username,activity,department,role,dateaccess) VALUE ('','$username','Login to the System.','$department','$sess_role',now())";
				
				
			
	mysqli_query($dbcon,$saveitem);
			header('Location: userdashboard.php');
		}
		
	




	
	}


?>