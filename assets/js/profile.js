jQuery(document).ready(function ($) {
  $("#form").on("submit", function (e) {
    e.preventDefault();

    let formData = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "../includes/profile.inc.php",
      data: formData,
      beforeSend: function () {
        // message = "<div class='loading'><p>Updating...</p></div>";
        // formResponse.html(message);
        console.log("Updating data");
      },
      success: function (response) {
        console.log(response);
        // if (response.data.success) {
        //   message = "<div class='success'>" + response.data.message + "</div>";
        //   formResponse.html(message);

        //   setTimeout(function () {
        //     window.location.href = "../";
        //   }, 3000);
        // } else {
        //   message = "<div class='error'>" + response.data.message + "</div>";
        //   formResponse.html(message);
        // }
      },
      error: function (response) {
        console.log(response);
        // formResponse.html(
        //   "<div class='error'><p>Something went wrong</p></div>"
        // );
      },
      complete: function () {
        console.log("Completed");
      },
    });
  });
});
