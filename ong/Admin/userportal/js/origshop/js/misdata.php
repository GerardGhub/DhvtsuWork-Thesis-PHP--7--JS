<?php
session_start();



?>

<?php
 include("config.php");
 
 extract($_SESSION); 
 
 
 
 
 
 
 
 
 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		    $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_password =:user_password');


		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	
		
		?>





<!--?php
session_start();


error_reporting(E_ERROR | E_PARSE);
include("dbconfig.php");
include("header.php");
include("validation/header.php"); 
include("functions/patient.php");
$dt= "$_POST[year]-$_POST[month]-$_POST[date]";

 if(isset($_POST["submitupd"]))
{
	$datad = date("Y-m-d", strtotime($_POST[dob]));
	if(isset($_SESSION[user_email]))
	{
$resrec= mysql_query("UPDATE patient SET patlname='$_POST[patlname]', dob='$datad',patfname='$_POST[patfname]',emailid='$_POST[emailid]',contactno ='$_POST[contactno]',address='$_POST[address]',city ='$_POST[city]',	state  ='$_POST[state]',country ='$_POST[country]',bloodgroup='$_POST[blood]',status='$_POST[textarea]'  WHERE patid = '$_SESSION[patid]' ");
}
else
{
	$resrec= mysql_query("UPDATE patient SET patlname='$_POST[patlname]', dob='$datad',patfname='$_POST[patfname]',emailid='$_POST[emailid]',contactno ='$_POST[contactno]',address='$_POST[address]',city ='$_POST[city]',	state  ='$_POST[state]',country ='$_POST[country]',bloodgroup='$_POST[blood]',status='$_POST[textarea]'  WHERE patid = '$_SESSION[patid]' ");
}
}
	


$resultpatientrec = mysql_query("SELECT * FROM users WHERE user_email ='$_SESSION[user_email]'");
while($row = mysql_fetch_array($resultpatientrec))
  {
 $fname = $row["patfname"];
 $lname = $row["user_email"];
 $patid= $row["user_firstname"];
 //$dob = date("d-m-Y", strtotime($row["dob"])) ;
 $gender = $row["gender"];
 $wiz= $row["Dateadded"];
 $bujis= $row["patientidd"];
 // $state = $row["state"];
 // $country = $row["country"];
  // $bloodgroup = $row["bloodgroup"];
 //$emailid = $row["emailid"];
 $middlename = $row["middlename"];
 $staff= $row["stafffname"];
  $salbag= $row["stafflname"];
 $address = $row["dateadd"];
 $date = $row["dateadded"];
 $status = $row["status"];
  }
  
  

//CHECKS login button is submitted or not
if(isset($_POST["btnlogin"]))
{
	//patient Login funtion..
$loginvalidation =  loginfuntion($_POST["loginid"],$_POST["password"]);
}
include("mrdummybackground.php"); 












?-->


<!--?php
session_start();



?-->






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&nbsp;<b>&nbsp;User Account<b></title>
	 <link rel="shortcut icon" href="../images/perfect.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

		<script src="js/datatables.min.js"></script>
	
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
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
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

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
                <a class="navbar-brand" href="shop.php"><b>User Account</b> </a>
			
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
			
				<img src="..\images\perfect.png" width="225">
				<br>
                    <li class="active"><a href="shop.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> &nbsp;Home</a></li>
					                  <li class="active"><a href="shop.php"> &nbsp; <span class='glyphicon glyphicon-user'></span>	&nbsp;	<?php   extract($_SESSION); echo $user_email; ?></a></li>
					<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-cloud'></span> &nbsp;MIS
					
						<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-king'></span>&nbsp;HR
						
							<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-piggy-bank'></span> &nbsp;Finance
							
								<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-star'></span> &nbsp;Logistic
									<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-tasks'></span> &nbsp;Manufacturing
										<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-usd'></span>&nbsp; Accounting
												<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> &nbsp;Purchasing
														<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='	glyphicon glyphicon-move'></span>&nbsp;&nbsp;GSD
										<li class="active"><a href="..\index.php"> &nbsp; <span class='glyphicon glyphicon-log-out'></span> Logout
											<li class="active"><a href="shop.php?id=1"> &nbsp; <span class=''></span>
											
											
											
											<!--sample-->
						
																<li class="active"><a href="shop.php?id=1"> &nbsp; <span class=''></span> 
																<li class="active"><a href="shop.php?id=1"> &nbsp; <span class=''></span> 
																					 
													
								
																<li class="active"><a href="shop.php?id=1"> &nbsp; <span class=''></span> 
								<!--sample>									<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> 
							<li class="active"><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> 
					</a></li>
	

