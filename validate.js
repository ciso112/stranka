$(document).ready(function () {

    $('#add_article').validate({ // initialize the plugin
        rules: {
            novinky_nadpis: {
                required: true,
                minlength: 5
            }
        }
    });

});