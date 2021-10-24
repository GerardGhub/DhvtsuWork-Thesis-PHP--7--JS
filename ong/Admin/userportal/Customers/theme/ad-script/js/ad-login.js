$('#adminlogin').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.adlog;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-login.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Loading files please wait...",{header: 'Logging in' });
							$('#loginError').jGrowl("Welcome to magicjadekingdom.com", { header: 'Access Granted' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=1'  }, delay);
							
						}else{
							$('#loginError').jGrowl("Password or username does not match",{header: 'Logging in failed' });
							}
					}
        });
        return false;
            },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
 
        }	
		
    });