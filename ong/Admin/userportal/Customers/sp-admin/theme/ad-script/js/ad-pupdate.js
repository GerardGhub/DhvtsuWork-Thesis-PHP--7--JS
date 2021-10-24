$('#epromo').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
			    var sid = $('#sid').val();
               	var form = document.upromo;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-pupdate.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully update promo",{header: 'System promo' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=promo&id='+sid  }, delay);
							
						}else{
							$('#loginError').jGrowl("No changes",{header: 'Update failed' });
							}
					}
        });
        return false;
            },
        fields: {
           promo: {
                validators: {
                    notEmpty: {
                        message: 'The promo is required'
                    }
                }
            },
			discount: {
                validators: {
                    notEmpty: {
                        message: 'The discount is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    }
                }
            }

        }
		
		
		
    });
