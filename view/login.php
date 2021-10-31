

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE</title>
		<link rel="shortcut icon" href="item_images/saelogo.jpg" type="image/x-icon"/>
  
	 <link rel="stylesheet" type="text/css" href="../ong/Admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../ong/Admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../ong/Admin/css/local.css" />





	    <script src="../ong/Admin/jsonepiece/jquery-1.12.4.js"></script>

    
	<script type="text/javascript" src="../ong/Admin/jquery.fancybox.js?v=2.1.5"></script>

	<link rel="stylesheet" type="text/css" href="../ong/Admin/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="../ong/Admin/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="../ong/Admin/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../ong/Admin/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="../ong/Admin/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	





    <script type="text/javascript" src="../ong/Admin/bootstrap/js/bootstrap.min.js"></script>

   
    <style>
		  #section1wala {padding-top:0px;height:825px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
	  #section1 {padding-top:0px;height:1800px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
  #section2 {padding-top:-450px;height:905px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
  #section3 {padding-top:-450px;height:855px;color: #fff;width:1530px;font-size:120%;color:black; background-color: #fff;}
    #section4 {padding-top:30px;height:540px;color: #fff;width:1000px;font-size:120%;color:black;background-color: #fff;}
	  #section5 {padding-top:30px;height:630px;color: #fff;width:1000px;font-size:120%;color:black;background-color: #fff;}
	    #section6 {padding-top:30px;height:590px;color: #fff;width:1000px;font-size:120%;color:black; background-color: #fff;}
		
		
		.icon{
		max-width:185px;
		margin: 0 auto;
		display:block;
		
			
		}
		
			
		.iconbottom{
		max-width:210px;
		margin: 0 auto;
		display:block;
		
			
		}
		.iconsx{
			
			width:315px;
			
		}
		
		

.services section{
	
	text-align:center;
}


input:hover{
background-color:whitesmoke;
}

		</style>
		
		<script type="text/javascript">

		
	
	
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 600,

				closeEffect : 'elastic',
				closeSpeed  : 400,

				closeClick : true,

				
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			
			
			
			
			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
</head>

<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}


.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

.bg{
	width:100%;
	height:100%;
}

#loginFrom{
	opacity:0.6;	
}

body{
	background-color:white;
}
.cd-top--is-visible { // back-to-top button visible
  visibility: visible;
  opacity: 1;
}

.cd-top--fade-out { // reduce button opacity if user keeps scrolling
  opacity: .5;
}
</style>
<!-- <body onLoad="login()"> -->
<body>
 
<div id="wrapper" style="background-color:whitesmoke">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#index.php">
			
				San Antonio Elementary School</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color:#3c8dbc">
   
                <ul class="nav navbar-nav navbar-right navbar-user">
                  
					

			<li><a href="#section1"><emp class="fa fa-users"> </emp>&nbsp;ABOUT</a></li>
			<!-- <li><a href="#section2"><emp class="fa fa-list"> </emp> &nbsp;VACANCIES</a></li> -->
			<li> <a href="#section3"> <emp class="fa fa-phone"> </emp>&nbsp; CONTACT</a></li>
			<li> <a href="#section2"> <emp class="fa fa-briefcase"> </emp>&nbsp; ADMISSION</a></li>
			<li> <a href="#section2"> <emp class="fa fa-calendar"> </emp>&nbsp; SCHEDULE</a></li>
			<li> <a> <emp class="fa fa-user" data-toggle="modal" data-backdrop="false" data-target="#exampleModal"> </emp>&nbsp; LOGIN</a></li>
					
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
		<div class="modal-content ">
        		<div class="modal-header bg-primary">
          			<h4>Login</h4>
        		</div>
        		<div class="modal-body bgColorWhite">
        			<form role="form" action="../index.php" method="post">                    
                  		<div class="box-body">
                    		<div class="form-group" id="divEmail">
                      			<label for="">Email</label>
                      			<input type="text" class="form-control" id="email" placeholder="Enter email address" name="email" autocomplete="off">
                    		</div>
                            <div class="form-group" id="divPassword">
                      			<label for="">Password</label>
                      			<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                    		</div>
                  		</div><!-- /.box-body -->
                  		<div class="box-footer">
                  			<input type="hidden" name="do" value="user_login" />
                    		<button type="submit" class="btn btn-info" id="btnSubmit">Submit</button>
							<button type="button" class="btn btn-warning float-right" data-dismiss="modal">Close</button>
						</div>
                	</form>
        		</div>
      	   
    

    </div>
  </div>
