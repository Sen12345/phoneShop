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

//Product quantity ection

let $Qty_up = $(".qty .qty-up");
let $Qty_input = $(".qty .qty_input");
let $Qty_down = $(".qty .qty-down");      
    
 $Qty_up.click( function(e){

if($Qty_input.val() >= 1 && $Qty_input.val() <= 9){
    $Qty_input.val(function(i, oldval){
        return ++oldval;
    }
    )}



 })    
    

$Qty_down.click(function(e){

    if($Qty_input.val() > 1 && $Qty_input.val() <= 9){
      $Qty_input.val(function(i, oldval){
          return --oldval;
      })
    }
    });

});