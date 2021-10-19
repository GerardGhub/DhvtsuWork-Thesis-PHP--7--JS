<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>



<?php
include('connect.php');
	error_reporting( ~E_NOTICE );
		
	require_once 'configss.php';
//	include('formatMoney.php');
	include('conface.php');
	
	if(isset($_GET['JRFseries']) && !empty($_GET['JRFseries']))
	{
		$id = $_GET['JRFseries'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM jobrequestfinalstatus WHERE JRFseries=:JRFseries');
		$stmt_edit->execute(array(':JRFseries'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: JRFPAGE.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$item_name = $_POST['item_name'];
		$item_price = $_POST['date_added'];
		$classname = $_POST['classname'];
			$location = $_POST['location'];
			$subcategory = $_POST['subcategory'];
		$item_category = $_POST['item_category'];
				$item_name = $_POST['item_name'];
				$ref_no =$_POST['ref_no'];
				$status = $_POST['status'];
				$date_post = $_POST['date_post'];
				$supplier_id = $_POST['supplier_id'];
			$price = $_POST['price'];
			$brand_name =$_POST['brand_name'];
			$item_code =$_POST['item_code'];
			$qty =$_POST['qty'];
			$uom =$_POST['uom'];

			$datemodified =$_POST['date_modified'];
			
			$disapprovereasons =$_POST['disapprovereasons'];
			
			$disapprovedby =$_POST['disapprovedby'];
			
			
			          
			
			
			
			
			
			
			
		
			
		$imgFile = $_FILES['item_image']['name'];
		$tmp_dir = $_FILES['item_image']['tmp_name'];
		$imgSize = $_FILES['item_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = '../item_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$itempic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['item_image']);
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo "<script>alert('Sorry, your file is too large it should be less then 5MB')</script>";				
					 
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
              echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";					
			}	
		}
		else
		{
		
			$itempic = $edit_row['item_image']; 
		}	
						
		


		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE jobrequestfinalstatus
									     SET disapprovereasons=:disapprovereasons,
											 disapprovedby=:disapprovedby
								       WHERE JRFseries=:JRFseries');
			$stmt->bindParam(':disapprovereasons',$disapprovereasons);
			$stmt->bindParam(':disapprovedby',$disapprovedby);
			$stmt->bindParam(':JRFseries',$id);
				
			if($stmt->execute()){
				?>
				
				
			<!--?php	
			include('connect.php');
         mysql_query("update asset_depreciation set price='$price',
          salvage_val='$sv',years='$years',depmed='$method' where item_id='$id'") 
                     or die(mysql_error());	
				
				?-->
				
				
				
                <script>
				alert('Job Requisitioner Reason Successfully Updated ...');
				window.location.href='JRFRequest4.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
			}
		
		}
		
						
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
        <link rel="stylesheet" href="#./css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		
<style>




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


html, body {margin: 0; height: 100%; overflow: hidden}
</style>
		
		
		
		
		
		
		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar2.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <!--?php include('../includes/oguserleftpic.php');?-->  
				             <?php include('../includes/oguserleftasset.php');?>  
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--a class="btn btn-dangers" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> </a-->       <!--h4 class="fa fa-file-text" style="font-size:22px;">Update Assets Category
								</h4-->
                         <h1 class="btn btn-primary" style="font-size:24px; width:1600px;">Reason for DisApproving a Job Request
								</h1>   	       

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
            
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
					
						  
					
						  
						  <div class="table-responsive">
						  
						  
						  
               <!--div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Update Policy</li>
                                    </ul>
                                </div>
                             
                            </div-->
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                           
                                            <div class="panel-body">
















        <div id="page-wrapper">
            
			
			
			
			
			
	
			
			
		<div class="clearfix"></div>

		
		
  <?php
     include('conface.php');
                                    if (isset($_POST['btn_sav'])) {

                                        $id = $_GET['id'];
                                        $name = $_POST['name'];
                                         $price = $_POST['price'];                                     
                                        $code = $_POST['code'];
                                        $brand = $_POST['brand'];                                     
                                        $type= $_POST['type'];
                                        $supp= $_POST['supp'];
                                        $emp= $_POST['emp'];
                                        $method=  $_POST['method'];
                                        $sv=  $_POST['sv'];
                                        $life=  $_POST['life'];
                                        $date1=$_POST['date'];
                                        $status=$_POST['status'];

                         mysql_query("update tb_equipment set 
          item_code='$code',item_name='$name',brand_name='$brand',price='$price',
          employee_id='$emp',item_category='$type',supplier_id='$supp',date_post='$date1',status='$status' where item_id='$id'") 
                     or die(mysql_error());

         mysql_query("update asset_depreciation set price='$price',
          salvage_val='$sv',years='$life',depmed='$method' where item_id='$id'") 
                     or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("Equipment updated succesfully");
                                                    window.location= "equipment.php";
                                            </script>

                                            <?php
                                    }
                                    ?>
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	<?php 
include('conface.php');
$id=$_GET['JRFseries'];
$query=mysql_query("select * from jobrequestfinalstatus where JRFseries='$id'") or die (mysql_error());
$row=mysql_fetch_array($query);
$date=$row['date_post'];
$supp=$row['supplier_id'];
$emp=$row['employee_id'];
$dp=$_GET['item_id'];
//$query2=mysql_query("select * from asset_depreciation where item_id='$dp'") or die (mysql_error());
//$row2=mysql_fetch_array($query2);
//$depmed=$row2['depmed'];


?>
	
	
	
	
	
	
	
	
	
	
	
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
	<center>
			 <div class="alert alert-info">
                        <?php echo $JobReq; ?>
                          <!--center> <h4><strong>Update Category Information</strong> </h4></center-->
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive">

    <tr>
    	<td><!--label class="control-label">Category Name</label-->
				   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">Reason</label>
    <div class="col-sm-10">
   	  <textarea class="form-control" type="text" rows="8" name="disapprovereasons" value="<?php echo $disapprovereasons; ?>" required/>
	  <?php echo $disapprovereasons; ?>
	  </textarea>
    </div>
  </div>  
				
		
		
		
		   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">JRF Date of Creation</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="datemodified" value="<?php echo $Date_now; ?>" readonly />
    </div>
  </div>  
  
		
		
		
		
  
  
		
		  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> Date of DisApproving</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="gerardpogis" value="<?php echo $dateofdisapproved; ?>" readonly />
    </div>
  </div>
  
  		
			  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> Disapproveby</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="disapprovedby" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" readonly />
    </div>
  </div>
  
  
  
  
  
  

 

		
		<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Requisitioner</label>
    <div class="col-sm-10">
      <input type="text"  name="life"  value="<?php echo $Preparedby;?>" class="form-control" id="inputPassword3" readonly/>
    </div>
  </div>
		
		</td>
        <td>



  
  
		  <!--div id="legend">
                                <legend class="">Asset Depreciation</legend>
                            </div--> 
		 <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">Date Added</label>
    <div class="col-sm-10">
       <input id="inputprice" class="form-control" type="text" name="date_added" value="<?php echo $date_added; ?>" disabled /-->
  </div>  
		
		
		
		<!--input class="form-control" type="text" name="classname" value="<?php echo $classname; ?>" required /></td-->
		
		

    </tr>
	</center>
	
	<!--?php 
include('conface.php');

$id=$_GET['item_id'];
$query4=mysql_query("select * from asset_depreciation where item_id='$id'") or die (mysql_error());
$row4=mysql_fetch_array($query4);
                          $years=$row4['years'];
						     $laarnie=$row4['laarnie'];
                  $price=$row4['price'];
                   $sv=$row4['salvage_val'];
?-->
	<!-- Additional Query Here !-->
	 <tr>
	 
	 
	 
	 
		
		
		
		
		
		
		
		
	
	
	<!-- input price id="inputprice"      for price ouput validation-->
	
    <tr>
    	<!-- comment this babey hahha pang additional td>
		
		
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Actsions by</label>
    <div class="col-sm-10">
      <input type="text"  name="life"  value="<?php echo $row2['years'];?>" class="form-control" id="inputPassword3" required/>
    </div>
  </div>
		
		
		
		
		
		
		
		</td-->
        <!--td>
        	<p><input type="text" class="form-control" value="<?php echo $category_id; ?>"disabled /></p>
        
        </td-->
    </tr>
    
    <tr>
        <td colspan="8">
		
		   <!--a span class="glyphicon glyphicon-filsm"> <input class="btn btn-success glyphicon glyphicon-filsm" style="width:120px; height:35px; background-color:green;"  src="../item_images/<?php echo $item_image; ?>" type="file"name="item_image" accept="image/*" /></span> </a-->
		
		
		<button type="submitassets" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
      
        <a class="btn btn-danger" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  
		</center>				
				<br />
	 
	 <div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
           <!--keni lareng footer-->
						</p>
                        
                    </div>		  
						  
						  
			
			
            
                </div>
            </div>

           


    <!-- /#wrapper -->

    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 














      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  		
		
		<script>
function goBack() {
    window.history.back();
}
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


