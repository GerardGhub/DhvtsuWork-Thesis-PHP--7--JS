<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* #modalInsertform css  */

#modalInsertform .div-logo {
	float: left;
	height: 130px;
}

#modalInsertform .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalInsertform .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalInsertform h1,#modalInsertform h2,#modalInsertform h3{
	margin-top:0;
	color:#8860a7;

}

#modalInsertform .class-address {
	float: left;
			
}

#modalInsertform .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalInsertform th{			
	background-color:#8860a7;
	color:white;
}

#modalInsertform #h1{
display:none;	
}


@media print{
	
	body{
		
		visibility: hidden;
	
	}

	#modalInsertform{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}	

#modalInsertform .logo{
		background-color:#8860a7 !important;	
	}

#modalInsertform h1,#modalInsertform h2,#modalInsertform h3,#modalInsertform .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalInsertform .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalInsertform .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalInsertform .panel{
		border:hidden!important;
}
#modalInsertform #btn1,#modalInsertform .panel-footer ,#modalInsertform .msk-heading {
		display:none;
			
}
	
#modalInsertform #h1{
		display:inline;	
}

#modalInsertform .close{
		display:none;	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalInsertform{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}
}
}

/* #modalViewPettyCash css  */

#modalViewPettyCash .div-logo {
	float: left;
	height: 130px;
}

#modalViewPettyCash .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalViewPettyCash .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalViewPettyCash h1,#modalViewPettyCash h2,#modalViewPettyCash h3{
	margin-top:0;
	color:#8860a7;

}

#modalViewPettyCash .class-address {
	float: left;
			
}

#modalViewPettyCash .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalViewPettyCash th{			
	background-color:#8860a7;
	color:white;
}

#modalViewPettyCash #h1{
display:none;	
}


@media print{
	
	body{
		
		visibility: hidden;
	
	}

	#modalViewPettyCash{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}


#modalViewPettyCash .logo{
		background-color:#8860a7 !important;	
	}

#modalViewPettyCash h1,#modalViewPettyCash h2,#modalViewPettyCash h3,#modalViewPettyCash .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalViewPettyCash .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalViewPettyCash .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalViewPettyCash .panel{
		border:hidden!important;
}
#modalViewPettyCash #btn1,#modalViewPettyCash .panel-footer ,#modalViewPettyCash .msk-heading {
		display:none;
			
}
	
#modalViewPettyCash #h1{
		display:inline;	
}

#modalViewPettyCash .close{
		display:none;	
}
#pettyCashDetails{
	height:550px;
	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalViewPettyCash{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}
}
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Inbox
      
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Petty Cash</a></li>
    	</ol>
	</section>
           
	<?php
include('../ong/Admin/connect.php');

error_reporting(0);
?>

      <!-- //start#class -->
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
		   <center> <img src="../ong/Admin/userportal/item_images/<?php echo $row['Jobtitle'];?>.jpg" class="img img-rounded"  width="65" height="45" /></center>
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

$file= '../ong/item_images/'.$row["item_image"].'';
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


						   
						   
								   
								   
								   
								   
		   <a href="frontend/downloaddata.php?filename=<?php echo $name;?>"  class="btn btn-info" title="Click to Download"  onclick="return confirm('Are you sure to Download this Selected File?')"><span class="glyphicon glyphicon-downloadss" style=" color:white"></span>Download</a>
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

						   
 </div>
				   
												   
   
 
 
 
 
 

 
 
 
 
 
 
 
 
	  <!-- //End
     -->
   <div id="salaryDetails">
    
    </div>
    
    <div id="viewInvoice">
    
    </div>
    
    <div class="modal msk-fade" id="modalInsertform" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-12 "><!--modal-content --> 
      			<div class="row">
          			<div class="panel panel-info"><!--panel -->
                    	<div class="msk-heading">
                       
                    	<button type="button" onClick="scrollDown()" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>	
                        <br>
                        </div>
            			<div class="panel-body"><!--panel-body -->
                        	<div class="row " id="msk12345">
                            	<div class="col-xs-2">
                                	<div class="div-logo">
                                    	<img class="logo" src="../uploads/logo2.png">
                                    </div>
                                </div>
                                <div class="col-xs-5 class-name">
                                	<h2>ILovePrograming</h2>
                                	<div class="class-address">
                                    	455 Foggy Heights,<br>
									    AZ 85004, US
                                    </div>
                                </div>
                                <div class="col-xs-4 class-email text-right ">
                                    	Email: msk.ms4@gmail.com<br>
                                        Phone: 111-111-1111 <br> 
                                </div>
                        	</div>
