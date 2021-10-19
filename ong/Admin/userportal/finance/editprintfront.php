<?php 
session_start();

if(isset($_POST['submit']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
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
		
		
		
		
		
		

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>

        <script src="../js/modernizr/modernizr.min.js"></script>
<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>














<script language="javascript" src="jquery-1.2.6.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>

<style type="text/css">
.refresh {
    border: 1px solid whitesmoke;

    color: green;
    font-family: tahoma;
    font-size: 16px;
	font-color:black;
    height: 575px;
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
	border: 10px solid black;
	border-left: 1px solid black;
		border-right: 1px solid black;
	width:2620px;
	height: 170px;
	margin-top: 14px; padding-top: 19px; padding-bottom: 50px; padding-left: 50px; width:2515px;
}
#texta{
	border: 10px solid #3366FF;
	border-left: 4px solid #3366FF;

	width: 10px;
	margin-bottom: 10px;
	padding:5px;
}
p{
border-top: 1px solid #EEEEEE;
margin-top: 0px; margin-bottom: 5px; padding-top: 5px;
}
span{
	font-weight: bold;
	color: #3B5998;
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






.hero-image {
  background-image: url("../item_images/aswang.jpg");
  background-color: #cccccc;
  height: 1010px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}





</style>
</head>



<body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <!--?php include('../includes/totheleftmessenger.php');?-->  
						<?php include('../includes/conface.php');?>
                    <div class="main-page">
              
     
                       <div class="row page-title-div">
                                <div class="col-md-6">
 
 
 <!--
 1sdfsaf
 sfsf
 sfsfsfs
 fscanfsfs
 sfsfsf
-->

<?php
include('connect.php');
	error_reporting( ~E_NOTICE );
		
	require_once 'configss.php';
	include('formatMoney.php');
	include('conface.php');
	
	if(isset($_GET['Memo_id']) && !empty($_GET['Memo_id']))
	{
		$id = $_GET['Memo_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM tomemorandum WHERE Memo_id=:Memo_id');
		$stmt_edit->execute(array(':Memo_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: equipmentlist.php");
	}
	
	
	
	if(isset($_POST['btn_save_updatesaa']))
	{
		$item_name = $_POST['item_name'];
		$item_price = $_POST['date_added'];
		$classname = $_POST['classname'];
			$location = $_POST['location'];
			$sub_category = $_POST['sub_category'];
		$item_category = $_POST['item_category'];
				$item_name = $_POST['item_name'];
				$ref_no =$_POST['ref_no'];
				$status = $_POST['status'];
				$date_post = $_POST['date_post'];
				$supplier_id = $_POST['supplier_id'];
			$price = $_POST['price'];
			$brand_name =$_POST['brand_name'];
			$item_code =$_POST['item_code'];
			$qty =$_POST['qty'];
			$uom =$_POST['uom'];
			
					$depreciation =$_POST['depreciation'];
			
			
			
			
			          
                                        $name = $_POST['name'];
                                                                        
                                        $code = $_POST['code'];
                                        $brand = $_POST['brand'];                                     
                                        $type= $_POST['type'];
                                        $supp= $_POST['supp'];
                                        $emp= $_POST['emp'];
                                        $method=  $_POST['method'];
                                        $sv=  $_POST['sv'];
                                        $years=  $_POST['years'];
                                        $date1=$_POST['date'];
                                     $laarnie=  $_POST['laarnie'];
			
			
			
			
			
			
			
			
		
			
		$imgFile = $_FILES['item_image']['name'];
		$tmp_dir = $_FILES['item_image']['tmp_name'];
		$imgSize = $_FILES['item_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = '../item_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$itempic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['item_image']);
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo "<script>alert('Sorry, your file is too large it should be less then 5MB')</script>";				
					 
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
              echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";					
			}	
		}
		else
		{
		
			$itempic = $edit_row['item_image']; 
		}	
						
		

		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE tb_equipment
									     SET item_name=:item_name, 
										     location=:location,
											 item_category=:item_category,
											 ref_no=:ref_no,
											 status=:status,
											 date_post=:date_post,
											 supplier_id=:supplier_id,
											 	price=:price,
												brand_name=:brand_name,
												qty=:qty,
												item_code=:item_code,
												item_image=:item_image,
												uom=:uom,												
											 sub_category=:sub_category,
											 depreciation=:depreciation
								       WHERE item_id=:item_id');
			$stmt->bindParam(':item_name',$item_name);
						$stmt->bindParam(':location',$location);
				        $stmt->bindParam(':item_category',$item_category);
						$stmt->bindParam(':ref_no',$ref_no);
						$stmt->bindParam(':status',$status);
										$stmt->bindParam(':date_post',$date_post);
										$stmt->bindParam(':supplier_id',$supplier_id);
											$stmt->bindParam(':price',$price);
											$stmt->bindParam(':brand_name',$brand_name);
													$stmt->bindParam(':qty',$qty);
													$stmt->bindParam(':item_code',$item_code);
															$stmt->bindParam(':item_image',$itempic);
																$stmt->bindParam(':uom',$uom);
						$stmt->bindParam(':sub_category',$sub_category);
								$stmt->bindParam(':depreciation',$depreciation);
			$stmt->bindParam(':item_id',$id);
				
			if($stmt->execute()){
				?>
				
				
			<?php	
			include('connect.php');
         mysql_query("update asset_depreciation set price='$price',
          salvage_val='$sv',years='$years',depmed='$method' where item_id='$id'") 
                     or die(mysql_error());	
				
				?>
				
				
				
                <script>
				alert('Assets Information Successfully Updated ...');
				window.location.href='viewassets.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
			}
		
		}
		
						
	}
	
?>




<!DOCTYPE html>
<html lang="en">
    <head>
 
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>




* {
    box-sizing: border-box;
}

.zoom {
    padding: 0px;

    transition: transform .2s;

    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}




.top-right {
  position: absolute;
  top: -77px;
  right: -470px;
  
}


.top-left {
  position: absolute;
  top: -87px;
  left: -45px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 6px;
  right: 33px;
}

hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
}


p {
  width: 900px; 
  border: 1px solid #000000;
  border:none;
}

</style>
		
		
			<script	>
function myFunction()
{
        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        window.print()
}

</script>
		
		
		
		
		</head>
		
	
    
<!-- sdas -->


  

		
		
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('../includes/sampleleftbarmemo.php');?>  



							 
							 
							 
							 
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                         
									
									
									
									
									
									
				
                            
                               
                            </   end  div-->
                            <!-- /.row -->
                        </div>
					
                        <!-- /.container-fluid -->

                            <div class="container-fluid">








						
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                         
                                        </div>
                                
                                        

                                                 
                                                 





















												 
												 
												 
												 
												 
												 
												 
												 
		 <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
	
		
                        
                 
						  
					
						  
					
						  
						  <div class="table-responsive">
						  
						  
						  
          
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                           
                                            <div class="panel-body">
















        <div id="page-wrapper">
            
			
			
			
			
			
	
			
			
		<div class="clearfix"></div>

		
		
  <?php
     include('conface.php');
                                    if (isset($_POST['btn_save_updates'])) {

                                        $id = $_GET['Memo_id'];
                                        $name = $_POST['name'];
                                         $price = $_POST['price'];                                     
                                        $code = $_POST['code'];
                                        $brand = $_POST['brand'];                                     
                                        $type= $_POST['type'];
                                        $supp= $_POST['supp'];
                                        $emp= $_POST['emp'];
                                        $method=  $_POST['method'];
                                        $sv=  $_POST['sv'];
                                        $life=  $_POST['life'];
                                        $Two=$_POST['Two'];
                                        $status=$_POST['status'];

                         mysql_query("update tomemorandum set 
          Two='$Two' where Memo_id='$id'") 
                     or die(mysql_error());

       //  mysql_query("update asset_depreciation set price='$price',
       //   salvage_val='$sv',years='$life',depmed='$method' where item_id='$id'") 
         //            or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("Memorandum updated succesfully");
                                                    window.location= "viewmemorandum.php";
                                            </script>

                                            <?php
                                    }
                                    ?>
<form method="post" enctype="multipart/form-data" class="form-horizontal" style="background-color:#210754">
	<?php 
include('conface.php');
$id=$_GET['Memo_id'];
$query=mysql_query("select * from tomemorandum where Memo_id='$id'") or die (mysql_error());
$row=mysql_fetch_array($query);
$date=$row['date_post'];
$supp=$row['supplier_id'];
$emp=$row['employee_id'];
$dp=$_GET['item_id'];
$query2=mysql_query("select * from aa2000.asset_depreciation where item_id='$dp'") or die (mysql_error());
$row2=mysql_fetch_array($query2);
$depmed=$row2['depmed'];


?>
	
	
	
	 <?php
            $cat=$row['uom'];
            $query7 = mysql_query("select * from aa2000.uom where uom_id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
        
            ?>
	
		
	 <?php
            $xat=$row['employee_id'];
            $query8 = mysql_query("select * from empleyado where employee_id='$xat'") or die(mysql_error());
            $row8 = mysql_fetch_array($query8);
         
            ?>
	
	
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
	<!--center-->
	
			<div class="alert alert-whitse" style="border:none; width:900px; background-color:#f1f6f9">
                     <div class="top-left">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../item_images/GerardSS.jpg" height="95"width="170"></img></div><center style="font-size:35px; font-family:Times New Roman, Times, serif;">MEMORANDUM</center>  <div class="top-right" style="font-size:18px;"><?php echo $Series_Code;?><!--MIS-0101-2018--></div><emp style="vertical-align: text-bottom:50%;"> <!--dhshdsds--></emp>
                          <!--center> <h4><strong>Update Category Information</strong> </h4></center-->
						  
						  </div>
						  					 <!--table class="table table-bordered table-responsive" border="0"-->
				<!-- borders muna -->		
 <table border="0" align="left" class="borders" style="background-color:#f1f6f9;">

    <tr>
    	<td style="font-size:18px;"><!--label class="control-label">Category Name</label-->
				   
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <div class="col-sm-10">
   	  <input class="form-controsl" type="text" size="100" name="item_name" value="<?php echo $Two; ?>" style="border:none; font-size:18px; background-color:#f1f6f9;" readonly/>
    </div>

				

  
  
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-constrol" type="text" size="100" name="item_name" value="<?php echo $Fromo; ?>"style="border:none; font-size:18px; background-color:#f1f6f9;" readonly />
    </div>
 
  
  
    
  			
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-contrsol" type="text" name="item_name" value="<?php echo $Date; ?>" style="border:none; font-size:18px; background-color:#f1f6f9;" readonly />
    </div>
	
  			 
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-constrol" type="text" name="item_name" size="100" value="<?php echo $subject;?> -<?php echo $Subject_Date; ?>" style="border:none; font-size:18px; background-color:#f1f6f9;" readonly />
    </div>
 
				
  <!-- comment muna this form andame kase kakalito nalang heheh -->
   			
    <!--label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="item_name" value="<?php echo $Fromo; ?>" style="border:none; font-size:18px;" required />
    </div-->
 
				
  
  

    

  
  

  
  
  
  

         <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->
				
	  <div id="#legend">
                             
                            </div> 
							


		  
		</td>
		
		
		
		
		
		
        <td style="display:none;">
	
  
     
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  
  </div>  
		
		
		
		<!--input class="form-control" type="text" name="classname" value="<?php echo $classname; ?>" required /></td-->
		
		

    </tr>
	
	<tr >
		<td colspan="8" style="font-size:18px;">
<?php
	   error_reporting(E_ALL ^ E_DEPRECATED);
	   include('connect.php');
        $query=mysql_query("select * from empleyado where employee_id='$Employee;'") or die (mysql_error());
        $row=mysql_fetch_array($query);
        ?>
		
		<?php
	   error_reporting(E_ALL ^ E_DEPRECATED);
	   include('connect.php');
        $query=mysql_query("select * from subject where Subject_id='$Subject_identity;'") or die (mysql_error());
        $row12=mysql_fetch_array($query);
        ?>
		<!-- line po ito -->
</br>
		<hr>
<p class="b" style="text-align:center;">
	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<emp style="font-size:21px;">Please be informed that <b><?php echo $Employee;?></emp>
		
		
       
  
		

     

    
		
		</b> <emp style="font-size:21px;word-wrap;">is required to work on <b><?php echo $Subject_Date;?></emp><!--br--></b>&nbsp;&nbsp;<b><emp style="font-size:21px;"><!--?php echo $row12['Subject_name'];?--><?php echo $subject;?></emp></b><emp style="font-size:21px;"> from 9am to 5pm to support the Operation Division.</emp>
		
		</p>
		<br>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="font-size:21px;">Overtime will be paid accordingly.</emp>
		
		
		
		
		       <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"style="font-family:Verdana, Geneva, sans-serif;">Employee</label>
    <div class="col-sm-10">
       <select  class="form-control" id="inputPassword3" name="emp">
         <option value="<?php echo $employee_id;?>"><?php echo $Employee;?></option>
     
        <?php
		include('confes.php');
        $query=mysql_query("select * from empleyado") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
		       
        <option value="<?php echo $row['employee_id'];?>"><?php echo $row['Name'];?></option>
        <?php } ?>
      </select>
    </div>
  </div-->
 
	<!--p style="font-size:20px;background-color:purple;color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asset Depreciation  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depreciation Schedule</p-->
		</td>
		</tr>
	</center>
	
	<!--?php 
include('conface.php');

$id=$_GET['item_id'];
$query4=mysql_query("select * from asset_depreciation where item_id='$id'") or die (mysql_error());
$row4=mysql_fetch_array($query4);
                          $years=$row4['years'];
						     $laarnie=$row4['laarnie'];
                  $price=$row4['price'];
                   $sv=$row4['salvage_val'];
				   
				   
				   
				   
?-->

	<!-- Additional Query Here !-->
	 <tr>
	 
	 
	 
	 
    	<td style="font-size:18px;"><!--label class="control-label">Date Added</label-->

		
		 
		    
		
		
		
		
		
		<br>
		<br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="font-size:15px;"> Prepared by:</emp>

		<br>
		
		<br>
         <div class="form-group">

    <div class="col-sm-10">

       <?php
	   error_reporting(E_ALL ^ E_DEPRECATED);
	   include('connect.php');
        $query=mysql_query("select * from empleyado where employee_id='$Prepared_By;'") or die (mysql_error());
        $row=mysql_fetch_array($query);
        ?>

		   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <b><emp style="font-size:19px;"><?php echo $Prepared_By;?></emp></b>
     <!--?php echo $row['position'];?--><p>
	     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:17px;"><?php echo $_SESSION['sess_department'];?></emp>

      </select>

    </div>
  </div>
		
		
		
		
		
		
		
		
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:15px;">Noted by:</emp>

		<br>
		
		<br>
         <div class="form-group">
    <!--label for="inputEmail3" class="col-sm-2 control-label" style="font-family:Verdana, Geneva, sans-serif;">Depreciation Method</label-->
    <div class="col-sm-10">
    <!--select  class="form-control" id="inputPassword3" name="method" required/-->
       <?php
	   error_reporting(E_ALL ^ E_DEPRECATED);
	   include('connect.php');
        $query=mysql_query("select * from empleyado where employee_id='$Noted_BY;'") or die (mysql_error());
        $row=mysql_fetch_array($query);
        ?>

		    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <b><emp style="font-size:19px;"><?php echo $row['Name'];?></b></emp>
     <!--?php echo $row['position'];?--><p>
	     &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:17px;"><?php echo $row['position'];?></emp>

      </select>

    </div>
  </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		      
		
		
		
		
		

		
		
		<!-- the new data in active userss    		  <!--?php echo $_SESSION['sess_username'];?></emp  -->
				
    <div class="form-group" style="display:none;">
    <label for="inputPassword3" class="col-sm-2 control-label">Actions by</label>
    <div class="col-sm-10">
      <input type="text"  name="life"  value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" class="form-control" id="inputPassword3" readonly/>
    </div>
  </div>

		
		
		
		
		</td>
        
		
		
		
		
		
		
		
		
		
		<td style="display:none;">
		
		 <!--div id="legend">
                                <emp style="font-size:19px;"><u>Depreciation Schedule</u></emp>
                             </div-->  
               
<?php
include('conface.php');
$query2=mysql_query("select * from aa2000.asset_depreciation where item_id='$dp'") or die (mysql_error());
$row2=mysql_fetch_array($query2);
$depmed=$row2['depmed'];
if($depmed=='1'){
?>

<table class="table table-bordered display:none;">
        <thead>
          <tr>
         <th><center>Years</center></th>
            <th><center>Straight Line Depreciation</center></th>
          </tr>
        </thead>
        <tbody>
          <?php 
		  
		  	$tanga=12;
	$final=$years/$laarnie;
	
	
for ($x=1; $x<=$final; $x++)
  {
    $depval=$price-$sv;

    $annualdep=$depval/$years;
  echo'<tr>';
      echo '<td><center>'.$x.'</center></td>';
    echo '<td><center>'.formatMoney($annualdep,true);'</center></td>';
  echo'</tr>';
    } ?>
	
	
        </tbody>
		
      </table>
			    <div class="form-group" ">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;display:none;">Depreciation</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="hidden" name="depreciation" value="<?php echo formatMoney($annualdep,true);?>" required />
    </div>
  </div>  
  

<?php
}

else{
?>
 <table class="table table-bordered">
        <thead>
          <tr>
            <th><center>Years</center></th>
            <th><center>Double Declining Balance</center></th>
          </tr>
        </thead>
        <tbody>
          <?php 
  $deprate=((100/$years)*2);
    $annualdep=($price*$deprate)/100;
$depval=$row4['price'];

for ($x=1; $x<=$years; $x++)
  {
    $annualdep=(($depval*$deprate)/100);
                          echo '<tr>';
                           echo '<td><center>'.$x.'</center></td>';
    echo '<td><center>'.$annualdep2=$annualdep.'</center></td>';
    $depval=$depval-$annualdep2;
        } 
  
  echo'</tr>';
    ?>
          
        </tbody>
      </table>
<?php
}

?>


		

		
		
		
		
		</td>
    </tr>
	

	
    <tr>

    </tr>
    
    <tr>
        <td colspan="8" style="display:none;">
		
		   <a span class="glyphicon glyphicon-filsm"> <input class="btn btn-success glyphicon glyphicon-filsm" style="width:120px; height:35px; background-color:green;"  src="../item_images/<?php echo $item_image; ?>" type="file"name="item_image" accept="image/*" /></span> </a>
		
		
		<button type="submitassets" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
      
        <a class="btn btn-danger" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  
		</center>				
				<br />
	 
	 <!--div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">

						</p>
                        
                    </div-->		  
						  
						  
			
			
            
                </div>
        

			
			<footer style="font-size:17px; background-color:#f1f6f9; width:899px;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;Cc:&nbsp;&nbsp;<?php echo $cc1; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc2; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc3; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc4; ?><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc5; ?><br>
				&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;		&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc6; ?><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc7; ?><br>
										&nbsp;&nbsp;&nbsp;&nbsp;			&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc8; ?>
										
										
										
						
										
									<p style="font-size:15px; text-align:right;"><b><?php echo $Series_Code;?></b</p>
									
									<br>
									<br>
			</footer>
    


  <!--div class="bottom-right" style="font-size:15px;"><b><?php echo $Series_Code;?></b></div-->
  </div>
    <!-- /#wrapper -->

    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 














      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  		
		
		<script>
function goBack() {
    window.history.back();
}
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
		
    </body>
</html>













									
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