</div>
					
					  <!---li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li-->
					
                     <li class="dropdown user-dropdown" style="display:none;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <!--?php   extract($_SESSION); echo $admin_username; ?--><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrappers"style="width:88%;padding-top:-170px;">
            
			
			
			
			
			
			<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="background-color:grey;width:275px;border-radius:50px;align:center;">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1" ></li>
        <li data-target="#my-carousel" data-slide-to="2" ></li>
		<li data-target="#my-carousel" data-slide-to="3" ></li>
        <li data-target="#my-carousel" data-slide-to="4" ></li>
		<li data-target="#my-carousel" data-slide-to="5" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
        <div class="item active">
		
            <img src="item_images/ilovesae.jpg" alt="Hero Slide" style="width:100%;height:830px;">

            <div class="carousel-caption">
                <h1 style="font-family:Century Gothic"><b></b></h1>

                <h2></h2>
            </div>
        </div>
        <div class="item">
            <img src="item_images/buildingsae.jpg" alt="..." style="width:100%;height:830px;">
<!--../ong/Admin/item_images/buildingsae.jpg-->
            <div class="carousel-caption">
                <p>San Antonio Elementary School</p>
            </div>
        </div>
        <div class="item">
            <img src="item_images/classroomsae.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p>Class Rooms</p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/roomsae.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p>Kinder Rooms</p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/teachersae.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p>Teachers</p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/interviewsae.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p>Interview in the Locale</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev" style="color:yellow;"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next" style="color:yellow;"></span>
    </a>

<!-- #my-carousel-->
			
			</div>
			
			
		<br />	

					<br />
			</div>
			  </div>
			
    
			<!--final div-->

				
			<div id="section1wala" class="alert alert-default container-fluid services">

<div class="row" >
<section class="col-md-4">
<img class="icon" src="../ong/Admin/item_images/rocket.svg" alt="Icon">
<h3>MISSION</h3>
<p> To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:</p>
<p> <b>Students</b> learn in a child-friendly, gender-sensitive, safe, and motivating environment. </p>
<p> <b>Teachers</b> facilitate learning and constantly nurture every learner. </p>
<p> <b>Administrators</b> and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen </p>
<p><b>Family</b>, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.  </p>
</section>

<section class="col-md-4">
<img class="icon" src="../ong/Admin/item_images/earth.png" alt="Icon">
<h3>VISION</h3>
<p> We dream of Filipinos
who passionately love their country
and whose values and competencies
enable them to realize their full potential
and contribute meaningfully to building the nation.</p>
<p>As a learner-centered public institution,
the Department of Education
continuously improves itself
to better serve its stakeholders. </p>
</section>


<section class="col-md-4">
<img class="icon" src="../ong/Admin/item_images/cap.png" alt="Icon">
<h3>CORE VALUES</h3>
<p style="color:magenta;"> Maka-Diyos<br>
Maka-tao<br>
Makakalikasan<br>
Makabansa</p>
</section>
</div>

				
		
				
				
				
							
				<div id="section1" class="alert alert-default container-fluid services">
				<br>
				<br>
				<br>
				<br>
					<br>
  <!--h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;MISSION</h2-->
  <center><b style="font-size:40px;"><!--u style=" text-decoration: underline lightgray;"-->&nbsp;&nbsp;&nbsp;&nbsp;ABOUT&nbsp;&nbsp;&nbsp;&nbsp;<!--/u--></b></center><br>

<br>
<br>
<br> 
<div class="row">	
				
		<section class="col-md-6">
		<br>
		<h1 style="font-size:60px;">SAE as a school.<emp style="color:gray;">It'll blow your mind.</emp> </h1>

