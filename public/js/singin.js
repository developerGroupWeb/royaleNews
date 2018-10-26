$(function () {

    $('#singin .error').css({
        color: 'red',
        fontStyle: 'italic'
    });
    $('#singin .fa').css('cursor', 'pointer');

    /**
     * show and hide password
     */
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

    /**
     * make the button disabled
     */
   $('#singin #email, #singin #password').keyup(function () {
        singinButton = $('.singinButton');

        if(this.id == 'email'){
            email    = $(this).val();
            password = $('#password').val();
        }else{
            password = $(this).val();
            email    = $('#email').val();
        }
        if(email != '' && password != ''){
            singinButton.removeAttr('disabled')
                .css({
                    cursor: 'pointer',
                    background: 'rgba(0,198,255, 1)',  /* fallback for old browsers */
                    background: '-webkit-linear-gradient(to right, rgba(0,198,255, 1), rgba(0,114,255, 1))',  /* Chrome 10-25, Safari 5.1-6 */
                    background: 'linear-gradient(to right, rgba(0,198,255, 1), rgba(0,114,255, 1))' /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                });
        }else{
            singinButton.attr('disabled', 'disabled')
                .css({
                    cursor: 'not-allowed',
                    background: 'rgba(0,198,255, .1)',  /* fallback for old browsers */
                    background: '-webkit-linear-gradient(to right, rgba(0,198,255, .1), rgba(0,114,255, .1))',  /* Chrome 10-25, Safari 5.1-6 */
                    background: 'linear-gradient(to right, rgba(0,198,255, .1), rgba(0,114,255, .1))' /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                });
        }

    });




    /**
     * form processing
     */
    function messageRequire(id){
        return $(id).next('.error').html('Your ' + $(id).attr('title') + ' is required');
    }
    function value(id) {
        return $(id).val();
    }

    var validate = true,
        data = ['#email', '#password'];

    $('#singin').submit(function () {
        
        for(var i = 0; i < data.length; i++){
            if(value(data[i]) == ''){
                messageRequire(data[i]);
                validate = false;
            }
        }
        return validate;
    });

    $('#singin #email').keyup(function () {

        if(value('#email').match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });

    $('#singin #password').keyup(function () {
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