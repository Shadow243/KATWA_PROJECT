$('documet').ready(function () {
    
    $('.leavecommentLink').on('click', function (e) {
        e.preventDefault();
        // alert('hello wold');
        $('.commentFormBlog').slideToggle('slow');
    });

    $(document).on('keyup', '.CommetBody', function(e) {
        if(e.keyCode === 13 && e.shiftKey === false)
        {
            alert('sending');
            sendComment()
        }

    });

    function sendComment()
    {
        var form = ('form.commentFormBlog');
        var msg = $(form).find('.CommetBody');
        if(msg != '')
        {
            $.ajax({
                url: $(form).attr('action'),
                type: $(form).attr('method'),
                data : $(form).serialize(),
                datatype: 'html',

                success: function(html){
                    msg.text('')
                    // $('ul.chat').append(html);

                },
                error: function (data) {
                    $.each(data.responseJSON, function (key, value) {
                        $.notify(value, "error");
                    });
                }
            });

        }
    }

    $('a.likelink').on('click', function (e) {
        e.preventDefault();
        var link = $(this);

        $.ajax({
            type: 'GET',
            url: $(link).attr('href'),
            data: { _token: $(link).data('token')},
            success: function(response){
                // alert(response.msg)
                $.notify(response.msg, "success");
                if(response.type == 'like')
                {
                    $(link).find('i').removeClass('fa-thumbs-o-up').addClass('fa-thumbs-o-down')
                    //console.log(response.post.likes.length)
                    if(response.post.likes.length == 0)
                    {
                        $(link).append('<em class="number_likes">1</em>');
                    }else{
                        var nbField = $(link).find('.number_likes');
                        $(nbField).text(parseInt($(nbField).text()) + 1);
                    }

                    $(link).attr('title', 'Je n\'aime plus')
                }

            },
            error: function (data) {
                $.each(data.responseJSON, function (key, value) {
                    $.notify(value, "error");
                });
            }
        });
    });
});