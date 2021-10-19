<?php 
session_start();

if(isset($_POST['submit']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
	else
	{
	         header('Location:Groupmessenger.php');	
	}
mysql_select_db("chatting", $con);
		$message=$_POST['message'];
		$sender=$_POST['sender'];
		$image_user=$_POST['image_user'];
		$department=$_POST['department'];
		mysql_query("INSERT INTO message(message, sender, image_user,department)VALUES('$message', '$sender', '$image_user','$department')");
}

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
    border: 3px solid whitesmoke;
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
	border: 6px solid skyblue;
	border-left: 1px solid skyblue;
		border-right: 1px solid skyblue;
		size:100px;
	width:100%;
	height: 10px;
	margin-top: 14px; padding-top: 9px; padding-bottom: 50px; padding-right: 0px; width:2550%; size:50;
}
#texta{
	border: 10px solid #3366FF;
	border-left: 4px solid #3366FF;

	width: 190px;
	margin-bottom: 10px;
	padding:5px;
}
.wordWrap {
    word-wrap: break-word;      /* IE 5.5-7 */
    white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
    white-space: pre-wrap;      /* current browsers */
}





p{
border-top: 1px solid #EEEEEE;
margin-top: 0px; margin-bottom: 5px; padding-top: 5px;
}
span{
	
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
</style>
</head>



<body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <?php include('../includes/totheleftmessengerdefault.php');?>  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
                            <!--div class="row page-title-div"-->
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--h4 class="fa fa-file-text" style="font-size:22px;">FIxed Asset's Category</h4-->
 <h4 class="btn btn-primary" style="font-size:22px; background-color:#4267b2; width:1599px;"> <img src="..\item_images\icon.png"height="47"width="75" style="bakground-color:white;"></img><emp style="color:whitesmoke;  background-colorfont-family:"Lucida Console", Monaco, monospace;"><b>O&G Leather Manufacturing Corporation Public Groupchat Messenger</b></emp><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="color:whitesmoke; text-align:center;">Active now&nbsp;<i class="	fa fa-circle-thin" style="background-color:orange;color:orange;border-radius: 70%;"></i></emp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="color:yellow; font-size:12px;"><?php echo htmlentities($totalsubjects);?> members on this group</emp></h4>
            <!--  alis muna this div class="row breadcrumb-div">
                            
							
							
							
							
							
							<?php 
$sql ="SELECT * from ongusers";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjectsa=$query->rowCount();
?><strong>Total of Files:
 <?php echo htmlentities($totalsubjectsa);?></strong></tr></td--></p></a></table>





	  
	  


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
                                
                                        

                                                 
                                                 

				 
												 
												 
												 
												 
		 <div id="page-wrapper">
            






<body style="width:900px;">
<form method="POST" name="" action="">
<emp style="display:none;">
<input name="sender" type="text" id="texta" value="<?php echo $_SESSION['sess_fname'] ?> <?php echo $_SESSION['sess_lastname']?>"/>
<input type="text" name="image_user" value="<?php echo $_SESSION['sess_user_image'];?>">

<input type="text" name="department" value="<?php echo $_SESSION['sess_department'];?>">
</emp>
<div class="refresh">
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chatting", $con);

$result = mysql_query("SELECT * FROM message ORDER BY id DESC");


while($row = mysql_fetch_array($result))
  {
 echo '<p style="word-wrap: break-word;">'.'<img src="../item_images/'.$row['image_user'].'" class="zoom" width="70" height="70"<img/>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<span style="font-weight: bold;
	color: #3B5998;">'.$row['sender'].'</span><b>'. '&nbsp;&nbsp;' . $row['message'].'</b></p><b style="color:black; font-size:10px; text-align:right:90px;">'. $row['timesend'].'</b><br><b style="font-size:13px;">' . $row['department'].'</b>';
  }

mysql_close($con);
?>


</div>
<br style="background-color:red;">
<!--center><input type="text" name="message"  class="button button-4" size="100%" autofocus style="color:black; width:96%; word-wrap: break-word;" rows="1" placeholder="Type a message <?php echo $_SESSION['sess_fname'];?>..." id="textb" width="2250" required/></center-->

<center><input type="text" name="message"  class="form-control" autofocus style="color:black; width:900px; word-wrap: break-word;" placeholder="Type a message <?php echo $_SESSION['sess_fname'];?>..." id="textb" required/></center>

<br>
<input name="submit" class="button button-4"  style="display:none;" type="submit" value="Chat" id="usermsg" />
</form>
</body>



		<!--img src='/adminportal/item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:190px;' /-->



   <tr>
	     <!--td class="zoom" style="text-align:center;">
				<center> <img src="../item_images/<?php echo $_SESSION['sess_user_image']?>" class="img img-rounded"  width="50" height="50" /></center>
				 </td-->




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
</script-->
		 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		     
</html>
