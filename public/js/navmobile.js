$(function(){

    $('.fa-bars').click(function () {
        $('.sidenavLeft').width(260);
    });

    $(window).click(function(e) {

        // Si ce n'est pas div ni un de ses enfants
        if(!$(e.target).is('.fa-bars') && !$.contains($('.fa-bars')[0],e.target) ) {
            $('.sidenavLeft').width(0);
        }
    });
});