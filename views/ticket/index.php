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
                <h3>New Ticket</h3>
                <ol class="breadcrumb breadcrumb-simple">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">New Ticket</a></li>
                </ol>
              </div>
            </div>
          </div>
        </header>

        <div class="box-typical box-typical-padding">
          <div class="row">
            <div class="col-lg-6">
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Category</label>
                <select id="comboCategory" class="form-control">
                  
                </select>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInputPassword1">Description</label>
                <div class="summernote-theme-1">
                  <textarea class="summernote" name="name">Enter description</textarea>
                </div>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <button class="btn btn-rounded btn-inline btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once("../shared/scripts.php") ?>
    <script type="text/javascript" src="./new.js"></script>
  </body>

  </html>

<?php

} else {
  $connect = new Connect();
  header("Location:" . $connect->route() . "index.php");
}

?>