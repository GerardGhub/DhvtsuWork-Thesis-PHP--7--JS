<?php 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION["sess_username"]) && $role!="admin"){
      header('Location: index.php?err=2');
    }
?>


	

<!--?php

include('header.php');
        ?-->


<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
							


						
								
							
							
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="altQQ" class="img-circle profile-img">
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <p style="font-size:15px;"><a href="dashboard.php"><o class="fa fa-dashboard"></o> <span>Dashboard</span> </a>
                                     
                                    </li>
									<!-- this a sample-->
										 <li class="has-children">
  
                                      <a href="#"><o class="glyphicon glyphicon-star">&nbsp;</o> <span>Admin Policy </span> <o class="fa fa-angle-right arrow"></o></a>
										
                                       <ul class="child-nav">
										
									    <li class="dropdown-submenu">																		   
				   <a tab index="-1" href="#"><i class="glyphicon glyphicon-briefcase"></i> <span>&nbsp;Bussiness Division</span> <o class="fa fa-angle-right arrow"></o--></a>
				   <ul class="dropdown-menu">
                  <li style="color:black"><a tabindex="-1" href="managegs.php"><i class="glyphicon glyphicon-wrench"></i><b>GS Department</b></a></li>
         
                  <li class="dropdown-submenu" style="color:black">
                    <a href="managelogistic.php"><i class="glyphicon glyphicon-certificate"></i><b>Logistic Department</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-transfer"></i>Warehouse</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-sort"></i>Impex</a></li>
                    </ul>
					</li>
					  <li class="dropdown-submenu" style="color:black">
					    <a href="managefinance.php"><i class="glyphicon glyphicon-briefcase"></i> <b>Finance Department</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-usd"></i>Accounting</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i>Purchasing</a></li>
                    </ul>
                  </li>
               <li style="color:black"><a href="adminmanageappolicy.php"><o class="glyphicon glyphicon-star"></o><b>Administrative Policy</b></a></li>
                  <li style="color:black"><a href="managemis.php"><i class="glyphicon glyphicon-globe"></i><b>MIS Department</b></a></li>
				  <li style="color:black"><a href="managehr.php"><i class="glyphicon glyphicon-user"></i><b>HR Department</b></a></li>
				        <li style="color:black"><a href="adminmanageoppolicy.php"><o class="glyphicon glyphicon-tower"></o><b>Office of President</b></a></li>
                </ul>
              </li>
				    <li class="dropdown-submenu">	
				   										 <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a>
										     <ul class="dropdown-menu">
                  <li style="color:black"><a tabindex="-1" href="manageod.php"><i class="glyphicon glyphicon-grain"></i><b>Style</b></a></li>
                  <li class="dropdown-submenu" style="color:black">
                    <a href="#"><i class="glyphicon glyphicon-queen"></i><b>Quality Control</b></a>
                    <!--ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-transfer"></i>Warehouse</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-sort"></i>Impex</a></li>
                    </ul-->
					</li>
					  <li class="dropdown-submenu" style="color:black">
					    <a href="#"><i class="glyphicon glyphicon-scissors"></i> <b>Pattern</b></a>
                    <!--ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-usd"></i>Accounting</a></li>
                    	<li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i>Purchasing</a></li>
                    </ul-->
                  </li>
               <li style="color:black"><a href="#"><o class="glyphicon glyphicon-yen"></o><b>Product & Pricing</b></a></li>
                  <li style="color:black"><a href="#"><i class="glyphicon glyphicon-hourglass"></i><b>Planning & Production </b></a></li>
				  <li style="color:black"><a href="#"><i class="glyphicon glyphicon-equalizer"></i><b>Order & Material</b></a></li>
                </ul>
              </li>
				   
									 	
 
				<!--li class="has-children">
												 
				 <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a>
		       
										
										 <ul class="child-nav">	
														<li> <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <o class="fa fa-angle-right arrow"></o></a></li>
										
										 </ul-->
                                     

