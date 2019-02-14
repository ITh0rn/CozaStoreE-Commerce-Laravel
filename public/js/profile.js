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

$(document).ready(function (e){
    e.preventDefault;
    $('.js-dati-utente').click(function() {
        console.log("Cliccato");
        $.ajax({
            url: '/userinfo',
            type: 'GET',
            success: function (data) {
                $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
            },
            error: function () {
              alert('errore AJAX')
            }
        });
    });
});


$(document).ready(function (e){
    e.preventDefault;
    $('.js-pagamento').click(function() {
        console.log("Cliccato");
        $.ajax({
            url: '/opzioni-di-pagamento',
            type: 'GET',
            success: function (data) {
                $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
            }
        });
    });
});

$(document).on('click', function (e){
    e.preventDefault;
    $('.js-addAddress').click(function() {
        console.log("Cliccato");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/addAddress',
            type: 'POST',
            data: {'city': $city, 'province': $province, 'cap': $cap, 'address': $address, 'civic': $civic}
            success: function (data) {
                $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
            }
        });
    });
});