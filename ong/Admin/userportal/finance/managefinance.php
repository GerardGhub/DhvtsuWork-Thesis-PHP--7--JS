<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="financemanager"){
      header('Location: index.php?err=2');
    }
?>
<?php

error_reporting(0);
include('../includes/config.php');

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
			      <link rel="stylesheet" href="leftbar.css" media="screen" >
				
        <script src="../js/modernizr/modernizr.min.js"></script>
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		
		<!-- okay tu header-->
		

		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
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

html, body {margin: 0; height: 100%; overflow: hidden}


.button.disabled ot {
  opacity: 0.65; 
  cursor: not-allowed;
}


.button.disabled 21{
  opacity: 0.65; 
  cursor: not-allowed;
}

</style>
		
		
		
		
		
		
		
		
		
		
		
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('../includes/usertopbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('../includes/Userleftbar.php');?>  

                    <div class="main-page">
					&nbsp;&nbsp; <h2 class="fa fa-suitcase" style="font-size:23px;">&nbsp;Admin Policy Portal</h2>     
					
                        <!--div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="fa fa-suitcase" style="font-size:23px;">Finance Department Policy</h2>          
                                  
                                </div>
								
								
								
								
						
                            </div>
                     
                      
                        </div-->
						
						
						
                        <!-- /.container-fluid -->
<section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <!--a class="dashboard-stat bg-primary" href="../Customers/miscount.php"-->
										<a class="dashboard-stat bg-primary" href="#../admin/misdashboardfinaljob.php">
<?php 
$sql1 ="SELECT * from miscategory ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>

                                            <span class="number counter" style="font-size:24px;"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name" style="font-size:17px;">Management Information System</span>
                                            <span class="bg-icon"><i class="fa fa-cloud" style="color:white;"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
									<br>
								       <!--a class="dashboard-stat bg-light" href="../Customers/od.php"-->
									   
									    <a class="dashboard-stat bg-light" href="#../operationdivision/mftgdashboard.php">
<?php 
$sql ="SELECT * from operationdivision";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter" style="font-size:23px;"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name" style="color:black;font-size:17px;">Operation Division Policy</span>
                                            <span class="bg-icon"><i class="glyphicon glyphicon-duplicate" style="color:gray;"></i></span>
                                        </a>
										
										
										
										
										
										
										
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <!--a class="dashboard-stat bg-danger" href="../Customers/op.php"-->
				   <a class="dashboard-stat" style="background-color:lightgreen;" href="#../officeofpresident/opdashboardfinal.php">
<?php 
$sql ="SELECT * from opcategory";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter" style="font-size:24px;"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name" style="font-size:17px;">Office of President Policy</span>
                                            <span class="bg-icon"><i class="fa fa-bank" style="color:white;"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                               <br>
						  <!--a class="dashboard-stat "style="background-color:#33cc33;"" href="../Customers/gs.php"-->
						      <a class="dashboard-stat "style="background-color:green;" href="#../generalservices/gsdashboardfinaljob.php">
<?php 
$sql ="SELECT * from gscategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter" style="color:whitesmoke;font-size:23px;"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name" style="color:white;font-size:17px;">General Services Policy</span>
                                            <span class="bg-icon"><i class="fa fa-wrench" style="color:white;"></i></span>
                                        </a>
							   
							   
							   </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <!--a class="dashboard-stat" style="background-color:lightgray;" href="../Customers/logistic.php"-->
			   <a class="dashboard-stat" style="background-color:lightgray;" href="#../logistic/logisticdashboardfinaljob.php">
                                        <?php 
$sql2 ="SELECT * from logisticcategory ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?>
                                            <span class="number counter" style="font-size:23px;"><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name" style="font-size:17px;">Logistic Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-star" style="color:white";></i></span>
                                        </a>
										

                                        <!-- /.dashboard-stat -->
                                      </div>
									
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat "style="background-color:green;" href="#financedash.php">
                                       <!--a class="dashboard-stat "style="background-color:green;" href="../Customers/finance.php"-->

<?php 


$sql ="select * from financecategory";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
						<span class="number counter" style="font-size:23px;color:white;"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name" style="color:white;font-size:17px;">Finance Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-briefcase "style="color:white;"></i></span>
                                        </a>
                                      
									  <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
									                    
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<br>
                                        <a class="dashboard-stat bg-primary" href="#../administrative/administrativedashboard.php">
                                      

<?php 



$sql ="select * from apcategory";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
											<span class="number counter"style="font-size:23px;"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name" style="font-size:17px;">Administrative Policy</span>
                                            <span class="bg-icon"><i class="fa fa-user"></i></span>
                                        </a>
                                      
									  <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
									
									
									
									
									
									
									
									
									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									<br>
                                      









									  <a class="dashboard-stat "style="background-color:#ffffcc;" href="#../humanresources/hrddashboard.php">











									  <?php 
$sql3="SELECT  * from hrcategory";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalresults=$query3->rowCount();
?>

                                            <span class="number counter" style="color:black;font-size:23px;color:red;"><?php echo htmlentities($totalresults);?></span>
                                            <span class="name" style="font-size:17px;color:red;">HR Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-users" style="color:red;"></i></span>
                                        </a>
                                       
									   
									   
									   
									   


       

									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
						
						
						
						
					
						<!--div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h2>Upcoming events</h2>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive"-->
                                <!--table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                          
                                            <th>Event Type</th>
                                            <th>Place</th>
                                            <th>Date</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                              <!--?php
                                 include '../config/db_config.php';
                         
                              $event_date = date("Y-m-d");      
                 $sql = "SELECT * FROM conditioning WHERE   event_date > '$event_date' order by event_date ASC limit 5 ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $event_date = $row['event_date'];
          $place = $row['place'];
            $event_type = $row['event_type'];
           
          ?>
                                            <td>  <!--?php echo $event_type ?></td>
                                             <td><span class="label bg-blue"><?php echo $place ?></span></td>
                                                 <td><!--?php echo $event_date ?></td>
                                             
                                        </tr>
                                          <!--?php }} ?>
                                    </tbody>
                                </table>
                            <!--/div>
                        </div>
                    </div>
                </div-->							   
						<hr>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h2>Daily Posted Memorandum</h2>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">				
