<?php
session_start();

?>

<?php
 include("config.php");
 
 extract($_SESSION); 
 


 		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_lastname =:user_lastname');
 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_firstname =:user_firstname');
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

	 <title> O&G Policy Management System</title>
	 <link rel="shortcut icon" href="../images/perfect.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
	

	
	<link rel="stylesheet" type="text/css" href="Customers/jquery.fancybox.css?v=2.1.5" media="screen" />	
	<link rel="stylesheet" type="text/css" href="Customers/jquery.fancybox-buttons.css?v=1.0.5" />
	
	<link rel="stylesheet" type="text/css" href="Customers/jquery.fancybox-thumbs.css?v=1.0.7" />
	
	
	

   		
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
                                    <h2 class="title">Users Profile</h2>
                                
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

<?php




$id=1;


$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=8;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}

$query=mysql_query("select * from users LIMIT $start, $limit");


while($query2=mysql_fetch_array($query))
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['fname']."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='item_images/".$query2['user_image']."' data-fancybox-group='button' title='Page ".$id."- ".$query2['fname']."'>
	
					<img src='item_images/".$query2['user_image']."' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4>  ".$query2['department']." </h4></center>
					
		
					
										<a class='btn btn-block btn-danger' href='#'><span class='	glyphicon glyphicon-paperclip'></span>&nbsp;Reading View</a>
							
						
            </div>
          </div>
        </div>";
			
	
}

echo "<div class='container'>";
echo "</div>";




$rows=mysql_num_rows(mysql_query("select * from users"));
$total=ceil($rows/$limit);
echo "<br /><ul class='pager'>";
if($id>1)
{
	echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id-1)."'>Previous Page</a><li>";
}
if($id!=$total)
{
	echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id+1)."' class='pager'>Next Page</a></li>";
}
echo "</ul>";


echo "<center><ul class='pagination pagination-lg'>";
		for($i=1;$i<=$total;$i++)
		{
			if($i==$id) { echo "<li class='pagination active'><a style='color:white;background-color : #033c73;'>".$i."</a></li>"; }
			
	
			
			else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		}
echo "</ul></center>";
?>
			
			
		
			
			<input type="button" value="click to toggle fullscreen" onclick="toggleFullScreen()">
			
				
		<!--					<center><h4> Price: &#8369; ".$query2['item_price']." </h4></center> -->			
				
					
					
					
			
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                  

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
 
 
 
 

			 
<!-- Script  Na edit na this-->
     <!-- CONTACT SECTION END-->
    <div id="footer">
      
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
	<script type="text/javascript" src="Customers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="Customers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	
	<script type="text/javascript" src="Customers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="js/datatables.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Customers/jquery.fancybox.js?v=2.1.5"></script>
	   <script src="js/main.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
<script src="jquery-1.11.2.min"></script
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
