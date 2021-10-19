  <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="#userdashboard.php">
                			    <!--emp style="color:black;font-size:17px;"><b class="btn btn-success" style="padding-top:-90px;">Memorandum Monitoring</b></emp-->
								
								    <emp style="color:black;font-size:17px;">O&G Leather Mftg Admin Corp.</emp>
      
								
								
								
								
								
								
								
								
                			</a>
							
	<!--h4 class="btn btn-primary" style="font-size:15px; background-color:skyblue;"> <i style="color:black;">O&G Leather Mftg. Corporation</i></h4-->
	
	
	
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			
							
							
							
							<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" title="Fade in" style="background-color:white;">
                                <li class="hidden-sm hidden-xs" title="Active User"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
				 
	<li> <a class="btn btn-dangers" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward" style=
	"color:brown;"></span> </a></li>							
                                <li class="hidden-sm hidden-xs" title="Full Screen"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                     <li class="hidden-sm hidden-xs"><a href="JavaScript: location.reload(true);" title="Refresh"><i class="fa fa-spinner"></i></a>
					 
					 
					 </li>
                			


<?php 
$myid = $_SESSION['sess_user_id'];
$sql ="SELECT * from message where reciever_id='$myid'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>


<?php 
$myid = $_SESSION['sess_user_id'];
$sql ="SELECT * from updates";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjectsbuje=$query->rowCount();
?>



							<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" style="background-color:white;">
                             
                				<li><a data-toggle="modal" title="UserProfile" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-user" style="color:grey;"></i> </a></li>
								
			  
              	<li><a data-toggle="modal"  title="Message" data-target="#Updatemessage" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-envelope" style="color:grey;"><emp style="background-color:r3ed;color:whi3te;">&nbsp;<?php echo htmlentities($totalsubjects);?></emp></i> </a></li>	


  	<li style="color:black;"><a data-toggle="modal"  title="Notifications" data-target="#Updateofmis" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-bell" style="color:grey;">&nbsp;<?php echo htmlentities($totalsubjectsbuje);?></i> </a></li>					
								
       <li style="background-color:lightgr2ey;"><a href="logout.php" title="Sign out" class="color-primary text-center" onclick="return confirm('Are you sure you want to Logout <?php echo $_SESSION['sess_username'];?>?')"><i class="fa fa-sign-out"style="color:grey;"></i> Logout</a></li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>

			
		<!-- Script going back -->
		
		
		
				  		<script>
function goBack() {
    window.history.back();
}
</script>
		
			
			