<?php 
session_start();

//if(isset($_POST['submit']))
//{
//$con = mysql_connect("localhost","root","");
//if (!$con)
 // {
// die('Could not connect: ' . mysql_error());
 // }

//mysql_select_db("chatting", $con);
	//	$message=$_POST['message'];
	//	$sender=$_POST['sender'];
	//	$department=$_POST['department'];
	//	mysql_query("INSERT INTO message(message, sender, image_user,department)VALUES('$message', '$sender', //'$image_user','$department')");
//}

?>

<?php 
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>

<?php
include('../includes/config.php');

error_reporting(0);
?>


		
        

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
<title>Admin Policy Portal</title>

<!-- dont input here -->

<!--link rel="stylesheet" href="../css/bootstrap.min.css" media="screen"-->
		        <link rel="stylesheet" href="bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
		        <link rel="stylesheet" href="../animate.css" media="screen" >
		     <link rel="stylesheet" href="leftbar.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		
		
		
		<!--
		
		
				        <link rel="stylesheet" href="bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="../css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="../css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
		        <link rel="stylesheet" href="../animate.css" media="screen" >
		     <link rel="stylesheet" href="leftbar.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		
		
		
		
		
		
		
		
		
		
		
		-->
		
		
		
		
		
		
		
		
		
		
		
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>

        <script src="../js/modernizr/modernizr.min.js"></script>
<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
















<!-- bura muna thiss -->
<script language="javascript" src="../jquery-1.2.6.min.js"></script>
<script language="javascript" src="../jquery.timers-1.0.0.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				j(".refresh").html(html);
			  }
			})
		})
		
	});
	j(document).ready(function() {
			j('#post_button').click(function() {
				$text = $('#post_text').val();
				j.ajax({
					type: "POST",
					cache: false,
					url: "save.php",
					data: "text="+$text,
					success: function(data) {
						alert('data has been stored to database');
					}
				});
			});
		});
   j('.refresh').css({color:"green"});
});



$(function() {
    $("#message").keypress(function (e) {
        if(e.which == 13) {
            //submit form via ajax, this is not JS but server side scripting so not showing here
            $("#chatbox").append($(this).val() + "<br/>");
            $(this).val("");
            e.preventDefault();
			

					type: "POST",
					cache: false,
					url: "save.php",
					data: "text="+$text,

			
			
			
			
			
			
        }
    });
});

</script>
<style type="text/css">
.refresh {
    border: 1px solid whitesmoke;
 white-space: -moz-pre-wrap;
    color: green;
    font-family: tahoma;
    font-size: 16px;
	font-color:black;
    height: 580px;
    overflow: auto;
    width: 1600px;
	padding:10px;
	background-color:#FFFFFF;
}

#post_button{
	border: 1px solid black;
	background-color:#3366FF;
	width: 200px;
	color:white;
	font-weight: bold;
	margin-left: 175px; padding-top: 8px; padding-bottom: 4px;
	cursor:pointer;
}
#textb{
	border: 3px solid skyblue;
	border-left: 1px solid skyblue;
		border-right: 1px solid skyblue;
		size:550px;
	width:100%;
	height: 10px;
	margin-top: 14px; padding-top: 19px; padding-bottom: 50px; padding-left: 90px; width:100%; size:50;
}
#texta{
	border: 10px solid #3366FF;
	border-left: 4px solid #3366FF;

	width: 90px;
	margin-bottom: 10px;
	padding:5px;
}
.wordWrap {
    word-wrap: break-word;      /* IE 5.5-7 */
    white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
    white-space: pre-wrap;      /* current browsers */
}








.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}

.zoom {
    padding: 0px;

    transition: transform .2s;

    margin: 0 auto;
}





.button {
 // background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25px;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 25px;}
.button5 {border-radius: 70%;}







#upload_image {
    background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 35px;
    padding: 16px;
}
.col-md-10 > p {
    color: #FFFFFF;
}
.alert{
	border:1px solid;
	margin-bottom:0px !important;
}
.photo {
    margin-top: 10px;
}
.top-spacer {
    border-radius: 20px 20px 0 0;
}
.margin-p{
	margin-left:50px;
}
.mes {
    margin-bottom: 35px;
}
.col-md-10 input {
    margin-left: 12px;
    padding: 5px;
    width: 194px;
}
#po{
    border-bottom: 1px solid;
    border-radius: 11px;
    width: 148px;
}
.col-md-5 > p {
    color: #fff !important;
}
.top-spacer {
    margin-top: 26px;
}
#photos {
    border: 1px solid;
    border-radius: 10px;
    margin-top: -94px;
    padding: 12px;
}
//#masthead{
//    background: url('../images/images.jpg') no-repeat !important;
//	background-size:cover !important;
//}

