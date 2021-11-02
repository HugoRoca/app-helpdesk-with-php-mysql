function init(){
  $("#new-ticket").on("submit", function(e){
    saveAndUpdate(e)
  })
}

function saveAndUpdate(e) {
  e.preventDefault();
  var formData = new FormData($("#new-ticket")[0]);
  $.ajax({
    url: "../../controllers/ticket.php?op=insert",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(result){
      console.log(result)
    }
  })
}

$(document).ready(function() {
  $('.summernote').summernote({
    height: 200,
  });

  // TODO: call fill combo
  $.post("../../controllers/category.php?op=combo", (data, status) => {
    $("#comboCategory").html(data)
  })
});

init();