<li>
									 </ul>

										
									 
                                    
					
									
												 <li class="has-children">
  
                                      <li><a href="#"><i class="glyphicon glyphicon-th-list">&nbsp;</i> <span>Organizational Chart </span> <o class="fa fa-angle-right arrow"></o></a></li>
										
                                        <ul class="child-nav">
										
																													   
				   <!--a data-toggle="modal" data-target="#uploadModalcategoryap"><i class="glyphicon glyphicon-briefcase"></i> <span>&nbsp;Bussiness Division</span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexap"><i class="glyphicon glyphicon-wrench"></i> <span>&nbsp;Operation Division</span> <i class="#"></i></a>
					 <!--li><a href="managecatap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Category</</span></a></li>
				    <li><a href="managepolicyap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Policy </</span></a></li-->
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									                   </li>
									
									
												 <li class="has-children">
  
                                      <a href="#"><o class="glyphicon glyphicon-cog">&nbsp;</o> <span>Settings </span> <o class="fa fa-angle-right arrow"></o></a>
										
                                        <ul class="child-nav">
										
																													   
				   <a href="../Customers/sampleyakanu.php"><i class="glyphicon glyphicon-briefcase"></i> <span>&nbsp;Downloads</span> <i class="#"></i></a>
						  <a href="../Customers/memorandummain.php"><i class="glyphicon glyphicon-duplicate"></i> <span>&nbsp;Memorandum</span> <i class="#"></i></a>
						  	  <a href="manageuseruser.php"><i class="fa fa-users"></i> <span>User Management</span> <i class="#"></i></a>
							  	  	  <a href="activeuserlogs.php"><i class="glyphicon glyphicon-book"></i> <span>&nbsp;Active User Logs</span> <i class="#"></i></a>
					
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									
									
									
									
									<!-- this a sample 2
									
									
									
										<li class="has-children">
                                       
									
									
									
									
									
									
									
									
									-->
									
									
									
									
									
									
									
									
									

                                    <!--li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li-->
                                    <li class="has-children">
                                        <!--a href="#"><i class="fa fa-file-text"></i> <span>O$G Department</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <!--ul class="child-nav">
                                            <li><a href="create-class.php"><i class="fa fa-bars"></i> <span>Create Department</span></a></li>
                                            <li><a href="manage-classes.php"><i class="fa fa fa-server"></i> <span>Manage Department</span></a></li>
                                           SELECT * FROM articles ORDER BY time DESC
                                        </ul-->
                                    </li> 
									<li class="has-children">
  
                                       <!--a href="#"><o class="glyphicon glyphicon-cloud">&nbsp;</o> <span>Add MIS Policy </span> <o class="fa fa-angle-right arrow"></o></a-->
										
                                        <ul class="child-nav">
																			   
				   <a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New MIS Policy</span> <i class="#"></i></a>
					 <li><a href="managecatmis.php"><i class="fa fa-newspaper-o"></i> <span>MIS Category</</span></a></li>
				    <li><a href="managepolicy.php"><i class="fa fa-newspaper-o"></i> <span>MIS Policy</</span></a></li>
	
                                     


									 </ul>
                                    </li>
									 <li class="has-children">
  
                                      <!--a href="#"><o class="glyphicon glyphicon-star">&nbsp;</o> <span>Add Administrative Policy </span> <o class="fa fa-angle-right arrow"></o></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryap"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexap"><i class="fa fa-plus-circle"></i> <span>Add Administrative Policy</span> <i class="#"></i></a>
					 <li><a href="managecatap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Category</</span></a></li>
				    <li><a href="managepolicyap.php"><i class="fa fa-newspaper-o"></i> <span>Administrative Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-piggy-bank">&nbsp;</i> <span>Add Finance Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryfinance"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexfinance"><i class="fa fa-plus-circle"></i> <span>Add Finance Policy</span> <i class="#"></i></a>
					 <li><a href="managecatfinance.php"><i class="fa fa-newspaper-o"></i> <span>Finance Category</</span></a></li>
				    <li><a href="managepolicyfinance.php"><i class="fa fa-newspaper-o"></i> <span>Finance Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-wrench">&nbsp;</i> <span>Add GS Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategorygs"><i class="fa fa-plus-circle"></i> <span>Add New GS Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexgs"><i class="fa fa-plus-circle"></i> <span>Add New GS Policy</span> <i class="#"></i></a>
					 <li><a href="managecatgs.php"><i class="fa fa-newspaper-o"></i> <span>General Service Category</</span></a></li>
				    <li><a href="managepolicygs.php"><i class="fa fa-newspaper-o"></i> <span>General Service Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-list-alt">&nbsp;</i> <span>Add Logistic Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryld"><i class="fa fa-plus-circle"></i> <span>Add Logistic Category</span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexld"><i class="fa fa-plus-circle"></i> <span>Add New Logistic Policy</span> <i class="#"></i></a>
					 <li><a href="managecatlogistic.php"><i class="fa fa-newspaper-o"></i> <span>Logistic Category</</span></a></li>
				    <li><a href="managepolicyld.php"><i class="fa fa-newspaper-o"></i> <span>Logistic Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-briefcase"></i> &nbsp;<span>Add Office President Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryop"><i class="fa fa-plus-circle"></i> <span>Add New OP Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexop"><i class="fa fa-plus-circle"></i> <span>Add New OP Policy</span> <i class="#"></i></a>
					 <li><a href="managecatop.php"><i class="fa fa-newspaper-o"></i> <span>Office President Category</</span></a></li>
				    <li><a href="managepolicyop.php"><i class="fa fa-newspaper-o"></i> <span>Office President Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
									         </li>
										 <li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-transfer"></i> <span>Add Operation Division Policy </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryod"><i class="fa fa-plus-circle"></i> <span>Add New OD Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexod"><i class="fa fa-plus-circle"></i> <span>Add New OD Policy</span> <i class="#"></i></a>
					 <li><a href="managecatod.php"><i class="fa fa-newspaper-o"></i> <span>Operation Div Category</</span></a></li>
				    <li><a href="managepolicyod.php"><i class="fa fa-newspaper-o"></i> <span>Operation Division Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>
									
