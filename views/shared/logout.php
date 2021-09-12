<?php

  require_once("../../config/connection.php");

  $connect = new Connect();
  session_destroy();
  header("Location:" . $connect->route() . "index.php");
  exit();

?>