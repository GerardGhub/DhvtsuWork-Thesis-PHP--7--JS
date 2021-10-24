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

<script src="jsmodule/js/datatables.min.js"></script>
    <script type="text/javascript" src="jsmodule/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jsmodule/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jsmodule/jquery.fancybox.css?v=2.1.5" media="screen" />	
	<link rel="stylesheet" type="text/css" href="jsmodule/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jsmodule/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="jsmodule/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jsmodule/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="jsmodule/jquery.fancybox-media.js?v=1.0.6"></script>




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
        Modules

        </h1>
		
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Modules</a></li>
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
    
    <div class="modal msk-fade" id="modalInsertform" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  		<div class="modal-dialog ">
            <div class="container modal-content1 "><!--modal-content --> 
                <div class="row ">	
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">               
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h3 class="panel-title">Add eMarks Range & Grade</h3>
                            </div>
                             <form role="form" action="../../index.php" method="post" id="form2">
                                <div class="panel-body"> <!-- Start of modal body--> 
                                    <div class="form-group" id="divMarkRange1">
                                        <label for="" >Range & Grade</label>
                                         <a href="#" onClick="addNewRow(this)" class="btn btn-success btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span></a><!-- MSK-00094--> 
                                         <a href="#" onClick="deleteRow(this)" class="btn btn-danger btn-xs pull-right" style="margin-right:2px;"><span class="glyphicon glyphicon-remove"></span></a><!-- MSK-00094-->
                                    </div>
                                     <div class="form-group" id="divMarkRange2">
                                        <table id="table_mark_range">
                                           <tbody class="tBody">
                                            <tr id="tr_1">
                                                <td id="range_td_1"><input type="text" class="mark-range form-control" id="mark_range_text_1" name="mark_range[]"  placeholder="75-100" autocomplete="off"/></td>
                                                <td id="grade_td_1"><input type="text" class="mark-grade form-control" id="mark_grade_text_1" name="mark_grade[]"  placeholder="A" autocomplete="off"/></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>        
                                </div><!--/.modal body-->
                                <div class="panel-footer bg-blue-active">
                                    <input type="hidden" name="current_page" value="" id="current_page"  />
                                    <input type="hidden" name="grade_id" value="" id="grade_id"  />
                                    <input type="hidden" name="do" value="add_emarks_range_grade"  />
                                    <button type="submit" onClick="" class="btn btn-info btnS" id="btnSubmit1" style="width:100%;">Submit</button>
                                </div>
                            </form>       
                        </div><!--/.panel-->
                    </div><!--/.col-md-3 --> 
                </div><!--/.row-->      
            </div><!-- /.modal-content -->  		 
        </div><!-- /.modal-dialog -->   
    </div><!--/.modal-modalInsertform -->
    


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
	<section class="contents" > <!-- Start of table section -->
	 
						
	<?php
 include('connect.php');
 
	// include('confeg.php');


	

		
							




$ip=1;



$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);

$start=0;
$limit=12;

//if(isset($_GET['id']))
//{

//	$start=($ip-1)*$limit;

$get_id=$_GET['id']; 
//}
  // $get_idm=$_GET['idm']; 

$query=mysql_query("SELECT distinct category_id, item_id, item_image, policy_title, revisionno, img_name, issuedate,effectivedate, department FROM mis WHERE category_id='$get_id'") or die (mysql_error());


     
		
   
        





while($query2=mysql_fetch_array($query))
 
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['issuedate']."&nbsp;To&nbsp; ".$query2['effectivedate']."</textarea>

			</center>
			
			
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='/adminportal local/item_images/".$query2['img_name']."' data-fancybox-group='button' title='Page ".$ip."- ".$query2['policy_title']."'>
	
					<img src='/adminportal local/item_images/".$query2['img_name']."' class='img img-thumbnail'  style='width:350px;height:190px;' />
					</a>
				
					
					<center><h4>  ".$query2['department']." </h4></center>
					
		
					
						<a class='btn btn-block btn-danger' title='Download Selected Policy?' href='#'><span class='fa fa-cloud-download'></span>&nbsp;RevisionNo&nbsp;".$query2['revisionno']."</a>
							
						
            </div>
          </div>
        </div>";

			
	
}




		// $stmt=$dbcon->prepare('#');
		// $stmt->execute();
		
	
	?>
		
		
		
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
$conn=new PDO('mysql:host=localhost; dbname=srms', 'root', '') or die(mysql_error());
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