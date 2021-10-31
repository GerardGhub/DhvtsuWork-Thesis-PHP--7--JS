<!--?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O&G Leather Mftg Corp</title>
	 <link rel="shortcut icon" href="item_images/GerardSs.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />




<!-- tib ton -->
  <script src="jsonepiece/bootstrap.min.js"></script>
    <script src="jsonepiece/jquery.dataTables.min.js"></script>
	    <script src="jsonepiece/jquery-1.12.4.js"></script>
    <!--link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->



        <!--link rel="stylesheet" href="cssupdate/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="cssupdate/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="cssupdate/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="cssupdate/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="cssupdate/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <!--link rel="stylesheet" type="text/css" href="jsbin/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="cssupdate/main.css" media="screen"-->
	


	
		<!-- wala muna this script src="jsbin/datatables.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script-->
	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />	
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	
<!-- james -->

<!-- pop uppss -->







    <!--script type="text/javascript" src="js/jquery-1.10.2.min.js"></script-->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!--link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'-->
   
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
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">O&G Leather Mftg Corp.</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <!--ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"> &nbsp; &nbsp; &nbsp; Home</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
					<li><a href="items.php"> &nbsp; &nbsp; &nbsp; Item Management</a></li>
					<li><a href="customers.php"> &nbsp; &nbsp; &nbsp; Customer Management</a></li>
					<li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
					<li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Logout</a></li>
					
                    
                </ul-->
                <ul class="nav navbar-nav navbar-right navbar-user">
                  
					
					
					          <li><a href="#section1"><emp class="fa fa-users"> </emp>&nbsp;ABOUT</a></li>
      <li><a href="#section2"><emp class="fa fa-list"> </emp> &nbsp;VACANCIES</a></li>
	  <li> <a href="#section3"> <emp class="fa fa-phone"> </emp>&nbsp; CONTACT</a></li>
	  <li> <a href="#section3"> <emp class="fa fa-briefcase"> </emp>&nbsp; APPLY NOW</a></li>
					
					
					
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
    <ol class="carousel-indicators" style="background-color:grey;width:95px;border-radius:20px;align:center;">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1" ></li>
        <li data-target="#my-carousel" data-slide-to="2" ></li>
		<li data-target="#my-carousel" data-slide-to="3" ></li>
        <li data-target="#my-carousel" data-slide-to="4" ></li>
		<li data-target="#my-carousel" data-slide-to="5" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
		
            <img src="item_images/img1.jpg" alt="Hero Slide" style="width:100%;height:830px;">

            <div class="carousel-caption">
                <h1 style="font-family:Century Gothic"><b></b></h1>

                <h2></h2>
            </div>
        </div>
        <div class="item">
            <img src="item_images/img2.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="item">
            <img src="item_images/img3.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/img4.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/img5.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="item_images/img6.jpg" alt="..." style="width:100%;height:830px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev" style="color:brown;"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next" style="color:brown;"></span>
    </a>

<!-- #my-carousel-->
			
			</div>
			
			
		<br />	
			 <!--div class="alert alert-danger" style="width:50%;">
                        
                        &nbsp; &nbsp; Welcome to EDGE Skateshop! So, if you're looking for an Element skateboard, why not visit the EDGE Skateshop? 
						It's that easy. If you have a favorite skate brand, 
						this is the easiest and most straightforward way to get it.A lot of skate brands who are well known for one thing, 
						like decks, also sell completes with 
						their own special wheels, along with other brands for things like trucks, bearings, etc.
                    </div-->
					<br />
			</div>
			  </div>
			
    
			<!--final div-->
                
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<div id="section1wala" class="alert alert-default container-fluid services">
  <!--h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;MISSION</h2-->
<div class="row">
<section class="col-md-4">
<img class="icon" src="item_images/rocket.svg" alt="Icon">
<h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p>
</section>

<section class="col-md-4">
<img class="icon" src="item_images/earth.png" alt="Icon">
<h3>VISION</h3>
<p> Participate actively on the Global<br> fashion network</p>
</section>


