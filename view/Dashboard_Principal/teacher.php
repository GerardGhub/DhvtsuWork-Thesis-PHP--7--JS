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

.msk-col-md-4{
	width:28%;
}
.modal{
	overflow-y: auto;
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.msk-image-error{
	border:1px solid #f44336;
	
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

@media only screen and (max-width: 500px) {
	
	#divGender1, #divPhone1, #divEmail1{
		
	 	width:75%;
		
	}

}

</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Teacher Registration
        
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Teacher</a></li>
         </ol>
     </section>

    <!-- Main content -->
    <section class="content">
        <div class="row" id="test123">
            <!-- left column -->
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Teacher</h3>
                    </div><!-- /.box-header -->
                    <!-- form start //MSK-00097-->
                    <form role="form" action="../../index.php" method="post"  enctype="multipart/form-data" id="form1" class="form-horizontal" >
                        <div class="box-body" >
                        	<div class="form-group" id="divIndexNumber">
                                <div class="col-xs-3">
                                    <label>Teacher No.</label>
                                </div>
                                <div class="col-xs-9">
								<?php
$connection=mysqli_connect('localhost','root','','std_db');

       
                    $count_query = mysqli_query($connection,"select * from std_db.teacher") or die(mysqli_error());        
          $count = mysqli_num_rows($count_query);
          
                    ?>
					
					
					
                
                                    <input type="text" class="form-control" placeholder="Teacher No." name="index_number" id="index_number" value="<?php echo $count + 1; ?>" autocomplete="off" readonly >  
                                </div>                    
                            </div>
                            <div class="form-group" id="divFullName">
                                <div class="col-xs-3">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Full Name" name="full_name" id="full_name" autocomplete="off">  
                                </div>                    
                            </div>
                            <div class="form-group" id="divIName" >
                                <div class="col-xs-3">
                                    <label>Nick Name</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Nick Name" name="i_name" id="i_name" autocomplete="off">
                                </div>
                            </div>
                             <div class="form-group" id="divAddress" >
                                <div class="col-xs-3" >
                                    <label>Address</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Address" name="address" id="address" autocomplete="off"> 
                                </div>                     
                            </div>
							<div class="form-group" id="divt_password">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Password</label>
                                        </div>
                                        <div class="col-xs-9" id="divt_password1">
                                           <input type="password" class="form-control" placeholder="Password" name="password" minlength="8" id="t_password" autocomplete="off"> 
										   <span id='t_message'></span>
                                        </div>                    
                                    </div>


									<div class="form-group" id="divt_confirm_password">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Confirm Password</label>
                                        </div>
                                        <div class="col-xs-9" id="divt_confirm_password1">
                                           <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" minlength="8" id="t_confirm_password" autocomplete="off"> 
                                        </div>                    
                                    </div>



								<div class="form-group" id="divgrade">
								<div class="col-xs-3">
								<label for="exampleInputEmail1">Select Grade</label>
								</div>
								<div class="col-xs-9" id="divgrade1">

								<select  class="form-control"  name="grade" required id="grade">
								<?php
								include('connect.php');
								$cat_query = mysql_query("SELECT * FROM grade");
								while($cat_row = mysql_fetch_array($cat_query)){
								?>
								<option value="<?php echo $cat_row['name']; ?>"><?php echo $cat_row['name']; ?></option>
								<!-- <option value="<?php echo $cat_row['id']; ?>"><?php echo $cat_row['name']; ?></option> -->
								<?php  } ?>



								</select>
								</div>                    
								</div>                              					 

							


                            <div class="form-group" id="divGender">
                                <div class="col-xs-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-xs-4" id="divGender1">
                                    <select name="gender" class="form-control" id="gender" >
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                    </select>
                                </div>
                            </div>

							<div class="form-group" id="divbirth_date1">
                                <div class="col-xs-3">
                                    <label>Birth Date </label>
                                </div>
                                <div class="col-xs-4" id="divbirth_date1">
                                    <input type="date" class="form-control" placeholder="Birth Date" name="birth_date" id="birth_date" autocomplete="off">
                                </div>
                            </div>


                            <div class="form-group" id="divPhone">
                                <div class="col-xs-3">
                                    <label>Phone Number </label>
                                </div>
                                <div class="col-xs-4" id="divPhone1">
                                    <input type="tel" class="form-control" minlength="11"  maxlength="11"  placeholder="09650695252" name="phone" id="phone" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group tt2 " id="divEmail">
                                <div class="col-xs-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-xs-6" id="divEmail1">
                                    <input type="email" class="form-control"  placeholder="Email Address" name="email" id="email" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group" id="divPhoto">
                                <div class="col-xs-3">
                                    <label>Photo</label>
                                </div>                            
                                <div class="col-xs-3" id="divPhoto1" style="height:150px;">
                                    <img id="output" style="width:130px;height:150px;" />
                                    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;"  />
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <input type="hidden" name="do" value="add_teacher"  />
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- End of form section -->
    
<!-- Form validate (Before submit the form) -->       
<script>

$('[type="file"]').change(function (){
	//MSK-00098
	
	var fileSize = this.files[0].size;	
    var maxSize = 1000000;// bytes
	var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
	var imageNoError = 0;
	
	if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
		//MSK-00099
		output.src="../../uploads/error.png";
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"                                title="The file type is not allowed" ></span>');
		
	}else{

		if(fileSize > maxSize) {
			//MSK-00100
			output.src="../../uploads/error.png";
			$("#btnSubmit").attr("disabled", true);
			$('#divPhoto').addClass('has-error');
			$('#divPhoto1').addClass('has-feedback');	
			$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip" title="The file size is too large" ></span>');		
			
					
		}else{
			// MSK-00101
			output.src = URL.createObjectURL(this.files[0]);	
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhoto').removeClass('has-error');
			$('#spanPhoto').remove();// MSK-00101
			
		}
	}
});

