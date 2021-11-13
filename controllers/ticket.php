<?php

require_once("../config/connection.php");
require_once("../models/Ticket.php");

$ticket = new Ticket();

switch ($_GET["op"]) {
  case "insert":
    $idUser = $_POST["idUser"];
    $idCat = $_POST["idCat"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $ticket->insert($idUser, $idCat, $title, $description);
    break;
  case "getByUser":
    $response = $ticket->getTicketsByUser($_POST["idUser"]);
    $data = array();

    foreach ($response as $row) {
      $sub_array = array();
      $sub_array[] = $row["idTicket"];
      $sub_array[] = $row["catDescription"];
      $sub_array[] = $row["title"];
      $sub_array[] = date("d/m/Y H:i:s", strtotime($row["createdAt"]));
      $sub_array[] = '<button type="button" onClick="seeTicket(' . $row["idTicket"] . ');"  id="' . $row["idTicket"] . '" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
      $data[] = $sub_array;
    }

    $results = array(
      "sEcho" => 1,
      "iTotalRecords" => count($data),
      "iTotalDisplayRecords" => count($data),
      "aaData" => $data
    );

    echo json_encode($results);

    break;
  case "getTickets":
    $response = $ticket->getTickets();
    $data = array();

    foreach ($response as $row) {
      $sub_array = array();
      $sub_array[] = $row["idTicket"];
      $sub_array[] = $row["catDescription"];
      $sub_array[] = $row["title"];
      $sub_array[] = date("d/m/Y H:i:s", strtotime($row["createdAt"]));
      $sub_array[] = '<button type="button" onClick="seeTicket(' . $row["idTicket"] . ');"  id="' . $row["idTicket"] . '" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
      $data[] = $sub_array;
    }

    $results = array(
      "sEcho" => 1,
      "iTotalRecords" => count($data),
      "iTotalDisplayRecords" => count($data),
      "aaData" => $data
    );

    echo json_encode($results);

    break;
}