<li class="has-children">
  
                                        <!--a href="#"><i class="glyphicon glyphicon-user"></i> &nbsp;<span>Add Human Resources </span> <i class="fa fa-angle-right arrow"></i></a-->
										
                                        <ul class="child-nav">
										
																													   
				   <a data-toggle="modal" data-target="#uploadModalcategoryhr"><i class="fa fa-plus-circle"></i> <span>Add New HR Category </span> <i class="#"></i></a>
						  <a data-toggle="modal" data-target="#uploadModalsamplexhr"><i class="fa fa-plus-circle"></i> <span>Add New HR Policy</span> <i class="#"></i></a>
					 <li><a href="managecathr.php"><i class="fa fa-newspaper-o"></i> <span>HR Category</</span></a></li>
				    <li><a href="managepolicyhr.php"><i class="fa fa-newspaper-o"></i> <span>Human Resources Policy </</span></a></li>
										
										
										
										 
                                     


									 </ul>
									 
									 
                                    </li>									
   <li class="has-children">
                                        <!--a href="#"><o class="fa fa-users"></o> <span>Users Management</span> <o class="fa fa-angle-right arrow"></o></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
													<a data-toggle="modal" data-target="#uploadModalusernew"><i class="fa fa-plus-circle"></i> <span>Add New User</span></a>
										
                                            <li><a href="manageuser.php"><i class="fa fa fa-server"></i> <span>Manage Users</span></a></li>
									  <li><a href="../Customers/userdatainfo.php"><i class="fa fa fa-server"></i> <span>View User Profile</span></a></li>
                                           
                                        </ul>
                                    </li>
									   <li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <!--li><a href="../Customers/sampleyakanu.php"><!--i class="fa fa-download"></i--> <!--span>Downloads</span--> <!--/a></li-->
                                                 
                                    </li>
									<li class="has-children">
                                        <!--a href="#"><i class="glyphicon glyphicon-duplicate"></i> <span>&nbsp; M E M O R A N D U M</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalsamplexmemo"><i class="fa fa-plus-circle"></i> <span>Add Memorandum</span></a>
                                           <li><a href="managememogs.php"><i class="fa fa fa-server"></i> <span>Manage Memorandum</span></a></li>
										                                          <li><a href="../Customers/memorandummain.php"><i class="fa fa fa-search"></i> <span>View Memorandum</span></a></li>
                                        </ul>
                                    </li>
									
									</p>
									

<li>
                                        <!--a href="ogmemorandum.php"><i class="fa fa-info-circle"></i> <span>O$G Memorandum</span> <i class=""></i></a>

</li>
                                       
                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li-->
                                                 
                                    </li>
									
									  <!--li><a href="dito/librarian/add_books.php"><i class="fa fa fa-server"></i> <span> Add MIS</span></a></li-->
                                                 
                                    </li>
									          </li>
									
									  <!--li>
									  	<a data-toggle="modal" data-target="#uploadModalcatmis"c><i class="fa fa-server"></i> <span>Add New User
