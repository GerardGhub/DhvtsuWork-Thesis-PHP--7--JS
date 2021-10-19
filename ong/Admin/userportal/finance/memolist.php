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

html, body {
	margin: 0; height: 100%; overflow: hidden}

	
	
	.oppaHR.Department{
	
display:none;	
}


	
	.oppaFinance{
	
display:none;	
}

	
	.oppaGS.Department{
	
display:none;	
}
	
	.oppaOP.Department{
	
display:none;	
}

	
	.oppaLogistic.Department{
	
display:none;	
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

                    <?php include('../includes/userleftbarone.php');?>  
						<?php include('../includes/dbcon.php');?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                

                               
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
						  
						  
						  <div class="table-responsive">
						  
						  
						  
            <table class="display table table-striped" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:5%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Image</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Subject</th>
			<th style="width:5%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Subject&nbsp;Date</th>
				<th style="width:5%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Series</th>
				<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">To</th>
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">From</th>
			<th style="width:3%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Release&nbsp;Date</th>
			<th style="width:3%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Status</th>
					  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Prepared&nbsp;by</th>				
						  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Noted&nbsp;by</th>
	
				 
                <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Actions</th-->
                 
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
		   $dep=$_SESSION['sess_department'];
        $query = mysql_query("select * from tomemorandum where Subject_identity='$get_id'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                        $item_id = $row['item_id'];    
 						
            ?>
      <tr>
	  <!--
	  "select * from tomemorandum where Subject_identity='$get_id'
	  
	  "select distinct Subject_identity from tomemorandum where Fromo='$dep'"
	  select * from tomemorandum where Subject_identity='$get_id' Fromo='HR Department'-->
	  <!--"select distinct Subject_identity,subject,Subject_Date,Series_Code,Two,Fromo,Date,Status,Prepared_By,Noted_BY from tomemorandum where Fromo='$dep'"-->
	   <td class="zoom">
				<center> <img src="../item_images/GerardSS.jpg"   width="50" height="50" /></center>
				 </td>
	  
	  
              <td><?php $cat=$row['Subject_identity'];
              $query99 = mysql_query("select * from Subject where Subject_id='$cat'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['Subject_name'];
              ?></td>
              <td style="width:0%;"><?php echo $row['Subject_Date'];?></td>
			                <td style="width:8%;"><?php echo $row['Series_Code'];?></td>
              <td><?php echo $row['Two'];?></td>
              <td><?php echo $row['Fromo'];?></td>
			                <td style="width:1%;"><?php echo $row['Date'];?></td>
										                <td style="width:1%;"><?php echo $row['Status'];?></td>

 
 
 
  <td style="width:10%;"><?php echo $row['Prepared_By'];?></td>
 
 
 
      <!--td><?php
			     include('connect.php');
            $cats=$row['Prepared_By'];
            $query7 = mysql_query("select * from empleyado where employee_id='$cats'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['Name'];
            ?></td-->
 
 
 	      <td><?php
			     include('connect.php');
            $cat=$row['Noted_BY'];
            $query7 = mysql_query("select * from empleyado where employee_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['Name'];
            ?></td>
			
			
			
			
			
			
			
			
			
              <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->
             
              <td style="width:10%;">
			  
			  
			  

     


					 				 <a rel="tooltip" class="btn btn-primary" href="print.php?Memo_id=<?php echo $row['Memo_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure edit this Empleyado Information?')"><span class="glyphicon glyphicon-print" style="font-size:17px; color:white;"></span></a> 
									 
									 
									 
									 
									 
									 
									 
									 
									 		 <a rel="tooltip" class="btn btn-info" href="editprint.php?Memo_id=<?php echo $row['Memo_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure edit this Empleyado Information?')"><span class="glyphicon glyphicon-edit" style="font-size:17px; color:white;"></span></a> 

 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

  
  
  
  
  
  
  
  
  
  
  			  <!-- Comment muna this delete section -->
			  
         <a rel="tooltip" class="btn btn-danger" title="Delete" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')" href="##delete_equipment.php?id=<?php echo $item_id;?>" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-trash" style="font-size:17px; color:white"></span><i class="icon-tr
  ash icon-large" readonly></i></a>
  
  
  
  
  
  
  
  
  
  
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


