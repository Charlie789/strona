$(function () {

    $('#register_form').validate({ // initialize the plugin
        rules: {
            pass: {
                required: true,
                minlength: 8
            },
            pass2: {
                required: true,
                minlength: 8
            },
	        login: {
                required: true
            }
        }
    });

});
