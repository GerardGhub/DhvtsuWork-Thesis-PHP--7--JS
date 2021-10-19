<?php 
session_start();

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
<?php include('myfilemgr/dbcon.php'); ?>
<!-- Logical by Gerard Are hewre -->
<!--?php
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submitmessages'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
$name = $_POST['item_image'];

  move_uploaded_file($temp,"../item_images/".$name);

$query=$conn->query("INSERT INTO message (reciever_id,content,item_image,date_sended,sender_id) VALUES ('$friend_id','$my_message','$name',NOW(),'$session_id')");
if($query){
	
 echo "<script>window.open('managefilefinance.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?-->


<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>


<?php
include('dbcon.php');
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
$sender_id = $_POST['sender_id'];
$department = $_POST['department'];
$user_image = $_POST['user_image'];
$sender_name = $_POST['sender_name'];

  move_uploaded_file($temp,"../../item_images/".$name);

$conn->query("insert into message(reciever_id,content,item_image,date_sended,sender_id,department,user_image,sender_name) values('$friend_id','$my_message','$name',NOW(),'$sender_id','$department','$user_image','$sender_name')");




$conn->query("insert into messagesents(reciever_id,content,item_image,date_sended,sender_id,department,user_image,sender_name) values('$friend_id','$my_message','$name',NOW(),'$sender_id','$department','$user_image','$sender_name')");
			



 echo "<script>window.location = 'messagesent.php'; </script>";
if($query){
header("location:index.php");
}
else{
die(mysql_error());
}

}
?>

<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>
<!--
sdsdsd
sdsdsdsd
sasdsds
sdsd





			<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<tr><td><form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
				
					<input type="file" name="photo" id="photo"  required="required"></td>
					<td><input type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
			</form> <strong>SUBMIT HERE</strong></tr></td></table>


-->
		
        

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
<script language="javascript" src="jquery-1.2.6.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>
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

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: orange;
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
     border: 10px solid;
    border-radius: 4px;
    height: 166px;
    margin-top: 14px;
    width: 956px !important;
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





#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
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

                    <?php include('../includes/messageleftbar.php');?>  
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
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>

            <div class="col-md-6 col-sm-3 text-center">
							
							
							
							
							
				<tr><td><form enctype="multipart/form-data"  action="" id="wsb_Form1" name="form" method="post">
										<div class="control-group">
											<label>To:</label>
                                          <div class="controls">
                                            <select name="friend_id" class="combo" width="100" style="border: 6px solid gray;" required>
											<option></option>
											<!--select ongusers.id , ongusers.fname , ongusers.lastname , ongusers.user_image , friends.friends_id   from ongusers  , friends
	where friends.my_friend_id = '$session_id' and ongusers.id = friends.my_id
	OR friends.my_id = '$session_id' and ongusers.id = friends.my_friend_id-->
															<?php
														$query = $conn->query("select * from ongusers");
															while($row = $query->fetch()){
															$friend_name = $row['fname']." ".$row['lastname'];
															$friend_image = $row['user_image'];
															$id = $row['id'];
															?>
                                              	<option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										
										
								<input type="hidden" value="<?php echo $_SESSION['sess_user_id'];?>" name="sender_id">
								<input type="hidden" value="<?php echo $_SESSION['sess_department'];?>" name="department">
							
							<input type="hidden" value="<?php echo $_SESSION['sess_user_image'];?>" name="user_image">	
					<input type="hidden" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" name="sender_name">		
							
										<div class="control-group">
											<label>Content:</label>
                                          <div class="controls">
											<textarea name="my_message"  autofocus class="my_message" placeholder="Type your message here.." style="border-radius:30px; border: 14px solid whitesmoke;" required></textarea>
                                          </div>
                                        </div>
										<hr>
										<div class="control-group">
                                          <div class="controls">
								<!--	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;			&nbsp;	<button  name="submitmessages" type="submit" class="btn btn-success"><i class="icon-envelope-alt" style="font-size:17px;"></i> Send </button--->
       
                            
						
		
			
				
					<input type="file" name="photo" id="photo"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  style="padding-top:-80px;" class="btn btn-info" value="Send" name="submit">
			</form> <strong></strong></tr></td></table>
												
												
                                          </div>
										    </div>
								
							
		
				
										 
										  
										
										  
                               
								
								
								<!--td><form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
				
					<input type="file" name="photo" style="width:550px;" id="photo"  required="required">

					</td>
					</tr-->
				
				
				
		

				
							    </div>
								
								
								
            <div class="col-md-6 col-sm-9">
             	Inbox
				<hr>
				<?php 
				$query = $conn->query("select * from message
				LEFT JOIN ongusers on message.sender_id = ongusers.id where reciever_id = '$session_id' ");
				while($row = $query->fetch()){
				$id = $row['message_id'];
				$name = $row['item_image'];
				?>
				<div class="mes">
				<div class="message"><?php echo $row['content']; ?>
				<hr>
				<div class="pull-left"><?php echo $row['date_sended']; ?></div>
				<div class="pull-right">Sent by: <?php echo $row['fname']." ".$row['lastname']; ?></div>

				<hr>
				<br>
				
					<a href="delete_message.php<?php echo '?id='.$id; ?>"  class="btn btn-success" onclick="return confirm('Mark as Read this Selected Message that will move in ReadPage?')"><i class="fa fa-envelope"></i> Read Message</a>
			<a href="downloadfilemessage.php?filename=<?php echo $name;?>" class="btn btn-primary" onclick="return confirm('Download this Selected File <?php echo $name;?>?')"><i class="icon-file"></i> Download Attached File</a>
		<a href="report_message.php<?php echo '?id='.$id; ?>" class="btn btn-danger" onclick="return confirm('Report the sender for inapporiate Behavior that will send in MIS Team?')"><i class="fa fa-warning"></i> Report to Admin</a>
				</div>
				</div>
				<?php } ?>
            </div>
	
          </div>
          <hr>
        </div>
      </div>
                
<a href="#" id="scroll" style="display: none;"><span></span></a>

<!--
							
				<a href="downloadsunday.php?filename=<?php echo $name;?>"  class="btn btn-primary" title="click to download"  onclick="return confirm('Are you sure to Download this Selected File?')"><span class="glyphicon glyphicon-download" style=" color:white"></span>&nbsp;Download</a>






-->






				
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
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
		     
		     
			 
			 
	<script>		 
			 
			 
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
			 
	</script>		 
			 
			 
			 
				  		
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
</script-->
		 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		     
</html>
