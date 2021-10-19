


<head>
<style>
input:hover{
	background-color:lightblue;
}
td{
	
	color:black;
}
</style>
</head>


<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
						
						
						
						
						
						
						
						
                            <!--div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="Gerard Singian" class="img-circle profile-img">
                                <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6>
                                <small class="info">O&G Leather Mftg Corp.</small>
                            </div-->
							<!-- This is the original info closed that ill finish code -->
							<div class="user-info closed">
							


						
								
							
	
					<p style="text-align:center;"><img class="img-circle" src="../item_images/<?php echo $_SESSION['sess_user_image'];?>" height="100" width="180" /></p>
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
		
		
		
                            </div>
							
							
							
							
							
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li style="font-sizer:20px;">
                                  
										 <!--a href="Customers/sampleyamu.php"><i class="fa fa-download"></i> <span>Downloads</span> </a-->
                                     	    <li style="background-color:brown;">  <a href="#../finance/managefinance.php" onclick="goBack()" style="font-size:17px;"><i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Main Dashboard</span> </a></li>
						 <!--li><a data-toggle="modal"  title="Notifications" data-target="#orgchart" style="font-size:17px;"><i class="glyphicon glyphicon-th-list" style="color:white;">&nbsp;</i> <span>Organizational Chart </span> <!--o class="fa fa-angle-right arrow"></o--><!--/a></li-->
  
                    <li class="actisve"><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemojrf" style="font-size:17px;"><i class="	fa fa-paper-plane-o">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Create New Job Request </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
								
										
        
						 
						 			 <li class="active"><a href="JRFPAGE.php" style="font-size:17px;"><i class="	fa fa-star">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request Overall </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 
						 	  </a></li>
						 
						 
						 
						 <li class="#active"><a href="JRFLIST.php" style="font-size:17px;"><i class="	fa fa-envelope">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request Created List </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 
						 
										 
						 <li class="#active"><a href="JRFREQUEST.php" style="font-size:17px;"><i class="	fa fa-users">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>JRF Status </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						  
						 
						 
						 
						 		 <li class="#active"><a data-toggle="modal" href="#JRFREQUEST.php" data-target="#Uploadmemojrfull" style="font-size:17px;"><i class="	fa fa-tv">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request SampLe </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
								 
								 
								 

	  <li class="#active"><a href="JRFdashboard.php" style="font-size:17px;"><i class="	fa fa-headphones">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Requisitioner Tracking </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
								 
										 
						 <li class="#active"><a href="JRFREQUESTactivity.php" style="font-size:17px;"><i class="fa fa-pencil">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>MIS Activity Logs </span><b><emp style="background-color:brown; border-radius:20px;width:40px;">
						 <!--?php include('connect.php');-->
						 <?php 
			$connection=mysqli_connect('localhost','root','','srms');
						 
						 $department=$_SESSION['sess_department'];
						 $count_query = mysqli_query($connection,"Select * from jobrequestfinalactivity where department='$department'") or die (mysqli_error());
						 $count = mysqli_num_rows($count_query);
						 ?>
						 <?php echo $count;?>
						 
						 
						 
						 
						 
						 </emp></b> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						  					

											
											
											
											
											
											
				 <li class="#active"><a href="JRFhistory.php" style="font-size:17px;"><i class="fa fa-list">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request History</span><b>&nbsp;<emp style="background-color:brown; border-radius:20px;width:40px;">
						 <!--?php include('connect.php');-->
						 <?php 
			$connection=mysqli_connect('localhost','root','','srms');
						 
						 $department=$_SESSION['sess_department'];
						 $count_query = mysqli_query($connection,"Select * from jobrequestfinalhistory where department='$department'") or die (mysqli_error());
						 $count = mysqli_num_rows($count_query);
						 ?>
						 <?php echo $count;?>
						 
						 
						 
						 
						 
						 </emp></b> <!--o class="#fa fa-angle-right arrow"></o--></a></li> 
						 
						  	


							
						 			 <li class="#active"><a href="#JRFREQUEST.php" style="font-size:17px;"><i class="	fa fa-calendar">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request Reports </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 <emp style="display:none;"
						 
						 			 <li class="#active"><a href="#JRfdashboard.php" style="font-size:17px;"><i class="	fa fa-headphones">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Requisitioner Tracking </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 			 <li class="#active"><a href="#JRFREQUEST.php" style="font-size:17px;"><i class="	fa fa-calendar">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Job Request Reports </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
									 
									 
									 
									 
									 
									 
						 
				</emp>
									
		
									     
									



				
									
									

                                    <li class="nav-header">
                                        <!--span class="">Appearance</span-->
                                    </li>
                                    <li class="has-children">
                              
                                        <ul class="child-nav">
                 
                                           
                                        </ul>
                                    </li>
  <li class="has-children">
                                 
                                        <ul class="child-nav">
                                          
                                        </ul>
                                    </li>
   <li class="has-children">
                                       
                                        <ul class="child-nav">
                                         
                                           
                                        </ul>
                                    </li>
