/* Filtro per aggiunta dei prodotti nella Wishlist e per la gestione grafica del Pop-up */
$(document).ready(function(){
    $('#product_div').on('click', '#btnwish' ,function(e){
        e.preventDefault();
        $nome = $(this).parent().parent().parent().parent().find('.js-name-b2').text();
        $value = $(this).attr('value');
        $(this).click(false);
        console.log($value);
        $(this).addClass('js-addedwish-b2');
        swal( $nome, "Aggiunto alla Wishlist", "success");
        console.log($value);
        $.ajax({
            url : "/addtocart",
            type: "GET",
            data: {'id': $value}
        });
    });
});