<?php  
$current_year=date('Y');
$current_month=date('F');
$current_date=date('Y-m-d');

$index=$_SESSION["index_number"];
$type=$_SESSION["type"];

?>                           
                            
                            <div class="row ">
                                <center><h1>Petty Cash</h1></center>
                                <a href="#" onClick="addNewRow(this)" class="btn btn-success btn-xs "><span class="glyphicon glyphicon-plus"></span></a><!-- MSK-00094--> 
                                <a href="#" onClick="deleteRow(this)" class="btn btn-danger btn-xs " style="margin-right:2px;"><span class="glyphicon glyphicon-remove"></span></a><!-- MSK-00094-->
                                <div class="col-xs-5 col-xs-offset-7 text-right msk-t">
                                    <div class="text-right">
                                    	Year: <?php echo $current_year; ?><br>
                                        Month: <?php echo $current_month; ?><br>
                                    	Date: <?php echo $current_date; ?>
									    
                                    </div>                                
                                </div>
      						</div> <!-- / end client details section -->
                            <form role="form" action="../index.php" method="post" id="form1" class="form-horizontal" >
                             <table class="table table-bordered">
                                <thead>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-6">Description</th>
                                    <th class="col-md-2">Amount($)</th>
                                </thead>
								<tbody class="tBody">
                                    <tr id="tr_1">
                                    	<td id="tdCount_1"> 1</td>
                                       	<td id="tdDesc_1"><input type="text" id="textDesc_1" class="_desc form-control" placeholder="Description 1" autocomplete="off" name="_desc[]"></td>
                                        <td id="tdAmount_1"><input type="text" id="textAmount_1" class="amount form-control" placeholder="25.50" autocomplete="off" name="amount[]"></td>
                                    </tr>
                 				</tbody>
                          	</table> 
                  		</div><!--/.panel-body -->
                        <div class="panel-footer inv-footer text-right" id="msk123456">
                        	<input type="hidden" name="do" value="add_petty_cash" >
                            <input type="hidden" name="_status" value="Active" >
                            <input type="hidden" name="user_type" value="Admin">
                        	<input type="hidden" name="index_number" value="<?php echo $index; ?>" >
                            <input type="hidden" name="received_type" value="<?php echo $type; ?>" >
                        	<input type="submit" class="btn btn-primary" id="btnSubmit" value="Submit">
             			</div>
                        </form>
                	</div><!--/. panel--> 
                </div><!--/.row --> 
            </div><!--/.modal-content -->
        </div><!--/.modal-dialog -->
    </div><!--/.modal -->
    
    <?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
		
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
}
 
?>   
    
    <!-- //MSK-000124 Modal-Approve Confirm Popup -->
	<div class="modal msk-fade" id="approveConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Approval</h4>
      			</div>
				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to Approve this Petty Cash
        		</div>
      			<div class="modal-footer">
					<a href="#" style="margin-left:10px;" id="btnYesApprove" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
    
    <div id="pettyCashDetails">
    
    </div>
     
<script>

$(document).ready(function(){
  var rowCount1 = $('.tBody1 tr').length;
  
 
  for(i=1; i<rowCount1+1; i++){
		
		var num1 = document.getElementById('td_paid_'+i).innerHTML;
		
 		 if(!isNaN(num1)){
			$("#aApprove_"+i).hide();
 		 }
  
  }
  
});

function addNewRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

		last_id++;
	
	var tr = '<tr id="tr_'+last_id+'">'+
          		'<td id="tdCount_'+last_id+'">'+last_id+'</td> '+
                '<td id="tdDesc_'+last_id+'"><input type="text" class="_desc form-control" id="textDesc_'+last_id+'" name="_desc[]"  placeholder="Description '+last_id+'" autocomplete="off"/> </td>'+
				'<td id="tdAmount_'+last_id+'"><input type="text" class="amount form-control" id="textAmount_'+last_id+'" name="amount[]"  placeholder="25.50" autocomplete="off"/> </td>'+
         	'</tr>';
				
	$('.tBody').append(tr);

}; 

function deleteRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

	if(last_id != 1){
		$('.tBody tr:last').remove();	
		$("#btnSubmit1").attr("disabled", false); 
	}

}

$("#form2").submit(function (e) {
	
	var rowCount = $('.tBody tr').length;
	
	for(i=1; i<rowCount+1; i++){
		
		var markRange = document.getElementById('mark_range_text_'+i).value;
		var markGrade = document.getElementById('mark_grade_text_'+i).value;

		if(markRange==""){
			$("#btnSubmit1").attr("disabled", true);
			$("#range_td_"+i).addClass('has-feedback');
			$("#range_td_"+i).append('<span id="spanMarkRange" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark range is required" ></span>');
			
			$("#mark_range_text_"+i).keydown(function(){
				$("#btnSubmit1").attr("disabled", false);     
				$("#range_td_"+i).removeClass('has-feedback');
				$("#spanMarkRange").remove();
			});
			
		}
		
		if(markGrade==""){
			$("#btnSubmit1").attr("disabled", true);  
			$('#grade_td_'+i).addClass('has-feedback');
			$('#grade_td_'+i).append('<span id="spanMarkGrade" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark grade is required" ></span>');
			
			$("#mark_grade_text_"+i).keydown(function(){
				$('#btnSubmit1').attr("disabled", false);     
				$('#grade_td_'+i).removeClass('has-feedback');
				$("#spanMarkGrade").remove();
			});
		}
		
	}
	
	if(markRange == '' || markGrade == '' ){
		//MSK-000099- form validation failed
		
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit1").attr("disabled", false);
		//return true;
		
	}
	
});

function showModal2(pCashDetails){
//MSK-00104
	
	var myArray = $(pCashDetails).data("id").split(',');
	
	var id = myArray[0];
	var admin_index = myArray[1]; 
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				document.getElementById('pettyCashDetails').innerHTML = this.responseText;//MSK-000137
				$('#modalViewPettyCash').modal('show');			
    		}
			
  		};	
		
    	xhttp.open("GET", "petty_cash_details.php?id=" + id + "&admin_index="+admin_index , true);												
  		xhttp.send();//MSK-00105-Ajax End
	 
};

$('body').on('click', '.confirm-approve', function (e){
//MSK-000122	
	
    e.preventDefault();
    var id = $(this).data('id');
	$('#approveConfirm').data('id1', id).modal('show');//MSK-000123
	
});

$('#btnYesApprove').click(function() {
//MSK-000126
  
	var myArray = $('#approveConfirm').data('id1').split(',');
	
	var id = myArray[0];
	var admin_index  = myArray[1];
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				var myArray1 = eval( xhttp.responseText );
				
				var msg = myArray1[0];
				
				if(msg=1){
					
					$('#approveConfirm').modal('hide');
					window.location.reload();
					
					var myModal = $('#approve_Success');
					myModal.modal('show');
					
					clearTimeout(myModal.data('hideInterval'));
					myModal.data('hideInterval', setTimeout(function(){
						myModal.modal('hide');
					}, 3000));
					
				}
				
				if(msg=2){
					
					var myModal = $('#connection_Problem');
					myModal.modal('show');
			
					clearTimeout(myModal.data('hideInterval'));
					myModal.data('hideInterval', setTimeout(function(){
						myModal.modal('hide');
					}, 3000));
					
				}
				
				
    		}
			
  		};	
		
    	xhttp.open("GET", "../model/approve_petty_cash.php?id=" + id  + "&admin_index="+admin_index , true);												
  		xhttp.send();//MSK-00105-Ajax End
	 			   		
});


function scrollDown(){
	
	window.scrollTo(0,document.body.scrollHeight);
}

</script>
  
<script>
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "@ = " + sumVal;
            console.log(sumVal);
            
        </script>
	  

<!--redirect your own url when clicking browser back button -->
<script>


// (function(window, location) {
// history.replaceState(null, document.title, location.pathname+"#!/history");
// history.pushState(null, document.title, location.pathname);

// window.addEventListener("popstate", function() {
//   if(location.hash === "#!/history") {
//     history.replaceState(null, document.title, location.pathname);
//     setTimeout(function(){
//       location.replace("../index.php");//path to when click back button
//     },0);
//   }
// }, false);
// }(window, location));
// </script>

</div><!-- /.content-wrapper -->  
         
<?php include_once('footer.php');?>