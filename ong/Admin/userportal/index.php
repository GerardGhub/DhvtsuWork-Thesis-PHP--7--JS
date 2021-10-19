<?php
session_start();
include('includes/config.php');
// if($_SESSION['alogin']!=''){
// $_SESSION['alogin']='';
// }
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT username,password FROM admin WHERE username=:uname and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Username or Password!');</script>";

}

}

?>


<?php

if(isset($_POST['logins']))
{
$uname=$_POST['username'];
$userpassword=$_POST['userpassword'];
$sql ="SELECT UserName,userpassword FROM users WHERE UserName=:uname and userpassword=:userpassword";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':userpassword', $userpassword, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['blogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'userdashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Username or Password!');</script>";

}

}

?>















<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Policy Management System</title>
		 	<link rel="shortcut icon" href="GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
 	<link rel="shortcut icon" href="GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
    	<link rel="shortcut icon" href="GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
			
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
		
		
		
		
		
		
		
		<!--style>
		
body  {
    background-image: url("bg_main.png");
    background-color: #cccccc;
	padding-top:-15px;
}
</style-->
		
		
		
		
       
		
		
		
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 0px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: right;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 9px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
		
		<style>
		
		body{
		

    background-repeat: no-repeat;



		}
		

		
		
		</style>
		
		
    </head>
	<center>
	    <body background="7.jpg" >	
	</center>
	
</body>
	
        <div class="main-wrapper">
						  
		
     
            <div class="">
                <div class="row">
 <h1 align="center" style="font-family:courier;">O&G Policy Management System</h1>
 
  <center><img src="images/GERARDss.jpg" width="409"height="150"></center>

                    <div class="col-lg-6 visible-lg-block">

<section class="section">

                            <div class="row mt-40">
                         
                        
											
													
			           </div>
                                            </div>
                                            <!-- /.panel -->
                                      
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                   </center>
                                                  
		
		




											
						
					
											
											
											
				
											
											
											
											
											
											
											
											
											<div class="container">    
        <div id="loginbox" style="margin-top:-45px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                    
					   
					   
					   
                      											
							  <div class="dropdown">
</div>
                    </div>    
				<center>	<h2></h2></center>

                    <div style="padding-top:0px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                          			     <div class="alert alert-info">
							   <center>  <h4>Welcome!</h4>	</center>
              <center>  Please Login with your Username and Password.</center>
            </div>
			<p font color="red">
                              <?php 

                                $errors = array(
                                    1=>"<center>Invalid Username or Password, Try again</center>",
                                    2=>"<center>Please Login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
				
				</p>	</font>		   
 <form action="authenticate.php" method="POST" class="" role="form">  
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name='username' class="form-control" placeholder="Username" autofocus>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                 <center>       <button type="submit" onclick="login()" class="btn btn-lg btn-primary btn-block">Login</button></center>
				 
                    </p>
                </fieldset>
            </form>
           
                           
                         </div>
					</div>
				</div> 
			</div> <!-- /container -->
			
			

   
			
			
			
			
			
											
											
										<div class="container">

							
											
											<div class="btn-group">

											
											

							
											
											
											
											

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                           <!--p class="text-muted text-center"><small>Copyright © <a href="#">MIS</a> 2017</small></p-->
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->
		
	
		
		
		  
		
		
		
		
		
		
		


        <!-- ========== COMMON JS FILES ========== -->
		 <script src="js/modernizr/modernizr.min.js"></script>
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

		
		
		
		
		
		
		
        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
 
    <!--/body-->
</html>

