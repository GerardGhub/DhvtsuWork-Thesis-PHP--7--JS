<?php

include('config.php');


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
                                        <a href="manageod.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                
									
																		 <li class="has-children">
                                        <a href="#"><i class="glyphicon glyphicon-plus"></i> <span>&nbsp;&nbsp;&nbsp;Adding New Data</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
         
                                           
										   
										   
										   <a data-toggle="modal" data-target="#uploadModalcategoryap"><i class="fa fa-plus-circle"></i> <span>Add New Category </span> <i class="#"></i></a>
										      <a data-toggle="modal" data-target="#uploadModalsamplex"><i class="fa fa-plus-circle"></i> <span>Add New OD Policy</span> <i class="#"></i></a>
										   
										   
                                        </ul>
                                    </li>
									
									
									

                   
                               

     <li>
 
</li>                                      
									
                                        <li>
										
                                                 
                                    </li>
									
							
											  <li class="has-children">
  
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Manage O&G Policy </span> <i class="fa fa-angle-right arrow"></i></a>
										
                                        <ul class="child-nav">
				
                                       <a href="managecatod.php"><i class="fa fa-file-text"></i> <span>Manage Category Record</span> <i class="#"></i></a>
<a href="managepolicyod.php"><i class="fa fa-file-text"></i> <span> Manage Policy Records</span></a></li>
<a href="managefilemftg.php"><i class="glyphicon glyphicon-stats"></i> <span>File Manager MFTG</span></a></li>
	                                          <li><a href="../Customers/memorandumodka.php"><i class="fa fa fa-search"></i> <span>View Operation Policy</span></a></li>

									 </ul>
                                    </li>
									
									 <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>O&G Users</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
											
                                            <li>
																		<a data-toggle="modal" data-target="#uploadModalusernew"><i class="fa fa-plus-circle"></i> <span>Add New O&G User</span></a>
											<a href="manageuserod.php"><i class="fa fa fa-server"></i> <span>Manage User Records</span></a></li>
				
                                           
                                        </ul>
                                    </li>
									
									
									
									
									
									 <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>M E M O R A N D U M</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <!--li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Users</span></a></li-->
                                            
											<a data-toggle="modal" data-target="#uploadModalsamplexmemo"><i class="fa fa-plus-circle"></i> <span>Add Memorandum</span></a>
                                           <li><a href="managememogs.php"><i class="fa fa fa-server"></i> <span>Manage Memorandum</span></a></li>
										                                          <li><a href="../Customers/memorandumod.php"><i class="fa fa fa-search"></i> <span>View Memorandum</span></a></li>
                                        </ul>
                                    </li>
									   <li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <li><a href="../Customers/downloadodyo.php"><i class="fa fa-download"></i> <span>Downloads</span> </a></li>
                                                 
                                    </li>
									
									<li class="has-children">

                                        <!--ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                           
                                        </ul-->
                                        <li><!--a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a--></li>
                                                 
                                    </li>
								
									
									
									
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
        <div class="modal fade" id="uploadModalgs" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (General Services)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicygs.php">
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
 
  <option value="General Services">General Services</option>
 
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
        <div class="modal fade" id="uploadModalhr" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (Human Resources)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicyhr.php">
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
 
  <option value="Human Resources">Human Resources</option>
 
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
					
					
					
					
					
					
					
					<!-----------------!>
					
					
							
					
					
										
																					
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModaluser" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Users</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="adduser.php">
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
 
  <option value="Human Resources">Human Resources</option>
 
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
        <div class="modal fade" id="uploadModalap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Administrative Policy</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addAdministrative.php">
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
        <div class="modal fade" id="uploadModalap2015" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Administrative Policy(2015)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addAdministrative2015.php">
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
        <div class="modal fade" id="uploadModalap2010nov" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Administrative Policy(2010)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addAdministrative2010nov.php">
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
        <div class="modal fade" id="uploadModalusernew" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New User</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addUserod.php">
         
					
						
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
							
                                <input id="priceinputs" class="form-control" value="Operation Division" name="department" type="text" required>
                           
							 
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
               <center> <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Operation Division Policy</h2></center>
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
        <div class="modal fade" id="uploadModalcategoryap" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
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
                        <input class="form-control" name="department" value="Operation Division" type="text" required>
 
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
								
									
					
					
					
																								
