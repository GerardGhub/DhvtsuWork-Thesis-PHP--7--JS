<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>

	<!-- Bootstrap core CSS -->
    <link href="<?php echo ASPSTYLE.'sp-asset/';?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASPSTYLE.'sp-asset/';?>css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Bootstrap modal CSS -->
    <link href="<?php echo ASPSTYLE.'sp-modal/';?>css/bootstrap-modal-bs3patch.css" rel="stylesheet">
    <link href="<?php echo ASPSTYLE.'sp-modal/';?>css/bootstrap-modal.css" rel="stylesheet">
    
    <link href="<?php echo ASPSTYLE.'sp-dataTables/';?>css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- Bootstrap navbar-fixed-top CSS -->
    <link href="<?php echo ASPSTYLE.'sp-asset/';?>css/navbar-fixed-top.css" rel="stylesheet">
    <!-- Bootstrap carousel CSS -->
    <link href="<?php echo ASPSTYLE.'sp-asset/';?>css/carousel.css" rel="stylesheet">
    <!-- Bootstrap jgrowl CSS -->
    <link href="<?php echo ASPSTYLE.'sp-jgrowl/';?>css/jquery.jgrowl.css" rel="stylesheet">
    <!-- Bootstrap hoverdir CSS -->
    <link href="<?php echo ASPSTYLE.'sp-hoverdir/';?>css/jquery.hoverdir.css" rel="stylesheet">
    <!-- Bootstrap prettyPhoto CSS -->
    <link href="<?php echo ASPSTYLE.'sp-fullimage/';?>css/prettyPhoto.css" rel="stylesheet">
    <!-- Bootstrap datepicker CSS -->
    <link href="<?php echo ASPSTYLE.'sp-datepicker/';?>css/datepicker.min.css" rel="stylesheet">
    <!-- Bootstrap validator CSS -->
    <link href="<?php echo ASPSTYLE.'sp-validator/';?>css/bootstrapValidator.min.css" rel="stylesheet">
    <!-- Bootstrap sticky-footer-navbar CSS -->
    <link href="<?php echo ASPSTYLE.'sp-script/';?>css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Bootstrap style CSS -->
    <link href="<?php echo ASPSTYLE.'sp-script/';?>css/style.css" rel="stylesheet">



</head>

<body>
		<div id="loginError" class="top-left"></div>
        
 		<?php if($aspmember->checklogin()){?>
			<?php require_once ADDIRPAGES.'ad-navbar.php';?>
		<?php }?>
        
        
	<div class="container">
        <?php require_once $content;?>
	</div>	
        
    <script src="<?php echo ASPSTYLE.'sp-asset/';?>js/jquery.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-asset/';?>js/bootstrap.min.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-dataTables/';?>js/jquery.dataTables.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-dataTables/';?>js/dataTables.bootstrap.js"></script>
    <script>
    	$(document).ready(function() {
        $('#dataTables-example').dataTable();
    	});
    </script>
    
    <script>
    
	$(document).ready( function() {
	  $('#example').dataTable( {
	    "language": {
	       "search": "Search Reservation First :"
		   }
		 } );
		 } );
    </script>
    

    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-delete.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-validator/';?>js/bootstrapValidator.min.js"></script>
    
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-update.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-datepicker/';?>js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-datepicker.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-modal/';?>js/bootstrap-modalmanager.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-modal/';?>js/bootstrap-modal.js"></script>
   
   	<script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-tooltip.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-jgrowl/';?>js/jquery.jgrowl.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-hoverdir/';?>js/jquery.hoverdir.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-fullimage/';?>js/gallery.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-fullimage/';?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-fullimage/';?>js/script.js"></script>
    
    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-datepickercalc.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-timer.js"></script>


    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-order.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-modal.js"></script> 
    
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-signup.js"></script>    
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-category.js"></script> 
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-ecategory.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-entrance.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-eupdate.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-pupdate.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-confirm.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-smessage.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-login.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-checkout.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-database.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/sp-signup.js"></script>
    <script src="<?php echo SPTHM.'ad-script/';?>js/ad-payable.js"></script>
    <script src="<?php echo ASPSTYLE.'sp-script/';?>js/sp-printer.js"></script> 
    
</body>
</html>