<p style="font-style: arial; font-size:17px;">SAE is a elementary school with headquarter in San Antonio Mexico Pampanga. SAE was organized in December 2004 with the purpose etc to follow.</p>
</section>
		
		
		
				<section class="col-md-6">
<img class="iconsx" src="../ong/Admin/item_images/company1.svg" alt="Icon" width="240">

</section>
		
				
	
				</div>
				
				
				
				
				
				<br>
				<br>
				
				<hr>
				
				
				
		<div class="row">	
				<br>
				<br>
				
				
							<section class="col-md-6">
<img class="iconsx" src="../ong/Admin/item_images/creativity.png" alt="Icon" width="240">

</section>	
				
				
				
				<br>	
				
				
		<section class="col-md-6">
		<h1 style="font-size:60px;">Why you choose SAE.<emp style="color:gray;">See for yourself.</emp> </h1>

<p style="font-size:17px;">Studying in SAE is more than just a learning. It’s a chance to make you a productive individual longing for improvement and advancement. It enhances individual strength and capabilities.</p>
</section>
		
		
		

		
				
	
				</div>
					<br>	
				
				
				
			




				
				
				<div class="row">
				<br>	
				<hr>
				
		<section class="col-md-6">
		<h1 style="font-size:60px;">SAE Core Values.<br><emp style="color:gray;">Checkmate.</emp> </h1>

<p style="font-size:17px;">The Department of Education was established through the Education Decree of 1863 as the Superior Commission of Primary Instruction under a Chairman. The Education agency underwent many reorganization efforts in the 20th century in order to better define its purpose vis a vis the changing administrations and charters. The present day Department of Education was eventually mandated through Republic Act 9155, otherwise known as the Governance of Basic Education act of 2001 which establishes the mandate of this agency</p>
</section>
		
		
		
							<section class="col-md-6">
<img class="iconsx" src="../ong/Admin/item_images/idea.svg" alt="Icon" width="240">

</section>	
		
				
	
				</div>
				




<div id="section2" class="alert alert-default container-fluid services">
		<br>
<br>		

  <center><b style="font-size:36px;"><!--u style=" text-decoration: underline gray;"-->&nbsp;&nbsp;&nbsp;&nbsp;WE ARE LOOKING FOR YOU&nbsp;&nbsp;&nbsp;&nbsp;</b></center><p style="text-align:center;">Long Term Knowledge for Students.</p> <p style="text-align:center;">Walk in are welcome to visit us in our office, located at <emp style="color:skyblue;">San Antonio Mexico Pampanga.</emp></p>


<div class="row">	
				
	
		<br>
		
		
		
		<?php

 


	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("std_db",$query1);

$start=0;
$limit=12;



