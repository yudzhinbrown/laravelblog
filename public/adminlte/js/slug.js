$(function () {

    //Slog Generation
    $("#slug-btn").click(function (e) {
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var title = $("input[name='title']").val();

        $.ajax({
            url: "general-slug",
            type: "POST",
            data: {_token: _token, title: title},
            success: function (data) {
                $("input[name='slug']").val(data.slug);
            }
        });
    });

    //Slog verification
    $("input[name='slug']").focusout(function () {


        var _token = $("input[name='_token']").val();
        var slug = $("input[name='slug']").val();
        var title =$("input[name='title']").val();

        $.ajax({
            url: "check-slug",
            type: "POST",
            dataType: 'json',
            data: {_token: _token, slug: slug, title: title},


            success: function(data){
            },
            error: function (data) {
                var errors = data.responseJSON;
                console.log(errors);
            }



            // success: function (data) {
            //     var slug = $("input[name='slug']");
            //     if (data.error_messages) {
            //         if (!slug.hasClass("is-invalid")) {
            //             slug.addClass("is-invalid");
            //             $.each(data.error_messages, function (i, item) {
            //                 slug.next().after("<div class=\"invalid-feedback\">" + item + "</div>");
            //                 console.log(item);
            //             });
            //         }
            //     } else {
            //         slug.removeClass("is-invalid");
            //         $(".invalid-feedback").remove();
            //     }
            // }
        });
    });
})