
<?php
session_start();

?>

<?php
 include("config.php");
 
 extract($_SESSION); 
 


 		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_lastname =:user_lastname');
 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_firstname =user_firstname');
 	  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_lastname=:user_lastname');
 
 
 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		    $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_password =:user_password');


		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	
		
		?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
	 <link rel="shortcut icon" href="../images/perfect.png" type="image/x-icon" />
	 			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
	 
    <!--link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" /-->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />


	

        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
	
	
	<link rel="stylesheet" href="mexico/bootstrap/css/bootstrap.min.css" type="text/css" />
	
	
	
	
	
	
	
	
	
	
	
	
		<script src="js/datatables.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />	
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="jquery.fancybox-media.js?v=1.0.6"></script>
	
	<!--script src="mexico/jquery-1.11.2.min.js"></script-->

	
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
	

   		
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    
</head>





    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                          <h4 class="btn btn-primary" style="font-size:24px; background-color:#337ab7;width:1585px;"> <b class="fa fa-usser" style="color:white;">&nbsp;&nbsp;Logistic Department Policy and Procedure  </b>	<br><td><b>
								   <?php include('connect.php');
			$get_id=$_GET['id'];
          //  $cats=$row['Prepared_By'];
            $query7 = mysql_query("select * from logisticcategory where category_id='$get_id'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['classname']; 

?>			</td> </b></h4>								   
    	
        <h4 style="display:none;">
        <select id="getfinancepolicies">
        <option value="showAll" selected="selected">Show All Category</option>
        <?php
        require_once 'confeg.php';
        
    $stmt = $dbcon->prepare('SELECT * FROM opcategory');
	      //$stmt - $dbcon->prepare('SELECT item_id, item_image, policy_title, revisionno, img_name, department FROM financedepartment //WHERE category_id=:cid ORDER BY department');
		  
	 //  $stmt = $dbcon->prepare('SELECT item_id, item_image, policy_title, revisionno, img_name, department FROM financedepartment WHERE //category_id="2" ORDER BY department');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $category_id; ?>"><?php echo $classname; ?></option>
            <?php
        }
        ?>
        </select>
        </h4>
        </h3>
                              
							  </div>
								
						
                                
								
								
								
								
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                               
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
<?php
 include('connect.php');
 
	include('confeg.php');


	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;

//if(isset($_GET['id']))
//{

//	$start=($ip-1)*$limit;

$get_id=$_GET['id']; 
//}
  // $get_idm=$_GET['idm']; 

$query=mysql_query("SELECT distinct category_id, item_id, item_image, policy_title, revisionno, img_name, department,issuedate,effectivedate FROM logisticdepartment WHERE category_id='$get_id'") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['issuedate']."&nbsp;To&nbsp; ".$query2['effectivedate']."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='/adminportal/item_images/".$query2['img_name']."' data-fancybox-group='button' title='Page ".$ip."- ".$query2['policy_title']."'>
	
					<img src='/adminportal/item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:190px;' />
					</a>
				
					
					<center><h4>  ".$query2['department']." </h4></center>
					
		
					
						<a class='btn btn-block btn-danger' title='Download Selected Policy?' href='#'><span class='fa fa-cloud-download'></span>&nbsp;RevisionNo&nbsp;".$query2['revisionno']."</a>
							
						
            </div>
          </div>
        </div>";

			
	
}




		$stmt=$dbcon->prepare('#');
		$stmt->execute();
		
	
	?>
	
	<script>
	var button = document.getElementById('Clicker');
	setInterval(function(){
		button.click()
	}.2)
		
	
	</script>
	
	
		        <script src="../js/lobipanel/lobipanel.min.js"></script>
 
        <script src="../js/main.js"></script>
	
	
	
	
	
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
	