$(document).ready(function () {
    $("#button_run").on('click', function () {
        let my_number = $('#my_number').val();

        $.ajax({
            url: "/api/fibonacci-number",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                my_number: my_number,
            },
            success: function (response) {
                $('#errors').text('')
                $('#result').text(response.name);
            },
            error: function (jqXHR, exception) {
                $('#errors').text(jqXHR.responseJSON.message);
            }
        });
    });
});
