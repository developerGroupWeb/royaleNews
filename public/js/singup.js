$(function () {

    $('#singup .error').css('color', 'red').css('font-style', 'italic');
    $('#singup .fa').css('cursor', 'pointer');

    $('#fa-eye, #fa-eye-slash').click(function () {

        if(this.id == 'fa-eye'){
            $('#password, #passwordConfirm').attr('type', 'text');
            $(this).hide();
            $('#fa-eye-slash').show();
        }else{
            $('#password, #passwordConfirm').attr('type', 'password');
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

    $('#singup').submit(function () {
        var validate = true,
            data = ['#firstname', '#surname', '#email', '#password', '#passwordConfirm'];

        if(!value('#inlineRadio:checked')){
            $('#inlineRadio').css('color', 'red');
            validate = false;
        }
        for(var i = 0; i < data.length; i++){
            if(value(data[i]) == ''){
                messageRequire(data[i]);
                validate = false;
            }
        }
       return validate;
    });


    $('#firstname').keyup(function () {

        if($(this).val().length < 4){
            $(this).next('.error').fadeIn('slow').html('Type at least 5 characters');
            validate = false;
        }else if(value('#firstname').match(/^[a-z]+$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });
    $('#surname').keyup(function () {

        if($(this).val().length < 4){
            $(this).next('.error').fadeIn('slow').html('Type at least 5 characters');
            validate = false;
        }else if(value('#surname').match(/^[a-z]+$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
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

    $('#passwordConfirm').keyup(function () {

        if($(this).val() != $('#password').val()){
            $(this).next('.error').fadeIn('slow').html('Your passwords are not identical');
            validate = false;
        }else{
            $(this).next('.error').fadeOut();
            validate = true;
        }
    });


});