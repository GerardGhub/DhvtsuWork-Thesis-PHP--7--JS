<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../../index.php');
    exit;
}
?>
<?php include_once('../Dashboard_Principal/head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('../alert.php'); ?>

<style>

body { 
	overflow-y:scroll;
}
.msk-scroll{
	overflow-y:scroll;
}
.form-control-feedback {
   pointer-events: auto;
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}
.modal-content1 {
   position: absolute;
   left: 25%; 
}

@media only screen and (max-width: 500px) {
	
	.modal-content1 {
		
	 	width:100%;
	  	position: static;
		
	}

}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}


/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
      Request

        </h1>
		
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Request</a></li>
    	</ol>
	</section>











  
<!-- table for view all records -->
 
	<!-- Main content BUJE -->
	<section class="content" > <!-- Start of table section -->
	<form method="post" action="internal.php" >
						  
	<table id="example1" class="table  table-bordered table-striped">
	<thead>
                <tr>
              <th style="width:1%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">IMG</th>
                <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">First&nbsp;Name</th>
				                <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Middle&nbsp;Name</th>
				<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Last&nbsp;Name</th>
		<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">EmaiL</th>
	
			<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Contact&nbsp;Number</th>			
						   	<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Date&nbsp;Apply</th>
	   	<th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Request&nbsp;Title</th>							

		   <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Releasing Day(s)</th>							

		            
		            

	  <th style="width:4%;background-color:#454545; color:white; text-align:center; font-size:15px; color:white;">Reserved</th>

            
                </tr>
              </thead>
           <tbody>
                <?php
   include('../Dashboard_Principal/connect.php');
              function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              } 
              ?>
          
           <?php
		  // $get_id=$_GET['id'];
		   include('db.php');

		 $get_id = isset($_GET['id']) ? $_GET['id'] : '';
               $query = mysql_query("select * from postingsender where Jobtitle ='$get_id' ORDER by item_id DESC
			   ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                       $id=$row['item_id'];
							$name=$row['item_image'];
							$date=$row['item_date'];      
            ?>
			
		
      <tr>
	   <td class="zoom">
				<center> <img src="../item_images/saelogo.jpg" class="img img-rounded"  width="65" height="45" /></center>
				 </td>
	  
	  
           <!--td style="text-align:center;
			  "><?php echo $row['item_id'];?></td-->
       
              <td style="text-align:center;
			  "><?php echo $row['fname'];?></td>
			    <td style="text-align:center;
			  "><?php echo $row['mname'];?></td>
			  
	
			  
			  	    <td style="text-align:center;
			  "><?php echo $row['lname'];?></td>
			  
			  
			  		  
			  	    <td style="text-align:center;
			  "><?php echo $row['Email'];?></td>
			  
			  
			    	    <td style="text-align:center;
			  "><?php echo $row['Contact'];?></td>
			  
				    	    <td style="text-align:center;
			  "><?php echo $row['item_date'];?></td>
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobtitle'];?></td>
			  
			  <td style="text-align:center;
			  "><?php
			 $date1 = new DateTime($row['claimed_date']);
			 $date2 = new DateTime(date_create()->format('Y-m-d H:i:s'));
			//  $now = date_create()->format('Y-m-d H:i:s');
			 $interval = $date1->diff($date2);
		
			 // shows the total amount of days (not divided into years, months and days like above)
echo "" . $interval->days . " days ";
			 ?></td>
			  
       
					<td>					
											   
						<a href="#<?php echo $row ['item_id'];?>" class="btn btn-primary" data-toggle="modal" title="Click to mark as a Reserved"></span>Reserved</a>
						</td>			
						








						
										
<!-- <td>					
											   
						<a href="#pas<?php echo $row ['item_id'];?>" class="btn btn-success" data-toggle="modal" title="Click to mark as a Passed"></span>Passed</a>
				</td>		
										
<td>					
											   
						<a href="#nqsyae<?php echo $row ['item_id'];?>" class="btn btn-danger" data-toggle="modal" title="Click to mark as a Not Qualified"></span>Not Qualified</a>
				</td>		 -->
 
 
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form action="internalsd.php" method="post"  class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
											
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                          
											
											
												<label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Request Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
	

									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
									<label class="control-label col-sm-2" for="ContactNumber">Claimed To</label>

<div class="col-sm-4">
<select  class="form-control"  name="claimed_to" required>
<?php
include('connect.php');
$cat_query = mysql_query("SELECT * FROM teacher");
while($cat_row = mysql_fetch_array($cat_query)){
?>
<option value="<?php echo $cat_row['full_name']; ?>"><?php echo $cat_row['full_name']; ?></option>
<?php  } ?>



</select>		





</div>
<label class="control-label col-sm-2" for="ContactNumber">Claimed Date</label>
<div class="col-sm-4">
<input type="date"  class="form-control"  name="claimed_date" value="<?php echo $row['claimed_date']; ?>" required>


									
                                        </div>
                                    </div>
									
									
						
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_itemz_reserved2"><span class="glyphicon glyphicon-edit"></span> Update Appointment Schedule</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                
	  </div>
	  
 
 	  </div>
 
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="pas<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Job Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
												
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_passed"><span class="glyphicon glyphicon-edit"></span> Mark As a Passed</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
 
 
 
 
 
 
 </div>
 
 
 
 
 
 
 
 
 	<!--Edit Item Modal -->
                    <div id="nqsyae<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">First Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="<?php echo $row ['fname'];?>" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Last Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="mname" value="<?php echo $row ['mname']; ?>" placeholder="Middle Name" required> </div>
												
									
										
										
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                               <input type="text" readonly class="form-control" id="lname" name="lname" value="<?php echo $row ['lname'];?>" placeholder="Last Name">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Job Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control id="Jobtitle" name="Jobtitle" value="<?php echo $row ['Jobtitle'];?>" placeholder="Jobtitle">
												</div>
									<label class="control-label col-sm-2" for="ContactNumber">Contact&nbsp;Number</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo $row['Contact'];?>" placeholder="ContactNumber">
									</div>
									
									
									<label class="control-label col-sm-2" for="Email">Valid Email</label>
									<div class="col-sm-4">
									<input type="text" readonly class="form-control" id="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email">
									</div>
												
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_nqsya"><span class="glyphicon glyphicon-edit"></span> Mark As a Not Qualified</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
 
 
 
 
      </tr>
      <?php } ?>
	  
	  
	  
	  	<?php
		
