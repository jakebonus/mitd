var p;
(function() {

    $("#login_form").on("submit", function() {
      if ($('body .ui-pnotify > .alert-info').length == 0) {
        $.ajax({
            dataType: "json",
            type: "post",
            url: base_url + "account/ajax_signin",
            data: $("#login_form").serialize() + "&isLogin=" + 1,
            beforeSend: function() {
                new PNotify({
                    title: "Processing",
                    text: "Please wait..",
                    type: "info",
                    delay: 99999,
                    styling: "bootstrap3"
                });
                $("#btn_signin").attr("disabled", "disabled")
            },
            success: function(a) {
                if (a.status == "yes") {
                    $(".glyphicon-remove").trigger("click");
                    $("#btn_signin").removeAttr("disabled");
                    new PNotify({
                        title: "Success!",
                        text: a.content,
                        styling: "bootstrap3",
                        delay: 2000,
                        type: "success",
                    });
                    $("#btn_signin").removeAttr("disabled");
                    $("#login_form")[0].reset();
                    window.location.href = base_url + "encode/"
                } else {
                    $("#btn_signin").removeAttr("disabled");
                    $("#login_form")[0].reset();
                    $(".glyphicon-remove").trigger("click");
                    new PNotify({
                        title: "Failed!",
                        text: "<strong>Invalid Username and Password.</strong> Please try again.",
                        styling: "bootstrap3",
                        delay: 2000
                    });
                    $('#a_username').focus();
                }
            },
            error: function(b, a) {
                $(".glyphicon-remove").trigger("click");
                new PNotify({
                    title: "Error",
                    text: "Connection problems occurred... Unable to connect to the Internet! The Internet connection has been lost.",
                    type: "error",
                    styling: "bootstrap3",
                    delay: 2000
                });
                $("#btn_signin").removeAttr("disabled");
                $("#login_form")[0].reset();
                $('#a_username').focus();
            }
        });
        return false;
        }
    });

})();