</a></li>
				
	
						
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                               <li><a href="#features-sec"><i class="fa fa-gear" data-toggle="modal" data-target="#an"></i> </a></li>
							   
							   
							   
							      <!--a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                        ADMIN
                      </a-->
                    </li>
							   
							   
							   
							   
							       <!--li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li-->
                    </li>
				
					
					
                     <li class="dropdown user-dropdown">
                <!--a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i--> <!--?php   extract($_SESSION); echo $user_firstname; ?><b class="caret"></b></a-->
                        <ul class="dropdown-menu">
						
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

      <!---  note: ining page warpper content the top adjust ya para lati ya ken babo okaya hr tag                     -->
				<!--div id="page-wrapper"--ice cube>

			 <!--#008CBA-->
			 
			 <hr>
			 
			<div class="alert alert-default" style="color:black;background-color:#f2ecbd">
       <i> <center><h4> <span class=""></span> <b>User Page</b></h4></center></i>
        </div>
			
				
			

			
			
			
		<!--- ending-->
			
			

			<!--?php   extract($_SESSION); echo $user_email; ?>
	
			<!?php   extract($_SESSION); echo $user_email; ?>
			
			        Name : <!--?php echo $_SESSION["user_email"]; ?></strong></p>
			
					<!!?php   extract($_SESSION); echo $user_password; ?-->
			
			
			
			
			

			
	<hr>
<?php




$id=1;


$query1=mysql_connect("localhost","root","");
mysql_select_db("edgedata",$query1);

$start=0;
$limit=8;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}

$query=mysql_query("select * from items LIMIT $start, $limit");


while($query2=mysql_fetch_array($query))
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['item_name']."</textarea>
			</center>
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='Admin/item_images/".$query2['item_image']."' data-fancybox-group='button' title='Page ".$id."- ".$query2['item_name']."'>
					
					<img src='Admin/item_images/".$query2['item_image']."' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4>  ".$query2['item_price']." </h4></center>
		
					
										<a class='btn btn-block btn-danger' href='#'><span class='	glyphicon glyphicon-paperclip'></span>&nbsp;Reading View</a>
            </div>
          </div>
        </div>";
			
	
}

echo "<div class='container'>";
echo "</div>";




$rows=mysql_num_rows(mysql_query("select * from items"));
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
			
				
		<!--					<center><h4> Price: &#8369; ".$query2['item_price']." </h4></center> -->			
				
					
					
					
			
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                  

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Account Settings</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
                           
							 
							</div>
							
							
							<p>Lastname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Lastname" name="user_email" type="text" value="<?php  echo $lname; ?>" required>
                           
							 
							</div>
							
							<p>Address:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php  echo $user_address; ?>" required>
                           
							 
							</div>
							
							<p>Password:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php  echo $user_password; ?>" required>
                           
							 
							</div>
							
							<div class="form-group">
							
                                <input class="form-control hide" name="user_id" type="text" value="<?php  echo $user_id; ?>" required>
                           
							 
							</div>
							
							
							
							
				
							
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>
				
				 <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
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



























<!-- jhdagaghdggahdhgghadghahgdad-->








       <!--HOME SECTION END-->   

<div class="container">
           <div class="row" >
           
               
                 
                    <!--img class="img img-rounded img-responsive" src="assets/img/brandx.png"  style="width:2000px;height:500px;"/-->
				   
				  
                 
				 <div class="col-lg-12">
				 
                    
                   </div>
                 
                 </div>
               </div>
             </div>
			
    <!-- FACULTY SECTION END-->
   
             <!--/.HEADER LINE END-->

<!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 style="color:white" class="modal-title" id="myModalLabel">User Login</h4>
					</div>
					<div class="modal-body">
		       		 <form role="form" method="post" action="userlogin.php">
                       <fieldset>
                         <div class="form-group">
                            <input class="form-control" placeholder="Email" name="user_email" type="email" required>
							  </div>
							   <div class="form-group">
                                 <input class="form-control" placeholder="Password" name="user_password" type="password" required>
							  </div>
					       </fieldset>
                         </div>
                      <div class="modal-footer">
                  <button class="btn btn-md btn-warning btn-block" name="user_login">Sign In</button>
			 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>   
         </div>
      </div>
    </div>
     </div>
		<div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator</h4>
                  </div>
                    <div class="modal-body">
				     <form role="form" method="post" action="adminlogin.php">
                      <fieldset>
                         <div class="form-group">
                           <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
							</div>
                           	 <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
							    </div>
					          </fieldset>
                             </div>
                          <div class="modal-footer">
                        <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>
				      <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
                </div>
             </div>
           </div>
        </div>
      <br />
    <br />
 <br />
			 
			 
			 
			 
			 
			 
			 
	<center>		 
			 





