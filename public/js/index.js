$(document).ready(function () {
    $("#saveCodeResult").click(function () {
        var form = new FormData($("#form-code")[0]);
        var url = $("#form-code").attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function (resultado) {
                $("#codeMessageResult").val(resultado);
            }
        });
    });

    $("#saveDecodeResult").click(function () {
        var form = new FormData($("#form-decode")[0]);
        var url = $("#form-decode").attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function (resultado) {
                $("#decodeMessageResult").val(resultado);
            }
        });
    });
});
