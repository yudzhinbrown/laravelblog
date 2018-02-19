$(function () {
    $("#slug-btn").click(function (e) {
       console.log('hi');
    });

    //Slog Generation
    $("#slug-btn").click(function (e) {
        e.preventDefault();
        console.log("click");

        var _token = $("input[name='_token']").val();
        var title = $("input[name='title']").val();

        $.ajax({
            url: "/admin/general_slug",
            type: "POST",
            data: {_token: _token, title: title},
            success: function (data) {
                $("input[name='slug']").val(data.slug);
            }
        });
    });

    // //Slog verification
    // $("input[name='slug']").focusout(function () {
    //
    //     var _token = $("input[name='_token']").val();
    //     var slug = $("input[name='slug']").val();
    //     var title =$("input[name='title']").val();
    //
    //     $.ajax({
    //         // url: "check-slug",
    //         // type: "POST",
    //         // dataType: 'json',
    //         // data: {_token: _token, slug: slug, title: title},
    //         // success: function(data){
    //         // },
    //         // error: function(data)
    //         // {
    //         //     var errors = '';
    //         //     for(datos in data.responseJSON){
    //         //         errors += data.responseJSON[datos] + '<br>';
    //         //     }
    //         //     $('#response').show().html(errors);
    //         // }
    //
    //
    //
    //         // success: function (data) {
    //         //     var slug = $("input[name='slug']");
    //         //     if (data.error_messages) {
    //         //         if (!slug.hasClass("is-invalid")) {
    //         //             slug.addClass("is-invalid");
    //         //             $.each(data.error_messages, function (i, item) {
    //         //                 slug.next().after("<div class=\"invalid-feedback\">" + item + "</div>");
    //         //             });
    //         //         }
    //         //     } else {
    //         //         slug.removeClass("is-invalid");
    //         //         $(".invalid-feedback").remove();
    //         //     }
    //         // }
    //     });
    // });
});