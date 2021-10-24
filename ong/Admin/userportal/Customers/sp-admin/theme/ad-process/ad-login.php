<?PHP

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

if(isset($_POST['alogin'])){

	if($aspmember->login()){
	
		echo 'true';
	
	}
	echo $aspmember->GetErrorMessage();
}

?>