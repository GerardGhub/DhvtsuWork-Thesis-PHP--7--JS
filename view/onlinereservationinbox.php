<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s

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

/* #modalInsertform css  */

#modalInsertform .div-logo {
	float: left;
	height: 130px;
}

#modalInsertform .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalInsertform .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalInsertform h1,#modalInsertform h2,#modalInsertform h3{
	margin-top:0;
	color:#8860a7;

}

#modalInsertform .class-address {
	float: left;
			
}

#modalInsertform .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalInsertform th{			
	background-color:#8860a7;
	color:white;
}

#modalInsertform #h1{
display:none;	
}


@media print{
	
	body{
		
		visibility: hidden;
	
	}

	#modalInsertform{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}	

#modalInsertform .logo{
		background-color:#8860a7 !important;	
	}

#modalInsertform h1,#modalInsertform h2,#modalInsertform h3,#modalInsertform .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalInsertform .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalInsertform .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalInsertform .panel{
		border:hidden!important;
}
#modalInsertform #btn1,#modalInsertform .panel-footer ,#modalInsertform .msk-heading {
		display:none;
			
}
	
#modalInsertform #h1{
		display:inline;	
}

#modalInsertform .close{
		display:none;	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalInsertform{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}
}
}

/* #modalViewPettyCash css  */

#modalViewPettyCash .div-logo {
	float: left;
	height: 130px;
}

#modalViewPettyCash .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalViewPettyCash .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalViewPettyCash h1,#modalViewPettyCash h2,#modalViewPettyCash h3{
	margin-top:0;
	color:#8860a7;

}

#modalViewPettyCash .class-address {
	float: left;
			
}

#modalViewPettyCash .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalViewPettyCash th{			
	background-color:#8860a7;
	color:white;
}

#modalViewPettyCash #h1{
display:none;	
}


@media print{
	
	body{
		
		visibility: hidden;
	
	}

	#modalViewPettyCash{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}


#modalViewPettyCash .logo{
		background-color:#8860a7 !important;	
	}

#modalViewPettyCash h1,#modalViewPettyCash h2,#modalViewPettyCash h3,#modalViewPettyCash .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalViewPettyCash .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalViewPettyCash .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalViewPettyCash .panel{
		border:hidden!important;
}
#modalViewPettyCash #btn1,#modalViewPettyCash .panel-footer ,#modalViewPettyCash .msk-heading {
		display:none;
			
}
	
#modalViewPettyCash #h1{
		display:inline;	
}

#modalViewPettyCash .close{
		display:none;	
}
#pettyCashDetails{
	height:550px;
	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalViewPettyCash{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}
}
}