// $conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
// if(isset($_POST['submitlaarnie'])!=""){
//   $names=$_FILES['photo']['name'];
//   $size=$_FILES['photo']['size'];
//   $type=$_FILES['photo']['type'];
//   $temp=$_FILES['photo']['tmp_name'];
//   $date = date('Y-m-d H:i:s');
//   $upload_by=$_POST['upload_by'];
//   $grade=$_POST['grade'];
//   $department=$_POST['department'];
//   $caption1=$_POST['caption'];
//   $link=$_POST['link'];
//   $department =$_SESSION['department'];
  
//   move_uploaded_file($temp,"../item_images/".$names);

// $query=$conn->query("INSERT INTO filemgrfinance (item_image,item_date,upload_by,department,grade) VALUES ('$names','$date','$upload_by','$department','$grade')");
// if($query){
	
//  echo "<script>window.open('allmodules.php','_self')</script>";

// }
// else{
// die(mysql_error());
// }
// }
if(isset($_POST['update_itemz_reserved2'])){
$item_id = $_POST['item_id'];

$claimed_to=$_POST['claimed_to'];
$claimed_date=$_POST['claimed_date'];
// $updated_by=$_POST['updated_by'];
// $updated_date=$_POST['updated_date'];
$now = date_create()->format('Y-m-d H:i:s');
$index=$_SESSION["index_number"];
$sql = "Update postingsender set claimed_to='$claimed_to', claimed_date='$claimed_date', updated_by='$index', updated_date='$now'

WHERE item_id='$item_id' ";

// $sql = "INSERT INTO postingsenderreserved
// SELECT * from postingsender
// WHERE item_id='$item_id' ";

echo '<script>window.location.href="myinbox.php"</script>';

if ($conn->query($sql) === TRUE) {
echo '<script>window.location.href="myinbox.php"</script>';
echo '<script>window.location.href="myinbox.php"</script>';
} else {
echo "Error updating record: " . $conn->error;
}
}

	
?>
	  
	  
	  
	  
	  	<?php
		

                        if(isset($_POST['update_itemz'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  
	  
	  <!-- Passed-->
	  
	  	<?php
		

                        if(isset($_POST['update_passed'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                           $sql = "INSERT INTO postingsenderpassed
							    SELECT * from postingsender
							      WHERE item_id='$item_id' ";
								  
								//  $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  	<?php
		

                        if(isset($_POST['update_passed'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  <!-- NQ -->
	  
	  	  
	  	<?php
		

                        if(isset($_POST['update_nqsya'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                           $sql = "INSERT INTO postingsendernotqualified
							    SELECT * from postingsender
							      WHERE item_id='$item_id' ";
								  
								//  $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
	  
	  	<?php
		

                        if(isset($_POST['update_nqsya'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
							$Jobtitle =$_POST['Jobtitle'];
							$Type=$_POST['Type'];
							$Jobdescription=$_POST['Jobdescription'];
							$item_image=$_POST['item_image'];
							$item_date=$_POST['item_date'];
							$Education=$_POST['Education'];
							$dh=$_POST['dh'];
							$category_id=$_POST['category_id'];
							$Vacancy=$_POST['Vacancy'];
							$status=$_POST['status'];
							$img_name=$_POST['img_name'];
							$img_path=$_POST['img_path'];
							$img_type=$_POST['img_type'];
							$WorkXP=$_POST['WorkXP'];
							$Gender=$_POST['Gender'];
							$Salary=$_POST['Salary'];
							$skills=$_POST['skills'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$Contact=$_POST['Contact'];
							$Email=$_POST['Email'];
							$upload_by=$_POST['upload_by'];
							$department=$_POST['department'];
							
                          // $sql = "INSERT INTO postingsenderreserved
						//	    SELECT * from postingsender
							 //     WHERE item_id='$item_id' ";
								  
								 $sql = "DELETE FROM postingsender WHERE item_id='$item_id'";
								   
								

//$sql = "INSERT INTO postingsenderreserved    (item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,Salary,skills,fname,mname,lname,Contact,Email,upload_by,department)
//SELECT //item_id,Jobtitle,Type,Jobdescription,item_image,item_date,Education,dh,category_id,Vacancy,status,img_name,img_path,img_type,WorkXP,Gender,S//alary,skills,fname,mname,lname,Contact,Email,upload_by,department FROM postingsender WHERE Jobtitle='$get_id'";
							//	 $sql=" DELETE FROM postingsender
								// WHERE item_id='$item_id'";
								   
								  echo '<script>window.location.href="myinbox.php"</script>';
									  
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="myinbox.php"</script>';
								  echo '<script>window.location.href="myinbox.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

	//	mysqli_query($dbcon,$savelisa);
?>
	  
	  
	  
                                </tbody>
                            </table>
					  
					  <!--- end -->
					  
				  <!-- /#wrapper -->										 
															   
															   
															   
															   
															   
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
						
			  </form>

		
		
		
	</section> <!-- End of table section --> 
          

			  						<!-- Mediul Modal kiki-->
									  <div class="modal fade" id="uploadModalsamplexmemosuperjeje" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 style="color:white;" class="modal-title" id="myModalLabel"><center class="#fa fa-servera" style="text-align:center;">Add&nbsp;New&nbsp;Document&nbsp;Files</center>
              </div>
              <!--div class="modal-body"-->

				<!-- operation of the first table start  here-->
	


<div class="well" style="color:black;">



	  <!-- <?php

include('../includes/config.php');

?> -->







							  

               

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											


                                                 
                                                 

















<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>


<?php
// $conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
// if(isset($_POST['submitlaarnie'])!=""){
//   $names=$_FILES['photo']['name'];
//   $size=$_FILES['photo']['size'];
//   $type=$_FILES['photo']['type'];
//   $temp=$_FILES['photo']['tmp_name'];
//   $date = date('Y-m-d H:i:s');
//   $upload_by=$_POST['upload_by'];
//   $grade=$_POST['grade'];
//   $department=$_POST['department'];
//   $caption1=$_POST['caption'];
//   $link=$_POST['link'];
//   $department =$_SESSION['department'];
  
//   move_uploaded_file($temp,"../item_images/".$names);

// $query=$conn->query("INSERT INTO filemgrfinance (item_image,item_date,upload_by,department,grade) VALUES ('$names','$date','$upload_by','$department','$grade')");
// if($query){
	
//  echo "<script>window.open('allmodules.php','_self')</script>";

// }
// else{
// die(mysql_error());
// }
// }
?>



<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->





<?php include('../myfilemgr/dbcon.php'); ?>

	

							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<tr>
			<td><form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
				
					<input type="file" name="photo" style="width:550px;" id="photo"  required="required">

					</td>

					</tr>
					<tr>
					<td>
						<p>Select Grade</p>
					<input type="text" class="form-control" name="grade" placeholder="Grade">
</td>
</tr>
					<tr>
<td>
<button type="submit" name="submitlaarnie" class="btn btn-success btn-md">Submit</button>
					
</td>
</tr>
					<br>
					<td style="display:none;">
					<input type="text" name="upload_by" value="<?php echo $name; ?>">
					</td>

					<!--td><input type="submit" class="btn btn-danger" value="SUBMIT" name="submitlaaarnie">
			<a style="color:gray; font-size:23px; padding-top: 90px;">
			<?php 
$sql ="SELECT * from filemgrmis";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files:
 <?php echo htmlentities($totalsubjects);?></strong></tr></td--></p></a></table>





	  


          </div>
     
              <div class="modal-footer">
               <a style="color:pink; font-size:20px; padding-top:90px;"><?php 
$sql ="SELECT * from filemgrfinance";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files: <?php echo htmlentities($totalsubjects);?></strong></tr></td></p></a>





                <!--button class="btn btn-success btn-md" name="item_save"></button-->
				   <button type="submit" name="submitlaarnie" class="btn btn-success btn-md">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>
		

	<!-- //MSK-00103 Modal-Update form -->  
	<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalUpdateform" aria-hidden="true">  
  		<div class="modal-dialog">
    		<div class="container">
            	<div class="row ">	
           			<div class="col-md-6">
                		<div class="panel">
        					<div class="panel-heading bg-primary">              
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          						<h4 class="modal-title custom_align" id="Heading">Edit Grade</h4>
   							</div>
                            <div class="panel-body"> <!-- Start of modal body--> 
                                <div class="form-group" id="divGradeUpdate">
                                    <label for="">Grade</label>
                                    <input class="form-control" type="text" id="name1" name="name" autocomplete="off">
                                </div>
                                <div class="form-group" id="divAFeeUpdate">
                                    <label for="">Admission Fee($)</label>
                                    <input class="form-control" type="text" id="admission_fee1" name="admission_fee" autocomplete="off">
                                </div>
                                <div class="form-group" id="divHChargeUpdate">
                                    <label for="">Hall Charge(%)</label>
                                    <input class="form-control" type="text" id="hall_charge1" name="hall_charge" autocomplete="off">
                                </div>
                            </div><!--/.modal body-->
                            <div class="panel-footer bg-gray-light">
                                <input type="hidden" name="id" id="id" value="">
                                <button type="button" onClick="Updategrade(this)" id="btnSubmit1" class="btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>    
                            </div><!--/.panel-footer--> 
            			</div><!--/.panel-->
            		</div><!--/.col-md-6-->
            	</div><!--/.row-->                                        
        	</div><!-- /.modal-content -->  		 
		</div><!-- /.modal-dialog -->            
	</div><!--/.Modal-Update form -->   
    
<script>
function showModal(Updateform){
//MSK-00104
	
	var Id = $(Updateform).data("id");  
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start 1 
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-00107 
				var myArray1 = eval( xhttp.responseText );
				
				document.getElementById("id").value =myArray1[0];
				document.getElementById("name1").value =myArray1[1];
				document.getElementById("admission_fee1").value =myArray1[2];
				document.getElementById("hall_charge1").value =myArray1[3];

    		}
			
  		};	
		
    xhttp.open("GET", "../../model/get_grade.php?id=" + Id , true);												
  	xhttp.send();//MSK-00105-Ajax End
	 
};
  
function Updategrade(){
//MSK-000108
	
	var Id1 = document.getElementById('id').value;
	var name1 = document.getElementById('name1').value;
	var admission_fee1 = document.getElementById('admission_fee1').value;
	var hall_charge1 = document.getElementById('hall_charge1').value;
	
	if(name1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divGradeUpdate').addClass('has-error has-feedback');	
		$('#divGradeUpdate').append('<span id="spanNameUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The grade is required" ></span>');	
			
		$("#name1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divGradeUpdate').removeClass('has-error has-feedback');
			$('#spanNameUpdate').remove();
			
		});	
	}else{
		
	}
	
	if(admission_fee1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divAFeeUpdate').addClass('has-error has-feedback');	
		$('#divAFeeUpdate').append('<span id="spanAFeeUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The admission fee is required" ></span>');	
			
		$("#admission_fee1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divAFeeUpdate').removeClass('has-error has-feedback');
			$('#spanAFeeUpdate').remove();
			
		});	
	}else{
		
	}
	
	if(hall_charge1 == ''){
		//MSK-00109-name
		$("#btnSubmit1").attr("disabled", true);
		$('#divHChargeUpdate').addClass('has-error has-feedback');	
		$('#divHChargeUpdate').append('<span id="spanHChargeUpdate" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The hall charge is required" ></span>');	
			
		$("#hall_charge1").keydown(function() {
			//MSK-00110-name 
			$("#btnSubmit1").attr("disabled", false);	
			$('#divHChargeUpdate').removeClass('has-error has-feedback');
			$('#spanHChargeUpdate').remove();
			
		});	
	}else{
		
	}
	
	
	if(name1 == '' || admission_fee1 == '' || hall_charge1 == ''){
		//MSK-000098-validation failed
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		
		var do1 = "update_grade";	
		
		var xhttp = new XMLHttpRequest();//MSK-00111-Ajax Start  
			xhttp.onreadystatechange = function() {
				
				if (this.readyState == 4 && this.status == 200) {
					//MSK-000112
					var myArray2 = eval(xhttp.responseText);
					
					var msg = myArray2[4];
					
					if(msg==1){//MSK-000113
						
						document.getElementById("td1_"+Id1 ).innerHTML =myArray2[1];//MSK-000114
						document.getElementById("td2_"+Id1 ).innerHTML =myArray2[2];
						document.getElementById("td3_"+Id1 ).innerHTML =myArray2[3];
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);//MSK-000116
						
					}
					
					if(msg==2){//MSK-000118
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
						
					}
		
					if(msg==3){//MSK-000119
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
		
					}
					
					if(msg==4){//MSK-000120
						
						$("#modalUpdateform").modal('hide');
						Update_alert(msg);
		
					}
								
			
				}
					
			};
			xhttp.open("GET", "../../model/update_grade.php?id=" + Id1 + "&name="+name1 + "&admission_fee="+admission_fee1 + "&hall_charge="+hall_charge1 + "&do="+do1, true);												
			xhttp.send();//MSK-00111-Ajax End
		
	}
			
};


function Update_alert(msg){
//MSK-000117	
	if(msg==1){
		
    	var myModal = $('#update_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
    	
				
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}
	
	if(msg==3){

    	var myModal = $('#update_error1');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}
	
	if(msg==4){
		
    	var myModal = $('#grade_Duplicated');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}
	
};

</script>   
   
	<!-- //MSK-000124 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header" style="background-color:red;">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>
				<div class="modal-body bgColorWhite">
        			Are you sure that you want to delete the Record ?
        		</div>
      			<div class="modal-footer">
					<a href="#" style='margin-left:10px;' id="btnYes" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
<script>

$('body').on('click', '.confirm-delete', function (e){
//MSK-000122	
	
    e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirm').data('id1', id).modal('show');//MSK-000123
 	
});

$('#btnYes').click(function() {
//MSK-000126
   
    var id = $('#deleteConfirm').data('id1');	
	var do1 = "delete_record";	
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000127-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000129
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000130
				
					$("#deleteConfirm").modal('hide');	        		
					var page = myArray[1];
						
					var xhttp1 = new XMLHttpRequest();//MSK-000131-Start Ajax  
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
										
								document.getElementById('table1').innerHTML = this.responseText;//MSK-000132
								cTablePage(page);//MSK-000133
								Delete_alert(myArray[0]);//MSK-000134	
							
							}
								
						};
						
						xhttp1.open("GET", "show_grade_table.php" , true);												
  						xhttp1.send();//MSK-000131-End Ajax
				
					}
		
					if(myArray[0]==2){//MSK-000137
			
						$("#deleteConfirm").modal('hide');
						Delete_alert(myArray[0]);//MSK-000138
				
					}


    		}
			
  		};	
    xhttp.open("GET", "../../model/delete_grade.php?id=" + id + "&do="+do1 + "&page="+currentPage , true);												
  	xhttp.send();//MSK-000127-Ajax End
	 			   		
});

function Delete_alert(msg){
//MSK-000136	
	if(msg==1){
		
    	var myModal = $('#delete_Success');
		myModal.modal('show');
		
		clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
			
    	}, 3000));
			
	}
	
	if(msg==2){
		
    	var myModal = $('#connection_Problem');
		myModal.modal('show');
		
    	clearTimeout(myModal.data('hideInterval'));
    	myModal.data('hideInterval', setTimeout(function(){
    		myModal.modal('hide');
    	}, 3000));
				
	}

};	

</script>

    <div id="divEMG">  
          
    </div>

<script>
function showModal1(Viewform){
	
	var grade = $(Viewform).data("id"); 
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					//MSK-00107 
				document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
				$('#modalUpdateform1').data('id1', grade).modal('show');
											
			}
				
		};	
			
		xhttp.open("GET", "emarks_range_grade_update_form.php?grade="+grade +"&page="+currentPage , true);												
		xhttp.send();//MSK-00105-Ajax End
	 
};

function editRangeGrade(viewRG){
	
	var myArray = $(viewRG).data("id").split(',');
	
	var id = myArray[0];
	var count = myArray[1];
	
	var markRange= document.getElementById('rangeU_td_'+count).innerHTML;
	var markGrade= document.getElementById('gradeU_td_'+count).innerHTML;
	
	var do1="show_range_grade_text";
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
							
				document.getElementById('trU_'+count).innerHTML = this.responseText;//MSK-000137		
				$('#edit_RG_'+count).hide();
				$('#delete_RG_'+count).hide();
				
				$('#action_'+count).append('<a id="update_RG_'+count+'" onclick="updateRangeGrade(this)" data-id="'+id+','+count+'" class="glyphicon glyphicon-ok btn btn-success btn-xs" ></a>');			
			}
				
		};	
							
    	xhttp.open("GET", "range_grade_text.php?id="+id + "&count="+count +"&range="+markRange +"&grade="+markGrade +"&do="+do1, true);												
  		xhttp.send();//MSK-00135-Ajax End	
	
};

