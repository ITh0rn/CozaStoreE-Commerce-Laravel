$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    $url = $(this).attr('href').split('page=')[1];
    console.log($url);
    $.ajax({
        url: '/ajax?page=' +$url

    }).done(function (data) {
        $('.js-comments').hide().html(data).fadeIn(1000);
    });
});