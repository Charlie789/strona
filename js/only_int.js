$(function () {

    $('#data_form').validate({ // initialize the plugin
        rules: {
            x1: {
                required: true,
                digits: true
            },
            x2: {
                required: true,
                digits: true
            },
	    x3: {
                required: true,
                digits: true
            },
            x4: {
                required: true,
                digits: true
            },
            x5: {
                required: true,
		digits: true
            }
        }
    });

});
