$(document).ready(function() {
    $(".editable").bind("click", function() {
        OriginalText = $(this).html();
        $(this).html("<form id='test' method='post' action='test.php'> <input type = 'text'class = 'editBox'value = '" + OriginalText + "' / > <input type = 'submit'value = 'change' / > < /form>")
    });
});
$('body').delegate('#test', 'submit', function(e) {
    e.preventDefault();
    var form = $(this);
    var post_url = form.attr('action');
    var post_data = form.serialize();
    $.ajax({
        type: 'POST',
        url: post_url,
        data: post_data,
        success: function(msg) {
            $(form).fadeOut(500, function() {
                form.html(msg).fadeIn();
            });
        }
    });
});