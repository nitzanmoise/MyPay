$(document).ready(function() {
  $("#submit").click(function() {
    var name = $("#name").val();
    var message = $("#message").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    if (name == "" || message == "" || email == "" || subject == "") {
      $("#error_message").html("All Fields are required");
    } else {
      $("#success_message").html("Email Sent!");
      Swal.fire("Email Sent!", "success");
      $("#error_message").html("");
      $.ajax({
        url: "mail.php",
        method: "POST",
        data: {
          name: name,
          message: message,
          email: email,
          subject: subject
        },
        success: function(data) {
          $("form").trigger("reset");
          $("#success_message").html("Email sent");

          setTimeout(function() {
            $("#success_message").fadeOut("Slow");
          }, 4000);
        }
      });
    }
  });
});
