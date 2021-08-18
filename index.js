$(document).ready(function(){


    jQuery("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });



    jQuery("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        responsive: {
            0:{
                items:1
            },

            600:{
                items:3
            },

            1000:{
                items: 5
            }
        }



    });

    //Isotope philter
    let grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode: 'fitRows'
    });

    //Filter item on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter");
        grid.isotope({
            filter: filterValue
        });
    });

    jQuery("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        responsive: {
            0:{
                items:1
            },

            600:{
                items:3
            },

            1000:{
                items: 5
            }
        }



    });

    jQuery("#latest-blog .owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        responsive: {
            0:{
                items:1
            },

            600:{
                items:3
            },


        }
    });

//Product quantity section

    let $Qty_up = $(".qty .qty-up");
   // let $Qty_input = $(".qty .qty_input");
    let $Qty_down = $(".qty .qty-down");

    $Qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);

        if($input.val() >= 1 && $input.val() <= 9){

            $input.val(function(i, oldval){
                    return ++oldval;
                });
            }



    });


    $Qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return --oldval;
            })
        }
    });

});