/* Popup container - can be anything you want */
.popup {
    position: top;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup      background-color: #555;*/
.popup .popuptext {
    visibility: hidden;
    width: 260px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 60px;
    padding: 9px 10px;
    position: absolute;
    z-index: 1;
    bottom: 115%;
    left: 50%;
    margin-left: -1000px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}




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

tr:hover{
	background-color:whitesmoke;
}




</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Inbox
      
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Petty Cash</a></li>
    	</ol>
	</section>
           
	<?php
include('../ong/Admin/connect.php');

error_reporting(0);
?>

      <!-- //start#class -->
	  <div class="table-responsive">
						  
						  
						  
						  <table class="display table table-striped" id="example" cellspacing="0" width="100%">
							<thead>
							  <tr>
							<th style="width:2%;background-color:#454545; color:white; text-align:center;font-family:Times New Roman, Times, serif;">Upload_by</th>
													  <th style="width:11%;background-color:#454545; color:white; text-align:center;font-family:Times New Roman, Times, serif;">Job&nbsp;Title</th>
								 
										   <th style="width:11%;background-color:#454545; color:white; text-align:center;font-family:Times New Roman, Times, serif;">Data&nbsp;Sizes</th>
								 
						  <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">No of Job Applications</th>
							  
							  
							  
							  <!--h style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Posted</th>
							  
								  <th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">UnPosted</th-->
								  
								  
								  
								  
								  
									<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Action</th>
						  
							   
							  </tr>
							</thead>
					
							   
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
				  
							 $query = mysql_query("select distinct Jobtitle, Vacancy,item_id, category_id from posting") or die(mysql_error());
									  while ($row = mysql_fetch_array($query)) {
						  $category_id=$row['category_id'];
						  $department=$row['department'];
						  $item_id=$row['item_id'];
						  ?>
						  
						  
						  
					<tr>
					   <td class="zoom">
							  <center> <img src="../ong/Admin/userportal/item_images/<?php echo $row['Jobtitle'];?>.jpg" class="img img-rounded"  width="65" height="45" /></center>
							   </td>
					
					
							
					
					
			  
						  <td><?php
							
						  $cat=$row['item_id'];
						  $query1 = mysql_query("select * from posting where item_id='$cat'") or die(mysql_error());
						  $row1 = mysql_fetch_array($query1);
						  echo $row1['Jobtitle'];
						  ?></td>
						  
					
					
			  
					
				   
						  
						  
						  <!-- This is the final count for the menufinance -->
						  <td style="width:9%;">
						  <!--?php
				  $file= '../../../item_images/'.$row["item_image"].'';
			  $filesize = filesize($file);
			  $filesize = round($filesize /1024 / 1024, 1);
			  
			  echo "$filesize".'MB';
			  ?-->
			  
			  INSIDE
						  </td>
						  
						<td style="text-align:center;width:12%;"><?php
			  $connection=mysqli_connect('localhost','root','','srms');
			  
						$cate=$row['Jobtitle'];
			   ;        
								  $count_query = mysqli_query($connection,"select * from postingsender where Jobtitle='$cate'") or die(mysqli_error());        
						$count = mysqli_num_rows($count_query);
						
								  ?>
								  
								  
								  
								  <?php echo $count; ?></td>
								  
								  
								  
							  
						
								<!--	
							  
							  select * from tomemorandum where Subject_identity='$Subject_identity' ORDER BY status='Posted'
							  
							  
							  select * from tomemorandum where Status='Unposted' ORDER BY Subject_identity='2'    -->
						
						
						
								 <!--td style="text-align:center;"><?php
						  
						$Subject_identity=$row['Subject_identity'];
								  $count_query = mysql_query("select * from tomemorandum where Subject_identity='1' ORDER BY status='Unposted'") or die(mysql_error());        
						$count = mysql_num_rows($count_query);
						
								  ?>
								  
								  
								  
								  <?php echo $count; ?></td-->
						
						
						
						
						
						
				  
						<!-- Twoo Piece chiecken -->
						
						
						
						
						
						
						
						
					  <td width="140" style="text-align:center; width:15%;">
							  <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="onginternal.php?id=<?php echo $row['Jobtitle'];?>" class="btn btn-primary button button4">View Applicant Resume/CV<?php echo $row7[classname];?>&nbsp;<i class="icon-list icon-large"></i></a>
						 </td>
					</tr>
					<?php } ?>
											  </tbody>
										  </table>
			  
					  
				  <!-- /#wrapper -->										 
															   
															   
															   
															   
															   
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
					</div>
					
					

	  <!-- //End
     -->
   <div id="salaryDetails">
    
    </div>
    
    <div id="viewInvoice">
    
    </div>
    
    <div class="modal msk-fade" id="modalInsertform" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-12 "><!--modal-content --> 
      			<div class="row">
          			<div class="panel panel-info"><!--panel -->
                    	<div class="msk-heading">
                       
                    	<button type="button" onClick="scrollDown()" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>	
                        <br>
                        </div>
            			<div class="panel-body"><!--panel-body -->
                        	<div class="row " id="msk12345">
                            	<div class="col-xs-2">
                                	<div class="div-logo">
                                    	<img class="logo" src="../uploads/logo2.png">
                                    </div>
                                </div>
                       
                          
                        	</div>
<?php  
$current_year=date('Y');
$current_month=date('F');
$current_date=date('Y-m-d');

$index=$_SESSION["index_number"];
$type=$_SESSION["type"];

?>                           
                            
                            <div class="row ">
                                <center><h1>Petty Cash</h1></center>
                                <a href="#" onClick="addNewRow(this)" class="btn btn-success btn-xs "><span class="glyphicon glyphicon-plus"></span></a><!-- MSK-00094--> 
                                <a href="#" onClick="deleteRow(this)" class="btn btn-danger btn-xs " style="margin-right:2px;"><span class="glyphicon glyphicon-remove"></span></a><!-- MSK-00094-->
                                <div class="col-xs-5 col-xs-offset-7 text-right msk-t">
                                    <div class="text-right">
                                    	Year: <?php echo $current_year; ?><br>
                                        Month: <?php echo $current_month; ?><br>
                                    	Date: <?php echo $current_date; ?>
									    
                                    </div>                                
                                </div>
      						</div> <!-- / end client details section -->
                            <form role="form" action="../index.php" method="post" id="form1" class="form-horizontal" >
                             <table class="table table-bordered">
                                <thead>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-6">Description</th>
                                    <th class="col-md-2">Amount($)</th>
                                </thead>
								<tbody class="tBody">
                                    <tr id="tr_1">
                                    	<td id="tdCount_1"> 1</td>
                                       	<td id="tdDesc_1"><input type="text" id="textDesc_1" class="_desc form-control" placeholder="Description 1" autocomplete="off" name="_desc[]"></td>
                                        <td id="tdAmount_1"><input type="text" id="textAmount_1" class="amount form-control" placeholder="25.50" autocomplete="off" name="amount[]"></td>
                                    </tr>
                 				</tbody>
                          	</table> 
                  		</div><!--/.panel-body -->
                        <div class="panel-footer inv-footer text-right" id="msk123456">
                        	<input type="hidden" name="do" value="add_petty_cash" >
                            <input type="hidden" name="_status" value="Active" >
                            <input type="hidden" name="user_type" value="Admin">
                        	<input type="hidden" name="index_number" value="<?php echo $index; ?>" >
                            <input type="hidden" name="received_type" value="<?php echo $type; ?>" >
                        	<input type="submit" class="btn btn-primary" id="btnSubmit" value="Submit">
             			</div>
                        </form>
                	</div><!--/. panel--> 
                </div><!--/.row --> 
            </div><!--/.modal-content -->
        </div><!--/.modal-dialog -->
    </div><!--/.modal -->
    
    <?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#insert_Success');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
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
 
?>   
    
    <!-- //MSK-000124 Modal-Approve Confirm Popup -->
	<div class="modal msk-fade" id="approveConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header bg-primary">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="frm_title">Approval</h4>
      			</div>
				<div class="modal-body bgColorWhite">
        			<strong style="color:red;">Are you sure?</strong>  Do you want to Approve this Petty Cash
        		</div>
      			<div class="modal-footer">
					<a href="#" style="margin-left:10px;" id="btnYesApprove" class="deletebtn btn btn-danger col-sm-2 pull-right">Yes</a><!-- MSK-000125 -->
        			<button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      			</div>
    		</div>
  		</div>
	</div>
    
    <div id="pettyCashDetails">
    
    </div>
     
<script>

$(document).ready(function(){
  var rowCount1 = $('.tBody1 tr').length;
  
 
  for(i=1; i<rowCount1+1; i++){
		
		var num1 = document.getElementById('td_paid_'+i).innerHTML;
		
 		 if(!isNaN(num1)){
			$("#aApprove_"+i).hide();
 		 }
  
  }
  
});

function addNewRow(){
	
	var last_id = $('.tBody tr:last').attr('id').replace('tr_','');

		last_id++;
	
	var tr = '<tr id="tr_'+last_id+'">'+
          		'<td id="tdCount_'+last_id+'">'+last_id+'</td> '+
                '<td id="tdDesc_'+last_id+'"><input type="text" class="_desc form-control" id="textDesc_'+last_id+'" name="_desc[]"  placeholder="Description '+last_id+'" autocomplete="off"/> </td>'+
				'<td id="tdAmount_'+last_id+'"><input type="text" class="amount form-control" id="textAmount_'+last_id+'" name="amount[]"  placeholder="25.50" autocomplete="off"/> </td>'+
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

function showModal2(pCashDetails){
//MSK-00104
	
	var myArray = $(pCashDetails).data("id").split(',');
	
	var id = myArray[0];
	var admin_index = myArray[1]; 
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				
				document.getElementById('pettyCashDetails').innerHTML = this.responseText;//MSK-000137
				$('#modalViewPettyCash').modal('show');			
    		}
			
  		};	
		
    	xhttp.open("GET", "petty_cash_details.php?id=" + id + "&admin_index="+admin_index , true);												
  		xhttp.send();//MSK-00105-Ajax End
	 
};

