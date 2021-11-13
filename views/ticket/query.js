var idUserMain = $("#idUserMain").val();
var idRolMain = $("#idRolMain").val();

function init() {}

$(document).ready(function () {
  var ajaxDataTable = {
    url: "",
    type: "post",
    dataType: "json",
    error: function (e) {
      console.log("error", e.responseText);
    },
  };

  if (idRolMain == 1) {
    ajaxDataTable.url = "../../controllers/ticket.php?op=getByUser";
    ajaxDataTable.data = {idUser: idUserMain}
  } else {
    ajaxDataTable.url = "../../controllers/ticket.php?op=getTickets"
  }

  tabla = $("#ticket_data")
    .dataTable({
      aProcessing: true,
      aServerSide: true,
      dom: "Bfrtip",
      searching: true,
      lengthChange: false,
      colReorder: true,
      buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
      ajax: ajaxDataTable,
      ordering: false,
      bDestroy: true,
      responsive: true,
      bInfo: true,
      iDisplayLength: 10,
      autoWidth: false,
      // language: {
      //   sProcessing: "Procesando...",
      //   sLengthMenu: "Mostrar _MENU_ registros",
      //   sZeroRecords: "No se encontraron resultados",
      //   sEmptyTable: "Ningún dato disponible en esta tabla",
      //   sInfo: "Mostrando un total de _TOTAL_ registros",
      //   sInfoEmpty: "Mostrando un total de 0 registros",
      //   sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      //   sInfoPostFix: "",
      //   sSearch: "Buscar:",
      //   sUrl: "",
      //   sInfoThousands: ",",
      //   sLoadingRecords: "Cargando...",
      //   oPaginate: {
      //     sFirst: "Primero",
      //     sLast: "Último",
      //     sNext: "Siguiente",
      //     sPrevious: "Anterior",
      //   },
      //   oAria: {
      //     sSortAscending:
      //       ": Activar para ordenar la columna de manera ascendente",
      //     sSortDescending:
      //       ": Activar para ordenar la columna de manera descendente",
      //   },
      // },
    })
    .DataTable();
});

function seeTicket(idTicket) {
  console.log(idTicket);
}

init();
