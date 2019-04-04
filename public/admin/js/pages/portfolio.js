$(document).ready(function () {
    $('.portfolio-delete').on('click', function () {
        $.ajax({
            url: "portfolio/" + $(this).data('id'),
            type: "post",
            data: {_method: 'delete'},
            success: function () {
                location.reload();
            }
        });
    });

});