$query=mysql_query("SELECT * from posting where item_id='5'") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{

echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>Online Inquiry Requisition</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons'href='item_images/".$query2['img_name']."' data-fancybox-group='button' title='Page ".$ip."- ".$query2['Jobtitle']."'>
	
					<img src='item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:190px;' />
					</a>
				
					
					<center><h4>  ".$query2['Jobtitle']." </h4></center>
					
		
					
						<a href='#edit".$query2['item_id']."' class='btn btn-block btn-success' data-toggle='modal'><span class='fa fa-cloud-download'></span>&nbsp;Apply now & Details</a>
							
						
            </div>
          </div>
		  
        </div>
		
		<div id='edit".$query2['item_id']."' class='modal fade' role='dialog'>
                        <form method='post' class='form-horizontal' role='form'>
                            <div class='modal-dialog modal-lg'>
                           
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'>".$query2['Jobtitle']."</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <input type='hidden' name='edit_item_id' value='dsd'>
                                        
										
										
										<div class='form-group'>
                                            <label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Request&nbsp;Title:</label>
                                            <div class='col-sm-4'>	
                                          <emp style='font-size:15px;'>".$query2['Jobtitle']."</emp></div>
										   
										   
										   
										   
										   
                                          
													 
												 
													 
													 
													 
                                        </div>
										
										
										
                                        <div class='form-group'>
										
										
										  <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Description:</label>
                                            <div class='col-sm-8'>
                                                     <emp style='font-size:15px;'>".$query2['Jobdescription']."</emp> </div>
													 
										
										
										
										
										
										
										
										
										
										
									
											
											
											
											
                                             
                                        </div>
										
										
										
											
                                                 <label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Schedule:</label>
                                            <div class='col-sm-4'>	
                                          <emp style='font-size:15px;'>".$query2['Vacancy']."</emp></div>
											
											     <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Educatioasan:</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:15px;color:white;'>".$query2['Education']."</emp> </div>
										
											
											
											
											
											
											
											
											
											
											
											   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Education:</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:15px;'>".$query2['Education']."</emp> </div>
										
										
												


												
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx:</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['Jobtitle']."</emp> </div>
										
										
										
													   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Issue Date:</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['WorkXP']."</emp> </div>
										
										
										
													   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px; color:white;'>WorkExperiencexxx
</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px; color:white;'>".$query2['WorkXP']."</emp> </div>
										
										
										
										
										
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Effective&nbsp;Date</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['Gender']."</emp> 
													
													 
													 </div>
													 
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['Gender']."</emp> 
													
													 
													 </div>
													 
													 
													 
			
													 
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Statusxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['status']."</emp> 
													
													 
													 </div>
													 
								
													 
													 
											
										
											
										
										
                                    </div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
								
									<br>
									<br>
									<br>
									<br>
									<br>
                                    <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary' name='update_item' style='display:none;'><span class='glyphicon glyphicon-edit'></span> Edit</button>
						
                                      
										<a data-toggle='modal' data-target='#uploadModalsamplexmemosuperjeje' data-toggle='modal'class='btn btn-primary'>Apply Now</a>
										
										
                                        <button type='button' class='btn btn-warning' data-dismiss='modal'><span class='glyphicon glyphicon-remove-circle'></span> Cancel</button>
                                    </div>
									
									
									
									
                                </div>
                        
                        </form>
						
                    </div>
					</div>
					</div>";

		
	
	
}




		//$stmt=$dbcon->prepare('#');
		//$stmt->execute();    <!--a href="#add<?php echo $id;?-->" data-toggle="modal">
	
	?>
	

		
		
		
		
		
		

		
				
				
				
		
		
		
		
		
				
				
				
				
	
		
				</div>
			
				
				<br>
				
				<br>
				
	<div class="row">	
				
		<section class="col-md-6">
		<br>
		<!--h1 style="font-size:60px;">Gerard SingianO&G as a company.<emp style="color:gray;">It'll blow your mind.</emp> </h1-->
		
<emp class="mapouter"><div class="gmap_canvas"><iframe width="1495" height="575" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d432.99456592436235!2d120.72401703210694!3d15.063606041486329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f9f7fd22b311%3A0x154c1c84ecf197fb!2sSan%20Antonio%20Elementary%20School%2C%20San%20Antonio%2C%20Mexico%2C%202021%20Pampanga!5e1!3m2!1sen!2sph!4v1634134459952!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div>
</section>
		
		
		
				<section class="col-md-6">

</section>
		
				
	
				</div>			
				
				
				
				
				
				
				<div id="section3" class="alert alert-default container-fluid services">
				<br>
				<br>
				
				<br>
				
  <!--h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;MISSION</h2-->
  <center><b style="font-size:40px;"><u style="text-decoration: underline lightgray; padding-bottom:20px;">&nbsp;&nbsp;&nbsp;&nbsp;CONTACT&nbsp;&nbsp;&nbsp;&nbsp;</b></center></u>


