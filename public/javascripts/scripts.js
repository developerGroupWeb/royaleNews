
/**-----------------------------------------------------------------------------------**/
$(document).ready(function()
    {
        $(".card-img-overlay").hide();

        $(".item1").hover(function(){
        $(".item1-overlay").show();
        }, function(){
        $(".item1-overlay").hide();
        });

        $(".item2").hover(function(){
        $(".item2-overlay").show();
        }, function(){
        $(".item2-overlay").hide();
        });

        $(".item3").hover(function(){
        $(".item3-overlay").show();
        }, function(){
        $(".item3-overlay").hide();
        });


        $(".open-searchBar").click(function() {
            $(".searchBar-content").show(300);
        });

   });

