<?php

require_once("../../config/connection.php");

if (isset($_SESSION["idUser"])) {

?>

  <!DOCTYPE html>
  <html>

  <?php require_once("../shared/head.php") ?>
  <title>HelpDesk App</title>
  </head>

  <body class="with-side-menu">

    <?php require_once("../shared/header.php") ?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../shared/nav.php") ?>

    <div class="page-content">
      <div class="container-fluid">
        <header class="section-header">
          <div class="tbl">
            <div class="tbl-row">
              <div class="tbl-cell">
                <h3>Consultant Ticket</h3>
                <ol class="breadcrumb breadcrumb-simple">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Consultant Ticket</a></li>
                </ol>
              </div>
            </div>
          </div>
        </header>
        <div class="box-typical box-typical-padding">
          <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
              <tr>
                <th style="width: 5%;">Nro.Ticket</th>
                <th style="width: 15%;">Category</th>
                <th class="d-none d-sm-table-cell" style="width: 40%;">Title</th>
                <th class="d-none d-sm-table-cell" style="width: 5%;"></th>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php require_once("../shared/scripts.php") ?>
    <script type="text/javascript" src="./query.js"></script>
  </body>

  </html>

<?php

} else {
  $connect = new Connect();
  header("Location:" . $connect->route() . "index.php");
}

?>