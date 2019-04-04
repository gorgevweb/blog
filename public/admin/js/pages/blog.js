$(document).ready(function () {
    $('.post-delete').on('click', function () {
        $.ajax({
            url: "post/" + $(this).data('id'),
            type: "post",
            data: {_method: 'delete'},
            success: function () {
                location.reload();
            }
        });
    });
    $('.category-create').on('click', function () {
        $.ajax({
            url: route('category.store'),
            type: "post",
            data: {
                name: $('#category_name').val(),

            },
            success: function () {
                location.reload();
            }
        });
    });
    $('.category-edit').on('click', function () {
        var id = $(this).data('id');
        var name = $('#category-name-' + id).val();
        $.ajax({
            url: "category/" + id,
            type: "post",
            data: {name: name, _method: 'put'},
            success: function () {
                location.reload();
            }
        });
    });
    $('.category-delete').on('click', function () {
        $.ajax({
            url: "category/" + $(this).data('id'),
            type: "post",
            data: {_method: 'delete'},
            success: function () {
                location.reload();
            }
        });
    });
    $('.tag-create').on('click', function () {
        $.ajax({
            url: route('tag.store'),
            type: "post",
            data: {name: $('#tag_name').val()},
            success: function () {
                location.reload();
            }
        });
    });
    $('.tag-update').on('click', function () {
        var id = $(this).data('id');
        var name = $('#tag-name-' + id).val();
        $.ajax({
            url: "tag/" + id,
            type: "post",
            data: {name: name, _method: 'put'},
            success: function () {
                location.reload();
            }
        });
    });
    $('.tag-delete').on('click', function () {
        $.ajax({
            url: "tag/" + $(this).data('id'),
            type: "post",
            data: {_method: 'delete'},
            success: function () {
                location.reload();
            }
        });
    });
});
