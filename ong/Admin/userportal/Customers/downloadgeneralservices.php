<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="opmanager"){
      header('Location: ../index.php?err=2');
    }
?>
<?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
    $namex=$_FILES['photo']['item_image'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$namex);
$query=$conn->query("insert into uplodad(name)values('$name')");
if($query){
header("location:index.php");
}
else{
die(mysql_error());
}
}
?>

<?php

error_reporting(0);
include('../includes/config.php');

?>

<?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
    $namex=$_FILES['photo']['item_image'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$namex);
$query=$conn->query("insert into uplodad(name)values('$name')");
if($query){
header("location:index.php");
}
else{
die(mysql_error());
}
}
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



<!-- Creates PDF file-->
<?php
	$error = "";		//error holder
	if(isset($_POST['createpdf'])){
		$post = $_POST;		
		$file_folder = "../item_images/";	// folder to load files
		if(extension_loaded('zip')){	// Checking ZIP extension is available
			if(isset($post['files']) and count($post['files']) > 0){	// Checking files are selected
				$zip = new ZipArchive();			// Load zip library	
				$zip_name = time().".zip";			// Zip name
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){		// Opening zip file to load files
					$error .=  "* Sorry ZIP creation failed at this time<br/>";
				}
				foreach($post['files'] as $file){				
					$zip->addFile($file_folder.$file);			// Adding files into zip
				}
				$zip->close();
				if(file_exists($zip_name)){
					// push to download the zip
					header('Content-type: application/zip');
					header('Content-Disposition: attachment; filename="'.$zip_name.'"');
					readfile($zip_name);
					// remove zip file is exists in temp path
					unlink($zip_name);
				}
				
			}else
				$error .= "* Please select file to zip";
		}else
			$error .= "* You dont have ZIP extension<br/>";
	}
?>

	<?php if(!empty($error)) { ?>
			<!--p style=" border:#C10000 1px solid; background-color:#FFA8A8; color:#B00000;padding:8px; width:588px; margin:0 auto 10px;"--><!--?php echo $error; ?></p-->
		<?php } ?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Leather Mftg Corporation</title>
	<meta http-equiv ="Refresh" content="120">

			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>

    <body class="top-navbar-fixed">
</head>
            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/optopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h3 class="title">D O W N L O A D S <i style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $error; ?></i><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Services</center></h3><!--a data-toggle="modal" data-target="#uploadModalcatmis"><i class="fa fa-plus-circle"></i> <span>Add Category Mis</span></a-->
                              

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
						  
						  
				<!-- Open Table-->		  
       
	  <form method="post">
		
				<!--table cellpadding="8" cellspacing="1" border="1" width="50%" style="border:1px solid blue; font-size:18px; color:blue;"-->
				        <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
						<thead>
							
							<th style="color:white; font-weight:bold;" width="5%">Image</th>
						<th  style="color:blue; font-weight:bold;" width="5%"><center>&nbsp;<input type="checkbox" id = "chckHead" align="center"/></center></th>
										<th style="color:gray; font-weight:bold;" width="13%"><center>POLICY SUBJECT</center></th>
								<th style="font-weight:bold; color:gray;" width="9%"><center>FILE NAME</center></th>
								<th style="font-weight:color; color:gray;" width="11%"><center> REVISION NO</center></th> 
									<th style="font-weight:bold; color:gray;" width="11%"> <center>CATEGORY ID</center></th> 
																		<th style="font-weight:bold; color:gray;" width="11%"><center> DATE ADDED</center></th> 
								<th style="color:gray; font-weight:bold;" width="35%"><center>D O W N L O A D S&nbsp;&nbsp;  O P T I O N S</center></th>
							
						</thead>
						
				
							<!-- changing query to the new one--><!--?php
							$query=$conn->query("select * from gsdepartment order by category_id desc");
							while($row=$query->fetch()){
								$policy_title=$row['policy_title'];
								$name=$row['item_image'];
							?-->
									  <?php
include("config.php");
	$stmt = $DB_con->prepare('select * from gsdepartment');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			$policy_title=$row['policy_title'];
			$name=$row['item_image'];
			$revisionno['revisionno'];
			$category_id['category_id'];
			extract($row);
			
			
			?>
					



							<tr>
							<td>
							<center> <img src="../item_images/<?php echo $name;?>" class="img img-rounded"  width="50" height="50" /></center>
							</td>
								<td align="center">
									<input type="checkbox" class="chcktbl" name="files[]" value="<?php echo $name; ?>" />
								</td>
								<td align="center">
								   <?php echo $policy_title; ?>
								</td>
				
								<td style=" font-family:arial;"align="center">
									&nbsp;<?php echo $name ;?>
								</td>
									<td style=" font-family:arial;" align="center">
									&nbsp;<?php echo $revisionno ;?>
								</td>
								</td>
									<td style=" font-family:arial;" align="center">
									&nbsp;<?php echo $category_id ;?>
								</td>
									<td style=" font-family:arial;" align="center">
									&nbsp;<?php echo $item_date ;?>
								</td>
								<td>
									<!--a style="text-decoration:none; font-family:cursive; margin-left: 20px;" href="downloadnew.php?filename=<?php echo $name;?>">
							
										Download

										
										</a-->
														

														<a class="btn btn-info" href="downloadnew.php?filename=<?php echo $name;?>" title="Click for Edit" onclick="return confirm('Are you sure you want to Download this Selected Policy?')">Selected<span class='glyphicon glyphicon-download'></span></a> 
																												
				 <a class="btn btn-danger" href="download-resultgs.php" title="Click for Edit" onclick="return confirm('Are you sure you want to Download All in PDF?')">All inPDF <span class='glyphicon glyphicon-download'></span></a> 
	<!--input type="submit" name="createpdf" value="Download as ZIP fie" style="background:azure; border: 1px solid blue; border-radius:4px; font-size:18px; padding:3px; font-weight:regular; color:black;"-->
	<input type="submit" name="createpdf" value="Download as ZIP fie" onclick="return confirm('Check Selected File that You want to Download as ZIP')"style="background:azure; border: 1px solid blue; border-radius:4px; font-size:16px; padding:5px; font-weight:regular; color:black;"> 	
			
			</td>
	<!--input type="submit" name="createpdf" value="Download as ZIP file" style="background:azure; border: 1px solid blue; border-radius:8px; font-size:18px; padding:10px; font-weight:bold; color:blue;"-->
							</tr>
							
							<!--?php }?-->
				
				
					
					
					
						
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
	</div>
    <!-- /#wrapper -->	
	
				</table>
				

	</form>
	  
     
	  <!-- end of Statement-->
	   </body>
	  
	  
	  		
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

		
   
	
	
	
<!--script type="text/javascript">
    $('.chcktbl').click(function () {
        var length = $('.chcktbl:checked').length;      
        if (length > 3) {
            alert(length);
            $('.chcktbl:not(:checked)').attr('disabled', true);
        }
        else {
            $('.chcktbl:not(:checked)').attr('disabled', false);
        }
    });
