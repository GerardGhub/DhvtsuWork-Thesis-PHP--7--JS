<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color:#292929;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM admin WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['i_name'];
$image=$row['image_name'];

?>      
      
      <div class="user-panel">
      	<div class="pull-left image">
        	<img src="../../<?php echo $image; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" style="color:white">
        	<p><?php echo $name; ?></p>
            <a href="#" style="color:white"><i class="fa fa-circle text-success "></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span style="color:white;">Dashboard</span>
          </a>
        </li>
         <li>
          <a href="admin_profile.php">
            <i class="fa fa-flag text-white"></i> <span style="color:white;">My Profile</span>
          </a>
        </li>



      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span style="color:white;">Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="student.php"><i class="fa fa-circle-o"></i> Add Student</a></li>
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i> All Student</a></li>
            <li><a href="student_leave.php"><i class="fa fa-circle-o"></i> Leave Student</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span style="color:white;">Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
            <li><a href="all_teacher.php"><i class="fa fa-circle-o"></i> All Teacher</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span style="color:white;">Principal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="principal.php"><i class="fa fa-circle-o"></i> Add Principal</a></li>
            <li><a href="all_principal.php"><i class="fa fa-circle-o"></i> All Principal</a></li>
          </ul>
        </li>
  
        <li>
          <a href="subject.php">
            <i class="fa fa-book"></i> <span style="color:white;">Subject</span>
          </a>
        </li>
        <li>
          <a href="class_room.php">
            <i class="fa fa-list-ul"></i> <span style="color:white;">Classroom</span>
          </a>
      </li>
      <li>
          <a href="grade.php">
            <i class="fa fa-database"></i> <span style="color:white;">Grade</span>
          </a>
        </li>
        <li>
          <a href="subject_routing.php">
            <i class="fa fa-th"></i> <span style="color:white;">Subject Routing</span>
          </a>
        </li>
        <li>
          <a href="timetable.php">
            <i class="fa fa-calendar-plus-o"></i> <span style="color:white;">Timetable</span>
          </a>
        </li>
   
        <li>
          <a href="student_payment.php">
            <i class="fa fa-money"></i> <span style="color:white;">Student Payment</span>
          </a>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span style="color:white;">Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="exam.php"><i class="fa fa-circle-o"></i>Create Exam</a></li>
            <li><a href="exam_timetable.php"><i class="fa fa-circle-o"></i> Exam Timetable</a></li>
            <li><a href="student_exam_marks.php"><i class="fa fa-circle-o"></i>Student Exam Marks</a></li>
            <li><a href="student_exam_marks_history.php"><i class="fa fa-circle-o"></i>Student Exam Marks History</a></li>
          </ul>
        </li>
     
   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span style="color:white;">Announcement Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="myinbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="datalist.php"><i class="fa fa-circle-o"></i> Data List</a>
            <li><a href="postedlist.php"><i class="fa fa-circle-o"></i> Posts List</a>

           
          </ul>
        </li> 

         <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span style="color:white;">Module Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a data-toggle="modal" data-target="#uploadModalcategorymissection" data-backdrop="false"><i class="fa fa-circle-o"></i> New Section</a>
            <li><a href="managesection.php"><i class="fa fa-circle-o"></i> Manage Section</a>
            <li><a data-toggle="modal" data-target="#uploadModalcategorymis" data-backdrop="false"><i class="fa fa-circle-o"></i> New Category</a>
            <li><a href="managecategory.php"><i class="fa fa-circle-o"></i> Manage Category</a>
            <li><a data-toggle="modal" data-target="#uploadModalsamplex" data-backdrop="false"><i class="fa fa-circle-o"></i> New Module</a>
            <li><a href="managedata.php"><i class="fa fa-circle-o"></i> Manage Modules</a>
            <li><a href="readmodule.php"><i class="fa fa-circle-o"></i>View All Modules</a>
            <li><a href="allmodules.php"><i class="fa fa-circle-o"></i>Download Modules</a>

           
           
          </ul>
        </li>

    
    



     

        <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span style="color:white;">Communication Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="add_friends.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> My Friends</a>
           
          </ul>
        </li>
  

        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span style="color:white;">Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_events.php"><i class="fa fa-circle-o"></i> My Events</a></li>
            <li><a href="all_events.php"><i class="fa fa-circle-o"></i> All Events</a></li>
          </ul>
        </li>
      </ul>

        	<!-- Mediul Modal -->
          <div class="modal fade" id="uploadModalcategorymissection" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel" style="text-align:center;"><center>Add New Sections</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="adddepartmentsection.php">
                   <fieldset>
					
						
                      
                            <div class="form-group">
							

							
                                <input class="form-control" placeholder="Department Section" name="classname" type="text" required>
								
								
								
								
								
								
								
								
						
							
								
								
								
								
                           
							 <!--p style="color:pink; text-align:center;"><i><b>/*Note: You Must Add Category Before Adding a New  Policy</i></b></p-->
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
        <div class="modal fade" id="uploadModalcategorymisgallery" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h2 style="color:white" class="modal-title" id="myModalLabel">Add New Category Title</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategory.php">
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
							


        		<!-- Mediul Modal -->
            <div class="modal fade" id="uploadModalcategorymis" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel" style="text-align:center;"><center>Add Category Module</center></h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategory.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							

							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
								
								
								
								
								
								
								
								
										              <div class="form-group">
							
							<p>Choose Department Section</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control"  name="dep_sec" required>
						   <?php
						   include('connect.php');
			$cat_query = mysql_query("SELECT * FROM misdepfinal");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
	<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
 

 
</select>
							 
							</div>
							
								
								
								
								
                           
							 <p style="color:pink; text-align:center;"><i><b>/*Note: You Must Add Category Before Adding a New  Module</i></b></p>
							</div>
							
							
							
							
			
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_saved">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
		


        
			<!-- Mediul Modal -->
      <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <center > <h2 style="color:white" class="modal-title" id="myModalLabel">Add New Module</h2></center>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcatmis.php">
                   <fieldset>
					
						
                            <p style="display:none;">Subject:</p>
                            <div class="form-group" style="display:none;">
							
                                <input class="form-control" placeholder="Subject" name="policy_title" type="text">
                           
							 
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
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                        <input id="priceinput" class="form-control" value="MIS" name="department" readonly="readonly" type="text"required>
 
							 
							</div>
							
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="revisionno" type="number" required>
                           
							 
							</div>
							
							
								<p>Issue Date:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Issue Date" name="issuedate" type="date" required>
                           
							 
							</div>
							
								<p>Effective Date:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Effective Date" name="effectivedate" type="date">
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Added By:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" readonly="readonly" value="<?php echo $name;?>" name="dh" type="text" required>
                           
							 
							</div>
	
		
							              
							
							<!-- break thius-->
							

							<p>Choose Image:</p>
							<div class="form-group">
						
					
                                <input class="form-control"  type="file" name="file_img[]" accept="image/*" multiple required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="btn_upload">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
							
        
    </section>
    <!-- /.sidebar -->
  
							
		
		
		
		
  </aside>