<div class="row">	
				
		<section class="col-md-6">
		<br>
		<h4 style="font-size:30px;">Find us here:<emp style="color:gray;"><h4><br><i class="fa fa-map"></i> <emp style="color:black;font-size:20px;">#243 San Antonio</emp><br><emp style="color:black;font-size:20px;"></emp> <br><emp style="color:black;font-size:20px;">Mexico, Pampanga, Philippines</emp><br><br><i class="fa fa-phone" style="width:28px;"></i><emp style="color:black;font-size:20px;">(045) 492323 2323</emp><br><br><i class="fa fa-envelope" style="width:28px;"></i><emp style="color:black;font-size:20px;">sae@gmail.com</emp> <!--h1>It'll blow your mind.</emp> </h1-->
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<!--p style="font-style: arial; font-size:17px;">O&G is a manufacturing company of leather goods with headquarter in Unit 4A Philexcel Business Park, Clark Freeport Zone, Philippines. O&G was organized in December 2004 with the purpose to combine Italian creativity with the Filipinos craftsmanship.</p-->
</section>
		
		
		
				<section class="col-md-6">
				<br>
				<h4 style="font-size:30px;">Send us feedback<emp style="color:gray;"></emp><h4>
<!--img class="iconsx" src="item_images/company1.svg" alt="Icon" width="240"-->
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
</emp><input type="text" class="form-control" placeholder="Name"style="border-radius:20px;">
<br>
</emp><input type="text" class="form-control" placeholder="Student No."style="border-radius:20px;">
<br>
</emp><textarea rows="5" class="form-control" placeholder="Password" style="border-radius:20px;"></textarea>
<br>
<button type="submit" class="btn btn-primary" value="Send" style="border-radius:20px;">&nbsp;&nbsp;Submit&nbsp;&nbsp;</button>
</section>
		
				
	
				</div>
					</div>
				
				
				
				
				<!--
				
				
				old footer here
				-->
           
<footer>
				
				<div class="alert alert-default" style="background-color:#3c8dbc; border-radius:30px;">
                       <p style="color:white;text-align:center;">
                       &copy; Copyright 2021 San Antonio. All Rights Reserved. 
					   <a href="#" class="cd-top text-replace fa fa-eject float-right"></a>
						</p>
                         <!-- all your content here --> 

                    </div>
          </footer>
           
        </div>
		
		
		
    </div>
	
	
				

    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
						
                            <p>Name of Item:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							
							
							<p>Price:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
							 
							</div>
							
							
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
		
		
			
		
								<!-- Mediul Modal kiki-->
        <div class="modal fade" id="uploadModalsamplexmemosuperjeje" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 style="color:white;" class="modal-title" id="myModalLabel"><center class="#fa fa-servera" style="text-align:center;">Request Now!<br>
You must log in to proceed on request.</center></h4>
              </div>
         
	


<div class="well" style="color:black;">






											


