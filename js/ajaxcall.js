$(document).ready(function() {
    console.log("document ready");
    $("#generate").click(function() {
        console.log("generating");
        $.ajax({
            type: 'post',
            url: 'api.php',
            cache: false,
            data: {
                persons: $("#persons").val(),
                teams: $("#teams").val()
            },
            success: function(data) {
                $('#persons').val(data);
            }
        });
    });
    $('#persons').attr('placeholder', 'Player1\nPlayer2\nPlayer3');
});
