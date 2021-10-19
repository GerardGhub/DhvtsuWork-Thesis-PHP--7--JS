<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	 $department = $_SESSION['department'];
    if(!isset($_SESSION['department']) && $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>




<?php
include('connect.php');
error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( ~E_NOTICE );
		date_default_timezone_set('Asia/Manila');
	require_once 'configss.php';
	include('formatMoney.php');
	include('conface.php');
	
	if(isset($_GET['JRFno']) && !empty($_GET['JRFno']))
	{
		$id = $_GET['JRFno'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM Jobrequest WHERE JRFno=:JRFno');
		$stmt_edit->execute(array(':JRFno'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: JRFpage.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		
		
        $id = $_POST['id'];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['date_added'];
		$classname = $_POST['classname'];
			$location = $_POST['location'];
			$subcategory = $_POST['subcategory'];
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
			$Date_now = $_POST['Date_now'];
			$Type = $_POST['Type'];
			$Name = $_POST['Name'];
			$Department =$_POST['Department'];
			$JobReq = $_POST['JobReq'];
			$Purpose = $_POST['Purpose'];
			$Preparedby = $_POST['Preparedby'];
			
			

			$datemodified =$_POST['date_modified'];
			
			$Process=$_POST['Process'];
			
			$admindis5=$_POST['admindis5'];
			          
			
			    mysql_query("insert into Jobrequestfinal   (Jrfseries,Date_now,Type,Name,Department,JobReq,Purpose,Preparedby,DH,JRFno,MISOIC,Status,Process,admindis5) values
     ('$id','$Date_now','$Type','$Name','$Department','$JobReq','$Purpose','$Preparedby','','$JRFno','Jerwin Ibañez','On Approval','Waiting','button disabled 5')") or die(mysql_error());
	 
	 






       //  mysql_query("insert into asset_depreciation(item_ID,price,salvage_val,years,depmed,laarnie) //values('$id','$price','$sv','$life','$method','12')") or die(mysql_error());
                                            ?>

											<?php
//include('connect.php');
$connect=mysqli_connect('localhost','root','','srms');
$get_id=$_GET['JRFno'];

mysqli_query($connect,"delete from Jobrequest where JRFno='$get_id'")or die(mysqli_error());
?>
                                         
 <script type="text/javascript">
									alert("Job Request Succesfuly Released!");
                                                    window.location= "JRFrequest.php";
                                            </script>

                                            <?php
                                    }
                                    ?>
			
			
			
			







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Policy Management System</title>
					<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="#./css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
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
    -webkit-transform: scale(1.5); /* Safari 3-8 */.
    transform: scale(1.5); 
}


.quadrat {
  width: 50px;
  height: 50px;
  -webkit-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Safari 4+ */
  -moz-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Fx 5+ */
  -o-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Opera 12+ */
  animation: NAME-YOUR-ANIMATION 1s infinite;  /* IE 10+, Fx 29+ */
}

@-webkit-keyframes NAME-YOUR-ANIMATION {
  0%, 49% {
    background-color: rgb(117, 209, 63);
    border: 3px solid #e50000;
  }
  50%, 100% {
    background-color: #e50000;
    border: 3px solid rgb(117, 209, 63);
  }
}

html, body{
height:100%;
overflow:hidden;	
	
	
}
</style>
		
		
		
		
		
		
		
		</head>
    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/usertopbar2.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/misleftbaruseruser.php');?-->  

                    <!--?php include('../includes/oguserleftpic.php');?-->  
				             <?php include('../includes/oguserleftassetmis.php');?>  
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b>Manage Users</b></h4-->
						        <!--a class="btn btn-dangers" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> </a>      
                         <h4 class="btn btn-primary" stye="font-size:17px;">Update Assets Sub Categories
								</h4-->

	<center><div class="alert alert-info quadrat" style="color:white;background-color:whitesmoke; width:1618px;">
         <center><h4> <span class="	fa fa-paper-plane-o" style="color:black;"></span> <b style="color:black;">Uploading a Job Request Form  </b></h3></center>
       

	   </div>

					

            <!--  alis muna this div class="row breadcrumb-div">
                            
                               
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
						  
						  
						  
               <!--div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Update Policy</li>
                                    </ul>
                                </div>
                             
                            </div-->
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
                                    if (isset($_POST['btn_sav'])) {

                                        $id = $_GET['id'];
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
                                        $date1=$_POST['date'];
                                        $status=$_POST['status'];

                         mysql_query("update tb_equipment set 
          item_code='$code',item_name='$name',brand_name='$brand',price='$price',
          employee_id='$emp',item_category='$type',supplier_id='$supp',date_post='$date1',status='$status' where item_id='$id'") 
                     or die(mysql_error());

         mysql_query("update asset_depreciation set price='$price',
          salvage_val='$sv',years='$life',depmed='$method' where item_id='$id'") 
                     or die(mysql_error());
                                            ?>

                                         
 <script type="text/javascript">
                                                alert("Equipment updated succesfully");
                                                    window.location= "equipment.php";
                                            </script>

                                            <?php
                                    }
                                    ?>
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	<?php 
include('conface.php');
$id=$_GET['JRFno'];
$query=mysql_query("select * from Jobrequest where JRFno='$id'") or die (mysql_error());
$row=mysql_fetch_array($query);
$date=$row['date_post'];
$supp=$row['supplier_id'];
$emp=$row['employee_id'];
$dp=$_GET['item_id'];
//$query2=mysql_query("select * from asset_depreciation where item_id='$dp'") or die (mysql_error());
//$row2=mysql_fetch_array($query2);
//$depmed=$row2['depmed'];


?>
	
	
	
	
	
	
	
	
	
	
	
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
	
	
	
	
	
	
	
	
	
	

<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<!--input type="hidden" id="username"  style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge"/-->
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->


<table class="table table-bordered table-responsive">
  <tr>
    <th style="color:black; display"><i style="display:none;">Date: <?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?> </i><input type="text"value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" class="btn btn4" id="InputEmail3" name="Date_now" style="display:nones; background-color:white; border-color:gresy;"readonly></th>
	  
	  
    <th style="color:black;">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>

	  
    <th style="color:black;"><input type="text" id="username" class="btn btn4" size="5" style="color:black; background-color:white; border-color:greys;"name="JRFno" value="<?php echo $JRFno; ?>" class="input-xlarge" readonly/></th>
  </tr>
  
  <tr>
    <td style="color:black; font-size:14px; size:190px;">Name:&nbsp;<?php echo $Name;?>&nbsp;<?php echo $_SESSION[sess_lastname];?><input type="text" style="display:none;" name="Name" value="<?php echo $_SESSION[sess_fname];?> <?php echo $_SESSION[sess_lastname];?>"><br><input type="text" style="display:none;" name="Department"
	value="<?php echo $_SESSION[sess_department];?>"> Department/Section:&nbsp;<?php echo $Department; ?> </td>
   
	<form> <td style="font-size:13px;">
	
  <input type="radio" name="Type" value="Software" required> Software<br>
  <input type="radio" name="Type" value="Systems&nbsp;Development"> System&nbsp;Development<br>
  <input type="radio" name="Type" value="Hardware" > Hardware
    <input type="radio" name="Type" value="Others" > Others

 </td></form>
  
	    <td>
<input type="text" name="Typeothers" placeholder="Others (Specify)" value="<?php echo $Typeothers;?>" id="InputEmail3" class="btn btn4"  size="37" style="background-color:whitesmoke; border-color:greya;">
&nbsp; MIS&nbsp;Dev&nbsp;Code___________________
</td>

  </tr>



  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td style="font-size:11px; border:none;" colspan="2">Date / Time Started: </td>
    <td style="font-size:11px; border:none;">Date / Time Finished:</td>
	  
  </tr>
  
  
  
  
  
  
  
  
    <tr>
    <th colspan="0" style="text-align:center;">Job Request</th>
    <th  colspan="2" rowspan="1" style="text-align:center;">Purpose</th>
  </tr>
  <tr>
    <td><textarea rows="4" type="text" cols="123" name="JobReq" value="adad<?php echo $JobReq;?>" readonly><?php echo $JobReq;?></textarea></td>
    
	   <td colspan="2"><textarea rows="4" type="text" cols="123" name="Purpose" readonly><?php echo $Purpose;?></textarea></td>
  </tr>
  
  
    <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; font-size:12px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by:	 



	</td>
	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke; font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noted by:</td>
	  


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  
  
  
  
      <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; size:5px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2"><?php echo $_SESSION['sess_fname'];?> &nbsp;<?php echo $_SESSION['sess_lastname'];?><input type="text" name="Preparedby" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" style="display:none;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DH;?><!--input type="text" value="puki" size="2" required--> <!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisitioner   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Department Head &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</emp> </td>
	
	

	  	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke;background-color">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="background-color:skybluewhiet;">Jerwin Ibañez</emp><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="font-size:12px;">MIS Officer in Charge</emp></td>


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  <tr>
<td colspan="3" style="text-align:center; border-top:dotted; border-left: 1px solid whitesmoke; border-right: 1px solid whitesmoke; border-bottom: 1px solid whitesmoke;">

  <!--u style="border-style:dotted;: 4px dotted blue; color:black;"></u-->
<i>(this portion is to be accomplished by MIS who will attend the request)</i>
 </td>
 
 
 </tr>
 <tr>
 <th colspan="3" style="border-top:outset; text-align:center;"> Action Taken / Remarks</th>
 </tr>
 <tr>
    <td colspan="3" style="border-bottom: 1px solid whitesmoke; border-left: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">
<textarea input type="text" name="gago" rows="3" cols="256" placeholder="(Please indicate parts replaced or switched or transfered, if any. MIRS number is stated if requested parts are from Warehouse Section)" id="tang ina" readonly></textarea>
	<emp style="font-size:12px;"> Attended by (MIS POGI): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Acknowledged by (Requisitioner):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   Noted by:</emp></td>	
 
 
 
 </tr>
 <tr>
 <td colspan="2" style="border-right: 1px solid whitesmoke;border-bottom: 1px solid whitesmoke;border-left: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;<du><!--MIS TEAM--><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></uw> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u22><!--HR--><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></u22><br><emp style="font-size:12px;">(Signature over printed name and Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;(Signature over printed name and Date)</td>

   <td style="border-style:none; border-bottom: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <u>Jerwin Ibañez</u><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;MIS Officer in Charge</emp></td>
 </tr>
 
</table>
				
				
				
				
				
				
				
				
				
				






  </tr>
  

				  
				  
				  
				  
		    <div class="form-group">

	
						      <!--label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						 
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select-->  	
					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  <!--/div-->

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<!--?php 

include(connect.php);

$sql ="SELECT * from Jobrequest'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();

// $sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
?>
<!--?php 
$sql ="SELECT * from Jobrequest ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?-->
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <!-- series div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div-->
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <div class="col-sm-10">
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
				  

				  
						  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <div class="col-sm-10">
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    </div>
  </div-->
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
   
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footer">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <!--button type="submit" name="submitbabykox" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button-->
				
				  <td colspan="8">
		
		   <!--a span class="glyphicon glyphicon-filsm"> <input class="btn btn-success glyphicon glyphicon-filsm" style="width:120px; height:35px; background-color:green;"  src="../item_images/<?php echo $item_image; ?>" type="file"name="item_image" accept="image/*" /></span> </a-->
		
		
		<button type="submitassets" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Send JRF on MIS
        </button>
      
        <a class="btn btn-danger" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
				
					 </fieldset>
				   </form>
              </div>
            </div>
            </div>
            </div>
            
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<center>
			 <!--div class="alert alert-info">
                        
                          <!--center> <h4><strong>Update Category Information</strong> </h4></center-->
						  
						  <!--/div-->
						  
						 <table class="table table-bordered table-responsive">

    <tr>
    	<!--td>
				   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">Sub Categories</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="subcategory" value="<?php echo $JRFno; ?>" required />
    </div>
  </div>  
				
		
  
  
		
		  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> Date Added</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="gerardpogis" value="<?php echo $Date; ?>" readonly />
    </div>
  </div>
  
  		
	
  
  
  
  
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">Date Modified</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="datemodified" value="<?php echo $datemodified; ?>" readonly />
    </div>
  </div>  
  
 

		
		<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Actions by</label>
    <div class="col-sm-10">
      <input type="text"  name="life"  value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" class="form-control" id="inputPassword3" readonly/>
    </div>
  </div>
		
		</td>
        <td-->



  
  
		  <!--div id="legend">
                                <legend class="">Asset Depreciation</legend>
                            </div--> 
		 <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;">Date Added</label>
    <div class="col-sm-10">
       <input id="inputprice" class="form-control" type="text" name="date_added" value="<?php echo $date_added; ?>" disabled /-->
  </div>  
		
		
		
		<!--input class="form-control" type="text" name="classname" value="<?php echo $classname; ?>" required /></td-->
		
		

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
	 
	 
	 
	 
		
		
		
		
		
		
		
		
	
	
	<!-- input price id="inputprice"      for price ouput validation-->
	
    <tr>
    	<!-- comment this babey hahha pang additional td>
		
		
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Actsions by</label>
    <div class="col-sm-10">
      <input type="text"  name="life"  value="<?php echo $row2['years'];?>" class="form-control" id="inputPassword3" required/>
    </div>
  </div>
		
		
		
		
		
		
		
		</td-->
        <!--td>
        	<p><input type="text" class="form-control" value="<?php echo $category_id; ?>"disabled /></p>
        
        </td-->
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
			
	 
	 <div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
           <!--keni lareng footer-->
						</p>
                        
                    </div>		  
						  
						  
			
			
            
                </div>
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


