$(document).ready(function (e){
    e.preventDefault;
    $('.js-miei-ordini').click(function() {
        console.log("Cliccato");
        $.ajax({
           url: '/ordini',
           type: 'GET',
           success: function (data) {
              $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
           }
        });
    });
});


$(document).ready(function (e){
    e.preventDefault;
    $('.js-indirizzi').click(function() {
        console.log("Cliccato");
        $.ajax({
            url: '/indirizzi',
            type: 'GET',
            success: function (data) {
                $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
            }
        });
    });
});