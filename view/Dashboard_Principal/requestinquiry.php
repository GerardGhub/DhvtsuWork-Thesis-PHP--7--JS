<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('../alert.php'); ?>

=

<!-- tib ton -->
		  <script src="jsmodule/jsonepiece/bootstrap.min.js"></script>

	    <script src="jsmodule/jsonepiece/jquery-1.12.4.js"></script>

    
	<script type="text/javascript" src="jsmodule/jquery.fancybox.js?v=2.1.5"></script>

	<link rel="stylesheet" type="text/css" href="jsmodule/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jsmodule/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="jsmodule/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jsmodule/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="jsmodule/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	





    <script type="text/javascript" src="Admin/bootstrap/js/bootstrap.min.js"></script>

   
    
		
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




            
			
			
			
			
			

			
	

				

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content" > <!-- Start of table section -->


				
	
		<br>
		
		
		
		<?php
include('connect.php');
 


	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("std_db",$query1);

$start=0;
$limit=12;



$query=mysql_query("SELECT * from posting where sended='posted' and item_id='5'") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{

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
					
		
					
						<a href='#edit".$query2['item_id']."' class='btn btn-block btn-success' data-toggle='modal'><span class='fa fa-cloud-download'></span>&nbsp;Apply now</a>
							
						
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
                                            <div class='col-sm-2'>	
                                          <emp style='font-size:15px;'>".$query2['Vacancy']."</emp></div>
											</div>
										
										
											
											
											
											
											
											
											
											
											
											<br>
											   
                                            <label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Education:</label>
                                            <div class='col-sm-2'>
                                                     <emp style='font-size:15px;'>".$query2['Education']."</emp> </div>
										</div>
										
												


												
                                            
										
										
										
													   

													 
										    
													 
										    
													 
							
										
		
								
									<br>
									<br>
									<br>
									<br>
									<br>
                                    <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary' name='update_item' style='display:none;'><span class='glyphicon glyphicon-edit'></span> Edit</button>
						
                                      
										<a data-toggle='modal' data-target='#uploadModalsamplexmemosuperjeje' data-toggle='modal'class='btn btn-primary'>Request Now</a>
										
										
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
	

		
		
		
		
		
		

		
				
				
				
		
		
		
		
		
				
				
				
				
	
		
			
				
	
				
				
				
				
				

				
				
				
				
				<!--
				
				
				old footer here
				-->
           

           
        </div>
		
		
		
    </div>
</section>
	
				

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
Be sure your email and phone number is active.</center></h4>

              </div>

	


<div class="well" style="color:black;">



<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','std_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>







							  

               

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											


           












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
//   $department=$_POST['department'];
//   $caption1=$_POST['caption'];
//   $link=$_POST['link'];
//   $department =$_SESSION['department'];
  $Jobtitle = $_POST['Jobtitle'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  
  move_uploaded_file($temp,"../item_images/".$name);

$query=$conn->query("INSERT INTO postingsender (item_image,item_date,upload_by,department,Jobtitle,fname,mname,lname,Contact,Email) VALUES ('$name','$date','$upload_by','Alak','$Jobtitle','$fname','$mname','$lname','$Contact','$Email')");
if($query){
	
 echo "<script>window.open('requestinquiry
 .php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>



<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->







	
	<!--div class="alert alert-info">
                              
                      <         
								&nbsp;&nbsp;@FILE MANAGER BY MISBOYSS
                            </div-->
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
					<input type="text" name="fname" value="<?php echo $name; ?>" placeholder="First Name" class="form-control"  required>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="mname" value="<?php echo $full_name; ?>" placeholder="Middle Name" class="form-control"  required>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="lname" value="<?php echo $full_name; ?>" placeholder="Last Name" class="form-control"  required>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="Contact" value="<?php echo $phone_number; ?>" placeholder="Contact Number - ex 639104763819" class="form-control" required>
					</td>
				</tr>
				
						<td>
					<input type="text" name="Email" value="<?php echo $email; ?>" placeholder="Valid Email" class="form-control" required>
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
include('connect.php');
 



	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("std_db",$query1);

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
	
		
        <script src="Admin/jsbin/lobipanel/lobipanel.min.js"></script>
 
        <script src="Admin/jsbin/main.js"></script>

		
		
		
		
		
		
		
		
		
		
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
