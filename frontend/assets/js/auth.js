$(document).ready(function(){
    $('#registration-form').on("submit", function(event){
        event.preventDefault();
        console.log(formValues);
        $.ajax({
            type: 'post',
            url: '/minsk_attractions/backend/services/auth/registrationHandler.php',
            data: {
                "login" : $('#registration-login').val(),
                "email" : $('#registration-email').val(),
                "password" : $('#registration-password').val(),
                "repeatPassword" : $('#registration-confirm-password').val(),
            },
            success: function (data) {
                $('body').append(data);
                $('.popap--blackout, .popap--video').addClass('active');
            }
        });
    });

    $('#login-form').on("submit", function(event){
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: '/minsk_attractions/backend/services/auth/loginHandler.php',
            data: {
                "login" : $('#login').val(),
                "password" : $('#login-password').val(),
            },
            success: function (data) {
                $('body').append(data);
                $('.popap--blackout, .popap--video').addClass('active');
            }
        });
    });
});