<li class="has-children">
                            
                                        <ul class="child-nav">
                                  
                                           
                                        </ul>
              
                                           
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
																							     <br>
																								    <br>
																									   <br>
																									      <br>
                                    </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
					
					
					
					
					
					
					
					
					
					<!-- Break muna here mga bes -->
					
					
					
					
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="UpdateInformation" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <!--h3 style="color:white;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Update User Information</center></h3-->
              </div>
              <!--div class="modal-body"-->
			  <!--     <div class="well">-->
         <div class="modal-body">
				<?php
  include('connect.php');
                                    if (isset($_POST['subnetting'])) {

                                        $id = $_POST['id'];
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
                                        $date=$_POST['date_post'];
										   $sub_category=$_POST['sub_category'];
										      $qty=$_POST['qty'];
											     $uom=$_POST['uom'];
												    $ref_no=$_POST['ref_no'];
													   $location=$_POST['location'];
													   $laarnie=$_POST['laarnie'];
														$item_image=$_POST['item_image'];
														$pct=$_POST['pct'];
														$pcta_image=$_POST['pcta_image'];
														
                         mysql_query("insert into tb_equipment    (item_id,item_code,item_name,brand_name,price,employee_id,item_category,supplier_id,date_post,status,sub_category,qty,uom,ref_no,location,item_image,pct,pcta_image) values
     ('$id','$code','$name','$brand','$price','$emp','$type','$supp','$date','Good','$sub_category','$qty','$uom','$ref_no','$location','sorry.jpg','Property Count Tag','GerardSs.jpg')") or die(mysql_error());

         mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
									alert("New Asset Equipment added Succesfully");
                                                    window.location= "viewassets.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset style="color:#blue;">
					
					<input type="hidden" id="username" name="id" value="<?php
                        $id = mysql_query("select MAX(item_id) as max_item_id from tb_equipment");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>

  <div class="form-group" style="background-image: url("..\item_images\amazing.gif");">
   <center><img src="..\item_images\<?php echo $_SESSION['sess_user_image'];?>"></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke; padding-top:5px;width:210px;height:34px;text-align:center;"> <?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?>  </emp></center>
	
    <!--div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Description" required/>
    </div-->
  </div>
	
						<!--
                            Description:
                            <div class="form-group">
							
                                <input class="form-control" placeholder="" name="policy_title" type="text" required>
                           
							 
							</div-->
							
							
							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Name</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_fname'];?>" id="inputPassword3" required/>
    </div>
  </div>

  
  
  
  
  							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Lastname</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_lastname'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
  
  
  
  
  
    							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Department</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
      							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Role</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_userrole'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Username</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_username'];?>" id="inputPassword3" required/>
    </div>
  </div>
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Password</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_password'];?>" id="inputPassword3" required/>
    </div>
   </div>
   <!--/div>
     </div>
	    </div>
		   </div-->
		   
		   
  
  
  
  
  
  
  
  
  
  
  

                                          <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from aa2000.tb_equipment where item_category=1; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from miscategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  
  
                                          <!--a class="dashboard-stat bg-danger" href="#">
<?php 
$sql ="SELECT * from mis ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from miscategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <span class="number counter"><?php echo ($totalsubjects);?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span>
											
                                        </a-->
  
  
  
  
  

  
  
  
  
  
  
  <!--Gerard OME


	   <div class="form-group">
	<label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Code:</label>
	    <div class="col-sm-10">
  <input type="text" class="form-control" id="1" name="id" value="OMEs-000<?php
include('connect.php');
                        $id = mysql_query("select MAX(item_id) as max_item_id from ome");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
						
  				</div>
 COmment muna 9/13/18-->

  

   
   
   


				


   <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">UOM</label>
    <div class="col-sm-10">
    <input type="text" name="uom" placeholder="UOM" class="form-control" required/>
    </div>
  </div-->  
  
  
  
  <!-- Insert the Unit of Measure Here -->

  
  
  <!-- FInally End the Unit of Measure Here -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
				

  
  

  
 
				   
				
                  
            
              </div>
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitting" class="btn btn-success">Update</button>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
						
					
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="orgchart" tabindex="-1" width="350" role="dialog" aria-labelledby="myMediulModalLabel">
      p;<div class="modal-dialog modal-md" style="width:1370px;position:absolute:right:50px;">
            <div style="color:white;background-color:white;" class="modal-content">
			        <!--div style="color:white;background-color:#008CBA" class="modal-content"-->
              <!--div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

              </div-->
          
       


<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				<img src="../item_images/orgchart.jpg" width="1620" height="900">
				
		
            </div>
          </div>
        </div>
		

		
		
		
		<!-- Yung nga lang putang ina! -->
		
			
	
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemo" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:630px;">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New  Memorandum</center>
              </h3></div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabys'])) {

                                        $Memo_id = $_POST['Memo_id'];
                                        $Two = $_POST['Two'];
                                         $Fromo = $_POST['Fromo'];                                     
                                        $Date = $_POST['Date'];
                                        $Subject_identity=$_POST['Subject_identity'];                                     
                                        $Subject_Date=$_POST['Subject_Date'];
                                        $Series_Code=$_POST['Series_Code'];
                                        $Employee= $_POST['Employee'];
                                        $Prepared_By=$_POST['Prepared_By'];
                                        $Noted_BY=$_POST['Noted_BY'];
                                        $Status=$_POST['Status'];
                                        $cc1=$_POST['cc1'];
										  $cc2=$_POST['cc2'];
										    $cc3=$_POST['cc3'];
											  $cc4=$_POST['cc4'];
											    $cc5=$_POST['cc5'];
												  $cc6=$_POST['cc6'];
												    $cc7=$_POST['cc7'];
													  $cc8=$_POST['cc8'];
													    $owncc=$_POST['owncc'];
														$backDate=$_POST['backDate'];
					
                         mysql_query("insert into tomemorandum
 (Memo_id,Two,Fromo,Date,Subject_identity,Subject_Date,Series_Code,Employee,Prepared_By,Noted_BY,Status,cc1,cc2,cc3,cc4,cc5,cc6,cc7,cc8,owncc,backDate) values
     ('$Memo_id','$Two','$From','$Date','$Subject_identity','$Subject_Date','$Series_Code','$Employee','$Prepared_By','$Noted_BY','Posted','HumanResources Department','General Services Department','MIS Department','Logistic Department','Manufacturing Department','Office of the President','Bulletin','File','Finance Department','backdatesample')") or die(mysql_error());

         mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Finance Memorandum Succesfully Posted!");
                                                    window.location= "viewmemorandum.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<input type="hidden" id="username"  style="color:black;"name="Memo_id" value="<?php
                        $id = mysql_query("select MAX(Memo_id) as max_Memo_id from tomemorandum ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_Memo_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">To&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Two" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	">From</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Fromo" class="form-control" value="Finance Department" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						   <!--option value="blankall">...</option-->
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select>  	
		<!--/div-->					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from tomemorandum ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div>
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>
				  

				  
						  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    <!--/div-->
  </div>
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Noted&nbsp;by</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Noted_BY" > 
						  <option value="">...</option>
						   <!--option value="blankall">...</option-->
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from empleyado where superskill='Manager'") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['employee_id'];?>"><?php echo $row['Name'];?></option>
		
        <?php } ?>
 

</select>  	
		<!--/div-->					
				

  </div>
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitbabys" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
 
         			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemojrf" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:930px;">
            <div style="color:white;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <!--img src="../item_images/GerardSs.jpg" width="120"><b style="color:black; text-align:center;">Job Request Form</b></img--> <h3 style="color:black;text-align:center; font-size:25px;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Job Request Form</center>
              </h3>
			  <center style="color:black;"><h4 style="font-size:17px">(<b>MIS</b>)</h4></center>
			  </div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabykox'])) {

                                        $JRFno = $_POST['JRFno'];
                                        $Two = $_POST['Two'];
                                         $Fromo = $_POST['Fromo'];                                     
                                        $Date = $_POST['Date'];
                                        $Subject_identity=$_POST['Subject_identity'];                                     
                                        $Subject_Date=$_POST['Subject_Date'];
                                        $Series_Code=$_POST['Series_Code'];
                                        $Employee= $_POST['Employee'];
                                        $Prepared_By=$_POST['Prepared_By'];
                                        $Noted_BY=$_POST['Noted_BY'];
                                        $Status=$_POST['Status'];
                                      $Date_now=$_POST['Date_now'];
									  $Type=$_POST['Type'];
									  $Name=$_POST['Name'];
									  $Department=$_POST['Department'];
									    $JobReq=$_POST['JobReq'];
									  $Purpose=$_POST['Purpose'];
									  $Preparedby=$_POST['Preparedby'];
									      $Approvedby=$_POST['Approvedby'];
									  $notedby=$_POST['notedby'];
									  $actiontaken=$_POST['actiontaken'];
									      $attendedbymis=$_POST['attendedbymis'];
									  $acknowledgeby=$_POST['acknowledgeby'];
									  $notedby2=$_POST['notedby2'];
									   $Typeothers=$_POST['Typeothers'];
									  
                         mysql_query("insert into Jobrequest
 (JRFno,Date_now,Type,Name,Department,JobReq,Purpose,Typeothers,Preparedby) values
     ('$JRFno','$Date_now','$Type','$Name','$Department','$JobReq','$Purpose','$Typeothers','$Preparedby')") or die(mysql_error());

      //   mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Job Request Succesfully Created!");
                                                    window.location= "JRFLIST.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<!--input type="hidden" id="username"  style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge"/-->
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->


<table class="table table-bordered table-responsive">
  <tr>
    <th style="color:black;">Date: <?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?><input type="text"value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" name="Date_now" style="display:none;"></th>
	  
	  
    <th style="color:black;">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>

	  
    <th style="color:black;"><input type="text" id="username" class="form-control" style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge" readonly/></th>
  </tr>
  
  <tr>
    <td style="color:black; font-size:14px; size:190px;">Name:&nbsp;<?php echo $_SESSION[sess_fname];?>&nbsp;<?php echo $_SESSION[sess_lastname];?><input type="text" style="display:none;" name="Name" value="<?php echo $_SESSION[sess_fname];?> <?php echo $_SESSION[sess_lastname];?>"><br><input type="text" style="display:none;" name="Department"
	value="<?php echo $_SESSION[sess_department];?>"> Department/Section:&nbsp;<?php echo $_SESSION[department];?> </td>
   
	<form> <td style="font-size:13px;">
	
  <input type="radio" name="Type" value="Software" required> Software<br>
  <input type="radio" name="Type" value="Systems&nbsp;Development"> System&nbsp;Dev<br>
  <input type="radio" name="Type" value="Hardware" > Hardware
  *<input type="radio" name="Type" value="Others" >*
 </td></form>
  
	    <td>
<input type="text" name="Typeothers" id="InputEmail3" placeholder="Others (Specify)" class="btn btn4"  size="37" style="background-color:lightgreen;">
&nbsp; MIS&nbsp;Dev&nbsp;Code___________________
</td>

  </tr>



  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td style="font-size:11px; border:none;" colspan="2">Date / Time Started: </td>
    <td style="font-size:11px; border:none;">Date / Time Finished:</td>
	  
  </tr>
  
  
  
  
  
  
  
  
    <tr>
    <th colspan="0" style="text-align:center;">Job Request</th>
    <th  colspan="2" rowspan="1" style="text-align:center;">Purpose</th>
  </tr>
  <tr>
    <td><textarea rows="4" cols="70" name="JobReq" required></textarea></td>
    
	   <td colspan="2"><textarea rows="4" cols="63" name="Purpose" required></textarea></td>
  </tr>
  
  
    <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; font-size:12px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by:  </td>
	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke; font-size:12px;">Noted by:</td>
	  


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  
  
  
  
      <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; size:5px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2"><?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?><input type="text" name="Preparedby" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" style="display:none;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <!--?php echo $_SESSION['sess_fname'];?--><!--&nbsp;--><!--?php echo $_SESSION['sess_lastname'];?--><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisitioner   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Department Head &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</emp> </td>
	
	

	  	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jerwin Ibañez<br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MIS Officer in Charge</emp></td>


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  <tr>
<td colspan="3" style="text-align:center; border-top:dotted; border-left: 1px solid whitesmoke; border-right: 1px solid whitesmoke; border-bottom: 1px solid whitesmoke;">

  <!--u style="border-style:dotted;: 4px dotted blue; color:black;"></u-->
<i>(this portion is to be accomplished by MIS who will attend the request)</i>
 </td>
 
 
 </tr>
 <tr>
 <th colspan="3" style="border-top:outset; text-align:center;"> Action Taken / Remarks</th>
 </tr>
 <tr>
    <td colspan="3" style="border-bottom: 1px solid whitesmoke; border-left: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">
<textarea input type="text" name="gago" rows="3" cols="140" placeholder="(Please indicate parts replaced or switched or transfered, if any. MIRS number is stated if requested parts are from Warehouse Section)" id="tang ina" readonly></textarea>
	<emp style="font-size:12px;"> Attended by (MIS POGI): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Acknowledged by (Requisitioner):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Noted by:</emp></td>	
 
 
 
 </tr>
 <tr>
 <td colspan="2" style="border-right: 1px solid whitesmoke;border-bottom: 1px solid whitesmoke;border-left: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;<u><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></u><br><emp style="font-size:12px;">(Signature over printed name and Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Signature over printed name and Date)</td>

   <td style="border-style:none; border-bottom: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Jerwin Ibañez</u><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MIS Officer in Charge</emp></td>
 </tr>
 
</table>
				
				
				
				
				
				
				
				
				
				
			  <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> Date</label>
    <div class="col-sm-10">
       <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    </div>
  </div-->	









  </tr>
  
  
  <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>

	
	
  </div-->
  <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">To&nbsp;</label>
    <div class="col-sm-10">
      <input type="text" name="Two" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
  
    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	">From</label>
    <!--div class="col-sm-10"-->
      <!--input type="text" name="Fromo" class="form-control" value="Finance Department" id="inputEmail3" readonly/>
    <!--/div-->
  <!--/div-->
  
    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="text" name="Date" class="form-control" value="<!--?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    <!--/div-->
  <!--/div-->
  
  
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
						      <!--label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						 
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select-->  	
					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  <!--/div-->

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from Jobrequest'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();

// $sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
?>
<?php 
$sql ="SELECT * from Jobrequest ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <!-- series div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div-->
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <div class="col-sm-10">
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
				  

				  
						  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <div class="col-sm-10">
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    </div>
  </div-->
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
   
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitbabykox" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
 
         			
		
		
		
		
		
		
		
		
		
		

								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemojrfull" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:930px;">
            <div style="color:white;background-color:white" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <!--img src="../item_images/GerardSs.jpg" width="120"><b style="color:black; text-align:center;">Job Request Form</b></img--> <h3 style="color:blue;text-align:center; font-size:25px;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Job Request Form</center>
              </h3>
			  <center style="color:black;"><h4 style="font-size:17px">(<b>MIS SAMPLE</b>)</h4></center>
			  </div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabykox'])) {

                                        $JRFno = $_POST['JRFno'];
                                        $Two = $_POST['Two'];
                                         $Fromo = $_POST['Fromo'];                                     
                                        $Date = $_POST['Date'];
                                        $Subject_identity=$_POST['Subject_identity'];                                     
                                        $Subject_Date=$_POST['Subject_Date'];
                                        $Series_Code=$_POST['Series_Code'];
                                        $Employee= $_POST['Employee'];
                                        $Prepared_By=$_POST['Prepared_By'];
                                        $Noted_BY=$_POST['Noted_BY'];
                                        $Status=$_POST['Status'];
                                      $Date_now=$_POST['Date_now'];
									  $Type=$_POST['Type'];
									  $Name=$_POST['Name'];
									  $Department=$_POST['Department'];
									    $JobReq=$_POST['JobReq'];
									  $Purpose=$_POST['Purpose'];
									  $Preparedby=$_POST['Preparedby'];
									      $Approvedby=$_POST['Approvedby'];
									  $notedby=$_POST['notedby'];
									  $actiontaken=$_POST['actiontaken'];
									      $attendedbymis=$_POST['attendedbymis'];
									  $acknowledgeby=$_POST['acknowledgeby'];
									  $notedby2=$_POST['notedby2'];
									   $Typeothers=$_POST['Typeothers'];
									  
                         mysql_query("insert into Jobrequest
 (JRFno,Date_now,Type,Name,Department,JobReq,Purpose,Typeothers,Preparedby) values
     ('$JRFno','$Date_now','$Type','$Name','$Department','$JobReq','$Purpose','$Typeothers','$Preparedby')") or die(mysql_error());

      //   mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Job Request Succesfully Created!");
                                                    window.location= "JRFLIST.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<!--input type="hidden" id="username"  style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge"/-->
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->


<table class="table table-bordered table-responsive">
  <tr>
    <th style="color:black;">Date: <?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?><input type="text"value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" name="Date_now" style="display:none;"></th>
	  
	  
    <th style="color:black;">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>

	  
    <th style="color:black;"><input type="text" id="username" class="form-control" style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge" readonly/></th>
  </tr>
  
  <tr>
    <td style="color:black; font-size:14px; size:190px;">Name:&nbsp;<?php echo $_SESSION[sess_fname];?>&nbsp;<?php echo $_SESSION[sess_lastname];?><input type="text" style="display:none;" name="Name" value="<?php echo $_SESSION[sess_fname];?> <?php echo $_SESSION[sess_lastname];?>"><br><input type="text" style="display:none;" name="Department"
	value="<?php echo $_SESSION[sess_department];?>"> Department/Section:&nbsp;<?php echo $_SESSION[department];?> </td>
   
	<form> <td style="font-size:13px;">
	
  <input type="radio" name="Type" value="Software" required> Software<br>
  <input type="radio" name="Type" value="Systems&nbsp;Development"> System&nbsp;Dev<br>
  <input type="radio" name="Type" value="Hardware" > Hardware<br>
    <input type="radio" name="Type" value="Others" checked> Others

 </td></form>
  
	    <td>
<u><input type="text" name="Typeothers" id="InputEmail3" placeholder="" value="Printer" class="btn btn4"  size="37" style="background-color:whitesmoke;" readonly></u>
&nbsp; MIS&nbsp;Dev&nbsp;Code___________________
</td>

  </tr>



  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td style="font-size:11px; border:none;" colspan="2">Date / Time Started:&nbsp; 3/4/2018 9:24:33 </td>
    <td style="font-size:11px; border:none;">Date / Time Finished:&nbsp;  3/4/2018 11:24:33</td>
	  
  </tr>
  
  
  
  
  
  
  
  
    <tr>
    <th colspan="0" style="text-align:center;">Job Request</th>
    <th  colspan="2" rowspan="1" style="text-align:center;">Purpose</th>
  </tr>
  <tr>
    <td><textarea rows="4" cols="70" name="JobReq" readonly>Print Output error show a line break and blury texts</textarea></td>
    
	   <td colspan="2"><textarea rows="4" cols="63" name="Purpose" readonly> to be able to print and submit my report</textarea></td>
  </tr>
  
  
    <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; font-size:12px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by:  </td>
	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke; font-size:12px;">Noted by:</td>
	  


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  
  
  
  
      <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; size:5px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2"><?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?><input type="text" name="Preparedby" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" style="display:none;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rollaine C. Palo<!--?php echo $_SESSION['sess_fname'];?--><!--&nbsp;--><!--?php echo $_SESSION['sess_lastname'];?--><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisitioner   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Department Head &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</emp> </td>
	
	

	  	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jerwin Ibañez<br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MIS Officer in Charge</emp></td>


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  <tr>
<td colspan="3" style="text-align:center; border-top:dotted; border-left: 1px solid whitesmoke; border-right: 1px solid whitesmoke; border-bottom: 1px solid whitesmoke;">

  <!--u style="border-style:dotted;: 4px dotted blue; color:black;"></u-->
<i>(this portion is to be accomplished by MIS who will attend the request)</i>
 </td>
 
 
 </tr>
 <tr>
 <th colspan="3" style="border-top:outset; text-align:center;"> Action Taken / Remarks</th>
 </tr>
 <tr>
    <td colspan="3" style="border-bottom: 1px solid whitesmoke; border-left: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">
<textarea input type="text" name="gago" rows="3" cols="140" id="tang ina" readonly> Replace the existing installed toner and i also clean the scanner feeder to remove the lines the included in the error output</textarea>
	<emp style="font-size:12px;"> Attended by (MIS POGI): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Acknowledged by (Requisitioner):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Noted by:</emp></td>	
 
 
 
 </tr>
 <tr>
 <td colspan="2" style="border-right: 1px solid whitesmoke;border-bottom: 1px solid whitesmoke;border-left: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;<u>Aldwin Galang</u><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></u><br><emp style="font-size:12px;">(Signature over printed name and Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Signature over printed name and Date)</td>

   <td style="border-style:none; border-bottom: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Jerwin Ibañez</u><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MIS Officer in Charge</emp></td>
 </tr>
 
</table>
				
				
				
				
				
				
				
				
				
				
			  <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> Date</label>
    <div class="col-sm-10">
       <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    </div>
  </div-->	









  </tr>
  
  
  <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>

	
	
  </div-->
  <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">To&nbsp;</label>
    <div class="col-sm-10">
      <input type="text" name="Two" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
  
    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	">From</label>
    <!--div class="col-sm-10"-->
      <!--input type="text" name="Fromo" class="form-control" value="Finance Department" id="inputEmail3" readonly/>
    <!--/div-->
  <!--/div-->
  
    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="text" name="Date" class="form-control" value="<!--?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
    <!--/div-->
  <!--/div-->
  
  
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
						      <!--label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						 
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select-->  	
					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  <!--/div-->

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<?php 

include(connect.php);

$sql ="SELECT * from Jobrequest'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();

// $sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
?>
<?php 
$sql ="SELECT * from Jobrequest ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <!-- series div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div-->
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <div class="col-sm-10">
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
				  

				  
						  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <div class="col-sm-10">
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    </div>
  </div-->
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
   
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer" style="display:none;">

				   <button type="submit" name="submitbabykox" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
		
		