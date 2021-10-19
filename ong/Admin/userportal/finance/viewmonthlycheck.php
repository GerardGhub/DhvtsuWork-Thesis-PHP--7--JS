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


</style>
		
		
		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar2.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/totheleftlevel.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-file-text" style="font-size:22px;">FIxed Asset's Category</h4-->
         	<h4 class="btn btn-info" style="font-size:17px;"> <img src="../item_images/og.png" height="40" width="70"><b>&nbsp;MIS Daily Task Reports</b>

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
              <th style="width:5%;background-color:#454545; color:white; text-align:center; ">Img</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center; ">Month</th>
			<th style="width:11%;background-color:#454545; color:white; text-align:center; ">Total&nbsp;of Stocklevel</th>
					<th style="width:11%;background-color:#454545; color:white; text-align:center; ">Total&nbsp;of&nbsp;ending&nbsp;invty&nbsp;onHand</th>
						<th style="width:11%;background-color:#454545; color:white; text-align:center; ">Total&nbsp;of &nbsp;Allocation</th>
						<th style="width:11%;background-color:#454545; color:white; text-align:center; ">Total&nbsp;Qty&nbsp;for&nbsp;Purchased</th>
								<th style="width:11%;background-color:#454545; color:white; t
				<!--th style="width:11%;background-color:#454545; color:white; text-align:center; ">OnHand Value</th-->
				    	<th style="width:11%;background-color:#454545; color:white; text-align:center; ">Action</th>	
					<th style="width:11%;background-color:#454545; color:white; text-align:center; ">View&nbsp;Stocklevel</th>
						
				<!--th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Username</th>
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Password</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Actions</th-->
                 
                </tr>
              </thead>
             <!--table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example"-->
                             
                <!--p><a href="add_new_equipment.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Equipment</a></p>
               
                                <thead>
                                    <tr>
                                    <th>Item Type</th>
                                    <th>OnHand Quantity</th>
                                    <th>OnHand Value</th>
                                     <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody-->
                 
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
		   include('connect.php');
		   
               $query = mysql_query("select distinct id from stockdashboard") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $category=$row['category'];
            
            ?>
      <tr>
	     <td class="zoom" style="text-align:center;">
				<center> <img src="../item_images/og.png" class="img img-rounded"  width="50" height="50" /></center>
				 </td>
	  
	  
	  
	  
              <td><?php
			     include('connect.php');
            $cat=$row['category_id'];
            $query7 = mysql_query("select * from stockdashboard where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['cctv_months'];
            ?></td>
			
			
			
			
			
			
          <td style="text-align:center;"><?php
		     include('connect.php');
          $cctv_category=$row['cctv_category'];
                    $count_query = mysql_query("select * from cctv where cctv_category='$cctv_category'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
                    <?php echo $count; ?></td>
          
		  
		  
		  
		  
		  
		  
		  <!--td style="text-align:center;">  
		  <?php
		     include('connect.php');
          $item_category=$row['item_category'];
          $result5 = mysql_query("SELECT sum(price) FROM tb_equipment where item_category='$item_category'");
          while($row5 = mysql_fetch_array($result5))
            { 
            $tprice=$row5['sum(price)']; 
          echo formatMoney($tprice,true);
            }
          ?>
          </td-->
		  
		  
		  
		  
		  
		  <td style="text-align:center;">
			 <!--a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="checklistlistreport.php?id=<?php echo $row['cctv_category'];?>" class="btn btn-primary glyphicon glyphicon-print"><i class="icon-list icon-large"></i></a-->
			 
			 	  
			  <a rel="tooltip" class="btn btn-primary"  title="Add New Month" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemocata" data-toggle="modal"    class="btn btn-light"><span class="#" style="color:WHITE;"></span><i class="icon-trash icon-large"></i>Insert New Checklist</a>
			 
			 
			 
			           <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="print_cctvchecklist.php?id=<?php echo $row['cctv_category'];?>" class="btn btn-primary glyphicon glyphicon-print"></a>
			 
           </td>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        <td width="140" style="text-align:center;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="cctvlist.php?id=<?php echo $row['cctv_category'];?>" class="btn btn-info">View <?php
			     include('connect.php');
            $cat=$row['cctv_category'];
            $query7 = mysql_query("select * from cctvmonths where cctv_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['cctv_months'];
            ?> Checklist Data<i class="icon-list icon-large"></i></a>
			</td>
			
		     <!--td width="140" style="text-align:center;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="cctvlist.php?id=<?php echo $row['cctv_category'];?>" class="btn btn-info">View Checklist Data<i class="icon-list icon-large"></i></a>
           </td-->
		   
		   
		   
              <!--td><?php
			     include('connect.php');
            $cat=$row['cctv_category'];
            $query7 = mysql_query("select * from cctvmonths where cctv_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['cctv_months'];
            ?></td-->
		   
		   
		   
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


