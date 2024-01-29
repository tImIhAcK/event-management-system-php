jQuery(document).ready(function ($) {
  $("#profileImgForm").on("change", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    // let img = $("#profile_image")[0].files;

    // formData.append("profile_image", img[0]);
    $.ajax({
      type: "POST",
      url: "../includes/profile_image.inc.php",
      data: formData,
      contentType: false,
      processData: false,
      beforeSend: function () {
        console.log("Updating data");
      },
      success: function (response) {
        console.log(response);
      },
      error: function (response) {
        console.log(response);
      },
      complete: function () {
        console.log("Completed");
      },
    });
  });
});
