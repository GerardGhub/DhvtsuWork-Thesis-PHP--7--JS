<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	 //$department = $_SESSION['departments'];
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

tr:hover{
	background-color:whitesmoke;
}


.button4 {border-radius: 25px;}
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

                    <?php include('../includes/portal.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-file-text" style="font-size:22px;">FIxed Asset's Category</h4-->
 <h4 class="btn btn-primary" style="font-size:25px; background-color:#808080;width:1617px; border-radius:20px;"> <b class="fa fa-monesy" style="color:white;">&nbsp;&nbsp;Not Qualified</b></h4>
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
						  
						  
						  
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:2%;background-color:#454545; color:white; text-align:center;">Upload_by</th>
               					     <th style="width:11%;background-color:#454545; color:white; text-align:center;">Job&nbsp;Title</th>
				   
						     <th style="width:11%;background-color:#454545; color:white; text-align:center;">Data&nbsp;Sizes</th>
				   
			<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">No of Job Applications</th>
				
				
				
				<!--h style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Posted</th>
				
					<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">UnPosted</th-->
					
					
					
					
					
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Action</th>
			
                 
                </tr>
              </thead>
      
                 
                               <?php

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
		   include('../connect.php');
		   
               $query = mysql_query("select distinct Jobtitle, Vacancy,item_id, category_id from posting") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $category_id=$row['category_id'];
            $department=$row['department'];
			$item_id=$row['item_id'];
            ?>
			
			
			
      <tr>
	     <td class="zoom" style="text-align:center; width:5%;">
				<center> <img src="../item_images/Userspics/<?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['uploadbyimg'];
            ?>" class="img img-rounded"  width="80" height="45" /></center>
				 </td>
	  
	          
	  
	  

	        <td><?php
			     include('connect.php');
            $cat=$row['item_id'];
            $query1 = mysql_query("select * from posting where item_id='$cat'") or die(mysql_error());
            $row1 = mysql_fetch_array($query1);
            echo $row1['Jobtitle'];
            ?></td>
			
	  
	  

	  
              <!--td><!--?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['department'];
            ?></td-->
			
			
			
              <!--td><!?php
			     include('connect.php');
            $cat=$row['dep_sec'];
            $query1 = mysql_query("select * from gsdepfinal where category_id='$cat'") or die(mysql_error());
            $row1 = mysql_fetch_array($query1);
            echo $row1['classname'];
            ?></td-->
			
			
			
			   <!--td><?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['revisionno'];
            ?></td-->
			
				   <!--td><?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['issuedate'];
            ?></td-->
			
			
				   <!--td><?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['effectivedate'];
            ?></td>
			
							   <td><?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from gsdepartment where category_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['item_date'];
            ?></td-->
			
			
			<!-- This is the final count for the menufinance -->
			<td style="width:9%;">
			pakekp
			</td>
			
          <td style="text-align:center;width:12%;"><?php
$connection=mysqli_connect('localhost','root','','srms');

          $cate=$row['Jobtitle'];
 ;        
                    $count_query = mysqli_query($connection,"select * from postingsendernotqualified where Jobtitle='$cate'") or die(mysqli_error());        
          $count = mysqli_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td>
					
					
					
				
		  
		  		<!--	
				
				select * from tomemorandum where Subject_identity='$Subject_identity' ORDER BY status='Posted'
				
				
				select * from tomemorandum where Status='Unposted' ORDER BY Subject_identity='2'    -->
		  
		  
		  
		  	     <!--td style="text-align:center;"><?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='1' ORDER BY status='Unposted'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td-->
		  
		  
		  
		  
		  
		  
	
		  <!-- Twoo Piece chiecken -->
		  
		  
		  
		  
		  
		  
		  
		  
        <td width="140" style="text-align:center; width:15%;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="onginternalpassed.php?id=<?php echo $row['Jobtitle'];?>" class="btn btn-primary button button4">View Applicant Not Qualified<?php echo $row7[classname];?>&nbsp;<i class="icon-list icon-large"></i></a>
           </td>
      </tr>
      <?php } ?>
                                </tbody>
                            </table>

		
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


