
$(document).ready(function(){
    $('#WomenButton').click(function(e){
        e.preventDefault();
        var url = e.target.value;
        /*$.ajax(
            url,
            {
            type: "POST",
            succes: function () {
                alert('Cliccato');
            },
            error: function() {
                alert('error');
            }
        });*/
        console.log(url);
    });
});