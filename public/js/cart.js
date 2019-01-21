/* Filtro per aggiunta dei prodotti nella Wishlist e per la gestione grafica del Pop-up */
$(document).ready(function(){
    $('.js-addcart-detail').click(function(e){
        e.preventDefault();
        $nome = $(this).parent().parent().parent().parent().find('.js-name-detail').text();
        $value = $(this).attr('value');
        $numb = $('.num-product').val();
        $(this).click(false);
        console.log($value);
        console.log($numb);
        $(this).addClass('js-addedwish-b2');
        swal( $nome, "Aggiunto Al Carrello", "success");
        console.log($value);
        $.ajax({
            url : "/addtocart",
            type: "GET",
            data: {'id': $value, 'num': $numb}
        });
        $.ajax({
            url : '/getnumberitemcart',
            type: "GET",
            success: function(data) {
                console.log(data);
                $('.js-show-cart').attr('data-notify', data['count']);
            }
        });
    });
});

$(document).ready(function() {
    $.ajax({
        url : '/getnumberitemcart',
        type: "GET",
        success: function(data) {
            console.log(data);
            $('.js-show-cart').attr('data-notify', data['count']);
        }
    });
});

