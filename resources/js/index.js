$(document).ready(function () {
    $(".form-code").submit(function (event) {
        event.preventDefault();
        var self = $(this);
        var data = new FormData(self[0]);
        $.ajax({
            url: self.attr('action'),
            type: 'post',
            dataType: 'json',
            data: data,
            cache : false,
            processData: false,
            contentType: false,
            success: function (resultado) {
                self.find('.codeMessageResult').val(resultado);
            }
        });
    });
});
