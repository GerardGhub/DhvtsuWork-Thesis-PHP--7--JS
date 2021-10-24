$('#editentrance').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.eentrance;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-eupdate.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully update entrance",{header: 'System entrance' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=entrance'  }, delay);
							
						}else{
							$('#loginError').jGrowl("No changes",{header: 'Update failed' });
							}
					}
        });
        return false;
            },
        fields: {
           entrance: {
                validators: {
                    notEmpty: {
                        message: 'The entrance is required'
                    }
                }
            },
			price: {
                validators: {
                    notEmpty: {
                        message: 'The guest type is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
			type: {
                validators: {
                    notEmpty: {
                        message: 'The price is required'
                    }
                }
            }
 
        }
		
		
		
    });
