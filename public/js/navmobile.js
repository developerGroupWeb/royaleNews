$(function(){
	$('.fa-times').hide();

    $('.fa-bars').click(function () {
        $('.sidenavLeft').width(260);
        $('.fa-bars').hide();
        $('.fa-times').show();
    });
    	$('.fa-times').click(function () {
        $('.sidenavLeft').width(0);
        $('.fa-times').hide();
        $('.fa-bars').show();
    });

    $(window).click(function(e) {

        // Si ce n'est pas div ni un de ses enfants
        if(!$(e.target).is('.fa-bars') && !$.contains($('.sidenavLeft')[0],e.target) ) {
            $('.sidenavLeft').width(0);
            $('.fa-times').hide();
        	$('.fa-bars').show();
        }
    });


    var help = $('#helpMsg, #helpMsgToo');

    help.click(function() {

        if(this.id == 'helpMsg'){

            $('#help').stop().animate({
                position: 'fixed',
                bottom: '-10px',
                width: '400px',
            }, 1000);

            $(this).hide();

            $('#helpMsgToo').show();

        }else{

            $('#help').stop().animate({
                position: 'fixed',
                bottom: '-142px',
                width: '250px',
            }, 1000, 'linear');

            $(this).hide();

            $('#helpMsg').show();
        }

    });






});