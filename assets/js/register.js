jQuery(document).ready(function ($) {
  $("#form").on("submit", function (e) {
    e.preventDefault();

    var formData = $(this).serialize();
    var formResponse = $("#response");
    console.log(formData);

    $.ajax({
      type: "POST",
      url: "../../includes/register.inc.php",
      data: formData,
      beforeSend: function () {
        message = "<div class='loading'><p>Loading...</p></div>";
        formResponse.html(message);
      },
      success: function (response) {
        console.log(response);
        if (response.data.success) {
          message = "<div class='success'>" + response.data.message + "</div>";
          formResponse.html(message);

          setTimeout(function () {
            window.location.href = "../../views/accounts/login.php";
          }, 3000);
        } else {
          message = "<div class='error'>" + response.data.message + "</div>";
          formResponse.html(message);
        }
      },
      error: function (response) {
        console.log(response);
        formResponse.html(
          "<div class='error'><p>Error: Something went wrong</p></div>"
        );
      },
      complete: function () {
        setTimeout(function () {
          formResponse.html("");
        }, 10000);
      },
    });
  });
});
