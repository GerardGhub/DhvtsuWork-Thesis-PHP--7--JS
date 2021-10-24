$('#confirmR').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.sconfirm;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-oupdate.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully confirm reservation",{header: 'Reservation update' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=home'  }, delay);
							
						}else{
							$('#loginError').jGrowl("You need to add entrance first!",{header: 'Confirmation failed' });
							}
					}
        });
        return false;
            },
        fields: {
            'select[]': {
                validators: {
                    choice: {
                        min: 1,
                        max: 10,
						message: '<i class="glyphicon glyphicon-remove"></i>'
                    }
                }
            } 
 
        }
		
		
		
    });
	
