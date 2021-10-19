<?php

include('config.php');
        ?>

<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="altQQ" class="img-circle profile-img">
                                <h6 class="title">Gerard</h6>
                                <small class="info">PHP Developer</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class=""></span>
										
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
                                        
                                    </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
					
					
					
					
					
					
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Policy in (MIS)</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addpolicymis.php">
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
  <option value="saab">MIS</option>
  <option value="opel">Office of President</option>
  <option value="audi">Logistic</option>
    <option value="saab">Finance</option>
  <option value="opel">Operation Division</option>
  <option value="audi">General Services</option>
    <option value="audi">Hr Department</option>
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
					
					
					
					
					
					
					