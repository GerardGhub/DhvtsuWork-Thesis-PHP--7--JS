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

                    <?php include('../includes/totheleftlevel.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
                     
                          
	
		<div class="alert alert-info" style="color:white;background-color:#008CBA; width:1635px;">
         <center><h4> <span class="fa fa-users"></span> <b><?php echo $_SESSION['sess_department'];?> Stock Level for the Month.</b></h4></center>
       
	   </div>
	
            <!--  alis muna this div class="row breadcrumb-div">
                            
                               
                            </   end  div-->
                            <!-- /.row -->
                    
					
                        <!-- /.container-fluid -->

                            <div class="container-fluid">








						
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                   
                                        

                                                 
                                                 





















												 
												 
												 
												 
												 
												 
												 
												 
		 <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
					
						  
					
						  
						  <div class="table-responsive">
						  
						  
						  
            <table class="display table table-striped" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:5%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Img</th>
                <!--th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">SubCat&nbsp;ID</th-->
	    
		 <th style="width:11%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Department</th>
		
		
		
		<th style="width:11%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Particulars</th>
		  <th style="width:3%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Uom</th>
		  
		  		  <th style="width:11%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">New Approved Stock Level Effective Jan 2016</th>
				  
				  <th style="width:6%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Ending invty on Hand</th>
				  
				    <th style="width:11%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Allocation for the month of <?php echo 
$today = date("F Y"); ?></th>
				  
				  
		    <th style="width:5%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">For Purchase</th>
				  	<th style="width:11%;background-color:#27ae60; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Action</th>
				<!--th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Username</th>
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Password</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Actions</th-->
                 
                </tr>
              </thead>
              <!--p><a href="add_new_category2.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add New Depreciation Method</a></p-->
              
                         
                                                 <tbody>
                 
           <?php
		   include('connect.php');
               $query = mysql_query("select * from stocklevel") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            
            ?>
      <tr>
	  
	  	   <td class="zoom" style="width:6%;">
				<center> <img src="../item_images/GerardSS.jpg" class="img img-rounded"  width="50" height="30" /></center>
				 </td>
              <!--td><?php echo $row['newlyupdate'];?></td-->
			  
			     <td style="text-align:center;"><?php echo $row['department'];?></td>
			  
			  
			  
			  
			  
			                <td style="text-align:center;"><?php echo $row['Particulars'];?></td>
							          <td style="text-align:center;"><?php echo $row['uom'];?></td>
			          <td style="text-align:center;"><?php echo $row['New_approve'];?></td>
							 
							       <td style="text-align:center;"><?php echo $row['Ending_invertory'];?></td> 
							 
						  <td style="text-align:center;">
						  <?php echo $row['Allocation'];?></td> 	 
							 
						  <td style="text-align:center;  background-color:#5434;"><!--?php echo $row['For_purchase'];?-->
						  <?php 
						$kumpu = $row['New_approve'];  
							$kumpu2 = $row['Ending_invertory'];
				
									$allocations =$row['Allocation'];
						$total=$kumpu-$kumpu2-$allocations;
						
						$calculations=$kumpu-$total;
						
						//$final=$total+$calculations;
						$final=$total+$allocations;
						$gerard=$final+$allocations;
						echo $gerard;?></td> 	 
							 
							 	 

							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							                     <!--td><?php echo $row['Date'];?></td-->
             <!--td>
                    <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')" href="delete_category.php?id=<?php echo $row['category_id'];?>" data-toggle="modal"    class="btn btn-danger">Delete<i class="icon-trash icon-large"></i></a>
                    <a  rel="tooltip"  title="Edit" subcat_id="<?php echo $subcat_id; ?>" href="edit_subcategory.php?subcat_id=<?php echo $row['subcat_id'];?>" class="btn btn-success">Edit<i class="icon-pencil icon-large"></i></a>
         </td-->
		 		 <td style="text-align:left;">
				 
				 
				  
		   <a rel="tooltip" class="btn btn-primary"  title="Stock in" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosubcatys" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-plus" style="font-size:16px; color:white;"></span><i class="icon-trash icon-large"></i></a>
			  
		 
				 
					   <a rel="tooltip" class="btn btn-primary"  title="Stock out" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosubcatys" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-minus" style="font-size:16px; color:white;"></span><i class="icon-trash icon-large"></i></a>	 
				 
				 
				 
				 	  <a rel="tooltip" class="btn btn-info" href="editsubcategories.php?subcat_id=<?php echo $row['subcat_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure edit this Selected Category?')"><span class="glyphicon glyphicon-edit" style="font-size:16px; color:white;"></span></a> 

				 
				 
				 
				 
				 
				 
				 
				 
         <a rel="tooltip" class="btn btn-danger" title="Delete" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')" href="delete_subcategory.php?id=<?php echo $row ['subcat_id'];?>" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-trash" style="font-size:16px; color:white"></span><i class="icon-trash icon-large"></i></a>
     


				

	 
	 
	 </td>
	 
      </tr>
      <?php } ?>
                                </tbody>
                            </table>


		
    <!-- /#wrapper 
	
	<a rel="tooltip" class="btn btn-primary"  title="Add New Data" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosubcatys" data-toggle="modal"    class="btn btn-light"><span class="glyphicon glyphicon-plus" style="font-size:16px; color:white;"></span><i class="icon-trash icon-large"></i></a>
	
	-->										 
												 
												 
												 
												 
												 














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


