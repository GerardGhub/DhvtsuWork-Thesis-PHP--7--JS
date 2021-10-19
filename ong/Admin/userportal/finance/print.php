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
	
	
	
	if(isset($_POST['btn_save_updates']))
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="#./css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
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
  top: 8px;
  right: 33px;
}


.top-left {
  position: absolute;
  top: -20px;
  left: 16px;
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
  bottom: 8px;
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

p.b {
  word-wrap: break-word;
}
body{


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
   <?php include('../includes/usertopbar2.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

							 
							 
							 
							 
							 
                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                         

								
								   
<center style="text-align:left;"><a href="" id="printpagebutton" class="btn btn-danger" title="Print mo na ba <?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>?" class="glyphicon glyphicon-print" onclick="myFunction()">Print</a></center>
	

                        </div>
					
                        <!-- /.container-fluid -->

                            <div class="container-fluid">



                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                     

											

<div class="alert alert-primary" role="alert">
 

    <div class="#">
                                         
                                        </div>
                                
								 
												 
		 <div id="page-wrapper">
            

						  
						  <div class="table-responsive">
						  

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
	<br>
			 <div class="alert alert-white" style="border:none;">
                     <div class="top-left">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../item_images/GerardSS.jpg" height="118"width="200"></img></div><center style="font-size:35px; font-family:Times New Roman, Times, serif;">MEMORANDUM</center>  <div class="top-right" style="font-size:18px;"><?php echo $Series_Code;?><!--MIS-0101-2018--></div><emp style="vertical-align: text-bottom:50%;"> <!--dhshdsds--></emp>
                          <!--center> <h4><strong>Update Category Information</strong> </h4></center-->
						  
						  </div>
						  					 <!--table class="table table-bordered table-responsive" border="0"-->
				<!-- borders muna -->		
 <table border="0">

    <tr>
    	<td style="font-size:18px;"><!--label class="control-label">Category Name</label-->
				   
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="item_name" value="<?php echo $Two; ?>" style="border:none; font-size:18px;" required />
    </div>

				

  
  
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="item_name" value="<?php echo $Fromo; ?>"style="border:none; font-size:18px;" required />
    </div>
 
  
  
    
  			
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="item_name" value="<?php echo $Date; ?>" style="border:none; font-size:18px;" required />
    </div>
	
  			 
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black; font-size:18px; font-family:Verdana, Geneva, sans-serif; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <div class="col-sm-10">
   	  <input class="form-control" type="text" name="item_name" value="<?php echo $subject;?> -<?php echo $Subject_Date; ?>" style="border:none; font-size:18px;" required />
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
		<hr style="width:890px;">
<p class="b" style="text-align:center;">
	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<emp style="font-size:21px;">Please be informed that <b><?php echo $Employee;?></emp>
		
		
       
  
		

     

    
		
		</b> <emp style="font-size:21px;">is required to work on <b><?php echo $Subject_Date;?></emp><!--br--></b>&nbsp;&nbsp;<b><emp style="font-size:21px;"><!--?php echo $row12['Subject_name'];?--><?php echo $subject;?></emp></b><emp style="font-size:21px;"> from 9am to 5pm to support the Operation Division.</emp>
		
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
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="font-size:21px;"> Prepared by:</emp>

		<br>
		
		<br>
         <div class="form-group">
    <!--label for="inputEmail3" class="col-sm-2 control-label" style="font-family:Verdana, Geneva, sans-serif;">Depreciation Method</label-->
    <div class="col-sm-10">

       <?php
	   error_reporting(E_ALL ^ E_DEPRECATED);
	   include('connect.php');
        $query=mysql_query("select * from empleyado where employee_id='$Prepared_By;'") or die (mysql_error());
        $row=mysql_fetch_array($query);
        ?>
         <!--input type="text" value="<?php echo $row['Name'];?>"></option-->
		   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <b><emp style="font-size:21px;"><input type="text" style="border:none;" value="<?php echo $Prepared_By;?>"></emp></b>
     <!--?php echo $row['position'];?--><p>
	     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:21px;"><input type="text" style="border:none;" value="<?php echo $row['position'];?>"></emp>
          <!--?php
		  include('conface.php');
        $query=mysql_query("select * from dep_method") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['methodID'];?>"><?php echo $row['dep_methodd'];?></option-->
        <!--?php } ?-->
      </select>

    </div>
  </div>
		
		
		
		
		
		
		
		
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:21px;">Noted by:</emp>

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
         <!--input type="text" value="<?php echo $row['Name'];?>"></option-->
		    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <b><emp style="font-size:21px;"><input type="text" style="border:none;" value="<?php echo $row['Name'];?>"></b></emp>
     <!--?php echo $row['position'];?--><p>
	     &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <emp style="font-size:21px;"><input type="text" style="border:none;" value="<?php echo $row['position'];?>"></emp>
          <!--?php
		  include('conface.php');
        $query=mysql_query("select * from dep_method") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['methodID'];?>"><?php echo $row['dep_methodd'];?></option-->
        <!--?php } ?-->
      </select>

    </div>
  </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		      
		
		
		
		
		
  <!--div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Verdana, Geneva, sans-serif;">Salvage Value</label>
    <div class="col-sm-10">
      <input type="text" name="sv" value="<?php
	  echo $row2['salvage_val'];?>" class="form-control" id="inputPassword3">
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="font-family:Verdana, Geneva, sans-serif;">Useful Life</label>
    <div class="col-sm-10">
      <input type="text"  name="years"  value="<?php echo $row2['years'];?>" class="form-control" id="inputPassword3" required/>
    </div>
  </div-->
		
		
		
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


		
		
		<!--input id="inputprice" class="form-control" type="text" name="date_addeda" value="<?php echo $date_added; ?>" disabled /-->
		
		
		
		
		
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
            </div>

			
			<footer style="font-size:20px;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;Cc:&nbsp;&nbsp;<?php echo $cc1; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc2; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc3; ?><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc4; ?><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc5; ?><br>
				&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;		&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc6; ?><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc7; ?><br>
										&nbsp;&nbsp;&nbsp;&nbsp;			&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cc8; ?>
										
										
										
									
										
			</footer>


  <div class="bottom-right" style="font-size:18px;"><?php echo $Series_Code;?></div>
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