<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
if(isset($_POST['submitlaarnie'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $department =$_SESSION['department'];
  $Jobtitle = $_POST['Jobtitle'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  
  move_uploaded_file($temp,"../item_images/".$name);

$query=$conn->query("INSERT INTO postingsender (item_image,item_date,upload_by,department,Jobtitle,fname,mname,lname,Contact,Email) VALUES ('$name','$date','$upload_by','$department','$Jobtitle','$fname','$mname','$lname','$Contact','$Email')");
if($query){
	
 echo "<script>window.open('index.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>












<fieldset style="background-color:lightgray;border-radius:20px;">
<center><b style="background-color:lightgray;text-align:center;font-size:17px;"> Send us your documents</b></center>
</fieldset>
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">

<form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
<tr>
<td>
<div class="controls">
<select name="Jobtitle" class="combo form-control" width="100" style="border: 1px solid gray;" required>
<option></option>

<?php
$query = $conn->query("select * from posting where sended='posted'");
while($row = $query->fetch()){

$Jobtitle = $row['Jobtitle'];
$friend_image = $row['user_image'];
$id = $row['id'];
?>
<option value="<?php echo $Jobtitle; ?>"><?php echo $Jobtitle; ?></option>
<?php } ?>
</select>
</div>
</td>
</tr>

<tr>
<td>
<input type="text" name="fname" placeholder="First Name" class="form-control" required>
</td>
</tr>
<tr>
<td>
<input type="text" name="mname" placeholder="Middle Name" class="form-control" required>
</td>
</tr>
<tr>
<td>
<input type="text" name="lname" placeholder="Last Name" class="form-control" required>
</td>
</tr>
<tr>
<td>
<input type="text" name="Contact" placeholder="Contact Number - ex 639104763819" class="form-control" required>
</td>
</tr>

<td>
<input type="text" name="Email" placeholder="Valid Email" class="form-control" required>
</td>
</tr>



<tr>
<td>
<input type="file" name="photo" style="width:550px;" id="photo"  required="required">

</td>
</tr>
<br>




<td style="display:none;">
<input type="text" name="upload_by" value="sdsd">
</td>


</table>





	  
	  


          </div>
     
              <div class="modal-footer">






             
				   <!-- <button type="submit" name="submitlaarnie" class="btn btn-success btn-md">Submit</button> -->
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		
		
				<?php
include('connect.php');
 



	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;



$query=mysql_query("SELECT * from officepresident") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{

echo "";
		
}

?>
		
		
		
		
		
		
		
		
		
		
		
		
			<script>
	var button = document.getElementById('Clicker');
	setInterval(function(){
		button.click()
	}.2)
		
	
	</script>
	
		
        <script src="../ong/Admin/jsbin/lobipanel/lobipanel.min.js"></script>
 
        <script src="../ong/Admin/jsbin/main.js"></script>

		
		
		
		
		
		
		
		
		
		
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>



	<!--Success! - Insert-->
  	<div class="modal fade" id="loginFrom" tabindex="-1" role="dialog" aria-labelledby="loginFrom" aria-hidden="true">
    	<div class="modal-dialog">    
        	<div class="modal-content ">
        		<div class="modal-header bg-aqua-gradient">
          			<h4>Login</h4>
        		</div>
        		<div class="modal-body bgColorWhite">
        			<form role="form" action="../index.php" method="post">                    
                  		<div class="box-body">
                    		<div class="form-group" id="divEmail">
                      			<label for="">Email</label>
                      			<input type="text" class="form-control" id="email" placeholder="Enter email address" name="email" autocomplete="off">
                    		</div>
                            <div class="form-group" id="divPassword">
                      			<label for="">Password</label>
                      			<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                    		</div>
                  		</div><!-- /.box-body -->
                  		<div class="box-footer">
                  			<input type="hidden" name="do" value="user_login" />
                    		<button type="submit" class="btn btn-info" id="btnSubmit">Submit</button>
                  		</div>
                	</form>
        		</div>
      		</div>      
		</div>
	</div><!--/.Modal--> 

<script>

function login(){
//document.ready(function{	
	
	$('#loginFrom').modal({
		backdrop: 'static',
		keyboard: false
	});
	$('#loginFrom').modal('show');
};

$("form").submit(function (e) {
//MSK-000098-form submit	

	var uname = $('#email').val();
	var password = $('#password').val();
	
	if(uname == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divEmail').addClass('has-error has-feedback');	
		$('#divEmail').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="The user name is required" ></span>');	
			
		$("#email").keydown(function() {
			//MSK-00100-name
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});	
		
	}
	
	if(password == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divPassword').addClass('has-error has-feedback');	
		$('#divPassword').append('<span id="spanPassword" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="The password is required" ></span>');	
			
		$("#password").keydown(function() {
			//MSK-00100-name
			$("#btnSubmit").attr("disabled", false);	
			$('#divPassword').removeClass('has-error has-feedback');
			$('#spanPassword').remove();
			
		});	
		
	}
	
	
	if(uname == '' || password == ''){
		//MSK-000098- form validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
		
	}


});
</script>

<!--Warnning! - Email or Password is Incorrect-->
	<div class="modal fade" id="login_error" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true">
    	<div class="modal-dialog">    
      		<div class="modal-content">
        		<div class="modal-header bg-red-active">
          			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          			<h4>Information...!</h4>
        		</div>
        		<div class="modal-body bgColorWhite">
        			<strong style="color:red; font-size:14px">Warnning!</strong> Email or Password is Incorrect.
        		</div>
			</div>
		</div>
	</div><!--/.Modal-->


<?php
if(isset($_GET["do"])&&($_GET["do"]=="login_error")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	
	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#login_error');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}
	
}
?>

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));

var offset = 300, // browser window scroll (in pixels) after which the "back to top" link is shown
  offsetOpacity = 1200, //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
  scrollDuration = 700;
</script>
</body>