footer {
    background: none repeat scroll 0 0 #000000 !important;
}
textarea {
     border: 1px solid;
    border-radius: 4px;
    height: 166px;
    margin-top: 14px;
    width: 456px !important;
}
#span5{
	width:300px;
}

body {
	//font-family: 'TR Century Gothic' !important;
  padding-top:5px;
  color:#646464;
  background-color:#efefef;
}

h1,h2,h3,.highlight,.navbar a,#masthead h4 {
  font-family:'Oswald',arial narrow,sans-serif;
}
.combo{
    margin-bottom: 19px;
    padding: 5px;
    width: 301px;
	   border: 1px solid;
	     border-radius: 10px;
}
.message {
    border: 1px solid;
    border-radius: 10px;
    padding: 10px;
}


footer {

  margin-top:40px;
  padding-top:40px;
  padding-bottom:40px;
  background-color:#cecece;
 
}


#masthead {
  min-height:199px;
  background-color:#000044;
  color:#aaaacc;
}

#masthead h1 {
  font-size: 55px;
  line-height: 1;
  color:#fefeff;
  margin-top:50px;
}

#masthead .well {
  margin-top:31px;
  background-color:#111166;
  border-color:#000022;
  color:#efefff;
  min-height:127px;
}

#topPanel {
  padding-top:0px;
  padding-left:22px;
  padding-right:22px;
}
#topPanel .panel-body {
  padding-top:0px;
}

.navbar.affix {
  position:fixed;
  top:0;
  width:100%;
}

.top-spacer {
  background-color:#ffffff;
  height:40px;
}

a,a:hover {
  color:#223344;
  text-decoration:none;
}

.icon-bar {
  background-color:#fff;
}

@media screen and (min-width: 768px) {
  #masthead h1 {
    font-size: 80px;
  }
}

.navbar-bright {
  background-color:#111166;
  color:#fff;
  margin-bottom: 0;
  border-width: 0;
}



.navbar-bright li > a:hover {
  background-color:#000044;
}

.dropdown-menu {
  min-width: 250px;
}

.caret {
  color:#fff;
}

.navbar-toggle {
  color:#fff;
  border-width:0;
}

.navbar-toggle:hover {
  background-color:#fff;
}

.panel {
  border-color:transparent;
  border-radius:0;
}

.thumbnail {
  margin-bottom:8px;
}

.img-container {
  overflow:hidden;
  height:170px;
}

.img-container img {
  min-width:280px;
  min-height:180px;
  max-width:380px;
  max-height:280px;
}

.txt-container {
  overflow:hidden;
  height:100px;
}









</style>
</head>



<body background="jeweld.jpg" style="background-repat==no-repeat;" class="top-navbar-fixed" >


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/totheleftmessengerphotos.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
       

<!--?php include('header.php'); ?-->    
<?php include('navbar.php'); ?>  


<?php include('session.php'); ?>  
								<div id="masthead">  
				<div class="container">
					<?php include('heading.php'); ?>
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>	
							
							
							
							
							<div class="container">
 
							

<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
          
			<h2 id="po">My Photos</h2>
				<div class="pull-right">
							<form id="photos"   method="POST" enctype="multipart/form-data">

									<label class="control-label" for="input01">Image:</label>
									
										<input type="file" name="image" class="font" required>
									
								
						
								
										<button type="submit" name="submit" class="btn btn-success"><i class="icon-upload"></i> Upload</button>
								
							</form>
							<?php 
								if (isset($_POST['submit'])) {
 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
 
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
		$location = "upload/" . $_FILES["image"]["name"];
		$conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
	?>
	<script>
		window.location = 'photos.php';
	</script>
	<?php
	}
	?>
				</div>
			
          <div class="row">  		  
            <hr>
            <hr>
				<?php
	$query = $conn->query("select * from photos where member_id='$session_id'");
	while($row = $query->fetch()){
	$id = $row['photos_id'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
				<img class="photo" src="<?php echo $row['location']; ?>" width="160" height="150">
				<hr>
	<a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Delete</a>
            </div>
				<?php } ?>
          </div>
          <hr>
                  
    


          


          
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>

	  
	  


          </div>
     
           
             <?php 
$sql ="SELECT * from ongusersa";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjectsaa=$query->rowCount();
?>
                               
                        
					
                        <!-- /.container-fluid -->

						
						
                            <!--  Comment muna this tang inis div class="container-fluid">




                            </div-->
                          
                     



								
											
											<!--Cointainer sa taas-->
											
											
											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                         
                                        </div>
                                
                                        

                                                 
                                                 

				 
												 
												 
												 








         </div>
		     
		     
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
				  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
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
		 <script>
   
    $(document).ready(function() {
        $('#logical').keypress(function (event) {
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
		 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		     
</html>
