//Filtering Products for Womans
$(document).ready(function(){
    $('.stext-106').click(function(e){
        e.preventDefault();
        $value = e.target.value;
        $.ajax({
            url : "/filter",
            type: "GET",
            data: {'type': $value},
            dataType: "json",
            success: function(data) {
                $('#product_div').hide().html(data).fadeToggle(1300);
            },
            error: function() {
                alert('AJAX error');
            }
        });
        console.log($value);
    });
});

$('.js-show-cart').click(function(e){
    e.preventDefault();
    $('.js-panel-cart').addClass('show-header-cart');
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
       }
    });
    $.ajax({
        url : "/listacarrello",
        type: "GET",
        dataType: "html",
        success: function(data) {
            console.log('funziona, prodotto Inserito');
            $('.header-cart-content').html(data);
        },
        error: function(data) {
            console.log('Errore inserimento');
        }
    });
});

/*==================================================================
    [ Cart ] */ /*Javascript che mostra il carrello con i prodotti selezionati*/

$('.js-hide-cart').on('click',function(){
    $('.js-panel-cart').removeClass('show-header-cart');
});

/*==================================================================
[ Cart ]*/

$('.js-show-sidebar').on('click',function(){
    $('.js-sidebar').addClass('show-sidebar');
});

$('.js-hide-sidebar').on('click',function(){
    $('.js-sidebar').removeClass('show-sidebar');
});