<?php

session_start();

?>

<!--- get the data into a srmsnew download and print data-->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
	 <link rel="shortcut icon" href="../images/perfect.png" type="image/x-icon" />
	 
	 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />


	
	

        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <!--link rel="stylesheet" href="css/main.css" media="screen" -->
	
	
	
	<link rel="stylesheet" href="mexico/bootstrap/css/bootstrap.min.css" type="text/css" />
	
	
	<!-- hindi kasale anga nasa taas-->

	
	
		<script src="js/datatables.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />	
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="jquery.fancybox-media.js?v=1.0.6"></script>
	




		
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




<?php

	include('confeg.php');

	$action = $_REQUEST['action'];
	
	if($action=="showAll"){
		
							




$ip=1;


$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;

if(isset($_GET['ip']))
{
	$id=$_GET['ip'];
	$start=($ip-1)*$limit;
}

$query=mysql_query("SELECT item_id, policy_title, item_image, revisionno, img_name, department FROM logisticdepartment ORDER BY department LIMIT $start, $limit");


while($query2=mysql_fetch_array($query))

{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['policy_title']."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='/adminportal/item_images/".$query2['img_name']."' data-fancybox-group='button' title='Page ".$ip."- ".$query2['policy_title']."'>
	
					<img src='/adminportal/item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4>  ".$query2['department']." </h4></center>
					
		
					
					<a class='btn btn-block btn-danger' title='Download Selected Policy?' href='#'><span class='fa fa-cloud-download'></span>&nbsp;RevisionNo&nbsp;".$query2['revisionno']."</a>
							
						
            </div>
          </div>
        </div>";

			
	
}




		$stmt=$dbcon->prepare('#');
		$stmt->execute();
		
	}else{

		$stmt=$dbcon->prepare('SELECT item_id, item_image, policy_title, revisionno, img_name, department FROM logisticdepartment WHERE category_id=:cid ORDER BY department');
		$stmt->execute(array(':cid'=>$action));
		
	}
	
	?>
	<div class="#">
	<?php
	if($stmt->rowCount() > 0){
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
	
			?>
			<!--div class="col-xs-3"-->
			
			
			
			
			<!-- start ka keni -->
		<div>
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




echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$policy_title."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
            <a class='fancybox-buttons' href='/adminportal/item_images/$img_name' data-fancybox-group='button' title='Page ".$id."- ".$policy_title."'>
	
					<img src='/adminportal/item_images/".$img_name."' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4>  ".$department." </h4></center>
					
		
					
					
					<a class='btn btn-block btn-danger' title='Download Selected Policy?' href='#'><span class='fa fa-cloud-download'></span>&nbsp;RevisionNo&nbsp;".$revisionno."</a>
							
						
            </div>
          </div>
        </div>";

			
			
         





		
		?>
		
		
		
			<!--div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"--><!--?php echo $item_image; ?></div><br />
			</div-->
			<?php		
		}
		
	}else{
		
		?>
		
        <div class="col-xs-3">
			<!--div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"--><!--?php echo $item_price; ?></div><br />
		</div-->
        <?php		
	}
	
	
	?>
	</div>
	
	
	
	
	
	<!----------       dsdsd     --->



<script src="mexico/jquery-1.11.2.min.js"></script>





