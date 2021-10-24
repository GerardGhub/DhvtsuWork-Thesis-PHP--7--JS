$('#editcategory').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cname: {
                validators: {
                    notEmpty: {
                        message: 'The category name is required'
                    }
                }
            },
            cprice: {
                validators: {
                    notEmpty: {
                        message: 'The category price is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            ccapacity: {
                validators: {
                    notEmpty: {
                        message: 'The category capacity is required'
                    },
					digits: {
                        message: 'The value can contain only digits'
                    }
                }
            }
			,
            image: {
                validators: {
                    notEmpty: {
                        message: 'The category image is required'
                    }
                }
            }
			
 
 
        }
		
		
		
    });
