
/**-----------------------------------------------------------------------------------**/
$(document).ready(function()
    {
      $("#myNav").hide();

        $("#OpenNav, #OpenNav2, .xclosebtn").click(function(){

            $("#myNav").slideToggle(700);
      });


   });
/**------------------------------------------------------------------------------------**/
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
/**-----------------------------------------------------------------------------------------------**/
$('.modal').on('click', function(e){
          e.preventDefault();
          $( '#' + $(this).data('modal-id') ).modal();
});

/**-----------------------------------------------------------------------------------------------**/
$(document).ready(function()
    {
      $(".show-content-singin").hide();

        $(".show-singin, .show-singin-xs").click(function(){

            $(".show-content-singin").show();
            $(".show-content-singup").hide();
      });

        $(".show-singup, .show-singup-xs").click(function(){
        	$(".show-content-singup").show();
        	$(".show-content-singin").hide();
        });


   });

/**--------------------------------------------------------------------------------------------------**/

$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