<table class="table">
  <thead class="thead-dark" style="background-color:whitesmoke;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">To</th>
      <th scope="col">From</th>
	    <th scope="col">Subject</th>
		  <th scope="col">View</th>
		    <th scope="col">OT</th>
    </tr>
  </thead>
  
  
  
  
  
  
                        <tbody>
                
	<!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
						
           <?php
		   include('../connect.php');
	 //  $holiday_date = date("Y-m-d", time()-86400);
	 		   
		    $holiday_date = date("Y-m-d"); 
	
               $query = mysql_query("select * from tomemorandum WHERE Date >= '$holiday_date' order by backDate ASC limit 5") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            
            ?>
      <tr>
	         <!--$sql = "SELECT * FROM conditioning WHERE   event_date > '$event_date' order by event_date ASC limit 5 ";-->
	  
	   <!--td class="zoom" style="width:6%;">
				<center> <img src="../item_images/<?php echo $row['item_image'];?>" class="img img-rounded"  width="68" height="50" /></center>
				 </td-->
             
          <!--td><?php echo $row['Memo_id'];?></td-->

			 <td><?php echo $row['Memo_id'];?></td>
			 <td><?php echo $row['Date'];?></td>
			 <td><?php echo $row['Two'];?></td>
			 <td><?php echo $row['Fromo'];?></td>
			 <!--td><?php echo $row['Subject_identity'];?></td-->
			         <td><?php
			     include('connect.php');
            $cat=$row['Subject_identity'];
            $query7 = mysql_query("select * from Subject where Subject_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['Subject_name'];
            ?></td>
			
			<td>
			
	 <a rel="tooltip" class="btn btn-info <?php echo $row['breakline'];?>" href="editprintfront.php?Memo_id=<?php echo $row['Memo_id']; ?>" title="Click for Edit" onclick="launchFullScreen(document.documentElement)"><span class="glyphicon glyphicon-search" style="font-size:17px; color:white;"></span></a> 
					 				
			</td>
			<!-- Clock -->
					<td>
			
	 <a rel="tooltip" class="btn btn-info <?php echo $row['breakline2'];?>" href="editprintfrontot.php?Memo_id=<?php echo $row['Memo_id']; ?>" title="Click for Edit" onclick="launchFullScreen(document.documentElement)"><span class="glyphicon glyphicon-calendar" style="font-size:17px; color:white;"></span></a> 
					 				
			</td>
			
			

	  <?php } ?>
  
  
  
  
  
  
  
  
  
  
  </tbody>