<section class="col-md-4">
<img class="icon" src="item_images/cap.png" alt="Icon">
<h3>VISION</h3>
<p style="color:magenta;"> Innovation, Integrity, Flexibility,<br> Cooperation, Meticulousness</p>
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
		<h1 style="font-size:60px;">O&G as a company.<emp style="color:gray;">It'll blow your mind.</emp> </h1>
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<p style="font-style: arial; font-size:17px;">O&G is a manufacturing company of leather goods with headquarter in Unit 4A Philexcel Business Park, Clark Freeport Zone, Philippines. O&G was organized in December 2004 with the purpose to combine Italian creativity with the Filipinos craftsmanship.</p>
</section>
		
		
		
				<section class="col-md-6">
<img class="iconsx" src="item_images/company1.svg" alt="Icon" width="240">
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
</section>
		
				
	
				</div>
				
				
				
				
				
				<br>
				<br>
				
				<hr>
				
				
				
		<div class="row">	
				<br>
				<br>
				
				
							<section class="col-md-6">
<img class="iconsx" src="item_images/creativity.png" alt="Icon" width="240">
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
</section>	
				
				
				
				<br>	
				
				
		<section class="col-md-6">
		<h1 style="font-size:60px;">Why work in O&G.<emp style="color:gray;">See for yourself.</emp> </h1>
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<p style="font-size:17px;">Working in O&G is more than just a job. It’s a chance to make you a productive individual longing for improvement and advancement. It enhances individual strength and capabilities. Continues working in O&G will make an employee be more creative in their own ways.</p>
</section>
		
		
		

		
				
	
				</div>
					<br>	
				
				
				
			




				
				
				<div class="row">
				<br>	
				<hr>
				
		<section class="col-md-6">
		<h1 style="font-size:60px;">O&G Benefits.<br><emp style="color:gray;">Checkmate.</emp> </h1>
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<p style="font-size:17px;">It’s not all about work. O&G offers competitive compensation and benefits to support you both personally and professionally.</p>
</section>
		
		
		
							<section class="col-md-6">
<img class="iconsx" src="item_images/idea.svg" alt="Icon" width="240">
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
</section>	
		
				
	
				</div>
				




<div id="section2" class="alert alert-default container-fluid services">
		<br>
<br>		
  <!--h2 class="fa fa-dgroup" style="font-size:30px;">&nbsp;MISSION</h2-->
  <center><b style="font-size:36px;"><!--u style=" text-decoration: underline gray;"-->&nbsp;&nbsp;&nbsp;&nbsp;WE ARE LOOKING FOR YOU&nbsp;&nbsp;&nbsp;&nbsp;</b></center><p style="text-align:center;">Long Term Job Opportunities. One Day Hiring Process.</p> <p style="text-align:center;">Walk in applicants are welcome to visit us in our office, located at <emp style="color:skyblue;">Unit 4A, Philexcel Business Park, Clark Freeport Zone.</emp></p>


<div class="row">	
				
		<!--section class="col-md-6"-->
		<br>
		
		
		
		<?php


	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;

//if(isset($_GET['id']))
//{

//	$start=($ip-1)*$limit;

//$get_id=$_GET['id']; 
//}<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['issuedate']."&nbsp;To&nbsp; ".$query2['effectivedate']."</textarea>
  // $get_idm=$_GET['idm']; 

