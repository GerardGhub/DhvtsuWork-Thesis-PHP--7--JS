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


.button.disabled posted {
  opacity: 0.65; 
  cursor: not-allowed;
}
.posted{
	
opacity: 0.65;
cursor: not-allowed;	
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
						<!--?php include('myfilemgr/dbcon.php'); ?-->
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-book" style="font-size:22px;">Storage File Manager   </h4-->
   	<div class="alert alert-info" style="color:white;background-color:#008CBA; border-radius:20px;  width:1617px;height:50px;">
         <center><h4> <span class="fa fas-userss"></span> <b>Job List</b></h4></center>
       
	   </div>

   
    <!--h4 class="btn btn-primary" style="font-size:17px; background-color:whitesmoke;"> <b style="color:black;">Department File Manager</b></h4-->
   <!--h4 class="btn btn-primary" style="font-size:19px;">Fixed Asset File Manager
								</h4-->
   
   
   
   
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
						  
							<form method="post" action="delete.php" >
						  
            <table class="display table table-striped" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
	
              <th style="width:1%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">IMG</th>
           
	   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Job&nbsp;Title</th>
		
		
			   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Job&nbsp;Description</th>
				
					   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Vacancy</th>
				
			 <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; border-radius:15px; color:white;">Date_Added</th>
		        
							
		  <th style="width:4%;background-color:#46b8da; color:white; border-radius:15px; text-align:center; font-size:15px; color:white;">New Job List</th>
	  <th style="width:4%;background-color:#337ab7; color:white; text-align:center; border-radius:15px; font-size:15px; color:white;">Details</th>
	  <th style="width:4%;background-color:#5cb85c; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Post</th>
	  <th style="width:4%;background-color:#d9534f; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">&nbsp;Edit</th>
                 
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
		   include('db.php');
		   $department=$_SESSION['sess_department'];
           $get_id=$_GET['id']; 
               $query = mysql_query("select * from posting ORDER by item_id DESC
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
	   <td class="zoom" style="width:5%;">
				<center> <img src="../item_images/<?php echo $row['Jobtitle'];?>.jpg" class="img img-rounded"  width="65" height="45" /></center>
				 </td>
	  
	  
           <!--td style="text-align:center;
			  "><?php echo $row['item_id'];?></td-->
       
           
			  
			  		  
		
		
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobtitle'];?></td>
			  
			  			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobdescription'];?></td>
			  
			  
			  		  	    	    <td style="text-align:center;
			  "><?php echo $row['Vacancy'];?></td>
			  
       
              <!--td style="width:37%;"><?php echo $row['item_image'];?></td-->
			  
			  			  
			  <!--td>
			  		<?php



$file= '../../../ong/item_images/'.$row["item_image"].'';
$filesize = filesize($file);
$filesize = round($filesize /1024 / 1024, 1);

echo "$filesize".'MB';
?>
		</td-->	  

			  
			  
			  
			  
			  
			                <td style="text-align:center;width:5%;"><?php echo $row['item_date'];?></td>
          
              <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->

			 
			  
			  
			  
			  
			  
			<td style="text-align:center; width:6%;">

	  <!--a rel="tooltip" class="btn btn-success"  title="Click to Upload files"  stytle="text-align:center;" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosuperjeje" data-toggle="modal"    class="btn btn-light"><span class="
glyphicon glyphicon-cloud-upload" style="text-align:center; color:white"></span><i class="icon-trash icon-large"></i>&nbsp;Upload</a-->


						    	
								
										
														   
						<a href="#newjobentry"  data-toggle="modal" class="btn btn-info" title="Click to Add a New Job Entry"></span>New Job Entry</a>			
										
										
				<!--a href="downloadresume.php?filename=<?php echo $name;?>"  class="btn btn-info" title="Click to Download"  onclick="return confirm('Are you sure to Download this Selected File?')"><span class="glyphicon glyphicon-downloadss" style=" color:white"></span>Download</a-->
				</td>
					<td style="width:5%;">					
											   
						<a href="#edit<?php echo $row['item_id'];?>" class="btn btn-primary" title="Click to Download" data-toggle="modal"></span>Details</a>
						</td>			
									
										
				<td style="width:4%;">						
										
			<a href="#post<?php echo $row ['item_id'];?>"  class="<?php echo $row ['sended'];?> btn btn-success" data-toggle="modal" title="Click to Post"></span><?php echo $row ['sended'];?></a>
</td>
<td style="width:5%;">
					 
 	<a href="#update<?php echo $row [item_id];?>"  class="btn btn-warning" title="Click to Edit" data-toggle="modal"></span>Edit</a>			
  
	 
	 
	 	<!--a rel="tooltip" class="btn btn-danger"href="myfilemgr/delete.php?del=<?php echo $row['item_id']?>"  onclick="return confirm('Are you sure to remove this Selected File?')"><span class="glyphicon glyphicon-trash" style="color:white" ></span>&nbsp; Delete</a-->
	 
 </td>
      
	  
	  
	  
	  
	  
		<div id='edit<?php echo $row ['item_id'];?>' class='modal fade' role='dialog'>
                        <form method='post' class='form-horizontal' role='form'>
                            <div class='modal-dialog modal-lg'>
                           
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'><?php echo $row['Jobtitle'];?></h4>
                                    </div>
                                    <div class='modal-body'>
                                        <input type='hidden' name='edit_item_id' value='dsd'>
                                        
										
										
										<div class='form-group'>
                                            <!--label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Job&nbsp;Title:</label-->
                                            <div class='col-sm-4'>	
                                          <div style='font-size:15px;'><b>Job&nbsp;Title&nbsp;:&nbsp;</b><?php echo $row ['Jobtitle'];?></div></div>
										   
										   
										   
										   
										   
                                          
													 
												 
													 
													 
													 
                                        </div>
										
										
										
                                        <div>
										
										
										  <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Job&nbsp;Description:</label-->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:15px;'><b> Job Description&nbsp;:&nbsp;</b><?php echo $row ['Jobdescription'];?>"</div> </div>
													 
										
										
										
										
										
										
										
										
										
										
									
											
											
											
											
                                             
                                        </div>
										
										
										
											
                                                 <!--label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Vacancy:</label-->
                                            <div class='col-sm-4'>	
                                          <div style='font-size:15px;'><b>Vacancy&nbsp;:&nbsp;</b><?php echo $row ['Vacancy'];?></div></div>
											
											     <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Educatioasan:</label-->
                                            <!--div class='col-sm-4'>
                                                     <div style='font-size:15px;color:white;'><?php echo $row ['Education'];?></div> </div-->
										
											
											
											
											
											
											
											
											
											
											
											   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Education:</label  -->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:15px;'><b>Education&nbsp;:</b>&nbsp;<?php echo $row ['Education'];?></div> </div>
										
										
												


												
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx:</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px;color:white;'>".$query2['Jobtitle']."</div> </div-->
										
										
										
													   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>WorkExperience:</label-->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:17px;'><b>Work&nbsp;Experience&nbsp;:&nbsp;</b><?php echo $row ['WorkXP'];?></div> </div>
										
										
										
													   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px; color:white;'>WorkExperiencexxx
</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px; color:white;'>".$query2['WorkXP']."</div> </div-->
										
										
										
										
										
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Gender</label-->
                                            <!--div class='col-sm-12'>
                                                     <div style='font-size:17px;'><b>Gender&nbsp;:&nbsp;</b>&nbsp;<!--?php echo $row ['Gender'];?></div> 
													
													 
													 </div-->
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px;color:white;'>".$query2['Gender']."</div> 
													
													 
													 </div-->
													 
													 
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Status</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Status&nbsp:&nbsp;</b><?php echo $row ['status'];?></emp> 
													
													 
													 </div>
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Statusxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['status']."</emp> 
													
													 
													 </div-->
													 
													               <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Salary</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Salary&nbsp;:&nbsp;</b><?php echo $row ['Salary'];?></emp> 
													
													 
													 </div>
													 
													 
													 		               <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Salaryssax</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px; color:white;'>".$query2['Salary']."</emp> 
													
													 
													 </div>
										
												               <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Required&nbsp;Skills</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Required&nbsp;Skills&nbsp;:&nbsp;</b><?php echo $row ['skills'];?></emp> 
													
													 
													 </div>
										
										
                                    </div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							
									<br>
									<br>
									<br>
									<br>
									<br>
                                    <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary' name='update_items' style='display:none;'><span class='glyphicon glyphicon-edit'></span> Edit</button>
						
                                      
										<a data-toggle='modal' data-target='#uploadModalsamplexmemosuperjeje' style='display:none;' data-toggle='modal'class='btn btn-primary'>Apply Now</a>
										
										
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove-circle'></span> Close</button>
                                    </div>
									
									
									
									
                                </div>
                        
                        </form>
						
                    </div>
					</div>
					</div>
					
		
			
			<!--Edit Item Modal -->
                    <div id="post<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Post&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Status:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="posted" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Vacancy:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $row ['Vacancy']; ?>" placeholder="Item Code" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Jobdescription" name="item_description" placeholder="Description" readonly required style="width: 100%;">
                                                            <?php echo $row ['Jobdescription']; ?>
                                                        </textarea>
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Skill:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="Skills" placeholder="Skills" style="width:100%;" readonly><?php echo $row ['skills'];?></textarea> </div>
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
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Post</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!--Edit Item Modal -->
                    <div id="update<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Post&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Job&nbsp;Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Jobtitle" value="<?php echo $row['Jobtitle'];?>" placeholder="Job Title"></div>
												
												       <label class="control-label col-sm-2" for="item_name">Status:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="status" value="<?php echo $row['status'];?>" placeholder="Statuss"> </div>
												
												       <label class="control-label col-sm-2" for="item_name">Education:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Education" value="<?php echo $row['Education'];?>" placeholder="Education"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Work&nbsp;Experience:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="WorkXP" value="<?php echo $row['WorkXP'];?>" placeholder="Work Experience"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Gender:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Gender" value="<?php echo $row ['Gender'];?>" placeholder="Gender"> </div>
												
												
																	       <label class="control-label col-sm-2" for="item_name">Status:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="status" value="<?php echo $row ['status'];?>" placeholder="Status"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Salary:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Salary" value="<?php echo $row ['Salary'];?> " placeholder="Salary"> </div>
												
												
												
												
                                            <label class="control-label col-sm-2" for="item_code">Vacancy:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="Vacancy" value="<?php echo $row ['Vacancy']; ?>" placeholder="Vacancy" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Jobdescription" name="Jobdescription" placeholder="Job Description" required style="width: 100%;">
                                                            <?php echo $row ['Jobdescription']; ?>
                                                        </textarea>
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Skill:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="skills"placeholder="Skills" style="width:100%;"><?php echo $row ['skills'];?></textarea> </div>
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
								<br>
								
							<br>	<br>	
							<br>	<br>	
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_posted"><span class="glyphicon glyphicon-edit"></span> Update</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
	  
	  
	  

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </tr>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <?php } ?>
	  
	  
	  			<?php


   //Update Items
                        if(isset($_POST['update_item'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
                            $sql = "UPDATE posting SET 
                                sended='$sended' WHERE item_id='$item_id' ";
								     echo '<script>window.location.href="joblist.php"</script>';
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="joblist.php"</script>';
								  echo '<script>window.location.href="joblist.php"</script>';
                            } else {
                              //  echo "Error updating record: " . $conn->error;
                            }
                        }

?>			
			
	 <?php
if (isset($_POST['update_posted'])){	
     $item_id=$_POST['item_id'];
	$Jobtitle=$_POST['Jobtitle'];
		$Jobdescription =$_POST['Jobdescription'];
		$Vacancy =$_POST['Vacancy'];
		$Education =$_POST['Education'];
		$WorkXP =$_POST['WorkXP'];
		$Gender=$_POST['Gender'];
		$status=$_POST['status'];
		$Salary=$_POST['Salary'];
		$skills=$_POST['skills'];
		$sql = "UPDATE posting SET
		Jobtitle='$Jobtitle' , Jobdescription='$Jobdescription' , Vacancy='$Vacancy' , Education='$Education' , WorkXp='$WorkXP', Gender='$Gender' , status='$status' , Salary='$Salary' ,skills='$skills' WHERE item_id='$item_id' ";
		echo '<script>window.location.href="joblist.php"</script>';
		if ($conn->query($sql) === TRUE){
			echo '<script>window.location.href="joblist.php"</script>';
		}else{
			//sample yamu ini may friend
		}
}
	?>  
	  
	  
	  
                                </tbody>
                            </table>



		
		<!--- end -->
		
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 












          
</form>




							<!-- Mediul Modal kiki-->
        <div class="modal fade" id="newjobentry" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h3 style="color:white;" class="modal-title" id="myModalLabel"><center class="#fa fa-servera" style="text-align:center;">Add New Job Vacancy</center></h3>
              </div>
              <!--div class="modal-body"-->

				<!-- operation of the first table start  here-->
	


<div class="well" style="color:black;">



	  <?php

//include('Admin/includes/config.php');

?>







							  

               

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											


           












	<?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submitnewjob1'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $department =$_SESSION['department'];
  $Jobtitle = $_POST['Jobtitle'];
$Jobdescription = $_POST['Jobdescription'];
$Vacancy = $_POST['Vacancy'];
$Education = $_POST['Education'];
$WorkXP = $_POST['WorkXP'];
$Gender =$_POST['Gender'];
$status =$_POST['status'];
$Salary =$_POST['Salary'];
$skills =$POST['skills'];
  
  //move_uploaded_file($temp,"item_images/".$name);

$query=$conn->query("INSERT INTO posting (Jobtitle,Jobdescription,Vacancy,Education,WorkXp,Gender,status,Salary,skills) VALUES ('$Jobtitle','$Jobdescription','$Vacancy','$Education','$WorkXP','$Gender','$status','$Salary','$skills')");
if($query){
	
 
 echo "<script>window.open('joblist.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>
		




<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->





<!--?php include('Admin/myfilemgr/dbcon.php'); ?-->
<!--style>
.table tr th{
	
	border:#eee 1px solid;
	
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	text-transform:uppercase;
	}
	table tr td{
	
	border:#eee 1px solid;
	color:#000;
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	
	text-transform:uppercase;
	}
	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 1px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
}
	</style-->
	
	<!--div class="alert alert-info">
                              
                      <         
								&nbsp;&nbsp;@FILE MANAGER BY MISBOYSS
                            </div-->
							<fieldset style="background-color:lightgray;border-radius:20px;">
							<!--center><b style="background-color:lightgray;text-align:center;font-size:17px;"> Send us your resume or CV</b></center-->
							</fieldset>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<form enctype="multipart/form-data" action="" id="wb_Form12" name="form1" method="post">
	
				
				<tr>
					<td>
					<input type="text" name="Jobtitle" placeholder="Job Title" autofocus class="form-control" required>
					</td>
				</tr>
				<tr>
					<td>
					<textarea name="Jobdescription" rows="3" placeholder="Job Description" class="form-control" required></textarea>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="Vacancy" placeholder="Vacancy" class="form-control" required>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="Education" placeholder="Education" class="form-control" required>
					</td>
				</tr>
				<tr>
						<td>
					<textarea name="WorkXP" placeholder="Work Experience" class="form-control" required></textarea>
					</td>
				</tr>
				
	<tr>			
	<td>
<input type="text" name="Gender" placeholder="Gender" class="form-control" required>
</td>	
		</tr>		
				<tr>
				<td>
				<input type="text" name="status" placeholder="Status" class="form-control" required>
				</td>
				</tr>
				
				<tr>
				<td>
				<input type="text" name="Salary" placeholder="Salary" class="form-control" required>
				</td>
				</tr>
				
				<tr>
				<td>
				<textarea placeholder="Required Skills" name="skills" class="form-control" required></textarea>
				</td>
				</tr>
				
				
				<!--tr>
				<td>
					<input type="file" name="photo" style="width:550px;" id="photo"  required="required">

					</td>
					</tr-->
					<br>
			
					
					
					
					<td style="display:none;">
					<input type="text" name="upload_by" value="sdsd">
					</td>
				
					
</table>





	  
	  


          </div>
     
              <div class="modal-footer">
               <!--a style="color:pink; font-size:20px; padding-top:90px;"><?php 
$sql ="SELECT * from filemgrhr";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files: <?php echo htmlentities($totalsubjects);?></strong></tr></td></p></a-->




                <!--button class="btn btn-success btn-md" name="item_save"></button-->
				   <button type="submit" name="submitnewjob1" class="btn btn-success btn-md">Submit</button>
				   
</form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>






	




  
	  <footer>
	                         
	   </footer>
	  
	  
      </div>
	  
	  
	  
					
								
								
														
		
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <script>
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
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


