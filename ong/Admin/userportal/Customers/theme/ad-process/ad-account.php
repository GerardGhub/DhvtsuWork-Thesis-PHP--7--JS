<?php

/**
	Reservation script from Fujimura & Graphics Solutions
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    
    This program is distributed in the hope that it will
    be useful - WITHOUT ANY WARRANTY; without even the
    implied warranty of MERCHANTABILITY or FITNESS FOR A
    PARTICULAR PURPOSE.
    
    For updates, please send me your personal message or comment us @facebook.com.michael.galanza
    Copyright Fujimura IT & Graphics Solutions, All Right Reserved 2014
    Email:kringcarl_j@yahoo.com.ph

**/

require_once '../../../sp-config.php';


$tb = asp_table;

$query = $spconn->query("SELECT username,email from $tb");

$valid   = true;
$message = '';

	foreach($query as $key => $row)
	{
		$users = array($row['username'] => $key);
		$emails = array($row['email'] => $key);
		
		if (isset($_POST['username']) && array_key_exists($_POST['username'], $users)) {
    		$valid   = false;
			$message = 'The username is not available';
		}
		else if(isset($_POST['email']) && array_key_exists($_POST['email'], $emails)) {
			$valid   = false;
			$message = 'The email is not available';
		} 
		
	}

echo json_encode(
    $valid ? array('valid' => $valid) : array('valid' => $valid, 'message' => $message)
);

?>
