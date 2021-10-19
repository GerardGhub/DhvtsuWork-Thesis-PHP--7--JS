<?php

include('config.php');


        ?>

	




<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
							


						
								
							
							
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="altQQ" class="img-circle profile-img">
                               <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
							   <!--center><?php echo $_SESSION['sess_department'];?></center-->
                                <small class="info">O&G Leather Mtfg Corp</small>
								

                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
							
                                <ul class="side-nav color-gray">
								
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="adminmanageoppolicy.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class="has-children">
                                        <!--a href="#"><i class="fa fa-file-text"></i> <span>O$G Department</span> <i class="fa fa-angle-right arrow"></i></a-->
                                        <!--ul class="child-nav">
                                            <li><a href="create-class.php"><i class="fa fa-bars"></i> <span>Create Department</span></a></li>
                                            <li><a href="manage-classes.php"><i class="fa fa fa-server"></i> <span>Manage Department</span></a></li>
                                           SELECT * FROM articles ORDER BY time DESC
                                        </ul-->
                                    </li>
									
																		 <li class="has-children">
                                        <a href="#"><i class="glyphicon glyphicon-plus"></i> <span>&nbsp;&nbsp;&nbsp;Adding New Data</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
         
                                           
										   
										   
										   <a data-toggle="modal" data-target="#uploadModalcategoryap"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
										      <a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New Op Policy</span> <i class="#"></i></a>
										   
										   
                                        </ul>
                                    </li>
									
									
									

                   
                               


									
							
											  <li class="has-children">
  
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Manage OP Policy </span> <i class="fa fa-angle-right arrow"></i></a>
										
                                        <ul class="child-nav">
		

							            <li> <a href="managecatop.php"><i class="fa fa-file-text"></i> <span>Manage Category Record</span> <i class="#"></i></a></li>
									  <li>  <a href="managepolicyop.php"><i class="fa fa-file-text"></i> <span> Manage Policy Record</span></a></li>
									  		  <li>  <a href="managefileop.php"><i class="glyphicon glyphicon-stats"></i> <span> File Manager</span></a></li>
                               <li><a href="../Customers/oppalisee.php"><i class="fa fa fa-search"></i> <span>View OP Policy</span></a></li>

									 </ul>
                                    </li>
									
									 <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>O&G Users</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
											
                                            <li>
															<a data-toggle="modal" data-target="#uploadModalusernew"><i class="fa fa-plus-circle"></i> <span>Add New O&G User</span></a>
											<a href="manageuserop.php"><i class="fa fa fa-server"></i> <span>Manage User Records</span></a></li>
							
                                           
                                        </ul>
                                    </li>
															 <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>M E M O R A N D U M</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalsamplexmemo"><i class="fa fa-plus-circle"></i> <span>Add Memorandum</span></a>
                                           <li><a href="managememogs.php"><i class="fa fa fa-server"></i> <span>Manage Memorandum</span></a></li>
										                                          <li><a href="../Customers/memorandumop.php"><i class="fa fa fa-search"></i> <span>View Memorandum</span></a></li>
                                        </ul>
                                    </li>
									
									   <li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <li><a href="../Customers/downloadangop.php"><i class="fa fa-download"></i> <span>Downloads</span> </a></li>
                                                 
                                    </li>
									
									<li class="has-children">
   
                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <li><!--a href="#"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a--></li>
                                                 
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
        <div class="modal fade" id="uploadModalld" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (Logistic)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyld.php">
                   <fieldset>
					
						
                            <p>Name:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Price" name="item_price" type="text" required>
  <option value="volvo" placeholder ="Choose a Category"></option>
 
  <option value="Logistic Department">Logistic Department</option>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Description:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Description" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="lrn_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
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
        <div class="modal fade" id="uploadModalusernew" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUserOp.php">
         
					
						
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
 
  <option value="user">user</option>
</select>
							 
							</div>
							<!-- break thius-->
							
									<p>Department</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" value="Office of President" name="department" type="text" required>
                           
							 
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
					
					
					
					
					
					
					
					
					
					
					
					
						
					
					
															
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalfinance" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (Finance)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyfinance.php">
                   <fieldset>
					
						
                            <p>Name:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Price" name="item_price" type="text" required>
  <option value="volvo" placeholder ="Choose a Category"></option>
 
  <option value="Finance Department">Finance Department</option>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Description:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Description" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="lrn_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
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
        <div class="modal fade" id="uploadModalod" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (Operation Division)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyod.php">
                   <fieldset>
					
						
                            <p>Name:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Price" name="item_price" type="text" required>
  <option value="volvo" placeholder ="Choose a Category"></option>
 
  <option value="Operation Division">Operation Division</option>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Description:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Description" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="lrn_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
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
        <div class="modal fade" id="uploadModalcatmis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUser.php">
                   <fieldset>
					
						
                            <p>Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Title" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
								<input class="form-control" placeholder="Date" name="item_price" type="text" required>



</select>
							 
							</div>
							<!--break this-->
							<p>Revision No:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision No" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department OIC:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department OIC" name="lrn_no" type="text" required>
                           
							 
							</div>
							<!-- break thius aaaaaa-->
							
									<!-- break thius-->
							
									<p>Username:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Username" name="Username" type="text" required>
                           
							 
							</div>
							<!-- break thius   bbbbbbbbbbbb-->
									<!-- break thius-->
							
									<p>Password:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="UserPassword" name="userpassword" type="text" required>
                           
							 
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
		
		
		
		
		<!--- start new line here-->
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New Office of President Policy</h2></center>
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
        <div class="modal fade" id="uploadModalcategoryap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
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
							
                                <input id="priceinput" class="form-control" placeholder="" name="revisionno" type="text" required>
                           
							 
							</div>
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>From:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input class="form-control" name="department" value="Office of President" type="text" required>
 
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
						
		
		
					
									
					
					
					
																								
