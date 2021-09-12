<?php

  require_once("../../config/connection.php");

  if (isset($_SESSION["idUsu"])) {

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
      Blank page.
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