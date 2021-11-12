function init() {}

$(document).ready(function () {});

$(document).on("click", "#btnAccessAdmin", function () {
  if ($("#idRol").val() == "1") {
    $("#titleLogin").html("Access Admin");
    $("#btnAccessAdmin").html("Access User");
    $("#idRol").val(2);
  } else {
    $("#titleLogin").html("Sing In");
    $("#btnAccessAdmin").html("Access Admin");
    $("#idRol").val(1);
  }
});

init();
