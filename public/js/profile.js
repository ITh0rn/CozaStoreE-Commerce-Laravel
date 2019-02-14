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
              alert('errore AJAX');
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

$(document).on('click', '.js-addAddress', function (e){
        e.preventDefault();
        $city = $('.js-address-città').val();
        $province = $('.js-address-Provincia').val();
        $cap = $('.js-address-CAP').val();
        $address = $('.js-address-email').val();
        $civic = $('.js-address-Civico').val();
        console.log($city, $province, $cap, $address, $civic);
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '/addressadding',
            data: {'city': $city, 'province': $province, 'cap': $cap, 'address': $address, 'civic': $civic},
            success: function (data) {
                if($.isEmptyObject(data.error)){
                    console.log('inserito');
                    $(".print-error-msg-review").find("ul").html('');
                    swal({
                        title: "Indiririzzo Inserito",
                        text: "Grazie per la collaborazione",
                        icon: "success",
                        button: false,
                        timer: 1500
                    }).then(() => {
                        $.ajax({
                            url: '/indirizzi',
                            type: 'GET',
                            success: function (data) {
                                $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
                            }
                        });
                    });
                }
                else {
                    $(".print-error-msg-address").find("ul").html('');
                    $.each(data.error, function (key, value) {
                        $('.print-error-msg-address').find('ul').append('<li>' + value + '</li>');
                        $('.print-error-msg-address').css('visibility', 'visible');
                    });
                }
            }
        });
});

$(document).on('click', '.js-remove-address', function (e) {
   e.preventDefault();
    $id= $(this).attr('data');
    swal({
        title: "Sei sicuro?",
        text: "Una volta cancellato non sarà più possibile recuperare l'indirizzo",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: '/removeaddress',
                    type: "GET",
                    data: {'id': $id}
                });
                swal("Indiririzzo cancellato correttamente", {
                    icon: "success",
                }).then(() => {
                    $.ajax({
                        url: '/indirizzi',
                        type: 'GET',
                        success: function (data) {
                            $('.js-profilo-utente').hide().html(data).fadeToggle(1200);
                        }
                    });
                });
            } else {
                swal("Operazione annullata");
            }
        });
});