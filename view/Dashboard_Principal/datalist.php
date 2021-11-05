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




	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Append Grade

		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		</h5>
     
	
    
    
      </div>
      <div class="modal-body">
        <!-- Start -->
	<!-- Main content -->
	<section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-md-15">
            	<!-- general form elements -->
              	<div class="box box-primary">
           
                	<!--  //MSK-00097 form start -->
                	<form role="form" action="../../index.php" method="post" id="form1">                    
                  		<div class="box-body">
                    		<div class="form-group" id="divGrade">
                      			<label for="">Grade</label>
                      			<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autocomplete="off">
                    		</div>
                            <div class="form-group" id="divAdmissionFee">
                      			<label for="">Admission Fee($)</label>
                      			<input type="text" class="form-control" id="admission_fee" placeholder="Enter admission fee" name="admission_fee" autocomplete="off">
                    		</div>
                             <div class="form-group" id="divHallCharge">
                      			<label for="">Hall & Miscellaneous Charge(%)</label>
                      			<input type="text" class="form-control" id="hall_charge" placeholder="Enter hall charge" name="hall_charge" autocomplete="off">
                    		</div>
                  		</div><!-- /.box-body -->
                  		<div class="box-footer">
                  			<input type="hidden" name="do" value="add_grade" />
                    		<button type="submit" class="btn btn-primary" id="btnSubmit">Save</button>
						</div>
                	</form>
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- End of form section -->


</div>
    </div>
  </div>
</div>
    
  
    
<script>

$("#form1").submit(function (e) {
//MSK-000098-form submit
	
	var name = $('#name').val();	
	var admission_fee = $('#admission_fee').val();
	var hall_charge = $('#hall_charge').val();
	
	if(name == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divGrade').addClass('has-error has-feedback');	
		$('#divGrade').append('<span id="spanName" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The grade is required" ></span>');	
			
		$("#name").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divGrade').removeClass('has-error has-feedback');
			$('#spanName').remove();
			
		});
			
	}else{
		
	}
	
	if(admission_fee == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divAdmissionFee').addClass('has-error has-feedback');	
		$('#divAdmissionFee').append('<span id="spanAdmissionFee" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The admission fee is required" ></span>');	
			
		$("#admission_fee").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divAdmissionFee').removeClass('has-error has-feedback');
			$('#spanAdmissionFee').remove();
			
		});
			
	}else{
		
	}
	
	if(hall_charge == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divHallCharge').addClass('has-error has-feedback');	
		$('#divHallCharge').append('<span id="spanHallCharge" class="glyphicon glyphicon-remove form-control-feedback set-width-tooltip" data-toggle="tooltip"    title="The hall charge is required" ></span>');	
			
		$("#hall_charge").keydown(function() {
			//MSK-00100-name  
			$("#btnSubmit").attr("disabled", false);	
			$('#divHallCharge').removeClass('has-error has-feedback');
			$('#spanHallCharge').remove();
			
		});
			
	}else{
		
	}

	if(name == '' || admission_fee == ''){
		//MSK-000098- form validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}


});

function eMarkRG(grade){
	
	$('#modalUpdateform1').modal('hide');
	$('#modalInsertform').modal('show');
	document.getElementById("grade_id").value =grade;
	
};
function cTablePage(page){
//MSK-000135	
	var currentPage1 = (page-1)*10;
	
	$(function(){
		$("#example1").DataTable({
			"displayStart": currentPage1,    
			"bDestroy": true       
   		});
						
	});
					  
	window.scrollTo(0,document.body.scrollHeight);
	
};

function showeMark1(grade,page){
	
	cTablePage(page);
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
					//MSK-00107 
				document.getElementById('divEMG').innerHTML = this.responseText;//MSK-000132
				$('#modalUpdateform1').data('id1', grade).modal('show');
											
			}
				
		};	
			
		xhttp.open("GET", "emarks_range_grade_update_form.php?grade="+grade +"&page="+page , true);												
		xhttp.send();//MSK-00105-Ajax End
	 
};
</script>   

