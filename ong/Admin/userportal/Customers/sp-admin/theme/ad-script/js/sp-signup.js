$('#regForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.regForm;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/sp-register.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){
						if(responseText == 'true'){
							$('#loginError').jGrowl("New walkin reservation",{header: 'Registration Completed' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=shoppingcart'  }, delay);
							
						}else{
							$('#loginError').jGrowl(responseText,{header: 'Registration Failed' });
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
					remote: {
                        url: 'theme/ad-process/sp-account.php',
                        message: 'The email is not available'
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
            
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
					remote: {
                        url: 'theme/ad-process/sp-account.php',
                        message: 'The email is not available'
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
                        max: 30,
                        message: 'The password must be more than 6 and less than 30 characters long'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
 
        }
		
		
		
    });

function DisablingBackFunctionality() { 
   var URL; 
   var i; 
   var QryStrValue; 
    
   URL=window.location.href; 
   i=URL.indexOf("?"); 
   QryStrValue=URL.substring(i+1); 
   if (QryStrValue !='X') { 
      window.location=URL+"?X"; 
   } 
} 