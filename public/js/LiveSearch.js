/* Funzione di ricerca dei prodotti nel DB e render Html senza Refresh Pagina (HTML page) */
$(document).ready(function(){
    var typingTimer;
    var doneTypingInterval = 800;
    $('#SearchID').keyup(function(e){
        e.preventDefault();
        clearTimeout(typingTimer)
        if ($('#SearchID').val()){
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }
        function doneTyping() {
            $value = $('#SearchID').val();
            $.ajax({
                url: "/search",
                type: "GET",
                data: {'name': $value},
                dataType: "json",
                success: function (data) {
                    $('#product_div').hide().html(data).fadeToggle(1500);
                    console.log(data);
                },
                error: function () {
                    alert('AJAX error');
                }
            });
        }
        console.log($value);
    });
});