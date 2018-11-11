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

    var help = $('#help');

    help.click(function() {
        $(this).stop().animate({
            position: 'fixed',
            bottom: '-40px',
        });
    });
});