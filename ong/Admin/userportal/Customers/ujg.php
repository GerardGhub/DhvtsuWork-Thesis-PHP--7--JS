<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="opmanager"){
      header('Location: ../index.php?err=2');
    }
?>

<?php

error_reporting(0);
include('../includes/config.php');

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT category_id FROM opcategory WHERE category_id =:category_id');
		$stmt_select->execute(array(':category_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("item_images/".$imgRow['item_image']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM opcategory WHERE category_id =:category_id');
		$stmt_delete->bindParam(':category_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: managecatop.php");
	}

?>












<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Subjects Combination</title>
			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>

    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/optopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">D O W N L O A D S<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><!--a data-toggle="modal" data-target="#uploadModalcatmis"><i class="fa fa-plus-circle"></i> <span>Add Category Mis</span></a-->
                              

            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<!--li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            						
            							<li><a href="dashboard.php">Dashboard</li></a-->
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

             
                            <div class="container-fluid">









							  
                              
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                         
                                        </div>
                                
                                        

                                                 
                                                 





















												 
										 
												 
		 <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
					
						  
						 
						  
						  <div class="table-responsive">
						  
						  
		<marquee> sdgsdfsfs</marquee>
		
		
		<?php 

require_once dirname(dirname(__FILE__)).'/sp-config.php';

$content = ADDIRPAGES.'ad-transactions.php';


$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';

switch ($view) {
			case '1' :
				if($aspmember->checklogin()){
				$title = "Home";	
				$content = ADDIRPAGES.'ad-dashboard.php';
				$activehome = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case '2' :
				if($aspmember->checklogin()){
				$title = "Category";	
				$content = ADDIRPAGES.'ad-upload.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case '3' :
				if($aspmember->checklogin()){
				$title = "Category";	
				$content = ADDIRPAGES.'ad-update.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case '4' :
				if($aspmember->checklogin()){
				$title = "Category";	
				$content = ADDIRPAGES.'ad-room.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case '5' :
				if($aspmember->checklogin()){
				$title = "Entrance";	
				$content = ADDIRPAGES.'ad-promos.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
			
			case 'entrance' :
				if($aspmember->checklogin()){
					if($aspmember->UserType() == '1'){
					$title = "Entrance";	
					$content = ADDIRPAGES.'ad-entrace.php';
					$activeentrance = 'active';
					}else{$aspmember->RedirectToURL('./');}
				}else{$aspmember->RedirectToURL('./');}
				break;
				
				
			case 'promo' :
				if($aspmember->checklogin()){
				$title = "Promo";	
				$content = ADDIRPAGES.'ad-promo.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'payment' :
				if($aspmember->checklogin()){
				$title = "Paid transactions";	
				$content = ADDIRPAGES.'ad-paid.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'gallery' :
				if($aspmember->checklogin()){
				$title = "Gallery";	
				$content = ADDIRPAGES.'ad-gallery.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'book' :
				if($aspmember->checklogin()){
				$title = "booking";	
				$content = ADDIRPAGES.'ad-booking.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'info' :
				if($aspmember->checklogin()){
				$title = "Signup";	
				$content = ADDIRPAGES.'ad-signup.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'reports' :
				if($aspmember->checklogin()){
				$title = "Reports";	
				$content = ADDIRPAGES.'ad-reports.php';
				$activereports = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'customer' :
				if($aspmember->checklogin()){
					 if($aspmember->UserType() == '1'){
						$title = "Guest";	
						$content = ADDIRPAGES.'ad-customer.php';
						$activeguest = 'active';
					 }else{$aspmember->RedirectToURL('./');}
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'newcustomer' :
				if($aspmember->checklogin()){
					 if($aspmember->UserType() == '1'){
						$title = "Guest";	
						$content = ADDIRPAGES.'ad-newcustomer.php';
						$activeguest = 'active';
					 }else{$aspmember->RedirectToURL('./');}
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'user' :
				if($aspmember->checklogin()){
					 if($aspmember->UserType() == '1'){
				$title = "System user";	
				$content = ADDIRPAGES.'ad-user.php';
				$activeuser = 'active';
					}else{$aspmember->RedirectToURL('./');}
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'edituser' :
				if($aspmember->checklogin()){
				$title = "System user";	
				$content = ADDIRPAGES.'ad-edit.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'editpromo' :
				if($aspmember->checklogin()){
				$title = "Promo";	
				$content = ADDIRPAGES.'ad-pedit.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'editcategory' :
				if($aspmember->checklogin()){
				$title = "Category";	
				$content = ADDIRPAGES.'ad-cedit.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
			
			case 'editentrance' :
				if($aspmember->checklogin()){
				$title = "Entrance";	
				$content = ADDIRPAGES.'ad-eedit.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'category' :
				if($aspmember->checklogin()){
					if($aspmember->UserType() == '1'){
					$title = "Category";	
					$content = ADDIRPAGES.'ad-category.php';
					$activecategory = 'active';
					}else{$aspmember->RedirectToURL('./');}
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'message' :
				if($aspmember->checklogin()){
				$title = "Message";	
				$content = ADDIRPAGES.'ad-messages.php';
				$activemessage = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'newmessage' :
				if($aspmember->checklogin()){
				$title = "Message";	
				$content = ADDIRPAGES.'ad-messages_new.php';
				$activemessage = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'rooms' :
				if($aspmember->checklogin()){
				$title = "rooms";	
				$content = ADDIRPAGES.'ad-rooms.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'backup' :
				if($aspmember->checklogin()){
				$title = "Backup";	
				$content = ADDIRPAGES.'ad-backup.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'addslider' :
				if($aspmember->checklogin()){
				$title = "Utilities";	
				$content = ADDIRPAGES.'ad-utilities.php';
				$activeslider = 'active';	
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'logout' :
				if($aspmember->checklogin()){
				$title = "logout";	
				$content = ADDIRPAGES.'ad-logout.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'checkin' :
				if($aspmember->checklogin()){
				$title = "Checkin";	
				$content = ADDIRPAGES.'ad-guestdashboard_checkin.php';
				$activecheckin = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'guestcheckin' :
				if($aspmember->checklogin()){
				$title = "Guest Checkin";	
				$content = ADDIRPAGES.'ad-transactions.php';
				$activecheckin = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'checkout' :
				if($aspmember->checklogin()){
				$title = "Checkout";	
				$content = ADDIRPAGES.'ad-checkout.php';
				$activecheckout = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'cancel' :
				if($aspmember->checklogin()){
				$title = "Cancelled";	
				$content = ADDIRPAGES.'ad-cancelled.php';
				$activecancel = 'active';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'reciept' :
				if($aspmember->checklogin()){
				$title = "Reciept";	
				$content = ADDIRPAGES.'ad-reciept.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'guestorders' :
				if($aspmember->checklogin()){
				$title = "Orders";	
				$content = ADDIRPAGES.'ad-guestorders.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'newreservation' :
				if($aspmember->checklogin()){
				$title = "Newreservation";	
				$content = ADDIRPAGES.'ad-newreservation.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
				
			case 'guestdashboard' :
				if($aspmember->checklogin()){
				$title = "Guestdashboard";	
				$content = ADDIRPAGES.'ad-guestdashboard.php';
				}else{$aspmember->RedirectToURL('./');}
				break;
					
			default :
				$title = $spmember->sitename;
				if(!$aspmember->checklogin()){
				$content = ADDIRPAGES.'ad-login.php';
				}else if($aspmember->checklogin()){
				$content = ADDIRPAGES.'ad-dashboard.php';	
				}
				$activehome = 'active';		
			}



require_once SPTHM.'/template.php';


?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
               
              <?php
		
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
            

						</p>
                        
                    </div>
	</div>';
	

	
?>
		
	</div>
	</div>
	
	<br />
	<br />
						  
						  
						  
			
			
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 














      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>

		
    </body>
</html>


