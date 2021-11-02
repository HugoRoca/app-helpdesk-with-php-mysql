$(document).ready(function() {
  $('.summernote').summernote({
    height: 200,
  });

  // TODO: call fill combo
  $.post("../../controllers/category.php?op=combo", (data, status) => {
    $("#comboCategory").html(data)
  })
});