$('body').on('click', '.confirm-approve', function (e){
//MSK-000122	
	
    e.preventDefault();
    var id = $(this).data('id');
	$('#approveConfirm').data('id1', id).modal('show');//MSK-000123
	
});

$('#btnYesApprove').click(function() {
//MSK-000126
  
	var myArray = $('#approveConfirm').data('id1').split(',');
	
	var id = myArray[0];
	var admin_index  = myArray[1];
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
  		xhttp.onreadystatechange = function() {
    		
			if (this.readyState == 4 && this.status == 200) {
				var myArray1 = eval( xhttp.responseText );
				
				var msg = myArray1[0];
				
				if(msg=1){
					
					$('#approveConfirm').modal('hide');
					window.location.reload();
					
					var myModal = $('#approve_Success');
					myModal.modal('show');
					
					clearTimeout(myModal.data('hideInterval'));
					myModal.data('hideInterval', setTimeout(function(){
						myModal.modal('hide');
					}, 3000));
					
				}
				
				if(msg=2){
					
					var myModal = $('#connection_Problem');
					myModal.modal('show');
			
					clearTimeout(myModal.data('hideInterval'));
					myModal.data('hideInterval', setTimeout(function(){
						myModal.modal('hide');
					}, 3000));
					
				}
				
				
    		}
			
  		};	
		
    	xhttp.open("GET", "../model/approve_petty_cash.php?id=" + id  + "&admin_index="+admin_index , true);												
  		xhttp.send();//MSK-00105-Ajax End
	 			   		
});


function scrollDown(){
	
	window.scrollTo(0,document.body.scrollHeight);
}

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
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>

</div><!-- /.content-wrapper -->  
         
<?php include_once('footer.php');?>