$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel({ // it is banner owl carousel
        dots: true,
        items: 1
    });

    $("#top-sale .owl-carousel").owlCarousel({ // it is top sales (owl carousel)
        dots: false,
        loop: true,
        nav: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    var $grid = $(".grid").isotope({  // isotope filters
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    $(".button-group").on("click", "button", function(){ // it is filter items on button
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })

    $("#new-phones .owl-carousel").owlCarousel({  // it is new laptops via owl carousel
        nav: false,
        loop: true, 
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    $("#blogs .owl-carousel").owlCarousel({ // it is blog via owl carousel
        dots: true,
        loop: true,
        nav: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })



    let $qty_up = $(".qty .qty-up");   // it is product via qty section
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    
    $qty_up.click(function(e){      // it is click on qty up
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);     // it is change product price via ajax call
                let item_price = obj[0]['item_price'];
                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));// increasing price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price); // subtotal price
                    $deal_price.text(subtotal.toFixed(2));
                }
            }});                //close ajax request
    });                  //close qty up

    $qty_down.click(function(e){    // it is click on qty down
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);    // it is change product price via ajax call
                let item_price = obj[0]['item_price'];
                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });
                    $price.text(parseInt(item_price * $input.val()).toFixed(2)); // it is increasing price of the product
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);    // set subtotal price
                    $deal_price.text(subtotal.toFixed(2));
                }
            }});                 //close ajax request
    });       //close qty down button
});