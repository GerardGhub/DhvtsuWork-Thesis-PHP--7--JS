<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM teacher WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['i_name'];
$image=$row['image_name'];
$full_name=$row['full_name'];

?>      
      
      <div class="user-panel">
      	<div class="pull-left image">
        	<img src="../../<?php echo $image; ?>" class="img-round" alt="User Image">
        </div>
        <div class="pull-left info">
        	<p><?php echo $name; ?>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </p>

           
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard2.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="teacher_profile2.php">
            <i class="fa fa-flag"></i> <span>My Profile</span>
          </a>
        </li>
         <li>
          <a href="my_student.php">
            <i class="fa fa-graduation-cap"></i> <span>My Student</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Subject</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_subject2.php"><i class="fa fa-circle-o"></i> My Subject</a></li>
            <li><a href="all_subject2.php"><i class="fa fa-circle-o"></i> All Subject</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-plus-o"></i>
            <span>Timetable</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_timetable2.php"><i class="fa fa-circle-o"></i> My Timetable</a></li>
            <li><a href="all_timetable2.php"><i class="fa fa-circle-o"></i>All Timetable</a></li>
          </ul>
        </li>
         <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_attendance2.php"><i class="fa fa-circle-o"></i> My Attendance</a></li>
            <li><a href="my_attendance_history2.php"><i class="fa fa-circle-o"></i>My Attendance History</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="my_salary.php">
            <i class="fa fa-money"></i> <span>My Salary</span>
          </a>
        </li> -->
         <!-- <li>
          <a href="my_petty_cash.php">
            <i class="fa fa-yen"></i> <span>My Petty Cash</span>
          </a>
        </li> -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span>Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_student_exam_marks.php"><i class="fa fa-circle-o"></i> My Student Exam Marks</a></li>
            <!-- <li><a href="my_student_exam_marks_history.php"><i class="fa fa-circle-o"></i> My Student Exam Marks History</a></li> -->
            <li><a href="exam_timetable2.php"><i class="fa fa-circle-o"></i>Exam Timetable</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span>Communication Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="add_friends2.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
            <li><a href="my_friends2.php"><i class="fa fa-circle-o"></i> My Friends</a></li>
            <li><a href="groupchat.php"><i class="fa fa-circle-o"></i> Group Chat</a>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="my_events2.php"><i class="fa fa-circle-o"></i> My Events</a></li>
          	<li><a href="all_events2.php"><i class="fa fa-circle-o"></i> All Events</a></li>
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
            <li><a href="mymodulemonitoring.php"><i class="fa fa-circle-o"></i>Module Monitoring</a>
           
           
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
          <li><a href="requestinquiry.php"><i class="fa fa-circle-o"></i> Request InQuiry</a></li>
          	<li><a href="myinbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="datalist.php"><i class="fa fa-circle-o"></i> Data List</a>
            <li><a href="postedlist.php"><i class="fa fa-circle-o"></i> Posts List</a>

           
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
						   include('../Dashboard_Principal/connect.php');
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

    </section>



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
    <!-- /.sidebar -->
  </aside>