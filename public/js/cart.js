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