<?php 

require_once dirname(__FILE__).'/sp-config.php';

$content = SPDIRPAGE.'sp-home.php';

	$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
		switch ($view) {
			case '1' :
				$title = "Home";	
				$content = SPDIRPAGE.'sp-home.php';
				$activehome = 'active';	
				break;
				
			case '2' :
				$title = "Gallery";	
				$content = SPDIRPAGE.'sp-gallery.php';
				$activegallery = 'active';	
				break;
				
			case '3' :
				$title = "Location";	
				$content = SPDIRPAGE.'sp-location.php';
				$activelocation = 'active';	
				break;
				
			case '4' :
				$title = "Contact us";	
				$content = SPDIRPAGE.'sp-contact.php';
				$activecontact = 'active';	
				break;
				
			case 'book' :
				$title = "Booking";	
				$content = SPDIRPAGE.'sp-booking.php';
				$activegallery = 'active';	
				break;
				
			case 'info' :
				if(!$spmember->checklogin()){
					$title = "Signup";	
					$content = SPDIRPAGE.'sp-signup.php';
					$activegallery = 'active';
				}else{
					$title = "Addtocart";	
					$content = SPDIRPAGE.'sp-login.php';
					$activegallery = 'active';	
				}
				break;
			case 'shoppingcart' :
				$title = $spmember->UserFullName();	
				if($spmember->checklogin()){
					$code = $spmember->UserConfirmcode();
					if($code == 'y'){
						$content = SPDIRPAGE.'sp-cart.php';
					}else{
						$content = SPDIRPAGE.'sp-tempcart.php';
					}
				}else{
				$spmember->RedirectToURL('./');
				}
				
				break;
				
			case 'print' :
				$title = "Print";	
				$content = SPDIRPAGE.'sp-print.php';
				break;
					
			default :
				$title=$spmember->sitename;	
				$content = SPDIRPAGE.'sp-home.php';
				$activehome = 'active';		
			}

require_once SPTEMPLATE.'template.php';

?>