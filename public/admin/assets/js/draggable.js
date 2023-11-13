$(window).ready(function() {
    $('.dd').nestable({ maxDepth: 10 });

    $('.btn-save-nestable').click(function() {
        var $this = $(this);
        $.post("/{{ app()->getLocale() }}/admin/sections/arrange", { orderArr: $('.dd').nestable('serialize'), '_token': "{{ csrf_token() }}" }, function(data) {
            // $this.button('reset');
        });

    });
    $('.glyphicon').mousedown(function(e) {
        e.stopPropagation();
    });
});