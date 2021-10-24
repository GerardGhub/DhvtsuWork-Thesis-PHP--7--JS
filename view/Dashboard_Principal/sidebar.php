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
            <i class="fa fa-list-ul"></i> <span style="color:white;">Section</span>
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
         <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span style="color:white;">Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_attendance.php"><i class="fa fa-circle-o"></i> Add Attendance</a></li>
            <li><a href="student_attendance_history.php"><i class="fa fa-circle-o"></i>Student Attendance History </a></li>
            <li><a href="teacher_attendance_history.php"><i class="fa fa-circle-o"></i> Teacher Attendance History</a></li>
          </ul>
        </li> -->
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
        <!-- <li>
          <a href="petty_cash.php">
            <i class="fa fa-yen"></i> <span style="color:white;">Petty Cash</span>
          </a>
        </li> -->
   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span style="color:white;">Announcement Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="../ong/Admin/userportal/finance/myinbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="posted.php"><i class="fa fa-circle-o"></i> Posted</a>
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

            <li><a href="posted.php"><i class="fa fa-circle-o"></i> Posted</a>
            <li><a href="postedlist.php"><i class="fa fa-circle-o"></i> Posts List</a>
            <li><a href="readmodule.php"><i class="fa fa-circle-o"></i>View All Modules</a>

           
           
          </ul>
        </li>

        <li>
          <a href="allmodules.php">
            <i class="fa fa-yen"></i> <span style="color:white;">Modules</span>
          </a>
        </li>
    



        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span style="color:white;">Applicant List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="add_friends.php"><i class="fa fa-circle-o"></i> Reserved</a></li>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> Passed</a>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> Not Qualified</a>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> Processed</a>
           
          </ul>
        </li> -->

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
    </section>
    <!-- /.sidebar -->
  </aside>