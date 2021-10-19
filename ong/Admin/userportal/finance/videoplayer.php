<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>

<?php
include('../includes/config.php');

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <title>Admin Policy Portal</title>
		
        <!--link rel="stylesheet" href="../css/bootstrap.min.css" media="screen"-->
		        <link rel="stylesheet" href="bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
		        <link rel="stylesheet" href="../animate.css" media="screen" >
		     <link rel="stylesheet" href="leftbar.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>

        <script src="../js/modernizr/modernizr.min.js"></script>
<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		
		<!-- okay tu header-->
		
 <nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <!--a class="navbar-brand" href="#" style="color:white;"><i>MIS</i></a-->
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		 <a class="navbar-brand" href="#" style="color:white;"><i>MIS</i></a>
          <li><a href="#section1">Year End Party 2017</a></li>
          <li><a href="#section2">BSSD Party 2018 Clark Renaissance Hotel</a></li>
          <!--li><a href="#section3">Merchant's Club</a></li>
		            <li><a href="#section4">BarnHouse Wifi</a></li>
					          <li><a href="#section5">Skype</a></li>
							            <li><a href="#section6">Website</a></li>
										 <li><a href="#section7">Yahoo</a></li>
										 <li><a href="#section8">Wireless Access</a></li>
										          <li><a href="#section9">Team Viewer</a></li-->
          <!--li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#section411">Canon IR C2220 Printer <span class="caret"--></span></a>
            <!--ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul-->
			
          </li>
		  
		       <!--li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#section422">Databases<span class="caret"></span></a-->
            <!--ul class="dropdown-menu">
              <li><a href="#section411">Section 4-1</a></li>
              <li><a href="#section422">Section 4-2</a></li>
            </ul-->
			
          </li>
		  						 <!--li><a href="#sectionone">Contacts</a></li>
								 	 <li><a href="#sectiontwo">System Credentials</a></li>
								 						 <li><a href="#sectiontwo">PLDT Configuration</a></li-->
        </ul>
      </div>
    </div>
  </div>
</nav> 
		
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
/* Popup container - can be anything you want */
.popup {
    position: top;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup      background-color: #555;*/
.popup .popuptext {
    visibility: hidden;
    width: 260px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 60px;
    padding: 9px 10px;
    position: absolute;
    z-index: 1;
    bottom: 115%;
    left: 50%;
    margin-left: -1000px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}




* {
    box-sizing: border-box;
}

.zoom {
    padding: 0px;

    transition: transform .2s;

    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}


























	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 5px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
   width:583px;
}

#myVideo{
 
	position: fixed;
    right: 10;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
	
}
				


tr:hover{
	
	background-color:whitesmoke;
}





body {
      position: relative; 
  }
  <!--         All Section are included here check the data below that being called by the following ID              -->
  <!--#section1 {padding-top:0px;height:400px;width:1000px;font-size:120%;color: black; background-color: #fff;}-->
    #section1 {padding-top:0px;height:825px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
  #section2 {padding-top:-450px;height:855px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
  #section3 {padding-top:30px;height:730px;color: #fff; width:1000px;font-size:120%;color:black;background-color: #fff;}
    #section4 {padding-top:30px;height:540px;color: #fff;width:1000px;font-size:120%;color:black;background-color: #fff;}
	  #section5 {padding-top:30px;height:630px;color: #fff;width:1000px;font-size:120%;color:black;background-color: #fff;}
	    #section6 {padding-top:30px;height:590px;color: #fff;width:1000px;font-size:120%;color:black; background-color: #fff;}
	#section7 {padding-top:5px;height:600px;color: #fff;width:1000px;font-size:120%;color:black; background-color: #fff;}
	#section8 {padding-top:20px;height:683px;color: #fff;width:1000px;font-size:120%;color:black; background-color: #fff;}
	#section9 {padding-top:30px;height:690px;color: #fff;width:1000px;font-size:120%;color:black; background-color: #fff;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #fff;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
    #section411 {padding-top:40px;height:960px;color: black;width:1005px; background-color: #fff;}
  
  #section422 {padding-top:40px;height:500px;color: black;width:1200px;background-color: #fff ;}
    
	#sectionone {padding-top:35px;height:1100px;color: black;width:1000px;background-color: #fff;background-image: url("cousnt.jpg");background-repeat: no-repeat, repeat;background-size:1595px 600px;}
	  
	  #sectiontwo {padding-top:30px;height:500px;color: black;width:900px;background-color: #fff;background-image:url("cousnt.jpg");background-repeat: no-repeat, repeat;background-size:1595px 600px;}
	  
	  #sectionthree {padding-top:35px;height:700px;color: black;width:1000px;background-color: #fff;background-image: url("cousnt.jpg");background-repeat: no-repeat, repeat;background-size:1595px 600px;}

* {
    box-sizing: border-box;
}

</style>
		
		
		
		
		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/totheleftgallery.php');?>  
						<?php include('../includes/dbcon.php');?>
						<?php include('myfilemgr/dbcon.php'); ?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-book" style="font-size:22px;">Storage File Manager   </h4-->
   
   
   
    <!--h4 class="btn btn-primary" style="font-size:17px; background-color:skyblue;"> <b style="color:black;">Finance Department File Manager</b></h4-->
   <!--h4 class="btn btn-primary" style="font-size:19px;">Fixed Asset File Manager
								</h4-->
   
   
   
   
            <!--  alis muna this div class="row breadcrumb-div">
                            
                               
                            </   end  div-->
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
            
			
			
			
			
			
			
			
			
	
		
                        
                        <!--th>Item Category</th>
                    <th>Item Code</th>
                      <th>Name</th>
                       <th>Brand</th>
                    <th>User</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th-->
						  
						  
						  <!--div class="table-responsive"-->
						  
						  
						  
						  
						  <!--class="display table table-bordered"-->
						  
						<!--Start   -->
						
						
<!--video autoplay muted loop id="myVideo">
  <source src="../1212.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video-->
<div id="section1" class="container-fluid">
  <h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;Year End Party 2017</h2>
<p>
<video width="900" height="510" controls>
  <source src="../Year End Party 2017.mp4" type="video/mp4">
  <source src="../Year End Party 2017.mp4" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
</div>






<div id="section2" class="container-fluid">
  <h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;BSSD Party 2018 Clark Renaissance Hotel</h2>
<p>
<video width="900" height="510" controls>
  <source src="../VID20181210190611.mp4" type="video/mp4">
  <source src="../VID20181210190611.mp4" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
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
		 <script>
   
    $(document).ready(function() {
        $('#logical').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script-->
		
		
		

    </body>
</html>


