$(function () {

    $('#singin .error').css('color', 'red').css('font-style', 'italic');
    $('#singin .fa').css('cursor', 'pointer');

    $('#fa-eye, #fa-eye-slash').click(function () {

        if(this.id == 'fa-eye'){
            $('#password').attr('type', 'text');
            $(this).hide();
            $('#fa-eye-slash').show();
        }else{
            $('#password').attr('type', 'password');
            $(this).hide();
            $('#fa-eye').show();
        }
    });

    function messageRequire(id){
        return $(id).next('.error').html('Your ' + $(id).attr('title') + ' is required');
    }
    function value(id) {
        return $(id).val();
    }

    $('#singin').submit(function () {

        var validate = true,
            data = ['#email', '#password'];
        for(var i = 0; i < data.length; i++){
            if(value(data[i]) == ''){
                messageRequire(data[i]);
                validate = false;
            }
        }
        return validate;
    });

    $('#email').keyup(function () {

        if(value('#email').match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });

    $('#password').keyup(function () {

        if($(this).val().length < 8){
            $(this).next('.error').fadeIn('slow').html('Type at least 8 characters');
            validate = false;
        }else{
            $(this).next('.error').fadeOut();
            validate = true;
        }
        return validate
    });





});