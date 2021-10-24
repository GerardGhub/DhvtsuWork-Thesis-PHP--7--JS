$('#databases').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		  submitHandler: function(validator, form) {
               	var form = document.dbs;
				var dataString = $(form).serialize();
				$.ajax({
					type: "POST",
					url: "theme/ad-process/ad-database.php",
					dataType: 'html',
					data: dataString,
					success: function(responseText){

							$('#loginError').jGrowl("Successfully backup database",{header: 'Database backup' });
							$('#loginError').jGrowl("Please wait...",{header: 'Initializing' });
							var delay = 5000;
							setTimeout(function(){ window.location = '?page=backup&database='+responseText  }, delay);
					
					}
        });
        return false;
            },
        fields: {
             database: {
                validators: {
                    notEmpty: {
                        message: 'The database name is required'
                    }
                }
            }
 
        }
		
		
		
    });
