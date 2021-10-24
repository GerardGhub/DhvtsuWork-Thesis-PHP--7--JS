$('#sentme').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.ssent;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-sentmessage.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully confirm reservation",{header: 'Reservation update' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=message'  }, delay);
							
						}else{
							$('#loginError').jGrowl(responseText,{header: 'Sending failed' });
							}
					}
        });
        return false;
            },
        fields: {
             message: {
                validators: {
                    notEmpty: {
                        message: 'The message is required'
                    }
                }
            }
 
        }
		
		
		
    });
