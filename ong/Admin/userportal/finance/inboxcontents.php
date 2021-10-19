<?php 
    session_start();
		   include('connect.php');
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT img_name FROM gsdepartment WHERE item_id =:item_id');
		$stmt_select->execute(array(':item_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("../../item_images/".$imgRow['img_name']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM gsdepartment WHERE img_name =:img_name');
		$stmt_delete->bindParam(':img_name',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: viewgspolicy.php");
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



input:hover{
	background-color:red;
}







  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	
	/*
	.hoverTable td{ 
		padding:7px; border:#4e95f4 2px solid;
	}
	*\
	

	/* Define the default color for all the table rows */


	
	/*	.hoverTable tr{
		background: #b8d1f3;
	}
	*/
	
	
	/* Define the hover highlight color for the table row */
   

   .hoverTable tr:hover {
          background-color: #ffff99;
    }












html, body {margin: 0; height: 100%; overflow: hidden}



</style>
		
		

		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/totheleftmftg.php');?>  
						<?php include('../includes/dbcon.php');?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                
		<!--a class="btn btn-dangers" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> </a>   <h4 class="fa fa-file-text" style="font-size:22px;">Manage FIxed Asset's</h4-->
                              	 
   	<!--h4 class="btn btn-info" style="font-size:17px;"> <b>&nbsp;Manage Memorandum</b-->
      <h4 class="btn btn-primary" style="font-size:24px; background-color:#337ab7; width:1617px;"> <b class="fa fa-read" style="color:white;">Manage General Services Department Policy  
	     			     
						 
						 <br><td style="text-align:center; width:14%;"><?php
   $get_id=$_GET['id']; 
$connection=mysqli_connect('localhost','root','','srms');

						 $catss=$row['category_id'];
              $query99 = mysqli_query($connection,"select * from gscategory where category_id='$get_id'");
              $row00 = mysqli_fetch_array($query99);
              echo $row00['classname'];
              ?></td>
	  </b></h4>





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
						  
											  
						 
            <table class="table table-striped hoverTable" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <!--th style="width:5%;background-color:#4545450; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Image</th-->
                <th style="width:3%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Image</th>
			<th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Subject</th>
				<th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Department</th>
								<!--0th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Section</th-->
				<th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Revision</th>
				  	<th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Issued&nbsp;Date</th>
			<th style="width:3%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Effective&nbsp;Date</th>
			<th style="width:3%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date_Added</th>
						<th style="width:3%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Added&nbsp;By</th>
			
			
			
				
	
	
				 
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Update&nbsp;Info</th>
				
						 
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Update&nbsp;ImG</th>
				
						 
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Actions</th>
                 
                </tr>
              </thead>
           <tbody>
                <?php
   include('connect.php');
              function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              } 
              ?>
          
           <?php
		   include('connect.php');
		   
           $get_id=$_GET['id']; 
		  
               $query = mysql_query("select distinct category_id ,item_id, department,img_name, item_image, revisionno from gsdepartment where category_id='$get_id'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                        $item_id = $row['item_id'];    
   $category_id = $row['category_id']; 
   $policy_title = $row['policy_title']
   
            ?>
			
			
			      
      
     
      <tr>
	  
	  
	   <td class="zoom" style="text-align:center; width:4%;">
				<center> <img src="../../item_images/<?php echo $row['img_name'];?>" class="img img-rounded"  width="50" height="50" /></center>
				 </td>
	  

	     			     <td style="text-align:center; width:14%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gscategory where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['classname'];
              ?></td>
	  
	  
	
	    <td style="width:10%; text-align:center;"><?php echo $row['department'];?></td>
	      
		  
		  
		  	     			     <!--td style="text-align:center; width:10%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gscategory where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['dep_sec'];
			  
			  
			  
	
              ?></-->
		  
		  

		  
              <td style="text-align:center; width:4%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gsdepartment where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['revisionno'];
              ?></td>
			  
			  
			  
			  
		  
              <td style="text-align:center;  width:4%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gsdepartment where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['issuedate'];
              ?></td>
			  
			    <td style="text-align:center;  width:4%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gsdepartment where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['effectivedate'];
              ?></td>
			  
			     <td style="text-align:center; width:4%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gsdepartment where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['item_date'];
              ?></td>
			  
			  	     <td style="text-align:center; width:12%;"><?php $catss=$row['category_id'];
              $query99 = mysql_query("select * from gsdepartment where category_id='$catss'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['dh'];
              ?></td>
			  
			  
	
			  
			  

			  
	
			  
			  
		
			  
			
			  

 
 

			
		
			
			
			
			
			
              <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->
             
              <td style="width:2%;">
			  
			  
			  

     



  
  	
				 <a class="btn btn-info" href="editgspo2.php?edit_id=<?php echo $row['category_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure edit this Policy?')"><span class='glyphicon glyphicon-check'></span> Edit Info</a> 
  
  </td>
  <td style="width:4%;">
  
  
  		 <a class="btn btn-primary" href="editgspo.php?edit_id=<?php echo $row['item_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure edit this Selected Policy?')"><span class='glyphicon glyphicon-pencil'></span> Edit Image</a>
  
  
  
  
  
  
         </td>
		 
		 <td style="width:4%;">
		 
		                  <a class="btn btn-danger" href="?delete_id=<?php echo $row['img_name']; ?>" title="Click for Delete" onclick="return confirm('Are you sure to remove this Policy?')"><span class='glyphicon glyphicon-trash'></span> Delete</a>
				
				</td>
 
      </tr>
      <?php } ?>
                                </tbody>
                            </table>


		
		<!--- end -->
		
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


