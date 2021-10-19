


<head>
<style>
input:hover{
	background-color:lightblue;
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
							


						
								
							
	
					<p style="text-align:center;"><img class="img-circle" src="item_images/<?php echo $_SESSION['sess_user_image'];?>" height="100" width="180" /></p>
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
                                      <li class="active">  <a href="../userdashboard.php" style="font-size:17px;"><i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Dashboard</span> </a></li>
	
										
                  
									 
              	<!--li><a data-toggle="modal"  title="Notifications" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-comment"></i> </a></li-->					
								
									 
                     								  
									


				

									
       <!--li><a href="../admin/misdashboardfinaljob.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;MIS</span> <i class="#"></i></a></li-->
		
									


									
       <!--li><a href="../operationdivision/mftgdashboard.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;Operation Division</span> <i class="#"></i></a></li>
									
				
				
				
				
				
				

									
       <li><a href="../officeofpresident/opdashboardfinal.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;Office of President</span> <i class="#"></i></a></li>
									

									
       <li><a href="../generalservices/gsdashboardfinaljob.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;General Services</span> <i class="#"></i></a></li>
									


									
       <li><a href="../logistic/logisticdashboardfinaljob.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;Logistic Department</span> <i class="#"></i></a></li-->
									


									
       <!--li><a href="../administrative/administrativedashboard.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;Administrative Policy</span> <i class="#"></i></a></li-->
									


									
       <!--li><a href="financedash.php" style="font-size:17px;"><i class="fa fa-info"></i> <span>&nbsp;&nbsp;Finance Department</span> <i class="#"></i></a></li-->
									




	  
	   
	   
	   
	   
	   
									
                                    </li>

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
   <center><img src="item_images\<?php echo $_SESSION['sess_user_image'];?>" width="200" height="180" ></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke; padding-top:5px;width:210px;height:34px;text-align:center;"> <?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?>  </emp></center>
	
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
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_fname'];?>" id="inputPassword3" readonly/>
    </div>
  </div>

  
  
  
  
  							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Lastname</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_lastname'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
  
  
  
  
    							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Department</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_department'];?>" id="inputPassword3" readonly/>
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
      <input type="text" name="code" class="form-control" value="<?php echo $_SESSION['sess_username'];?>" id="inputPassword3" readonly/>
    </div>
  </div>
  
  
  
  
       							  <div class="form-group">
    <!--label for="inputPassword3" class="col-sm-2 control-label">Category Asset</label-->
	
                          <!-- Category Assets:-->
	 <emp for="inputEmail3" class="col-sm-2 control-label" style="color:white;font-family: "DejaVu Sans Mono, monospace">Password</emp>
						  
<div class="col-sm-10">
      <input type="text" name="code" class="form-control" value="******<?php echo $_SESSION['sess_password'];?>" id="inputPassword3" readonly/>
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
        <div class="modal fade" id="Updatemessage" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 style="color:white;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Message Notifications</center></h2>
              </div>
            
         <div class="modal-body">


<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset style="color:#blue;">
					
					<input type="hidden" id="username" name="id" value="<?php
                        $id = mysql_query("select MAX(item_id) as max_item_id from tb_equipment");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>

  <div class="form-group" style="background-image: url("..\item_images\amazing.gif");">
   <center><img src="item_images\<?php echo $_SESSION['sess_user_image'];?>" width="150" height="140" ></center><center><emp class="btn btn-dangers" style="font-size:24px;color:whitesmoke;"> <center> </center> </emp></center>
	
    <!--div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Description" required/>
    </div-->
  </div>
	
	
							
							
							  <div class="form-group">



  
  
  
  
  <table>
  <thead>
                <tr>
              <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Sender&nbsp;Name</th>
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Department</th>
				    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Content</th>
					    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date&nbsp;Sended</th>
						
					

                </tr>
				
              </thead>
      
 
          
           <?php
		   include('../connect.php');
		    $myid = $_SESSION['sess_user_id'];
               $query = mysql_query("Select * from message where reciever_id='$myid' ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $Subject_identity=$row['Subject_identity'];
            
            ?>
			
			
			
      <tr>
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['sender_name'];?>
				 </td>
	  
	 
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['department'];?>
				 </td>
				 
				      <td class="zoom" style="text-align:center;">
		<?php echo $row['content'];?> <?php echo $row['Typeothers'];?>
				 </td>
				 
				 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['date_sended'];?>
				 </td>
				 
	
				 
	  
	  
 
      
		  

	

		  
		  
		  
		  
		  

		   
		   
      </tr>
      <?php } ?>
                                </tbody>
                            </table>
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  

  
  

   			  

  
  
  
  
  

  
  
  
  


  

   
   
   



  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
				

  
  

  
 
				   
				
                  
            
              </div>
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
			
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Babush</button>
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
						
						
						
						
						
						
						
						
						
						
						
				
				
						
						
						
						
				

						
						
						
						
						
	
						
						
						
					
										<!-- Mediul Modal kiki-->

		
										<!-- Mediul Modal kiki-->
        <div class="modal fade" id="Updateofmis" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 style="color:white;" class="modal-title" id="myModalLabel"><center class="#">&nbsp;Admin Policy & Procedures Update Notifications</center></h4>
              </div>
            
         <div class="modal-body">


<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset style="color:#blue;">
					
					<input type="hidden" id="username" name="id" value="<?php
                        $id = mysql_query("select MAX(item_id) as max_item_id from tb_equipment");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_item_id'] + 1;                                       
                        ?>" class="input-xlarge" required/>


	
	
							
							
							  <div class="form-group">



  
  
  
  
  <table class="table table striped">
  <thead>
                <tr>
				           <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">	<emp class="glyphicon glyphicon-signal"></emp></th>
              <th style="width:5%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Newly&nbsp;Updates</th>
                <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Error/Resulutions</th>
				   
					    <th style="width:11%;background-color:whitesmoke; color:black; text-align:center; font-family:Times New Roman, Times, serif;">Date&nbsp;Updated</th>
						
					

                </tr>
					<!--''where reciever_id='$myid' -->
              </thead>
      
 
          
           <?php
		   include('../connect.php');
		    $myid = $_SESSION['sess_user_id'];
		
               $query = mysql_query("Select * from updates") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $Subject_identity=$row['Subject_identity'];
            
            ?>
			
			
			
      <tr>
	  
	     <td class="zoom" style="text-align:center;">
	<emp class="glyphicon glyphicon-bell">	<?php echo $row['id'];?></emp>
				 </td>
	  
	  
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['newlyupdate'];?>
				 </td>
	  
	 
	     <td class="zoom" style="text-align:center;">
		<?php echo $row['error_resulutions'];?>
				 </td>
				 
		
				 
				 		      <td class="zoom" style="text-align:center;">
		<?php echo $row['date_updated'];?>
				 </td>
				 
	
				 
	  
	  
 
      
		  

	

		  
		  
		  
		  
		  

		   
		   
      </tr>
      <?php } ?>
                                </tbody>
                            </table>
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  

  
  

   			  

  
  
  
  
  

  
  
  
  


  

   
   
   



  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
				

  
  

  
 
				   
				
                  
            
              </div>
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
			
				 <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Noted</button>
				
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
			
				<img src="item_images/orgchart.jpg" width="1620" height="900">
				
		
            </div>
          </div>
        </div>
		
		
		
		
		
		