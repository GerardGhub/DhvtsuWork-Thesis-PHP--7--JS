  <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="#userdashboard.php">
                			    <!--emp style="color:black;font-size:17px;"><b class="btn btn-success" style="padding-top:-90px;">Memorandum Monitoring</b></emp-->
								
								    <emp style="color:black;font-size:17px;">O&G Leather Mftg Admin Corp.</emp>
      
								
								
								
								
								
								
								
								
                			</a>
							
	
	
	
	
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
                			
							
							
							
							<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" title="Fade in">
                                <li class="hidden-sm hidden-xs" title="Active User"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
				 
	<li> <a class="btn btn-dangers" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> </a></li>							
                                <li class="hidden-sm hidden-xs" title="Full Screen"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                     <li class="hidden-sm hidden-xs"><a href="JavaScript: location.reload(true);" title="Refresh"><i class="fa fa-spinner"></i></a>
					 
					 
					 </li>
                			






							<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				<li><a data-toggle="modal" title="UserProfile" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-user"></i> </a></li>
								
			  
              	<li><a data-toggle="modal"  title="Notifications" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center " osnclick="return confirm('Update a UserInformation <?php echo $_SESSION['sess_username'];?> ?')"><i class="fa fa-comment"></i> </a></li>					
								
       <li style="background-color:whitesmoke;"><a href="logout.php" title="Sign out" class="color-primary text-center" onclick="return confirm('Are you sure you want to Logout <?php echo $_SESSION['sess_username'];?>?')"><i class="fa fa-sign-out"></i> Logout</a></li>
                					
                		
                            
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
		
			
			