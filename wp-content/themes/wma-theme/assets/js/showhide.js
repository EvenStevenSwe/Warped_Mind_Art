
jQuery(document).ready(function($) {

    jQuery('.reg-form').hide();
    jQuery('.reg-title').hide();
    jQuery('.btn-reg').click(function () {
        jQuery('.login-form').hide();
           jQuery('.login-title').hide();
        jQuery('.reg-form').show();
        jQuery('.reg-title').show();

    })

});