$("#form1").submit(function (e) {
	//MSK-000098-form1 submit

	var index_number = $('#index_number').val();
	var full_name = $('#full_name').val();	
	var i_name = $('#i_name').val();
	var gender = $('#gender').val();	
	var phone = $('#phone').val();
	var email = $('#email').val();	
	var photo = $('#fileToUpload').val();
	var address = $('#address').val();
	
	var password = $('#t_password').val();
	var confirm_password = $('#t_confirm_password').val();
	var grade = $('#grade').val();
	var birth_date = $('#birth_date').val();

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
	var telformat = /\d{3}[\-]\d{3}[\-]\d{4}$/;
	var imageNoError= 0;
	
	if(index_number == ''){
		//MSK-00102-index_number 
		$("#btnSubmit").attr("disabled", true);
		$('#divIndexNumber').addClass('has-error has-feedback');
		$('#divIndexNumber').append('<span id="spanIndexNumber" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip"   	data-toggle="tooltip"    title="The index number is required" ></span>');	
			
		$("#index_number").keydown(function(){
			//MSK-00103-index_number 
			$("#btnSubmit").attr("disabled",false);	
			$('#divIndexNumber').removeClass('has-error has-feedback');
			$('#spanIndexNumber').remove();
			
		});

	}else{
		
	}

	if(full_name == ''){
		//MSK-00102-full_name 
		$("#btnSubmit").attr("disabled", true);
		$('#divFullName').addClass('has-error has-feedback');
		$('#divFullName').append('<span id="spanFullName" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The full name is required" ></span>');	
			
		$("#full_name").keydown(function(){
			//MSK-00103-full_name 
			$("#btnSubmit").attr("disabled",false);	
			$('#divFullName').removeClass('has-error has-feedback');
			$('#spanFullName').remove();
			
		});

	}else{
		
	}

	if(i_name == ''){
		//MSK-00102-i_name 
		$("#btnSubmit").attr("disabled",true);
		$('#divIName').addClass('has-error has-feedback');
		$('#divIName').append('<span id="spanIName" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$("#i_name").keydown(function(){
			//MSK-00103-i_name 
			$("#btnSubmit").attr("disabled",false);	
			$('#divIName').removeClass('has-error has-feedback');
			$('#spanIName').remove();
			
		});
	
	}else{
		
	}

	if(address == ''){
		//MSK-00102-address
		$("#btnSubmit").attr("disabled",true);
		$('#divAddress').addClass('has-error has-feedback');
		$('#divAddress').append('<span id="spanAddress" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The address is required" ></span>');	
		
		$("#address").keydown(function() {
			//MSK-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divAddress').removeClass('has-error has-feedback');
			$('#spanAddress').remove();
			
		});
	
	}else{
		
	}



	if(grade == ''){
		//MSK-00102-password
		$("#btnSubmit").attr("disabled", true);
		$('#divgrade').addClass('has-error has-feedback');
		$('#divgrade').append('<span id="spangrade" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The grade is required" ></span>');	
		
		$("#grade").keydown(function() {
			//MSK-00103-password
			$("#btnSubmit").attr("disabled", false);	
			$('#divgrade').removeClass('has-error has-feedback');
			$('#spangrade').remove();
			
		});
	
	}

	
	if(birth_date == ''){
		//MSK-00102-password
		$("#btnSubmit").attr("disabled", true);
		$('#divbirth_date').addClass('has-error has-feedback');
		$('#divbirth_date').append('<span id="spanbirth_date" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The birth date is required" ></span>');	
		
		$("#birth_date").keydown(function() {
			//MSK-00103-password
			$("#btnSubmit").attr("disabled", false);	
			$('#divbirth_date').removeClass('has-error has-feedback');
			$('#spanbirth_date').remove();
			
		});
	
	}

	if(password == ''){
		//MSK-00102-password
		$("#btnSubmit").attr("disabled", true);
		$('#divt_password').addClass('has-error has-feedback');
		$('#divt_password').append('<span id="spant_password" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The passsword is required" ></span>');	
		
		$("#t_password").keydown(function() {
			//MSK-00103-password
			$("#btnSubmit").attr("disabled", false);	
			$('#divt_password').removeClass('has-error has-feedback');
			$('#spant_password').remove();
			
		});
	
	}

	if(confirm_password == ''){
		//MSK-00102- confirm password
		$("#btnSubmit").attr("disabled", true);
		$('#divt_confirm_password').addClass('has-error has-feedback');
		$('#divt_confirm_password').append('<span id="spant_confirm_password" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The confirm passsword is required" ></span>');	
		
		$("#t_confirm_password").keydown(function() {
			//MSK-00103-password
			$("#btnSubmit").attr("disabled", false);	
			$('#divt_confirm_password').removeClass('has-error has-feedback');
			$('#spant_confirm_password').remove();
			
		});
	
	}

	
	if(gender == 'Select Gender'){
		//MSK-00102-gender
		$("#btnSubmit").attr("disabled", true);
		$('#divGender').addClass('has-error has-feedback');
		$('#divGender1').append('<span id="spanGender" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The gender is required" ></span>');	
		
		$("#gender").change(function() {
			//MSK-00103-gender
			$("#btnSubmit").attr("disabled", false);	
			$('#divGender').removeClass('has-error has-feedback');
			$('#spanGender').remove();
			
		});
	
	}else{
		
	}

	if(phone == ''){
  		//MSK-00102-phone
		$('#divPhone').addClass('has-error has-feedback');
		$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The phone number is required" ></span>');	
	 		
		$( "#phone" ).keydown(function() {
			//MSK-00103-phone
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhone').removeClass('has-error has-feedback');
			$('#spanPhone').remove();
			
		});
	
	}
	
	// else{
		// if (telformat.test(phone) == false){ 
		// 	//MSK-00104-phone
		// 	$('#divPhone').addClass('has-error has-feedback');
		// 	$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid phone number" ></span>');
		
		// 	$("#phone" ).keydown(function(){//MSK-00105-phone
				
		// 		var $field = $(this);
    	// 		var beforeVal = $field.val();// this is the value before the keypress

    	// 		setTimeout(function() {

        // 			var afterVal = $field.val();// this is the value after the keypress
				
		// 			if (telformat.test(afterVal) == true){
		// 				//MSK-00106-phone
		// 				$("#btnSubmit").attr("disabled", false);
		// 				$('#divPhone').removeClass('has-error has-feedback');
		// 				$('#spanPhone').remove();
		// 				$('#divPhone').addClass('has-success has-feedback');
		// 				$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
		// 			}else{
		// 				//MSK-00107-phone
		// 				$("#btnSubmit").attr("disabled", true);
		// 				$('#spanPhone').remove();
		// 				$('#divPhone').addClass('has-error has-feedback');
		// 				$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
							
		// 			}
				
    	// 		}, 0);
				 	
		// 	});
		
    	// }else{
		
		// }
		  
	// }
	
	if(email == ''){
   		//MSK-00102-email
		$('#divEmail').addClass('has-error has-feedback');
		$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The email address is required" ></span>');	
	
		$( "#email" ).keydown(function() {
			//MSK-00103-email
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});
		
	}else{
		if (mailformat.test(email) == false){ 
			//MSK-00108-email
			$('#divEmail').addClass('has-error has-feedback');
			$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
		
			$("#email").keydown(function() {//MSK-00109-email
				
				var $field = $(this);
    			var beforeVal = $field.val();// this is the value before the keypress

    			setTimeout(function() {

        			var afterVal = $field.val();// this is the value after the keypress
				
					if (mailformat.test(afterVal) == true){
						//MSK-00110-email
						$("#btnSubmit").attr("disabled", false);
						$('#divEmail').removeClass('has-error has-feedback');
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-success has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-ok form-control-feedback"></span>');
						
					}else{
						//MSK-00111-email
						$("#btnSubmit").attr("disabled", true);
						$('#spanEmail').remove();
						$('#divEmail').addClass('has-error has-feedback');
						$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
					
					}
				
    			}, 0);
				 	
			});
		
		}else{
			
		}
			  
	}

	if(photo == ''){
		//MSK-00102-photo
		output.src="../../uploads/error.png";
		
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback msk-set-width-tooltip" data-toggle="tooltip"    title="The image is required" ></span>');	
		
	}else{
		
	}
	
	if(full_name == '' || i_name == '' || address == '' || gender == '' || phone == '' || email == '' || mailformat.test(email) == false  || photo == '' ){
		//MSK-000098- form1 validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}

});
</script>

<!--run insert alert using PHP & JS/jQuery  -->       
<?php
//MSK-000143-10-PHP-JS-INSERT
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
  
$msg=$_GET['msg'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#index_Duplicated');
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
			
			var myModal = $('#insert_Success');
			myModal.modal('show');

			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
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
	
	if($msg==4){
		echo"
			<script>
			
			var myModal = $('#index_email_Duplicated');
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
			
			var myModal = $('#email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==6){
		echo"
			<script>
			
			var myModal = $('#upload_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
			
			</script>
		";
	
	}
	
}
?><!--./Insert alert -->

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));


$('#t_password, #t_confirm_password').on('keyup', function () {
    if ($('#t_password').val() == $('#t_confirm_password').val()) {
        $('#t_message').html('Matching').css('color', 'green');
    } else 
        $('#t_message').html('Not Matching').css('color', 'red');
});



</script>
  	 	
</div><!-- /.content-wrapper -->  
                           
<?php include_once('footer.php');?>