<!--run Insert alert using PHP & JS/jQuery  -->          
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$grade=$_GET['grade'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#grade_Duplicated  ');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}

	if($msg==2){
			
		echo '<script>','eMarkRG('.$grade.');','</script>';
	
	}

	if($msg==3){
		
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	if($msg==5){
		
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
}

if(isset($_GET["do"])&&($_GET["do"]=="alert_from_eMark_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$grade=$_GET['grade'];
	$page=$_GET['page'];

	if($msg==5){
		
		echo '<script>','showeMark1('.$grade.','.$page.');','</script>';
	
	}

	
}
?><!--./Insert alert --> 
 

<script>

function addNewRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

		last_id++;
	
	var tr = '<tr id="tr_'+last_id+'">'+
          		'<td id="range_td_'+last_id+'"><input type="text" class="mark-range form-control" id="mark_range_text_'+last_id+'" name="mark_range[]"  placeholder="75-100" autocomplete="off"/></td> '+
                '<td id="grade_td_'+last_id+'"><input type="text" class="mark-grade form-control" id="mark_grade_text_'+last_id+'" name="mark_grade[]"  placeholder="A" autocomplete="off"/> </td>'+
         	'</tr>';
				
	$('.tBody').append(tr);

}; 

function deleteRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

	if(last_id != 1){
		$('.tBody tr:last').remove();	
		$("#btnSubmit1").attr("disabled", false); 
	}

}

$("#form2").submit(function (e) {
	
	var rowCount = $('.tBody tr').length;
	
	for(i=1; i<rowCount+1; i++){
		
		var markRange = document.getElementById('mark_range_text_'+i).value;
		var markGrade = document.getElementById('mark_grade_text_'+i).value;

		if(markRange==""){
			$("#btnSubmit1").attr("disabled", true);
			$("#range_td_"+i).addClass('has-feedback');
			$("#range_td_"+i).append('<span id="spanMarkRange" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark range is required" ></span>');
			
			$("#mark_range_text_"+i).keydown(function(){
				$("#btnSubmit1").attr("disabled", false);     
				$("#range_td_"+i).removeClass('has-feedback');
				$("#spanMarkRange").remove();
			});
			
		}
		
		if(markGrade==""){
			$("#btnSubmit1").attr("disabled", true);  
			$('#grade_td_'+i).addClass('has-feedback');
			$('#grade_td_'+i).append('<span id="spanMarkGrade" class="glyphicon glyphicon-remove form-control-feedback set-color-tooltip" data-toggle="tooltip" title="The mark grade is required" ></span>');
			
			$("#mark_grade_text_"+i).keydown(function(){
				$('#btnSubmit1').attr("disabled", false);     
				$('#grade_td_'+i).removeClass('has-feedback');
				$("#spanMarkGrade").remove();
			});
		}
		
	}
	
	if(markRange == '' || markGrade == '' ){
		//MSK-000099- form validation failed
		
		$("#btnSubmit1").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit1").attr("disabled", false);
		//return true;
	}
	
});

function showeMark(grade,page){
	
	$('#modalUpdateform1').modal('hide');
	$('#modalInsertform').modal('show');
	document.getElementById("grade_id").value =grade;
	document.getElementById("current_page").value =page;
	 
};


</script>       
  
 <!--run  alert using PHP & JS/jQuery  -->          
<?php
if(isset($_GET["do"])&&($_GET["do"]=="show_eMark")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	$grade=$_GET['grade'];
	$page=$_GET['page'];

	if($msg==1){
		
		echo '<script>','showeMark('.$grade.','.$page.');','</script>';
			
	}

	if($msg==2){
		
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
}
?><!--./show_eMark  -->
  
<!-- table for view all records -->
 
	<!-- Main content BUJE -->
	<section class="content" > 
							 


<?php
 include('config.php');

error_reporting(0);
?>




 
			
			
			
			
			
			
			
	
		
                        
                    
						  
							<form method="post" action="delete.php" >
						  
							<table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
	
              <th style="width:1%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">IMG</th>
           
	   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Request&nbsp;Title</th>
		
		
			   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Description</th>
				
					   	<th style="width:5%;background-color:#454545; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Schedule</th>
				
			 <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; border-radius:15px; color:white;">Date_Added</th>
		        
							
		  <th style="width:4%;background-color:#46b8da; color:white; border-radius:15px; text-align:center; font-size:15px; color:white;">Request</th>

	  <th style="width:4%;background-color:#5cb85c; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">Post</th>
	  <th style="width:4%;background-color:#d9534f; border-radius:15px; color:white; text-align:center; font-size:15px; color:white;">&nbsp;Edit</th>
                 
                </tr>
              </thead>
           <tbody>
                <?php
   
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

		   $department=$_SESSION['sess_department'];
           $get_id=$_GET['id']; 
               $query = mysql_query("select * from std_db.posting ORDER by item_id DESC
			   ") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                       $id=$row['item_id'];
							$name=$row['item_image'];
							$date=$row['item_date'];      
            ?>
			

      <tr>
	   <td class="zoom" style="width:5%;">
				<center> <img src="../item_images/saelogo.jpg" class="img img-rounded"  width="65" height="45" /></center>
				 </td>
	  
	  
           <!--td style="text-align:center;
			  "><?php echo $row['item_id'];?></td-->
       
           
			  
			  		  
		
		
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobtitle'];?></td>
			  
			  			  	    	    <td style="text-align:center;
			  "><?php echo $row['Jobdescription'];?></td>
			  
			  
			  		  	    	    <td style="text-align:center;
			  "><?php echo $row['Vacancy'];?></td>
			  
       
              <!--td style="width:37%;"><?php echo $row['item_image'];?></td-->
			  
			  			  
	

			  
			  
			  
			  
			  
			                <td style="text-align:center;width:5%;"><?php echo $row['item_date'];?></td>
          
           

			 
			  
			  
			  
			  
			  
			<td style="text-align:center; width:6%;">

						    	
								
										
														   
						<a href="#newjobentry"  data-toggle="modal" class="btn btn-info" title="Click to Add a New Job Entry"></span>New</a>			
										
										
				<!--a href="downloadresume.php?filename=<?php echo $name;?>"  class="btn btn-info" title="Click to Download"  onclick="return confirm('Are you sure to Download this Selected File?')"><span class="glyphicon glyphicon-downloadss" style=" color:white"></span>Download</a-->
				</td>
					
									
										
				<td style="width:4%;">						
										
			<a href="#post<?php echo $row ['item_id'];?>"  class="<?php echo $row ['sended'];?> btn btn-success" data-toggle="modal" title="Click to Post"></span><?php echo $row ['sended'];?></a>
</td>
<td style="width:5%;">
					 
 	<a href="#update<?php echo $row [item_id];?>"  class="btn btn-warning" title="Click to Edit" data-toggle="modal"></span>Edit</a>			
  
	 
	 
	 	<!--a rel="tooltip" class="btn btn-danger"href="myfilemgr/delete.php?del=<?php echo $row['item_id']?>"  onclick="return confirm('Are you sure to remove this Selected File?')"><span class="glyphicon glyphicon-trash" style="color:white" ></span>&nbsp; Delete</a-->
	 
 </td>
      
	  
	  
	  
	  
	  
		<div id='edit<?php echo $row ['item_id'];?>' class='modal fade' role='dialog'>
                        <form method='post' class='form-horizontal' role='form'>
                            <div class='modal-dialog modal-lg'>
                           
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'><?php echo $row['Jobtitle'];?></h4>
                                    </div>
                                    <div class='modal-body'>
                                        <input type='hidden' name='edit_item_id' value='dsd'>
                                        
										
										
										<div class='form-group'>
                                            <!--label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Job&nbsp;Title:</label-->
                                            <div class='col-sm-4'>	
                                          <div style='font-size:15px;'><b>Job&nbsp;Title&nbsp;:&nbsp;</b><?php echo $row ['Jobtitle'];?></div></div>
										   
										   
										   
										   
										   
                                          
													 
												 
													 
													 
													 
                                        </div>
										
										
										
                                        <div>
										
										
										  <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Job&nbsp;Description:</label-->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:15px;'><b> Job Description&nbsp;:&nbsp;</b><?php echo $row ['Jobdescription'];?>"</div> </div>
													 
										
										
										
										
										
										
										
										
										
										
									
											
											
											
											
                                             
                                        </div>
										
										
										
											
                                                 <!--label class='control-label col-sm-2' for='item_name' style='font-size:17px;'>Vacancy:</label-->
                                            <div class='col-sm-4'>	
                                          <div style='font-size:15px;'><b>Vacancy&nbsp;:&nbsp;</b><?php echo $row ['Vacancy'];?></div></div>
											
											     <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Educatioasan:</label-->
                                            <!--div class='col-sm-4'>
                                                     <div style='font-size:15px;color:white;'><?php echo $row ['Education'];?></div> </div-->
										
											
											
											
											
											
											
											
											
											
											
											   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Education:</label  -->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:15px;'><b>Education&nbsp;:</b>&nbsp;<?php echo $row ['Education'];?></div> </div>
										
										
												


												
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx:</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px;color:white;'>".$query2['Jobtitle']."</div> </div-->
										
										
										
													   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>WorkExperience:</label-->
                                            <div class='col-sm-12'>
                                                     <div style='font-size:17px;'><b>Work&nbsp;Experience&nbsp;:&nbsp;</b><?php echo $row ['WorkXP'];?></div> </div>
										
										
										
													   
                                            <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px; color:white;'>WorkExperiencexxx
</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px; color:white;'>".$query2['WorkXP']."</div> </div-->
										
										
										
										
										
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Gender</label-->
                                            <!--div class='col-sm-12'>
                                                     <div style='font-size:17px;'><b>Gender&nbsp;:&nbsp;</b>&nbsp;<!--?php echo $row ['Gender'];?></div> 
													
													 
													 </div-->
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Genderxx</label>
                                            <div class='col-sm-4'>
                                                     <div style='font-size:17px;color:white;'>".$query2['Gender']."</div> 
													
													 
													 </div-->
													 
													 
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Status</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Status&nbsp:&nbsp;</b><?php echo $row ['status'];?></emp> 
													
													 
													 </div>
													 
										                    <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Statusxx</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px;color:white;'>".$query2['status']."</emp> 
													
													 
													 </div-->
													 
													               <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Salary</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Salary&nbsp;:&nbsp;</b><?php echo $row ['Salary'];?></emp> 
													
													 
													 </div>
													 
													 
													 		               <label class='control-label col-sm-2' for='item_code' style='font-size:17px;color:white;'>Salaryssax</label>
                                            <div class='col-sm-4'>
                                                     <emp style='font-size:17px; color:white;'>".$query2['Salary']."</emp> 
													
													 
													 </div>
										
												               <!--label class='control-label col-sm-2' for='item_code' style='font-size:17px;'>Required&nbsp;Skills</label-->
                                            <div class='col-sm-12'>
                                                     <emp style='font-size:17px;'><b>Required&nbsp;Skills&nbsp;:&nbsp;</b><?php echo $row ['skills'];?></emp> 
													
													 
													 </div>
										
										
                                    </div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							
									<br>
									<br>
									<br>
									<br>
									<br>
                                    <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary' name='update_items' style='display:none;'><span class='glyphicon glyphicon-edit'></span> Edit</button>
						
                                      
										<a data-toggle='modal' data-target='#uploadModalsamplexmemosuperjeje' style='display:none;' data-toggle='modal'class='btn btn-primary'>Apply Now</a>
										
										
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'><span class='glyphicon glyphicon-remove-circle'></span> Close</button>
                                    </div>
									
									
									
									
                                </div>
                        
                        </form>
						
                    </div>
					</div>
					</div>
					
		
			
			<!--Edit Item Modal -->
                    <div id="post<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Post&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Status:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sended" value="posted" placeholder="Sended" readonly> </div>
                                            <label class="control-label col-sm-2" for="item_code">Vacancy:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $row ['Vacancy']; ?>" placeholder="Item Code" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Job&nbsp;Description:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Jobdescription" name="item_description" placeholder="Description" readonly required style="width: 100%;">
                                                            <?php echo $row ['Jobdescription']; ?>
                                                        </textarea>
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Skillss:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="Skills" placeholder="Skills" style="width:100%;" readonly><?php echo $row ['skills'];?></textarea> </div>
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
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Post</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!--Edit Item Modal -->
                    <div id="update<?php echo $row ['item_id'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Post&nbsp;<?php echo $row ['Jobtitle'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Request&nbsp;Title:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Jobtitle" value="<?php echo $row['Jobtitle'];?>" placeholder="Request Title"></div>
												
												       <label class="control-label col-sm-2" for="item_name">Releasing Date:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="sended" name="status" value="<?php echo $row['status'];?>" placeholder="Statuss"> </div>
												
												       <label class="control-label col-sm-2" for="item_name">Education:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Education" value="<?php echo $row['Education'];?>" placeholder="Education"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Issue Date:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="sended" name="WorkXP" value="<?php echo $row['WorkXP'];?>" placeholder="Work Experience"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Effective Date:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="sended" name="Gender" value="<?php echo $row ['Gender'];?>" placeholder="Gender"> </div>
												
												
																	       <label class="control-label col-sm-2" for="item_name">Update By:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended"  value="<?php echo $row['i_name']; ?>" placeholder="Updated By" readonly> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Claimed To:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="Salary" value="<?php echo $row ['Salary'];?> " placeholder="Salary"> </div>
												
												
												
												
                                            <label class="control-label col-sm-2" for="item_code">Schedule:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="Vacancy" value="<?php echo $row ['Vacancy']; ?>" placeholder="Vacancy" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Description:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Jobdescription" name="Jobdescription" placeholder="Job Description" required style="width: 100%;">
                                                            <?php echo $row ['Jobdescription']; ?>
                                                        </textarea>
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Others/Requirements:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="skills"placeholder="Others Requirements" style="width:100%;"><?php echo $row ['skills'];?></textarea> </div>
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
								<br>
								
							<br>	<br>	
							<br>	<br>	
									
									
                                    <div class="modal-footer">
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_posted"><span class="glyphicon glyphicon-edit"></span> Update</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	  
	  
	  
	  
	  

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </tr>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <?php } ?>
	  
	  
	  			<?php

$conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
   //Update Items
                        if(isset($_POST['update_item'])){
                            $item_id = $_POST['item_id'];
                            $item_name = $_POST['item_name'];
                            $item_code = $_POST['item_code'];
                            $item_category = $_POST['item_category'];
                            $item_description = $_POST['item_description'];
							$sended = $_POST['sended'];
                            $sql = "UPDATE posting SET 
                                sended='$sended' WHERE item_id='$item_id' ";
								     echo '<script>window.location.href="datalist.php"</script>';
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="datalist.php"</script>';
								  echo '<script>window.location.href="datalist.php"</script>';
                            } else {
                              //  echo "Error updating record: " . $conn->error;
                            }
                        }

?>			
			
	 <?php
	 
	 $conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
if (isset($_POST['update_posted'])){	
     $item_id=$_POST['item_id'];
	$Jobtitle=$_POST['Jobtitle'];
		$Jobdescription =$_POST['Jobdescription'];
		$Vacancy =$_POST['Vacancy'];
		$Education =$_POST['Education'];
		$WorkXP =$_POST['WorkXP'];
		$Gender=$_POST['Gender'];
		$status=$_POST['status'];
		$Salary=$_POST['Salary'];
		$skills=$_POST['skills'];
		$sql = "UPDATE posting SET
		Jobtitle='$Jobtitle' , Jobdescription='$Jobdescription' , Vacancy='$Vacancy' , Education='$Education' , WorkXp='$WorkXP', Gender='$Gender' , status='$status' , Salary='$Salary' ,skills='$skills' WHERE item_id='$item_id' ";
		echo '<script>window.location.href="datalist.php"</script>';
		if ($conn->query($sql) === TRUE){
			echo '<script>window.location.href="datalist.php"</script>';
		}else{
			//sample yamu ini may friend
		}
}
	?>  
	  
	  
	  
                                </tbody>
                            </table>



		
		<!--- end -->
		
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 












          
</form>




							<!-- Mediul Modal kiki-->
        <div class="modal fade" id="newjobentry" tabindex="-1" width="250" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h3 style="color:white;" class="modal-title" id="myModalLabel"><center class="#fa fa-servera" style="text-align:center;">Add New Request</center></h3>
              </div>

<div class="well" style="color:black;">

	<?php
$conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
if(isset($_POST['submitnewjob1'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $department =$_SESSION['department'];
  $Jobtitle = $_POST['Jobtitle'];
$Jobdescription = $_POST['Jobdescription'];
$Vacancy = $_POST['Vacancy'];
$Education = $_POST['Education'];
$WorkXP = $_POST['WorkXP'];
$Gender =$_POST['Gender'];
$status =$_POST['status'];
$Salary =$_POST['Salary'];
$skills =$POST['skills'];
  

$query=$conn->query("INSERT INTO posting (Jobtitle,Jobdescription,Vacancy,Education,WorkXp,Gender,status,Salary,skills) VALUES ('$Jobtitle','$Jobdescription','$Vacancy','$Education','$WorkXP','$Gender','$status','$Salary','$skills')");
if($query){
	
 
 echo "<script>window.open('datalist.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>
		

							<fieldset style="background-color:lightgray;border-radius:20px;">
							<!--center><b style="background-color:lightgray;text-align:center;font-size:17px;"> Send us your resume or CV</b></center-->
							</fieldset>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<form enctype="multipart/form-data" action="" id="wb_Form12" name="form1" method="post">
	
				
				<tr>
					<td>
					<input type="text" name="Jobtitle" placeholder="Request Title" autofocus class="form-control" required>
					</td>
				</tr>
				<tr>
					<td>
					<textarea name="Jobdescription" rows="3" placeholder="Description" class="form-control" required></textarea>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="Vacancy" placeholder="Schedule" class="form-control" required>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="Education" placeholder="Education" class="form-control" required>
					</td>
				</tr>
				<tr>
						<td>
					<textarea name="WorkXP" placeholder="Work Experience" class="form-control" required></textarea>
					</td>
				</tr>
				
<!-- <tr>			
<td>
<input type="text" name="Gender" placeholder="Gender" class="form-control" required>
</td>	
</tr>		
<tr>
<td>
<input type="text" name="status" placeholder="Status" class="form-control" required>
</td>
</tr>

<tr>
<td>
<input type="text" name="Salary" placeholder="Salary" class="form-control" required>
</td>
</tr>

<tr>
<td>
<textarea placeholder="Required Skills" name="skills" class="form-control" required></textarea>
<!-- </td> -->
				<!-- </tr> --> 
				
				
	
					
					
					
					<td style="display:none;">
					<input type="text" name="upload_by" value="sdsd">
					</td>
				
					
</table>





	  
	  


          </div>
     
              <div class="modal-footer">
               <!--a style="color:pink; font-size:20px; padding-top:90px;"><?php 
$sql ="SELECT * from filemgrhr";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?><strong>Total of Files: <?php echo htmlentities($totalsubjects);?></strong></tr></td></p></a-->




                <!--button class="btn btn-success btn-md" name="item_save"></button-->
				   <button type="submit" name="submitnewjob1" class="btn btn-success btn-md">Submit</button>
				   
</form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				
					 </fieldset>
				   </form>
              </div>
            </div>
          </div>
        </div>






	




  
	  <footer>
	                         
	   </footer>
	  
	  
      </div>
	  
	  
	  
					
								
								
														
		
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <script>
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
            console.log(sumVal);
            
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
		
		
		

    </body>
</html>


											   
															   
															   
															   
															   
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
						
			 
		
		
		
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










							  

               

                      
                          

							  
							  
							  
							  


											
											
											<!--Cointainer sa taas-->
											
											
											


                                                 
                                                 

















<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=std_db', 'root', '') or die(mysql_error());
if(isset($_POST['submitlaarnie'])!=""){
  $names=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $grade=$_POST['grade'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $department =$_SESSION['department'];
  
  move_uploaded_file($temp,"../item_images/".$names);

$query=$conn->query("INSERT INTO filemgrfinance (item_image,item_date,upload_by,department,grade) VALUES ('$names','$date','$upload_by','$department','$grade')");
if($query){
	
 echo "<script>window.open('allmodules.php','_self')</script>";

}
else{
die(mysql_error());
}
}
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