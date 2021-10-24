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
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM gscategory WHERE category_id =:category_id');
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
        <title>O&G Leather Mftg Corporation</title>
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
                                    <h2 class="title">D O W N L O A D S<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Services</center></h2><!--a data-toggle="modal" data-target="#uploadModalcatmis"><i class="fa fa-plus-circle"></i> <span>Add Category Mis</span></a-->
                              

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
						  
						  
						  
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <center><th>Image</th></center>
                  <th>Category ID</th>
				  <th>Title</th>
				  <th>Date Added</th>
			
				  
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM gscategory');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  <td>
				<center> <img src="../item_images/og.png" class="img img-rounded"  width="50" height="50" /></center>
				 </td>
                 <td><?php echo $category_id; ?></td>
				 <td><?php echo $classname; ?></td>
				 	 <!--td>&#8369; <?php echo $item_price; ?></td-->
				 <td><?php echo $date_added; ?></td>
				 	
				 <td>
				
				 
				
				 <a class="btn btn-info" href="download-resultgs0.php" title="Click for Edit" onclick="return confirm('Are you sure you want to Download this Policy?')">Revision 0 <span class='glyphicon glyphicon-download'></span></a> 
				
                  <a class="btn btn-danger" href="download-resultgs1.php" title="Click for Delete" onclick="return confirm('Are you sure you want to Donwload this Policy?')">Revision 1 <span class='glyphicon glyphicon-download'></span> </a>
				                  <a class="btn btn-warning" href="download-resultgs2.php" title="Click for Delete" onclick="return confirm('Are you sure you want to Download this Policy?')">Revision 2 <span class='glyphicon glyphicon-download'></span></a>
								  				                  <a class="btn btn-primary" href="download-resultgs3.php" title="Click for Delete" onclick="return confirm('Are you sure you want to Download this Policy?')">Revision 3 <span class='glyphicon glyphicon-download'></span></a>
																  								  				                  <a class="btn btn-success" href="download-resultgs4.php" title="Click for Delete" onclick="return confirm('Are you sure you want to Download this Policy?')">Revision 4 <span class='glyphicon glyphicon-download'></span></a>
                  </td>
                </tr>
               
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


