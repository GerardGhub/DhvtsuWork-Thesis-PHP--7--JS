$('#acheckout').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.checks;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-cupdate.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully checkout reservation",{header: 'Reservation checkout' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=home'  }, delay);
							
						}else{
							$('#loginError').jGrowl("No reservation",{header: 'Update failed' });
							}
					}
        });
        return false;
            }
		
    });