</span></a>
                                                 
                                    </li-->
									<!--li>
									  	<a href="managecatmis.php"><i class="fa fa-server"></i> <span>Manage Category MIS</span></a>
                                             
							
                                    </li>
									<!--li>
									 					<a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New MIS Policy</span></a>
                                             
							
                                    </li>
									
										<li>
									 					<a data-toggle="modal" data-target="#uploadModalcategorymis"><i class="fa fa-plus-circle"></i> <span>Add Category TItle MIS</span></a>
                                             
							
                                    </li-->
									
									
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
					
					
					
					

					
		
					
					
					
					
					
					
					
					
					
					
					
					
											
					<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalusernew" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUser.php">
         
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="fname" type="text" autofocus required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>LastName:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
								<input class="form-control"placeholder="LastName" name="lastname" type="text" required>



</select>
							 
							</div>
							<!--break this-->
									<p>Role:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" name="role" type="text" required>
  <option value="" placeholder="Choose a Role">Choose Category Role</option>
 
  <option value="admin">Admin</option>
     <option value="user">User</option>
  <option value="manager">administrative Manager</option>
    <option value="opmanager">Office President Manager</option>
  <option value="logisticmanager">Logistic Manager</option>
   <option value="financemanager">Finance Manager</option>
       <option value="operationmanager">Operation Division Manager</option>
  <option value="generalservices">GS manager</option>
   <option value="hrmanager">HR manager</option>
</select>
							 
							</div>
							<!-- break thius-->
							
									<p>Department</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department" name="department" type="text" required>
                           
							 
							</div>
							<!-- break thius aaaaaa-->
							
									<!-- break thius-->
							
									<p>Username:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Username" name="username" type="text" required>
                           
							 
							</div>
							<!-- break thius   bbbbbbbbbbbb-->
									<!-- break thius-->
							
									<p>Password:</p>
                            <div class="form-group">
							
                                <input type="password" class="form-control" placeholder="Password" name="password" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="user_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>	
					
					
					
				


					
											
	
		
		
		
		
		<!--- start new line here-->
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New MIS Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcatmis.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input id="priceinput" class="form-control" value="MIS" name="department" type="text"required>
 
							 
							</div>
							
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM miscategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
				
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New MIS Category Title</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorymis.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:black";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
					
									
					
		
		<!--- start new line here-->
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Administrative Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryAP.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" value="Administrative Policy" name="department" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM apcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add Administrative Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryapnew.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
						
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexfinance" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Finance Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyfinance.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" value="Finance Department" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM financecategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryfinance" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Finance Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryfinance.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorygs" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New GS Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorygs.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexgs" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New General Services Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicygs.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="General Services" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM gscategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
									
					
									
					
					
	
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexld" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Logistic Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicylogistic.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" value="Logistic Department" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM logisticcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryld" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New Logistic Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorylogistic.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
					
									
					
					
								<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexop" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center> <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Office of President Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryOp.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                           <input id="priceinput" class="form-control" value="Office of President" name="department" type="text" required>


							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM opcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		

			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryop" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New OP Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryrealop.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
		   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
																			
				
																								

		
					
									
					
					
					
																								

					
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexod" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New Operation Division Policy</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyod.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" value="Operation Division" name="department" type="text"required>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM operationdivision");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add Category title MIS</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorymis.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:black";><i><b>/*Note: You Must Add Category Before Adding a New  Policy</i></b></p>
							</div>
							
							
							
							
			
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
				
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryod" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add Operation Division Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryOd.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
						
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplexhr" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New HR Department Policy</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyhr.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
<input class="form-control" placeholder="Department" value="Human Resources" name="department" type="text" required>
 
 

							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Categoryid" name="category_id" required>
						   <?php
						   include('dbcon.php');
			$cat_query = mysql_query("SELECT * FROM hrcategory");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalcategoryhr" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New HR Category Title</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategoryhr.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:orange";><i><b><center>/*Note: You Must Add Category Before Adding a New  Policy</center></i></b></p>
							</div>
							
							
							
							
							
		
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		
		
		
		
		
			
		   <div class="modal fade" id="uploadModalsamplexmemo" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel"><center>Add New M E M O R A N D U M</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addmemogs.php">
                   <fieldset>
					
						
                            <p>Subject:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Policy Title" name="policy_title" type="text" required>
                           
							 
							</div>
							<p>To:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="" name="revisionno" type="number" required>
                           
							 
							</div>
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>From:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="Management Information System" type="text" required>
 
</select>
							 
							</div>
							<!--break this-->
							
							<!-- break thius-->
							
									<p>Department Code:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="" name="dh" type="text" required>
                           
							 
							</div>
	

							              <div class="form-group">
						
 

 
</select>
							 
							</div>
							
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" />
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
						
		
		
					
									
		
					
		
		
					
									
					
					
					
																								

		
		
		
					
																								
