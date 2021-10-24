$('#addentrance_c').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.entrance_c;
				var dataString = $(form).serialize();
				var guest_id = $('#guest_id').val();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-payable.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully added entrance",{header: 'New account payable' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 3000;
							setTimeout(function(){ window.location = '?page=guestorders&id='+guest_id  }, delay);
							
						}else{
							$('#loginError').jGrowl(responseText,{header: 'Registration Failed' });
							}
					}
        });
        return false;
            },
        fields: {
            bank: {
                validators: {
                    notEmpty: {
                        message: 'The bank receipt code is required'
                    }
                }
            },
            entrance: {
                validators: {
                    notEmpty: {
                        message: 'The entrace is required'
                    }
                }
            }
 
        }
		
		
		
    });
