$(document).ready(function(){
    $('#registration-form').on("submit", function(event){
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: '/minsk_attractions/backend/services/auth/registrationHandler.php',
            data: {
                "login" : $('#registration-login').val(),
                "email" : $('#registration-email').val(),
                "password" : $('#registration-password').val(),
                "repeatPassword" : $('#registration-confirm-password').val(),
            },
            success: function (response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if (jsonData.errors.length > 0){
                    jsonData.errors.forEach(error => {
                        alert(error);
                    });
                }
                else{
                    window.location.href = "/";
                }
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
            success: function (response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if (jsonData.errors.length > 0){
                    jsonData.errors.forEach(error => {
                        alert(error);
                    });
                }
                else{
                    window.location.href = "/minsk_attractions/backend/";
                }
            }
        });
    });
});