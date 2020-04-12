$(document).ready(function () {
    $("#subSubmit").click(function () {


        var email = $("#email").val();

        if (email == "") {
            $("#error_message").html("All Fields are required");
        } else {
            $("#success_message").html("Email Sent!");
            Swal.fire("Thank You!", "success");
            $("#error_message").html("");
            $.ajax({
                url: "subscribe.php",
                method: "POST",
                data: {

                    email: email
                },
                success: function (data) {
                    $("form").trigger("reset");
                    $("#success_message").html("Email sent");

                    setTimeout(function () {
                        $("#success_message").fadeOut("Slow");
                    }, 4000);
                }
            });
        }
    });
});
