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


























	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 5px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
   width:583px;
}


tr:hover{
	
	background-color:whitesmoke;
}

</style>
		<style>
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
						<!--?php include('../includes/dbcon.php');?-->
						<?php include('myfilemgr/dbcon.php'); ?>
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-book" style="font-size:22px;">Storage File Manager   </h4-->
   

   
    <!--h4 class="btn btn-primary" style="font-size:17px; background-color:whitesmoke;"> <b style="color:black;">Department File Manager</b></h4-->
   <!--h4 class="btn btn-primary" style="font-size:19px;">Fixed Asset File Manager
								</h4-->
   
   
   
   
            <!--  alis muna this div class="row breadcrumb-div">
                            
                               
                            </   end  div-->
                            <!-- /.row -->
                        </div>
					
                        <!-- /.container-fluid -->

                            <div class="container-fluid">





     <h4 class="btn btn-primary" style="font-size:25px; background-color:#337ab7; width:100%;"> <b class="fa fa-read" style="color:white;">&nbsp;<b>INBOX</b> &nbsp;
	     			     
						 
						 <br><b><td style="text-align:center; width:14%;"><?php
   $get_id=$_GET['id']; 
$connection=mysqli_connect('localhost','root','','srms');

						 $catss=$row['Jobtitle'];
              $query99 = mysqli_query($connection,"select * from posting where Jobtitle='$get_id'");
              $row00 = mysqli_fetch_array($query99);
              echo $row00['Jobtitle'];
              ?></td><emp style="font-size:11px;"><span id="val"></span>&nbsp;MB</emp></b>
	  </b></h4>


						
                                
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
						  
						  
						  <!--div class="table-responsive"-->
						  
						  
						  
						  
						  <!--class="display table table-bordered"-->
						  
							<form method="post" action="#delete.php" >
						  
            <table class="display table table-striped" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:1%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">IMG</th>
                <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">First&nbsp;Name</th>
				                <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Middle&nbsp;Name</th>
				<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Last&nbsp;Name</th>
		<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">EmaiL</th>
	
			<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Contact&nbsp;Number</th>			
						   	<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Date&nbsp;Apply</th>
	   	<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Job&nbsp;Title</th>							
			 <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Size</th>
		            
								  <th style="width:4%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Download</th>
	
	  <th style="width:4%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Reserved</th>
	  <th style="width:4%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Passed</th>
	  <th style="width:4%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Not&nbsp;Qualified</th>
                 
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
		  // $get_id=$_GET['id'];
		   include('db.php');
		   $department=$_SESSION['sess_department'];
         $get_id=$_GET['id']; 
               $query = mysql_query("select * from postingsender where Jobtitle ='$get_id' ORDER by item_id DESC
			   ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                       $id=$row['item_id'];
							$name=$row['item_image'];
							$date=$row['item_date'];      
            ?>
			
				<!--?php 
							$query=mysql_query("select * from filemgrmis ORDER BY item_id DESC")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$item_id=$row['item_id']; original
							$name=$row['item_image'];
							$date=$row['item_date'];
							?-->
      <tr>
	   <td class="zoom">
				<center> <img src="../item_images/<?php echo $row['Jobtitle'];?>.jpg" class="img img-rounded"  width="65" height="45" /></center>
				 </td>
	  
	  
           <!--td style="text-align:center;
			  "><?php echo $row['item_id'];?></td-->
       
              <td style="text-align:center;
			  "><?php echo $row['fname'];?></td>
			    <td style="text-align:center;
			  "><?php echo $row['mname'];?></td>
			  
	
			  
			  	    <td style="text-align:center;
			  "><?php echo $row['lname'];?></td>
			  
			  
			  		  
			  	    <td style="text-align:center;
			  "><?php echo $row['Email'];?></td>
			  
			  
			    	    <td style="text-align:center;
			  "><?php echo $row['Contact'];?></td>
			  
				    	    <td style="text-align:center;
			  "><?php echo $row['item_date'];?></td>
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobtitle'];?></td>
			  
			  
       
              <!--td style="width:37%;"><?php echo $row['item_image'];?></td-->
			  
			  			  
			  <td>
			  		<?php

//$gago=echo "];
//echo filesize('../../item_images/'.$row["item_image"].'')."&nbsp;Bytes";

$file= '../../../item_images/'.$row["item_image"].'';
$filesize = filesize($file);
$filesize = round($filesize /1024 / 1024, 1);

echo "$filesize".'MB';
?>
		</td>	  
		
			  
			  
			  
			  
			  
			                <!--td style="text-align:center;"><?php echo $row['item_date'];?></td-->
          
              <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->

			 
			  
			  
			  
			  
			  
			<td style="text-align:center;">

	  <!--a rel="tooltip" class="btn btn-success"  title="Click to Upload files"  stytle="text-align:center;" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosuperjeje" data-toggle="modal"    class="btn btn-light"><span class="
glyphicon glyphicon-cloud-upload" style="text-align:center; color:white"></span><i class="icon-trash icon-large"></i>&nbsp;Upload</a-->


						    	
								
										
										
										
										
				<a href="downloadresume.php?filename=<?php echo $name;?>"  class="btn btn-info" title="Click to Download"  onclick="return confirm('Are you sure to Download this Selected File?')"><span class="glyphicon glyphicon-downloadss" style=" color:white"></span>Download</a>
				</td>
					<td>					
											   
						<a href="#<?php echo $row ['item_id'];?>" class="btn btn-primary" data-toggle="modal" title="Click to mark as a Reserved"></span>Reserved</a>
						</td>			
						

<!--
				<td style="width:4%;">						
										
			<a href="#post<?php echo $row ['item_id'];?>"  class="<?php echo $row ['sended'];?> btn btn-success" data-toggle="modal" title="Click to Post"></span><?php echo $row ['sended'];?></a>
</td>
-->






						
										
<td>					
											   
						<a href="#pas<?php echo $row ['item_id'];?>" class="btn btn-success" data-toggle="modal" title="Click to mark as a Passed"></span>Passed</a>
				</td>		
										
<td>					
											   
						<a href="#nqsyae<?php echo $row ['item_id'];?>" class="btn btn-success" data-toggle="modal" title="Click to mark as a Not Qualified"></span>Not Qualified</a>
				</td>		
 
 
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Job Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
												
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_itemz"><span class="glyphicon glyphicon-edit"></span> Mark As a Reserved</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                
	  </div>
	  
 
 	  </div>
 
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="pas<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Job Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
												
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_passed"><span class="glyphicon glyphicon-edit"></span> Mark As a Passed</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
 
 
 
 
 
 
 </div>
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="nqsyae<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Job Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
												
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_nqsya"><span class="glyphicon glyphicon-edit"></span> Mark As a Not Qualified</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
 
 
 
 
      </tr>
      <?php } ?>
	  
	  
	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_itemz'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                           $sql = "INSERT INTO postingsenderreserved
							    SELECT * from postingsender
							      WHERE item_id='$item_id' ";
								  
								//  $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_itemz'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  
	  
	  <!-- Passed-->
	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_passed'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                           $sql = "INSERT INTO postingsenderpassed
							    SELECT * from postingsender
							      WHERE item_id='$item_id' ";
								  
								//  $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_passed'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  <!-- NQ -->
	  
	  	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_nqsya'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                           $sql = "INSERT INTO postingsendernotqualified
							    SELECT * from postingsender
							      WHERE item_id='$item_id' ";
								  
								//  $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  	<?php
		
     // $get_id=$_GET['id']; 

		
//$dbcon=mysqli_connect("127.0.0.1","root","");

//mysqli_select_db($dbcon,"srms");
//$sql = "UPDATE posting SET 
             //                   sended='$sended' WHERE item_id='$item_id' ";
   //Update Items
                        if(isset($_POST['update_nqsya'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
                                </tbody>
                            </table>


		
		<!--- end -->
		
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 












          
</form>
  
	  <!--footer>
	                         	<div class="alert alert-info" style="color:white;background-color:#008CBA; width:1617px;">
         <center><h4> <span class="fa fas-userss"></span> <b>Recruitment Portal&nbsp;<span id="val"></span>&nbsp;Megabytes</b></h4></center>
       
	   </div>
	   </footer-->
	  
	  
      </div>
	  
	  
	  
					
								
								
														
		
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <script>
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "@ = " + sumVal;
            console.log(sumVal);
            
        </script>
	  
	  
	  
	  
	  
	  
	  		
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