</table>


             </div>
                    </div>
                </div>	
</div>				


		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h2>Upcoming Holiday Events</h2>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">				
<table class="table">
  <thead class="thead-dark" style="background-color:whitesmoke;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Holiday</th>
	  <th scope="col">Comments</th>
	  <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
  
                        <tbody>
                
				
           <?php
		   include('../connect.php');
		   
		    $holiday_date = date("Y-m-d"); 
	
               $query = mysql_query("select * from holidaymemo WHERE Date >= '$holiday_date' order by Date ASC limit 5") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            
            ?>
      <tr>
	         <!--$sql = "SELECT * FROM conditioning WHERE   event_date > '$event_date' order by event_date ASC limit 5 ";-->
	  
	   <!--td class="zoom" style="width:6%;">
				<center> <img src="../item_images/<?php echo $row['item_image'];?>" class="img img-rounded"  width="68" height="50" /></center>
				 </td-->
             
          <!--td><?php echo $row['methodID'];?></td-->

			 <td><?php echo $row['Memo_id'];?></td>
			 <td><?php echo $row['Day'];?></td>
			 <td><?php echo $row['Date'];?></td>
			 <td><?php echo $row['Holiday'];?></td>
			 <td><?php echo $row['Comments'];?></td>
			 		<td>
			
	 <a rel="tooltip" class="btn btn-info" href="holidaymemo.php" title="Click for Edit" onclick="launchFullScreen(document.documentElement)"><span class="glyphicon glyphicon-search" style="font-size:17px; color:white;"></span></a> 
					 				
			</td>

	  <?php } ?>
  </tbody>
</table>


             </div>
                    </div>
                </div>	
</div>				





<!--div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h4>Admin Policy Portal Users Birthday</h4>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">				
<table class="table">
  <thead class="thead-dark" style="background-color:whitesmoke;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Holiday</th>
	  <th scope="col">Comments</th>
	  <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
  
                        <tbody>
                
				
           <!--?php
		   include('../connect.php');
		   
		    $holiday_date = date("Y-m-d"); 
	
               $query = mysql_query("select * from holidaymemo WHERE Date >= '$holiday_date' order by Date ASC limit 5") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            
            ?>
      <tr>
	         <!--$sql = "SELECT * FROM conditioning WHERE   event_date > '$event_date' order by event_date ASC limit 5 ";-->
	  
	   <!--td class="zoom" style="width:6%;">
				<center> <img src="../item_images/<?php echo $row['item_image'];?>" class="img img-rounded"  width="68" height="50" /></center>
				 </td-->
             
          <!--td><?php echo $row['methodID'];?></td-->

			 <!--td><?php echo $row['Memo_id'];?></td>
			 <td><?php echo $row['Day'];?></td>
			 <td><?php echo $row['Date'];?></td>
			 <td><?php echo $row['Holiday'];?></td>
			 <td><?php echo $row['Comments'];?></td>
			 		<td>
			
	 <a rel="tooltip" class="btn btn-info" href="holidaymemo.php" title="Click for Edit" onclick="launchFullScreen(document.documentElement)"><span class="glyphicon glyphicon-search" style="font-size:17px; color:white;"></span></a> 
					 				
			</td>

	  <!--?php } ?>
  </tbody>
</table>


             </div>
    </div>

     </div>
                    </div-->












		
						
						
						
						
						
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->
		
		
		
		
		<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
		
		
		
		
		
		

        <!-- ========== COMMON JS FILES ========== -->
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/jquery-ui/jquery-ui.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="java.js"></script>
        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js/prism/prism.js"></script>
        <script src="../js/waypoint/waypoints.min.js"></script>
        <script src="../js/counterUp/jquery.counterup.min.js"></script>
        <script src="../js/amcharts/amcharts.js"></script>
        <script src="../js/amcharts/serial.js"></script>
        <script src="../js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="../js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="../js/amcharts/themes/light.js"></script>
        <script src="../js/toastr/toastr.min.js"></script>
        <script src="../js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js/main.js"></script>
        <script src="../js/production-chart.js"></script>
        <script src="../js/traffic-chart.js"></script>
        <script src="../js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome <?php echo $_SESSION['sess_fname'];?> to Admin Policy & Procedure!");

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            });
        </script>
		                <!-- //====== right top ====== -->

		
			
		
	
	
		
		
		
		<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
    </body>
</html>

