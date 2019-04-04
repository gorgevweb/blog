$(document).ready(function () {
    $('.service-delete').on('click', function () {
        $.ajax({
            url: "services/" + $(this).data('id'),
            type: "post",
            data: {_method: 'delete'},
            success: function () {
                location.reload();
            }
        });
    });
});
