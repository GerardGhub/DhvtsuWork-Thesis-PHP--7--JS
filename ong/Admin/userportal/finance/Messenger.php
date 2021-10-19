<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	    $passsword = $_SESSION['sess_password'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>

<?php
include('../includes/config.php');
//include('../includes/dbcons.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <title>MIS DOKUWIKI</title>
		
        <!--link rel="stylesheet" href="../css/bootstrap.min.css" media="screen"-->
		        <link rel="stylesheet" href="bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
		        <link rel="stylesheet" href="../animate.css" media="screen" >
		     <link rel="stylesheet" href="leftbar.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		
		<!-- okay tu header-->
		

		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
		<style>
/* Popup container - can be anything you want */
.popup {
    position: top;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup      background-color: #555;*/
.popup .popuptext {
    visibility: hidden;
    width: 260px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 60px;
    padding: 9px 10px;
    position: absolute;
    z-index: 1;
    bottom: 115%;
    left: 50%;
    margin-left: -1000px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}


.hero-image {
  background-image: url("../item_images/aswang.jpg");
  background-color: #cccccc;
  height: 1010px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
html, body {margin: 0; height: 100%; overflow: hidden}
</style>
		
		
		
		
		
		
    </head>








    <body class="top-navbar-fixed hero-image">
	   

	
	
        <div class="main-wrapper">
              <?php include('../includes/usertopbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('../includes/totheleftmessenger.php');?>  
					
					   <!--?php include('../includes/financeleftbar.php');?-->  
					<?php include('../includes/dbcon.php');?>
<?php include('../includes/dbcons.php');?>
                    <div class="main-page">
                        <div class="container-fluid">
                         
                        <!-- /.container-fluid -->
 </div>
                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
										
										
										
<?php 
$department =$_SESSION['sess_department'];
$myid=$_SESSION['sess_user_id'];
$sql1 ="SELECT * from messageread where reciever_id='$myid' ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=1; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>


                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                                    <span class="name">Personal Message&nbsp;</span><!--?php echo ($totalsubject);?-->&nbsp;
                                            <span class="bg-icon"><i class="fa fa-envelope"></i><i class="fa fa-use3r" style="height:90px;"></i></span>
                                        </a>
										
										<br>
										                                        <a class="dashboard-stat"style="background-color:brown;" href="#">
<?php 
$department =$_SESSION['sess_department'];
$myid =$_SESSION['sess_user_id'];
$sql1 ="SELECT * from message where reciever_id='$myid' ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=2; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>

                                            <span class="number counter"style="color:white;"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name" style="color:white;">Unread Personal Message&nbsp;<!--?php echo ($totalsubject);?>&nbsp;Category-->
                                            <span class="bg-icon"><i class="fa fa-television"></i></span>
                                        </a>
										<br>
										 <!--a class="dashboard-stat .bg-secondary" href="#">
<?php 
$sql1 ="SELECT * from hrdepartment ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>
<?php 
$sql ="SELECT * from hrcategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Human Resources&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category
                                            <span class="bg-icon"><i class="fa fa-book"></i></span>
                                        </a-->
										
										
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
									
									
									
									
									
									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat"style="background-color:skyblue;" href="#">
<?php
$department=$_SESSION['sess_department']; 
$myid=$_SESSION['sess_user_id'];
$sql ="SELECT * from post where member_id='$myid' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=3; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <span class="number counter" style="color:white;"><?php echo ($totalsubjects);?> </span>
											
                                            <span class="name" style="color:black;">O&G Leather Mftg. Corp News Feed</b>&nbsp;&nbsp;</span><emp style="color:black;"><!--?php echo ($totalsubject);?>&nbsp;Category--></b></emp>
                                            <span class="bg-icon"><i class="fa fa-star-half-o"></i></span>
											
                                        </a>
										<br>
										            <a class="dashboard-stat" style="background-color:pink;" href="#">
<?php 
$department=$_SESSION['sess_department'];
$myid=$_SESSION['sess_user_id'];
$sql ="SELECT * from messagereport where reciever_id='$myid' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=4";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
 
                                     
                                            <span class="number counter" style="color:white;"><?php echo ($totalsubjects);?> </span>
											
                                            <span class="name">Personal Message Reported&nbsp;&nbsp;</span><!--?php echo ($totalsubject);?>&nbsp;Category-->
                                            <span class="bg-icon"><i class="fa fa-table"></i></span>
											
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" style="background-color:lightgreen;" href="#">
                                        <?php 
										$mypersonalid=$_SESSION['sess_user_id'];
$sql2 ="SELECT * from friends where my_id='$mypersonalid'";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=5; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
                                            <span class="number counter" style="color:white;"><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name">Contact List </span><!--?php echo ($totalsubject);?>&nbsp;Category-->
                                            <span class="bg-icon"><i class="fa fa-google-wallet"></i></span>
                                        </a>
										
										<br>
										                                 <a class="dashboard-stat bg-primary" href="#">
                                        <?php 
										$department=$_SESSION['sess_department'];
										$sender=$_SESSION['sess_user_id'];
$sql2 ="SELECT * from messagesents where sender_id='$sender' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=6; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>
                                            <span class="number counter" ><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name">Personal Sent Items </span><!--?php echo ($totalsubject);?>&nbsp;Category-->
                                            <span class="bg-icon"><i class="fa fa-truck"></i></span>
                                        </a>
										
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

									
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                     

									 <a class="dashboard-stat" style="background-color:gray;" href="#">
                                        <?php 
$sql3="SELECT * from chatting.message";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalresults=$query3->rowCount();
?>
<?php 
$sql ="SELECT * from aa2000.subcategory where Category=7;  ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>

                                            <span class="number counter" style="color:white;"><?php echo htmlentities($totalresults);?></span>
                                            <span class="name" style="color:white;">Public Groupchat</span>&nbsp;<emp style="color:white;"><!--?php echo ($totalsubject);?>&nbsp;Category--></emp>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
										
										<br>
												 <a class="dashboard-stat"style="background-color:green;" href="#">
                                        <?php 
										$department=$_SESSION['sess_department'];
$sql3="SELECT  * from chatting.messagefinance where department='$department' ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalresults=$query3->rowCount();
?>
<?php 
$sql ="SELECT * from operationdivision ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?>

                                            <span class="number counter" style="color:white;"><?php echo htmlentities($totalresults);?></span>
                                            <span class="name" style="color:white;">Department Groupchat											</span><emp style="color:white;"<?php echo ($totalsubject);?>&nbsp;Category
                                            <span class="bg-icon"><i class="fa fa-android"></i></span><!--<\('_')/>-->
                                        </a>
										
										
								
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->
		
		
		
		
		
			<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModalsamplex" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add MIS Category</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcatmis.php">
                   <fieldset>
					
						
                            <p>Policy Title:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							<!-- 			 price input
                                <input id="priceinput" class="form-control" placeholder="Department" name="item_price" type="text" required>-->
							
							<p>Department:</p>
                            <div class="form-group">
							
                                <!--input  class="form-control" placeholder="Department" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Price" name="item_price" type="text" required>
  <option value="volvo" placeholder ="Choose a Category"></option>
 
  <option value="MIS">MIS</option>
 
</select>
							 
							</div>
							<!--break this-->
							<p>Revision:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Revision" name="stud_no" type="text" required>
                           
							 
							</div>
							<!-- break thius-->
							
									<p>Department Head:</p>
                            <div class="form-group">
							
                                <input id="priceinputs" class="form-control" placeholder="Department Head" name="lrn_no" type="text" required>
                           
							 
							</div>
	
		
							              <div class="form-group">
							
							<p>Choose Category</p>
                                <!--input  class="form-control" placeholder="Section" name="item_price" type="text" required-->
                           <select  class="form-control" placeholder="Price" name="category_id" equired>
						   <?php
			$cat_query = mysql_query("select * from miscategory");
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
                <h2 style="color:white" class="modal-title" id="myModalLabel">Add Category title</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="addcategorymis.php">
                   <fieldset>
					
						
                            <p>Category Title</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Category Title" name="classname" type="text" required>
                           
							 <p style="color:red";><i><b>/*Note: You Must Add Category Before Adding a New  Policy</i></b></p>
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
                <h2 style="color:red" class="modal-title" id="myModalLabel">Login Validition Admin!</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data">
          
		 
                                              
                                                    	<div class="form-group">
														<br>
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName"required>
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"required>
                                                    		</div>
                                                    	</div>
                                                    
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                           
                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
														<br>
															<br>	

							
                                                 	<br>
														<br>
		  

				   </form>
              </div>
            </div>
          </div>
        </div>	
				
		
		
		<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
		
		
		
		
		
		

        <!-- ========== COMMON JS FILES ========== -->
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/jquery-ui/jquery-ui.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="java.js"></script>
        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js/prism/prism.js"></script>
        <script src="../js/waypoint/waypoints.min.js"></script>
        <script src="../js/counterUp/jquery.counterup.min.js"></script>
        <script src="../js/amcharts/amcharts.js"></script>
        <script src="../js/amcharts/serial.js"></script>
        <script src="../js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="../js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="../js/amcharts/themes/light.js"></script>
        <script src="../js/toastr/toastr.min.js"></script>
        <script src="../js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js/main.js"></script>
        <script src="../js/production-chart.js"></script>
        <script src="../js/traffic-chart.js"></script>
        <script src="../js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome <?php echo $_SESSION['sess_fname'];?> to O&G Admin Policy & Procedure Portal!");

            });
        </script>
		                <!-- //====== right top ====== -->

		
			
		
	
	
		
		
		
		<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
		
    </body>
</html>
<!--?php }-->

