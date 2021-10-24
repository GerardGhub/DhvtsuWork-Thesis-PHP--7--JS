$('#updateForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.updateuser;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-update.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("Successfully update user",{header: 'System user' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=user'  }, delay);
							
						}else{
							$('#loginError').jGrowl("No changes",{header: 'Update failed' });
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
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'The firstname is required'
                    }
                }
            },
			phone: {
                validators: {
                    notEmpty: {
                        message: 'The contact no. is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    },stringLength: {
                        min: 10,
                        max: 10,
                        message: 'Please enter valid contact number'
                    }
                }
            },
			lastname: {
                validators: {
                    notEmpty: {
                        message: 'The lastname is required'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },       
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
					stringLength: {
                        min: 6,
                        max: 50,
                        message: 'The password must be more than 6 and less than 30 characters long'
                    }
                }
            },
            position: {
                validators: {
                    notEmpty: {
                        message: 'The position is required and can\'t be empty'
                    }
                }
            }
 
        }
		
		
		
    });
