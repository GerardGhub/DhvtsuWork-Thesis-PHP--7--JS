<?php
session_start();
error_reporting(0);
include('../includes/config.php');

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT category_id FROM operationdivision WHERE category_id =:category_id');
		$stmt_select->execute(array(':category_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("../item_images/".$imgRow['item_image']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM operationdivision WHERE category_id =:category_id');
		$stmt_delete->bindParam(':category_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: managecatod.php");
	}

?>












<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Policy Management System</title>
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
 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbarys.php');?>  
  <?php include('../includes/topbarxxx.php');?> 
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title"><b>D O W N L O A D S</b></h2><!--a data-toggle="modal" data-target="#uploadModalcatmis"><i class="fa fa-plus-circle"></i> <span>Add Category Mis</span></a-->
                              

            <div class="row breadcrumb-div">
                             
                         
                            </div>
                            <!-- /.row -->
                        </div>
				
                        <!-- /.container-fluid -->

             
                            <div class="container-fluid">









                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

















<?php include ('header.php'); ?>
        <div class="clearfix"></div>
		
                <!-- top tiles -->
                <div class="row tile_count" style="margin-right:-245px;">
					 <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM mis");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadsmis.php">
                            <span class="count_top"><i class="fa fa-users"></i> MIS Departments</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom"> Total of Policy</span>

                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM officepresident");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloads.php">
                            <span class="count_top"><i class="fa fa-male"></i> <i class="fa fa-female"></i> Office of President</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom">Total of Policy </span>							
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM logisticdepartment");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadlogistic.php">
                            <span class="count_top"><i class="fa fa-book"></i> Logistic Department</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of Policy</span>                     
					  </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM financedepartment");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadfinance.php">
                            <span class="count_top"><i class="fa fa-book"></i> Finance Department</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of Policy</span>
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                      <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM operationdivisiondepartment");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadoperation.php">
                            <span class="count_top"><i class="fa fa-book"></i> Operation Division</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of Policy</span>							
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->
				<hr>
				     <!-- top tiles -->
                <div class="row tile_count" style="margin-right:-245px;">
					 <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM gsdepartment");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadgeneralservices.php">
                            <span class="count_top"><i class="fa fa-users"></i> General Services Department</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom"> Total of Policy</span>

                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM Administrativepolicy");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadadministrative.php">
                            <span class="count_top"><i class="fa fa-male"></i> <i class="fa fa-female"></i> Administrative Policy</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom">Total of Policy</span>							
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM hrdepartment");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="downloadhumanresources.php">
                            <span class="count_top"><i class="fa fa-book"></i> HR Department</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of Policy</span>                     
					  </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM memorandum");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="memorandumdl.php">
                            <span class="count_top"><i class="fa fa-book"></i> Memorandum</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of OG Memorandum</span>
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                      <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysql_query("SELECT * FROM ongusers");
							$num_rows = mysql_num_rows($result);
							?>
				<a href="#">
                            <span class="count_top"><i class="fa fa-book"></i> Users</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total of Users</span>							
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->
				
				
				
																 
		 <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
						  </div>
						  
					
						  
						  <div class="table-responsive">
						  
						  
						  
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                 
			
				  
      <br>
	     <br>
		    <br>
                 <br>
				    <br>
	     <br>
		    <br>
			   <br>
	     <br>
		    <br>
                 <br>
				    <br>
	     <br>
		    <br>
			   <br>
	     <br>
		    <br>
                 <br>
				    <br>
	     <br>
		    <br>
			<br>
                 <br>
                 <br>
                 <br>
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM operationdivision');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
		echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
            

						</p>
                        
                    </div>
	</div>';
	
		echo "</div>";
	}
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
		
	</div>
	</div>
	
	
						  
						  
						  
			
			
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->										 
								
				
				
				
				
				
				
				
				
				
						
						
						
						

 

			 
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
      
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
	   <script src="js/main.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
      <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
		 
		 
		 <script>
	function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}

</script>		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		<!-- ========== THEME JS ========== -->
        
		        <!-- ========== COMMON JS FILES ========== -->

        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
		
		
		 <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
      
		
	<script src="js/main.js"></script>
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

