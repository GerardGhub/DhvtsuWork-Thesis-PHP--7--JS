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
    <title>O&G Policy Management System</title>
	 <link rel="shortcut icon" href="../images/perfect.png" type="image/x-icon" />
	 
	 
    <!--link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" /-->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
					<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>

	
	

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
<?php include('includes/hrmemoleftbarad.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                   <b> <h3 class="title">Human Resources Policy</b>								   
    	
        <h4>
        <select id="gethr">
        <option value="showAll" selected="selected">Show All Category</option>
        <?php
        require_once 'confeg.php';
        
        $stmt = $dbcon->prepare('SELECT * FROM hrcategory');
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
                                    <!--ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Students</li>
            							<li class="active">Manage Students</li>
            						</ul-->
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

						
						
						<!DOCTYPE html>
<html xmlns="#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="mexico/bootstrap/css/bootstrap.min.css" type="text/css" />
<style type="text/css">
select{
	
	width:200px;
	padding:3px;
	border-radius:35px;
}
</style>
<!--script src="mexico/jquery-1.11.2.min.js"></script-->
<script type="text/javascript">
$(document).ready(function()
{		
	// function to get all records from table
	function getAll(){
		
		$.ajax
		({
			url: 'gethr.php',
			data: 'action=showAll',
			cache: false,
			success: function(r)
			{
				$("#display").html(r);
			}
		});			
	}
	
	getAll();
	// function to get all records from table
	
	
	// code to get all records from table via select box
	$("#gethr").change(function()
	{				
		var id = $(this).find(":selected").val();

		var dataString = 'action='+ id;
				
		$.ajax
		({
			url: 'gethr.php',
			data: dataString,
			cache: false,
			success: function(r)
			{
				$("#display").html(r);
			} 
		});
	})
	// code to get all records from table via select box
});
</script>
</head>
<body>



<div class="container">


	
    




        <?php
        require_once 'confeg.php';
        
        $stmt = $dbcon->prepare('SELECT * FROM hrcategory');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
   
            <?php
        }
        ?>


        </div>


    
    <div class="" id="display">
       <!-- Records will be displayed here -->
	   

	   
	   
	   
	   
	   
    </div>
    



</div>
</body>
</html>
						
				

















				
						
						
						
						
						
						
						
						

 

			 
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
      
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
	   <script src="js/main.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
      <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
		 
		 
		 <script>
	function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}

</script>		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		<!-- ========== THEME JS ========== -->
        
		        <!-- ========== COMMON JS FILES ========== -->

        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
		
		
		 <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
      
		
	<script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
</body>
</html>
