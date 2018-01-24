// Gömmer formuläret för registrering tills dess att man klickar på knappen
// Då göms istället formuläret för login.


jQuery(document).ready(function($) {

    jQuery('.reg-form').hide();
    jQuery('.reg-title').hide();
    jQuery('.btn-reg').click(function () {
        jQuery('.login-form').hide();
           jQuery('.login-title').hide();
        jQuery('.reg-form').show();
        jQuery('.reg-title').show();

    })

    jQuery('.btn-login').click(function () {
        jQuery('.reg-form').hide();
        jQuery('.reg-title').hide();
        jQuery('.login-form').show();
            jQuery('.login-title').show();

    })

    jQuery('.um-message').hide();
        jQuery('.um-button').click(function () {
        jQuery('.um-message').show();
        jQuery('.login-form').hide();
           jQuery('.login-title').hide();
              jQuery('.reg-form').hide();
                jQuery('.reg-title').hide();
            jQuery('.btn-reg').hide();
            jQuery('.btn-start').show();

        })

});