</script>
<script type="text/javascript">
    $('#chckHead').click(function () {
        if (this.checked == false) {
            $('.chcktbl:checked').attr('checked', false);
        }
        else {
            $('.chcktbl:not(:checked)').attr('checked', true);
        }
    });
    $('#chckHead').click(function () {
    });
</script>
</html>

<!--- this is current close!-->



<!-- disabled all content here!-->



<!--?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
    $namex=$_FILES['photo']['item_image'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$namex);
$query=$conn->query("insert into uplodad(name)values('$name')");
if($query){
header("location:index.php");
}
else{
die(mysql_error());
}
}
?>

<!-- Creates PDF file-->
<!--?php
	$error = "";		//error holder
	if(isset($_POST['createpdf'])){
		$post = $_POST;		
		$file_folder = "files/";	// folder to load files
		if(extension_loaded('zip')){	// Checking ZIP extension is available
			if(isset($post['files']) and count($post['files']) > 0){	// Checking files are selected
				$zip = new ZipArchive();			// Load zip library	
				$zip_name = time().".zip";			// Zip name
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){		// Opening zip file to load files
					$error .=  "* Sorry ZIP creation failed at this time<br/>";
				}
				foreach($post['files'] as $file){				
					$zip->addFile($file_folder.$file);			// Adding files into zip
				}
				$zip->close();
				if(file_exists($zip_name)){
					// push to download the zip
					header('Content-type: application/zip');
					header('Content-Disposition: attachment; filename="'.$zip_name.'"');
					readfile($zip_name);
					// remove zip file is exists in temp path
					unlink($zip_name);
				}
				
			}else
				$error .= "* Please select file to zip <br/>";
		}else
			$error .= "* You dont have ZIP extension<br/>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<title>Download As Zip</title>
		<meta http-equiv="Refresh" content="20">

</head>	
<body>
<center>
	<h1 style="color:blue; font-family:cursive;">Create ZIP file</h1>
		
		
		<br />
	<form method="post">
		<!--?php if(!empty($error)) { ?>
			<p style=" border:#C10000 1px solid; background-color:#FFA8A8; color:#B00000;padding:8px; width:588px; margin:0 auto 10px;"><?php echo $error; ?></p>
		<!--?php } ?>
      <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
						<thead>
							<tr>
								<td><th style="color:red; font-size:18px; font-family:cursive; font-weight:bold;" width="30%" align="center"><input type="checkbox" id = "chckHead" /></td></th>
								<th style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;" width="70%">File Name</th>
								<th style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;" width="20%">Download</th>
							</tr>
						</thead>
						</tbody>
							<!--?php
							$query=$conn->query("select * from gsdepartment order by category_id desc");
							while($row=$query->fetch()){
								$policy_title=$row['policy_title'];
								$name=$row['item_image'];
							?>
							
					



							<tr>
							
								<td align="center">
									<!--input type="checkbox" class="chcktbl" name="files[]" value="<!--?php echo $name; ?>" />
								</td>
				
								<td style=" font-family:cursive;">
									&nbsp;<!--?php echo $name ;?>
								</td>
								<td>
									<a style="text-decoration:none; font-family:cursive; margin-left: 20px;" href="downloadnew.php?filename=<!--?php echo $name;?>">
										Download
									</a>
								</td>
							</tr>
							<!-?php }?>
							<tr>
								<td colspan="3" align="center">
									<input type="submit" name="createpdf" value="Download as ZIP file" style="background:azure; border: 1px solid blue; border-radius:8px; font-size:18px; padding:10px; font-weight:bold; color:blue;" />
								</td>
							</tr>
							
						</tbody>
				</table>
	
	</form>
</center-->


<script type="text/javascript">
    $('.chcktbl').click(function () {
        var length = $('.chcktbl:checked').length;      
        if (length > 3) {
            alert(length);
            $('.chcktbl:not(:checked)').attr('disabled', true);
        }
        else {
            $('.chcktbl:not(:checked)').attr('disabled', false);
        }
    });
</script>
<script type="text/javascript">
    $('#chckHead').click(function () {
        if (this.checked == false) {
            $('.chcktbl:checked').attr('checked', false);
        }
        else {
            $('.chcktbl:not(:checked)').attr('checked', true);
        }
    });
    $('#chckHead').click(function () {
    });
</script>
</html>









;