<!-- Patient Login Form####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
     <?php 
 if(isset($_SESSION["patid"]))
{
include("validation/header.php");
//retrieve country from database. Table: country
include("dbconnection.php");

?>
<head>
 <link type="text/css" rel="stylesheet" media="all" href="stylesss/templates/template.css" />
  <link type="text/css" rel="stylesheet" media="all" href="stylesss/layout.css" />
</head>




      <form id="formID" class="formularx" method="post" action="">
 <div align="center">
   <p><strong><u>Profile ddage</u></strong><br/>
   <font color="#FF0000"><b> <?php
    if(isset($_POST["submitupd"]))
{
	echo "Record Updated Successfully..."; 
}
?> </b></font></p></div>


Patient Id :<input type="text" name="patientidd" id="textfield75" value="<?php echo $bujis; ?>" /><br />







<label for="textfield">First Name :</label>
      <label>
	<input name="patfname" type="text" class="validate[required,custom[onlyLetterSp]] text-input" id="req" value="<?php echo $fname; ?>"/>
	    </label>
            <br />Last Name <label>
	<input class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="patlname" id="req1"  value="<?php echo $lname; ?>" />
			</label>
          
      <!--      Date Of Birth<label for="select" class="validate[required]"></label>    <script src="datetimepicker_css.js"></script>
        
		
		<input type="Text" id="demo1" maxlength="25" size="25" readonly="readonly"value="<?php echo $dob; ?>" name="dob">
        <img src="images2/cal.gif" width="21" height="22" style="cursor:pointer" onclick="javascript:NewCssCal ('demo1','ddMMyyyy','','','','','')" />
 <br /-->
    
  
<br />
        <!--label>Blood Group :
          <select name="blood" id="blood" class="validate[required]">
            <option value="">Select Group</option-->
           
            <!--option value="A+ve" <!--?php
		  if($bloodgroup=='A+ve'){
		  echo "selected"; 
		  }
		  ?>>A+ve</option>
            <option value="A-ve"  <!--?php 
		  if($bloodgroup=='A-ve'){
		  echo "selected"; 
		  }
		  ?>>A-ve</option>
           
            <option <!--?php 
		  if($bloodgroup=='B+ve'){
		  echo "selected"; 
		  }
		  ?>  value="B+ve">B+ve</option>
            <option <!?php 
		  if($bloodgroup=='B-ve'){
		  echo "selected"; 
		  }
		  ?>  value="B-ve">B-ve</option>
            
            <option <!?php 
		  if($bloodgroup=='AB+ve'){
		  echo "selected"; 
		  }
		  ?>  value="AB+ve">AB+ve</option>
            <option <!?php 
		  if($bloodgroup=='AB-ve'){
		  echo "selected"; 
		  }
		  ?>  value="AB-ve">AB-ve</option>
          
            <option <!?php 
		  if($bloodgroup=='O+ve'){
		  echo "selected"; 
		  }
		  ?>  value="O+ve">O+ve</option>
            <option <!?php 
		  if($bloodgroup=='O-ve'){
		  echo "selected"; 
		  }
		  ?>  value="O-ve">O-ve</option>
          </select>
        </label>
<br />

class="validate[required,custom[phone],maxSize[12]] text-input"
    Email ID :<input type="text" name="emailid" id="textfield3" class="validate[required,custom[email]] text-input" value="<!--?php echo <$emailid; ?>"/><br /!-->MiddleName :<input type="text" name="middlename" id="textfield7" value="<?php echo $middlename; ?>" /><br />
	
	   Gender:<br>
        <label for="select2"></label>
        <select name="gender" id="gender"  class="validate[required]">
          <option value="">Select</option>
          <option value="Male" <?php 
		  if($gender=='Male'){
		  echo "selected";    
		  }
		  ?>>Male</option>
          <option value="Female" <?php 
		  if($gender=='Female'){
		  echo "selected"; 
		  }?>>Female</option>
        </select>
	
	

	
	
	
	
	

      
	  <!--
	  Country :   
        <select name="country"  id="country" class="validate[required]">
<option value="">Select Country</option>
<option  <!--?php 
		  if($country=='Philiphines'){
		  echo "selected"; 
		  }
		  ?>>Philiphines</option>
<!--<option>United States</option> -->
     </select><br />
 <div id="citydiv">                                <!--state : <div id="citydiv"><select name="state" id="state" class="validate[required]">-->
	
        </select></div><br />
        Staff Name :<input type="text" name="stafffname" id="textfield70" value="<?php echo $staff; ?>" /><br />
       Staff LastName :<input type="text" name="stafflname" id="textfield74" value="<?php echo $salbag; ?>" /><br />
Date Test Release :<input type="text" name="dateadded" id="textfield70" value="<?php echo $wiz; ?>" /><br />
      </td>
    </tr>

     </table>
      
</form>
    <a href="patientaccount.php">&lt; &lt; Back</a>
 <?php
}
 ?>
 <div id="respond"></div>
    </div>
   
    <br class="clear" />
  </div>
</div>

			 
			 
			 </center>
			 
			 
			 
			 
			 
			    
			 <!---open
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			close -->
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
      
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
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
</body>
</html>







     

   
      <!-- COURSES SECTION END open tagbng login-->
	  

	  
     <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="register.php">
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
		
		<a href="register.php">dsdsdsd</a>

		
		<!-- apin na ini ing registration closing  jjjjjjjTag-->
<!-- Script -->