function updateRangeGrade(updateRG){
	
var myArray1 = $(updateRG).data("id").split(',');
	
	var id = myArray1[0];
	var count = myArray1[1];
		
	var range = $('#rangeText_'+count).val();
	var grade = $('#gradeText_'+count).val();

	var do1="update_emarks_range_grade";

	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				var myArray = eval(xhttp.responseText);
				var msg=myArray[0];
				
				if(msg == 1){
					$('#update_RG_'+count).remove();
					
					$('#rangeText_'+count).remove();
					$('#gradeText_'+count).remove();
					
					$('#rangeU_td_'+count).html(range);
					$('#gradeU_td_'+count).html(grade);
					
					$('#action_'+count).append('<a href="#" id="edit_RG_'+count+'" onclick="editRangeGrade(this)" data-id="'+id+','+count+'" class="label-warning "><span class="glyphicon glyphicon-edit "></span></a> <a href="#" id="delete_RG_'+count+'" data-id="'+id+'" class="confirm-delete-RG label-danger"><span class="glyphicon glyphicon-remove "></span></a>');
					
				}
							
			}
				
		};	
							
    	xhttp.open("GET", "../../model/update_emarks_range_grade.php?id="+id +"&range="+range +"&grade="+grade +"&do="+do1, true);												
  		xhttp.send();//MSK-00135-Ajax End
		
};
</script>
	<!-- //MSK-000124 Modal-Delete Confirm Popup -->
	<div class="modal msk-fade" id="deleteConfirmRG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Delete</h4>
      			</div>
				<div class="modal-body bgColorWhite">
        			 Do you want to Delete this Record?
        		</div>
      			<div class="modal-footer">
					<a href="#" style="margin-left:10px;" id="btnYesRG" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
    
    <div id="divEMG2">
    
    </div>