$query=mysql_query("SELECT * from posting where sended='posted'") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{
    //$buje= $query2['policy_title'];	
//	$Position =$query2['policy_title'];
	//$mainid =$query2['item_id'];
echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>No. of Vacancies&nbsp;".$query2['Vacancy']."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons'href='../item_images/".$query2['img_name']."' data-fancybox-group='button' title='Page ".$ip."- ".$query2['Jobtitle']."'>
	
					<img src='../item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:190px;' />
					</a>
				
					
					<center><h4>  ".$query2['Jobtitle']." </h4></center>
					
		
					
						<a href='#edit".$query2['item_id']."' class='btn btn-block btn-success' data-toggle='modal'><span class='fa fa-cloud-download'></span>&nbsp;Apply now & Details&nbsp;".$query2['item_id']."</a>
							
						
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
                                            <label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Job&nbsp;Title:</label>
                                            <div class='col-sm-4'>	
                                          <emp style='font-size:15px;'>".$query2['Jobtitle']."</emp></div>
										   
										   
										   
										   
										   
                                          
													 
												 
													 
													 
													 
                                        </div>
										
										
										
                                        <div class='form-group'>
										
										
										  <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Job&nbsp;Description:</label>
                                            <div class='col-sm-8'>
                                                     <emp style='font-size:15px;'>".$query2['Jobdescription']."</emp> </div>
													 
										
										
										
										
										
										
										
										
										
										
									
											
											
											
											
                                             
                                        </div>
										
										
										
											
                                                 <label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Vacancy:</label>
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
										
										
										
													   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>WorkExperience:</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['WorkXP']."</emp> </div>
										
										
										
													   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px; color:white;'>WorkExperiencexxx
</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px; color:white;'>".$query2['WorkXP']."</emp> </div>
										
										
										
										
										
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Gender</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['Gender']."</emp> 
													
													 
													 </div>
													 
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['Gender']."</emp> 
													
													 
													 </div>
													 
													 
													 
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Status</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['status']."</emp> 
													
													 
													 </div>
													 
										                    <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Statusxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['status']."</emp> 
													
													 
													 </div>
													 
													               <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Salary</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;'>".$query2['Salary']."</emp> 
													
													 
													 </div>
													 
													 
													 		               <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Salaryssax</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px; color:white;'>".$query2['Salary']."</emp> 
													
													 
													 </div>
										
												               <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Required&nbsp;Skills</label>
                                            <div class='col-sm-8'>
                                                     <emp style='font-size:17px;'>".$query2['skills']."</emp> 
													
													 
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
	

		
		
		
		
		
		
		<!--h1 style="font-size:60px;">O&G as a company.<emp style="color:gray;">It'll blow your mind.</emp> </h1-->
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<!--p style="font-style: arial; font-size:17px;">O&G is a manufacturing company of leather goods with headquarter in Unit 4A Philexcel Business Park, Clark Freeport Zone, Philippines. O&G was organized in December 2004 with the purpose to combine Italian creativity with the Filipinos craftsmanship.</p-->
<!--/section-->
		
		
		
				<!--section class="col-md-6">
<img class="iconsx" src="item_images/company1.svg" alt="Icon" width="240">
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
<!--/section-->
		
				
				
				
		
		
		
		
		
				
				
				
				
	
		
				</div>
			
				
				<br>
				
				<br>
				
	<div class="row">	
				
		<section class="col-md-6">
		<br>
		<!--h1 style="font-size:60px;">Gerard SingianO&G as a company.<emp style="color:gray;">It'll blow your mind.</emp> </h1-->
		
<emp class="mapouter"><div class="gmap_canvas"><iframe width="1495" height="575" id="gmap_canvas" src="https://maps.google.com/maps?q=o%26G%20leather%20&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><!--style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style--></emp>
<!--img class="icon" src="item_images/rocket.svg" alt="Icon">-->
<!--h3>MISSION</h3-->
<!--p style="font-style: arial; font-size:17px;">O&G is a manufacturing company of leather goods with headquarter in Unit 4A Philexcel Business Park, Clark Freeport Zone, Philippines. O&G was organized in December 2004 with the purpose to combine Italian creativity with the Filipinos craftsmanship.</p-->
</section>
		
		
		
				<section class="col-md-6">
<!--img class="iconsx" src="item_images/company1.svg" alt="Icon" width="240"-->
<!--h3>MISSION</h3>
<p> Be unique in delivering<br> Creativeness</p-->
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
		<h4 style="font-size:30px;">Find us here:<emp style="color:gray;"><h4><br><i class="fa fa-map"></i> <emp style="color:black;font-size:20px;">Unit 4A, Philexcel Business Park, M. A.</emp><br><emp style="color:black;font-size:20px;">Roxas Highway, Clark Freeport Zone, Angeles</emp> <br><emp style="color:black;font-size:20px;">City, Pampanga, Philippines</emp><br><br><i class="fa fa-phone" style="width:28px;"></i><emp style="color:black;font-size:20px;">(045) 499-7020, 499-7205</emp><br><br><i class="fa fa-envelope" style="width:28px;"></i><emp style="color:black;font-size:20px;">hrd@og-mftg.com</emp> <!--h1>It'll blow your mind.</emp> </h1-->
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
</emp><input type="text" class="form-control" placeholder="Email Address"style="border-radius:20px;">
<br>
</emp><textarea rows="5" class="form-control" placeholder="Message" style="border-radius:20px;"></textarea>
<br>
<button type="submit" class="btn-primary" value="Send" style="border-radius:20px;">&nbsp;&nbsp;Submit&nbsp;&nbsp;</button>
</section>
		
				
	
				</div>
					</div>
				
				
				
				
				<!--
				
				
				old footer here
				-->
           
<footer>
				
				<div class="alert alert-default" style="background-color:#033c73; border-radius:30px;">
                       <p style="color:white;text-align:center;">
                       &copy; Copyright 2019 O&G Leather Manufacturing. All Rights Reserved. 

						</p>
                        
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
       <h4 style="color:white;" class="modal-title" id="myModalLabel"><center class="#fa fa-servera" style="text-align:center;">Apply Now!<br>
Be sure your email and phone number is active.</center></h4>
              </div>
              <!--div class="modal-body"-->

				<!-- operation of the first table start  here-->
	


<div class="well" style="color:black;">



	  <?php

include('includes/config.php');

?>







							  

               

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											


           












<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
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



<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->






<!--style>
.table tr th{
	
	border:#eee 1px solid;
	
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	text-transform:uppercase;
	}
	table tr td{
	
	border:#eee 1px solid;
	color:#000;
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	
	text-transform:uppercase;
	}
	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 1px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
}
	</style-->
	
	<!--div class="alert alert-info">
                              
                      <         
								&nbsp;&nbsp;@FILE MANAGER BY MISBOYSS
                            </div-->
							<fieldset style="background-color:lightgray;border-radius:20px;">
							<center><b style="background-color:lightgray;text-align:center;font-size:17px;"> Send us your resume or CV</b></center>
							</fieldset>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
				<tr>
				<td>
				 <div class="controls">
                                            <select name="Jobtitle" class="combo form-control" width="100" style="border: 1px solid gray;" required>
											<option></option>
											<!--select ongusers.id , ongusers.fname , ongusers.lastname , ongusers.user_image , friends.friends_id   from ongusers  , friends
	where friends.my_friend_id = '$session_id' and ongusers.id = friends.my_id
	OR friends.my_id = '$session_id' and ongusers.id = friends.my_friend_id-->
															<?php
														$query = $conn->query("select * from posting");
															while($row = $query->fetch()){
															//$friend_name = $row['fname']." ".$row['lastname'];
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
				
					
					<!--td><input type="submit" class="btn btn-danger" value="SUBMIT" name="submitlaaarnie">
			<a style="color:gray; font-size:23px; padding-top: 90px;">
			<!--?php 
$sql ="SELECT * from filemgrmis";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files:
 <!--?php echo htmlentities($totalsubjects);?></strong></tr></td--><!--/p></a--></table>





	  
	  


          </div>
     
              <div class="modal-footer">
               <!--a style="color:pink; font-size:20px; padding-top:90px;"><?php 
$sql ="SELECT * from filemgrhr";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files: <?php echo htmlentities($totalsubjects);?></strong></tr></td></p></a-->





                <!--button class="btn btn-success btn-md" name="item_save"></button-->
				   <button type="submit" name="submitlaarnie" class="btn btn-success btn-md">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		
		
				<?php



	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;

//if(isset($_GET['id']))
//{

//	$start=($ip-1)*$limit;

//$get_id=$_GET['id']; 
//}<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['issuedate']."&nbsp;To&nbsp; ".$query2['effectivedate']."</textarea>
  // $get_idm=$_GET['idm']; 

$query=mysql_query("SELECT * from officepresident") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{
    //$buje= $query2['policy_title'];	
//	$Position =$query2['policy_title'];
	//$mainid =$query2['item_id'];
echo "";
		
}

?>
		
		
		
		
		
		
		
		
		
		
		
		
			<script>
	var button = document.getElementById('Clicker');
	setInterval(function(){
		button.click()
	}.2)
		
	
	</script>
	
		
        <script src="jsbin/lobipanel/lobipanel.min.js"></script>
 
        <script src="jsbin/main.js"></script>
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
                toastr["success"]( "Welcome <?php echo $_SESSION['sess_fname'];?> to O&G Fixed Assets Management System!");

            });
        </script>
		
		
		
		
		
		
		
		
		
		
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
</body>
</html>
