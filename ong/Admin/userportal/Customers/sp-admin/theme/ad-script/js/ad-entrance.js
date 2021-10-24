$('#adentrance').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.sentrance;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-entrance.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully added entrance",{header: 'New entrance' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=entrance'  }, delay);
							
						}else{
							$('#loginError').jGrowl(responseText,{header: 'Adding Entrance Failed' });
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
            type: {
                validators: {
                    notEmpty: {
                        message: 'The typeis required'
                    }
                }
            },
			price: {
                validators: {
                    notEmpty: {
                        message: 'The contact no. is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    }
                }
            }
           
 
        }
		
		
		
    });
