//script al primo caricamento per gestire la visualizzazione del voto in formato stella
$(document).ready(function () {
    $('.js-comments').find('.js-comment-div-start').each(function () {
        $num = $(this).find('.js-startcomment').attr('value');
        console.log($num);
        var i = 0;
        $(this).find('.js-startcomment').children('i').each(function () {
            if (i < $num) {
                $(this).addClass('zmdi zmdi-star');
                i++;
            }
        });
    });
});

//Script Jquery/Ajax che gestiste la paginate dei commenti;
$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    $url = $(this).attr('href').split('page=')[1];
    $.ajax({
        url: '/ajax?page=' +$url

    }).done(function (data) {
        $('.js-comments').hide().html(data).fadeIn(1000);
        $('.js-comments').find('.js-comment-div').each(function () {
            $num = $(this).find('.js-star-comm').attr('value');
            console.log($num);
            var i = 0;
            $(this).find('.js-star-comm').children('i').each(function () {
                if (i < $num) {
                    $(this).addClass('zmdi zmdi-star');
                    i++;
                }
            });
        });
    });
});