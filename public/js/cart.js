$(document).ready(function(){
    $('.js-addwish-b2').click(function(e){
        e.preventDefault();
        $value = $(this).attr('value');
        console.log($value);
        $.ajax({
            url : "/addtocart",
            type: "GET",
            data: {'id': $value}
        });
    });
});

$('.js-addwish-b2').each(function(){
    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    $(this).on('click', function(){
        swal(nameProduct, "Aggiunto alla Wishlist", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
    });
});

$('.js-addwish-detail').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

    $(this).on('click', function(){
        swal(nameProduct, "Aggiunto alla Wishlist", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
    });
});

/*---------------------------------------------*/

$('.js-addcart-detail').each(function(){
    var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
    $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
    });
});