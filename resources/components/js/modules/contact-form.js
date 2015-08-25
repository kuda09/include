$(function (){

    $('#contactForm').validate({

        //validation rules
        onkeyup: false,
        onfocusout: true,
        errorElement: 'div',
        errorPlacement: function (error, element){
            error.appendTo('.errors')
        },

        rules : {
            'formName' : {
                required: true
            },
            'formLastName' : {
                required : true
            },
            'emailAddress': {
                required : true,
                email: true
            }

        },
        messages : {
            'formName': 'Please enter a first name!',
            'formLastName': 'Please enter a last name!',
            'emailAddress': {
                'required': 'Please enter an email address',
                'email': 'Please enter a valid email address'
            }
        }

    });
});