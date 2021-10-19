


<head>
<style>
input:hover{
	background-color:lightblue;
}
td{
	
	color:black;
}

#textboxid
{
    height:10px;
    font-size:10pt;
}

::placeholder{
	color:black;
	text-align:center;
}


.centered {
  position: absolute;
  top: 59%;
  left: 40%;
  border:none;
  transform: translate(-50%, -50%);
}

.centesred {
  position: absolute;
  top: 59%;
  left: 85%;
  border:none;
  transform: translate(-50%, -50%);
}

.button.disabled Finance {
  opacity: 0.65; 
  cursor: not-allowed;
  display:none;
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
                                      <li>  <a href="managefinance.php" style="font-size:17px; background-color:brown;"><i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Main Dashboard</span> </a></li>
				
                                      <li class="active"><a href="viewmemorandum.php" style="font-size:17px;"><i class="	fa fa-paper-plane-o">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Memorandum Monitoring </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
								
										
           <li class="asa<?php echo $_SESSION['sess_department'];?>"><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemo" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>Sunday Work or Holiday </span> 
						 
					

										
           <!--li class="asa<?php echo $_SESSION['sess_department'];?>"><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemopolicy" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>Memorandum Policy</span--> 
						 


					
					
				 <li class="oppa<?php echo $_SESSION['sess_department'];?>"><a data-toggle="modal"  title="Notifications" data-target="#Uploadovertime" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>MFtg Daily Overtime </span> 
						 


	 
						 
						 	 <li><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemosubject" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>New Subject Memorandum </span> 
									
                                    </li>
					
						 
						 	  
									     <li class="#active"><a href="viewmemosubjects.php" style="font-size:17px;"><i class="	fa fa-envelope">&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp; <span>Subject&nbsp;Memorandum </span> <!--o class="#fa fa-angle-right arrow"></o--></a></li>
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
					
									
									
										 	 <!--li><a data-toggle="modal"  title="Notifications" data-target="#Uploadmemojrf" style="font-size:17px;"><i class="fa fa-plus" style="color:white;">&nbsp;</i> <span>Request kang JRF </span> 
									
                                    </li-->	
									
									
									
									
									

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
                                            <!--li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li-->
                                           
                                        </ul>
                                        <!--li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li-->
                                           
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
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New Memorandum</center>
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
														$subject=$_POST['subject'];
					
                        mysql_query("insert into tomemorandum
 (Memo_id,Two,Fromo,Date,Subject_identity,Subject_Date,Series_Code,Employee,Prepared_By,Noted_BY,Status,cc1,cc2,cc3,cc4,cc5,cc6,cc7,cc8,owncc,backDate,subject,tinta,f2,cuttingfur,f3,cuttingleather,decoration,pattern,f1,rpd,prod_main,mftgoffice,breakline2) values
     ('$Memo_id','$Two','$Fromo','$Date','$Subject_identity','$Subject_Date','$Series_Code','$Employee','$Prepared_By','$Noted_BY','Posted','HumanResources Department','General Services Department','MIS Department','Logistic Department','Manufacturing Department','Office of the President','Bulletin','File','Finance Department','backdatesample','$subject','$tinta','$f2','$cuttingfur','$f3','$cuttingleather','$decoration','$pattern','$f1','$rpd','$prod_main','$mftgoffice','button disabled 21')") or die(mysql_error());

       //  mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Finance Memorandum Succesfully Posted!");
                                                    window.location="viewmemorandum.php";
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
      <input type="text" name="Fromo" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="subject" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  </div>
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject&nbsp;Category</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
					
 <?php
			include('..connect.php');
		$connection=mysqli_connect('localhost','root','','srms');
		$department=$_SESSION['sess_department'];
		
        $query=mysqli_query($connection,"select * from subject where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
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

		 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
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
 
                                     
                           
											
                                        </a>
  
  
  

   			  <div class="form-group">
			  <?php 

include(connect.php);
$dep=$_SESSION['sess_department'];
$sql ="SELECT * from tomemorandum where Fromo='$dep'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$mike=$query->rowCount();
?>

			  
			  
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <!--input type="text" name="Series_Code" class="form-control" value="
	<?php echo $_SESSION['sess_department'];?>-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" readonly/-->



			      <input type="text" name="Series_Code" class="form-control" value="
	<?php echo $_SESSION['sess_department'];?>-<?php

	echo ($mike)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" readonly/>
			
  </div>
	
	
	

	
	
	
	
	<!-- 
	
	<?php echo $_SESSION['sess_department'];?>-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>
	
	
		  <?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='$Subject_identity'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
	
	
	
	
	
	
	end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <!--div class="col-sm-10"-->
      <input id="textboxid" type="text" class="form-control" style="word-wrap: break-word; padding-bottom:50px;" name="Employee" size="130" value="  <?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		$department=$_SESSION[sess_department];
        $query=mysqli_query($connection,"select * from ongusers where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>

 <?php echo $row['fname'];?> <?php echo $row['lastname'];?>
	
     <?php } ?>" id="inputEmail3" required/>
	 
	         ?>">
 
	 
	 
	 
	 
	 
    <!--	   <?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		
        $query=mysqli_query($connection,"select * from ongusers") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>
        <?php echo $row['fname'];?> <?php echo $row['lastname'];?>
		
        <?php } ?>                -->
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
        <div class="modal fade" id="Uploadovertime" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:1230px;">
            <div style="color:white;background-color:#008CBA;" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;font-family:arial;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New Daily Overtime Memorandum</center>
              </h3></div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitot'])) {

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
														$subject=$_POST['subject'];
					$production=$_POST['production'];
					$prod_maintenance=$_POST['prod_maintenance'];
					$tinta=$_POST['tinta'];
					$f2=$_POST['f2'];
					$cuttingfur=$_POST['cuttingfur'];
					$f3=$_POST['f3'];
					$cuttingleather=$_POST['cuttingleather'];
					$decoration=$_POST['decoration'];
					$pattern=$_POST['pattern'];
					$f1=$_POST['f1'];
					$rpd=$_POST['rpd'];
					$mftgoffice=$_POST['mftgoffice'];
					$prod_main=$_POST['prod_main'];
                        mysql_query("insert into tomemorandum
 (Memo_id,Two,Fromo,Date,Subject_identity,Subject_Date,Series_Code,Employee,Prepared_By,Noted_BY,Status,cc1,cc2,cc3,cc4,cc5,cc6,cc7,cc8,owncc,backDate,subject,production,breakline,prod_maintenance,tinta,f2,cuttingfur,f3,cuttingleather,decoration,pattern,f1,rpd,mftgoffice,prod_main) values
     ('$Memo_id','$Two','$Fromo','$Date','$Subject_identity','$Subject_Date','$Series_Code','$Employee','$Prepared_By','$Noted_BY','Posted','HumanResources Department','General Services Department','MIS Department','Logistic Department','Manufacturing Department','Office of the President','Bulletin','File','Finance Department','backdatesample','$subject','$production','button disabled ot','$prod_maintenance','$tinta','$f2','$cuttingfur','$f3','$cuttingleather','$decoration','$pattern','$f1','$rpd','$mftgoffice','$prod_main')") or die(mysql_error());

       //  mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Finance Memorandum Succesfully Posted!");
                                                    window.location="viewmemorandum.php";
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
}       
                                                                -->
			<table border="0">
			<tr style="display:none;">
			<th>1</th>
			<th>2</th>
			</tr>
																<tr>
																<td>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">To&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Two" class="forms-control" value="All Employees Concerned" size="75" style="border-radius:40px;color:black;" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	">From</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Fromo" class="form-controsl" size="75" style="border-radius:40px;color:black;" value="<?php echo $_SESSION['sess_department'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>

  

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="subject" class="form-contsrol" value="Daily Overtime" size="75" style="border-radius:40px;color:black;" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
    
  </td>





<td>
			
				  
				      <div class="form-group" style="display:none;">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <input type="Date" name="Date" class="form-condstrol" size="70" style="border-radius:40px;color:black;" id="inputEmail3" />
    <!--/div-->
  </div>
  
  
  
		    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;font-size:13px;">Subject<br>Category</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-contrsol" style="border-radius:40px;color:black;width:400px;height:35px;" name="Subject_identity"> 
						  <option value="">...</option>
					
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject where Subject_id='3'") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select>  	
		<!--/div-->					
				

  </div>
  
  
  


		 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date" class="form-codntrol" size="20" style="border-radius:40px;color:black;" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
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
 
                                     
                           
											
                                        </a>
  
  
  

   			  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;<br>Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-constrol" size="70" style="border-radius:40px;color:black;" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" readonly/>

  </div>
	
	
	</td>
	</tr>
	</table>
	
	
		  
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	<table border="0" style="border-radius:40px;">
	<tr style="display:none;">
	<th>1</th>
	<th>2</th>
		<th>2</th>
		
	</tr>
	
	
	<tr>
	<td style="font-size:14px; width:13%;">

	  


<b> 
	TINTA UNIT -

</b>

	 


				  
		</td>
		
  
  
  
  
  <td>
  

	 <input type="time" name="tinta" style="height:25px; border-radius:40px;">

  
  </td>
  
  
  	<td style="font-size:14px;">

	  


<b> 
	CUTTING FUR UNIT - <br>

</b>

	 


				  
		</td>
  
  
  
  
    <td>
  

	 <span><input type="time" name="cuttingfur" style="height:25px; border-radius:40px;"></span>

  
  </td>
  
  
  	<td style="font-size:14px;">

	  


<b> 
	CUTTING LEATHER UNIT -

</b>

	 


				  
		</td>
  
  
    
    <td>
  

	 <span><input type="time" name="cuttingleather" style="height:25px; border-radius:40px;"></span>

  
  </td>
  
  
    	<td style="font-size:14px;">

	  


<b> 
	FINISHING 1 UNIT -

</b>

	 


				  
		</td>
      <td>
  

	 <span><input type="time" name="f1" style="height:25px; border-radius:40px;"></span>

  
  </td>
  
  
  
		</tr>	

<tr>
    	<td style="font-size:14px;">

	  


<b> 
	FINISHING 2 UNIT -

</b>

	 


				  
		</td>

	      <td>
  

	 <span><input type="time" name="f2" style="height:25px; border-radius:40px;"></span>

  
  </td>	
		
	    	<td style="font-size:14px;">

	  


<b> 
	FINISHING 3 UNIT -

</b>

	 


				  
		</td>	
		
		
			      <td>
  

	 <span><input type="time" name="f3" style="height:25px; border-radius:40px;"></span>

  
  </td>	
  
  	    	<td style="font-size:14px;">

	  


<b> 
	DECORATION UNIT -

</b>

	 


				  
		</td>	
		
		
		
					      <td>
  

	 <span><input type="time" name="decoration" style="height:25px; border-radius:40px;"></span>

  
  </td>	
  
  
    	    	<td style="font-size:14px;">

	  


<b> 
	RPD UNIT -

</b>

	 


				  
		</td>	
		
		
				
					      <td>
  

	 <span><input type="time" name="rpd" style="height:25px; border-radius:40px;"></span>

  
  </td>	
  
		</tr>	

<tr>
    	    	<td style="font-size:14px; text-align:center;" colspan="3">

	  


<b> 
	MANUFACTURING DEPARTMENT OFFICE -

</b>

	 


				  
		</td>
		
		
					
					      <td colspan="1">
  

	 <span><input type="time" name="mftgoffice" style="height:25px; border-radius:40px;"></span>

  
  </td>	
  
  
     	<td style="font-size:14px; text-align:center;">

	  


<b> 
	PATTERN SECTION -

</b>

</td>

					      <td>
  

	 <span><input type="time" name="pattern" style="height:25px; border-radius:40px;"></span>

  
  </td>
       	<td style="font-size:14px; text-align:center;">

	  


<b> 
	PRODN MAINTENANCE -

</b>

</td>

  
  
  		      <td>
  

	 <span><input type="time" name="prod_main" style="height:25px; border-radius:40px;"></span>

  
  </td>

</tr>
<tr>
<td colspan="8">
&nbsp;<input type="text" style="border-radius:40px;" class="form-control" placeholder="Please include a information if the department Section is up to finish only..">
</td>
</tr>





	
				  
	</table>			  
		  
		  <table border="1">
		  <tr>
		  <th style="text-align:center;">Daily Overtime Production Office</th>
		  <th style="text-align:center;">Production Office</th>
		  	  <th style="text-align:center;">Daily Overtime Prodn Maintenance</th>
			    	  <th style="text-align:center;">Production Maintenance</th>
		  </tr>
		  <tr>
		  <td style="width:30%;">
			<textarea type="text" class="form-control" value="add" rows="8" cols="5" style="color:black;" name="Employee"> 
	

	 
	 
	
	 </textarea>	  
				
	</td>
		  <!--?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		$department=$_SESSION[sess_department];
        $query=mysqli_query($connection,"select * from ongusers where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>

 Ms. <!--?php echo $row['fname'];?> <!--?php echo $row['lastname'];?>                                                   <br>
	
     <!--?php } ?-->
	<td class="centered">
<?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		$department=$_SESSION[sess_department];
        $query=mysqli_query($connection,"select * from ongusers where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>

 Ms. <?php echo $row['fname'];?> <?php echo $row['lastname'];?><br>                                        
	
     <?php } ?>
	</td>
	
	
	
	
	
	
	
			  <td style="width:25%;">
			<textarea type="text" class="form-control" value="add" rows="8" cols="5" style="color:black;" name="prod_maintenance"> 
	

	 
	 

	
	 </textarea>	  
				
	</td>
	
	
	
		<td class="centesred">
<?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		$department=$_SESSION[sess_department];
        $query=mysqli_query($connection,"select * from prod_main") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>

 Mr. <?php echo $row['Name'];?><br>                                        
	
     <?php } ?>
	</td>
	</tr>
	</table>
	
				  
    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Noted&nbsp;by</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-contdrol" name="Noted_BY"  style="color:black;border-radius:30px; width:945px; height:35px;"> 
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

	
				  
						  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Prepared_By" size="150" class="form-contsrol" style="color:black;border-radius:30px;" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" readonly/>
 
  </div>
					  
				  
				  

				  
				  
				  
				  
	
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitot" class="btn btn-success">Submit</button>
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
			  <center style="color:black;"><h4 style="font-size:17px">(MIS)</h4></center>
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
                                                    window.location= "viewmemorandum.php";
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
	
  <input type="radio" name="Type" value="Software" > Software<br>
  <input type="radio" name="Type" value="Systems&nbsp;Development"> System&nbsp;Dev<br>
  <input type="radio" name="Type" value="Hardware" > Hardware

 </td></form>
  
	    <td>
<input type="text" name="Typeothers" id="InputEmail3" class="btn btn4"  size="37" style="background-color:lightgreen;">
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
    <td><textarea rows="4" cols="70" name="JobReq"></textarea></td>
    
	   <td colspan="2"><textarea rows="4" cols="63" name="Purpose"></textarea></td>
  </tr>
  
  
    <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; font-size:12px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by:  </td>
	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke; font-size:12px;">Noted by:</td>
	  


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  
  
  
  
      <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; size:5px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2"><?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisitioner   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Department Head &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</emp> </td>
	
	

	  	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;Jerwin Ibañez<br><emp style="font-size:12px;">MIS Officer in Charge</emp></td>


	  
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
 <td colspan="2" style="border-right: 1px solid whitesmoke;border-bottom: 1px solid whitesmoke;border-left: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;<u><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></u><br><emp style="font-size:12px;">(Signature over printed name and Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Signature over printed name and Date)</td>

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
        <div class="modal fade" id="Uploadmemosubject" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:630px;">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New Subject Memorandum Category</center>
              </h3></div>
              <!--div class="modal-body"-->
         <div class="well">

                  
				  
				  <?php
  include('connect.php');
                                    if (isset($_POST['submitbabylaarnie'])) {

                                        $Subject_id = $_POST['Subject_id'];
                                        $Subject_name = $_POST['Subject_name'];
										$Date_added = $_POST['Date_added'];
										$department = $_POST['department'];
                              
                         mysql_query("insert into subject
 (Subject_id,Subject_name,Date_added,department) values
     ('$Subject_id','$Subject_name','$Date_added','$department')") or die(mysql_error());

      //   mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Memorandum Category Succesfully Added!");
                                                    window.location= "viewmemosubjects.php";
                                            </script>

                                            <?php
                                    }
                                    ?>

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<input type="hidden" id="username"  style="color:black;"name="Subject_id" value="<?php
                        $id = mysql_query("select MAX(Subject_id) as max_Subject_id from subject ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_Subject_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Category&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Subject_name" class="form-control" placeholder="Memorandum Subject Category .." id="inputEmail3" required/>
    <!--/div-->
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Department&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="department" value="<?php echo  $_SESSION[sess_department];?>" class="form-control" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
 
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date_added" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
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
  
  
  

	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
	  

				  
						  					      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
					  
				  

				  
				  
				  
				  
			  
    <div class="form-group">

				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <button type="submit" name="submitbabylaarnie" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
 
         			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Uploadmemopolicy" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md" style="width:630px;">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 style="color:whitet;text-align:center;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Add New <?php echo $_SESSION['sess_department'];?> Memorandum Policy</center>
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
														$subject=$_POST['subject'];
					
                        mysql_query("insert into tomemorandum
 (Memo_id,Two,Fromo,Date,Subject_identity,Subject_Date,Series_Code,Employee,Prepared_By,Noted_BY,Status,cc1,cc2,cc3,cc4,cc5,cc6,cc7,cc8,owncc,backDate,subject,tinta,f2,cuttingfur,f3,cuttingleather,decoration,pattern,f1,rpd,prod_main,mftgoffice,breakline2) values
     ('$Memo_id','$Two','$Fromo','$Date','$Subject_identity','$Subject_Date','$Series_Code','$Employee','$Prepared_By','$Noted_BY','Posted','HumanResources Department','General Services Department','MIS Department','Logistic Department','Manufacturing Department','Office of the President','Bulletin','File','Finance Department','backdatesample','$subject','$tinta','$f2','$cuttingfur','$f3','$cuttingleather','$decoration','$pattern','$f1','$rpd','$prod_main','$mftgoffice','button disabled 21')") or die(mysql_error());

       //  mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("New Finance Memorandum Succesfully Posted!");
                                                    window.location="viewmemorandum.php";
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
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">&nbsp;</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Two" class="form-control" placeholder="To" id="inputEmail3" required/>
    <!--/div-->
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;
	"></label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Fromo" class="form-control" placeholder="From" value="<?php echo $_SESSION['sess_department'];?>" id="inputEmail3" readonly/>
    <!--/div-->
  </div>
  
  
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;</label>
    <!--div class="col-sm-10"-->
      <textarea type="text" name="subject" rows="5" class="form-control" id="inputEmail3"></textarea>
    <!--/div-->
  </div>
  
  
  
  <!--?php
$yesterday = date("Y-m-d", time()-86400);
echo $yesterday;?-->
				  
				  
				  
				  
		    <div class="form-group">

	
                          <!-- Category Assets:-->
						      <label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject&nbsp;Category</label>
						  
							
							
							
						    <!--div class="col-sm-10"-->	
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
					
 <?php
			include('..connect.php');
		$connection=mysqli_connect('localhost','root','','srms');
		$department=$_SESSION['sess_department'];
		
        $query=mysqli_query($connection,"select * from subject where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
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

		 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Date</label>
    <!--div class="col-sm-10"-->
      <input type="text" name="Date" class="form-control" value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" id="inputEmail3" readonly/>
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
 
                                     
                           
											
                                        </a>
  
  
  

   			  <div class="form-group">
			  <?php 

include(connect.php);

$sql ="SELECT * from tomemorandum where Fromo='Finance Department'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$mike=$query->rowCount();
?>

			  
			  
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <!--input type="text" name="Series_Code" class="form-control" value="
	<?php echo $_SESSION['sess_department'];?>-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" readonly/-->



			      <input type="text" name="Series_Code" class="form-control" value="
	<?php echo $_SESSION['sess_department'];?>-<?php

	echo ($mike)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" readonly/>
			
  </div>
	
	
	

	
	
	
	
	<!-- 
	
	<?php echo $_SESSION['sess_department'];?>-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>
	
	
		  <?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='$Subject_identity'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
	
	
	
	
	
	
	end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <div class="form-group" style="display:none;">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <!--div class="col-sm-10"-->
      <input id="textboxid" type="text" class="form-control" style="word-wrap: break-word; padding-bottom:50px;" name="Employee" size="130" value="  <?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		$department=$_SESSION[sess_department];
        $query=mysqli_query($connection,"select * from ongusers where department='$department'") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>

 <?php echo $row['fname'];?> <?php echo $row['lastname'];?>
	
     <?php } ?>" id="inputEmail3" required/>
	 
	         ?>">
 
	 
	 
	 
	 
	 
    <!--	   <?php
			$connection=mysqli_connect('localhost','root','','srms');
			
		
        $query=mysqli_query($connection,"select * from ongusers") or die (mysqli_error());
        while($row=mysqli_fetch_array($query)){
        ?>
        <?php echo $row['fname'];?> <?php echo $row['lastname'];?>
		
        <?php } ?>                -->
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
            
 
		
		
		