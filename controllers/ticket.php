<?php

require_once("../config/connection.php");
require_once("../models/Ticket.php");

$ticket = new Ticket();

switch ($_GET["op"]){
  case "insert":
    $idUser = $_POST["idUser"];
    $idCat = $_POST["idCat"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $ticket->insert($idUser, $idCat, $title, $description);
    break;
}

?>