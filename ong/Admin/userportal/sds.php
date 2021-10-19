<!--?php 
    session_start();

?-->

<?php
include('includes/config.php');

error_reporting(0);
?>
		
		
		
		
		
		
		<!--?php echo $_SESSION["patname"]; ?-->
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="GerardSS.jpg" type="image/x-icon"/>
        <title>Policy Management System | Dashboard</title>
		
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
		


		
    </head>
    <body>
<a	class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/usertopbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/USERleftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="fa fa-dashboard" style="font-size:24px;">UserDashboard</h2> <?php echo $item_name;?>
                                
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                      
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="Customers/miscount.php">
<?php 
$sql1 ="SELECT * from mis ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Management Information System</span>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
										<br>
										                                        <a class="dashboard-stat bg-light" href="Customers/od.php">
<?php 
$sql ="SELECT * from operationdivisiondepartment";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Operation Division Policy</span>
                                            <span class="bg-icon"><i class="glyphicon glyphicon-duplicate"></i></span>
                                        </a>
										
										
										
										
										
										
										
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="Customers/op.php">
<?php 
$sql ="SELECT * from officepresident";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Office of President Policy</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                               <br>
							                                           <a class="dashboard-stat bg-danger" href="Customers/gs.php">
<?php 
$sql ="SELECT * from gsdepartment ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">General Services Policy</span>
                                            <span class="bg-icon"><i class="fa fa-wrench"></i></span>
                                        </a>
							   
							   
							   </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="Customers/logistic.php">
                                        <?php 
$sql2 ="SELECT * from logisticdepartment ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?>
                                            <span class="number counter"><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name">Logistic Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-star"></i></span>
                                        </a>
										

                                        <!-- /.dashboard-stat -->
                                      </div>
									
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="Customers/finance.php">
                                      

<?php 


$sql ="select * from financedepartment";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
											<span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Finance Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-briefcase"></i></span>
                                        </a>
                                      
									  <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
									                    
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<br>
                                        <a class="dashboard-stat bg-primary" href="Customers/apcount.php">
                                      

<?php 



$sql ="select * from administrativepolicy LIMIT $start, $limit";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
											<span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Administrative Policy</span>
                                            <span class="bg-icon"><i class="fa fa-user"></i></span>
                                        </a>
                                      
									  <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
									
									
									
									
									
									
									
									
									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									<br>
                                      









									  <a class="dashboard-stat bg-info" href="Customers/hr.php">











									  <?php 
$sql3="SELECT  * from hrdepartment";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalresults=$query3->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalresults);?></span>
                                            <span class="name">Hr Department Policy</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                       








									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   
									   





									   <!-- /.dash
										
										
										
										
										
										
										
										
										
										
										
										
										
										board-stat -->
                                    </div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
		
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->
		
		

	
		
		
		
		
		
		
		
		
		
		
		
		

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
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
                  "progressBar": false,
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
                toastr["success"]( "Welcome to O&G Policy Management System!");

            });
        </script>
    </body>
</html>
















<!-- Break line ------- -->
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT item_image FROM mis WHERE item_id =:item_id');
		$stmt_select->execute(array(':item_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("item_images/".$imgRow['item_image']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM mis WHERE item_image =:item_image');
		$stmt_delete->bindParam(':item_image',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: managepolicy.php");
	}

?>