<script>
$('body').on('click', '.confirm-delete-RG', function (e){
//MSK-000122	

	$('#modalUpdateform1').modal('hide');
    e.preventDefault();
    var id = $(this).data('id');
	$('#deleteConfirmRG').data('id1', id).modal('show');//MSK-000123
	 	
});

$('#btnYesRG').click(function() {
//MSK-000126
  
	var id = $('#deleteConfirmRG').data('id1');
	var grade = $('#modalUpdateform1').data('id1');
	
	var do1 = "delete_range_grade";	
	
	var info = $('#example1').DataTable().page.info();
	var currentPage= (info.page + 1);
	
	var xhttp = new XMLHttpRequest();//MSK-000127-Ajax Start  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {
				//MSK-000129
				var myArray = eval( xhttp.responseText );
					
				if(myArray[0]==1){//MSK-000130
				
					$("#deleteConfirmRG").modal('hide');	        		
					var page = myArray[1];
					document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
						
					var xhttp1 = new XMLHttpRequest();//MSK-000131-Start Ajax  
						xhttp1.onreadystatechange = function() {		
				
							if (this.readyState == 4 && this.status == 200) {
								
								document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
								$('#modalUpdateform1').data('id1', grade).modal('show');			
								
							}
								
						};
						
						xhttp1.open("GET", "emarks_range_grade_update_form.php?grade="+grade + "&page="+currentPage , true);													
  						xhttp1.send();//MSK-000131-End Ajax
				
					}
		
					if(myArray[0]==2){//MSK-000137
			
						$("#deleteConfirm").modal('hide');
						Delete_alert(myArray[0]);//MSK-000138
				
					}


    		}
			
  		};	
    xhttp.open("GET", "../../model/delete_range_grade.php?id=" + id + "&do="+do1 , true);												
  	xhttp.send();//MSK-000127-Ajax End
	 			   		
});

</script>

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace(".././index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>



</div><!-- /.content-wrapper -->  
                             
<?php include_once('../footer.php');?>