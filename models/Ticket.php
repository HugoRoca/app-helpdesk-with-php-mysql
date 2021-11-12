<?php

class Ticket extends Connect {
  public function insert($idUser, $idCat, $title, $description){
    $connect=parent::connection();
    parent::setNames();
    
    $sql = "INSERT INTO tm_ticket (idTicket, idUser, idCat, title, description, state, createdAt) VALUES (NULL, ?, ?, ?, ?, 1, now());";
    $sql = $connect->prepare($sql);
    $sql->bindValue(1 ,$idUser);
    $sql->bindValue(2 ,$idCat);
    $sql->bindValue(3 ,$title);
    $sql->bindValue(4 ,$description);
    $sql->execute();
    
    return $result = $sql->fetchAll();
  }

  public function getTicketsByUser($idUser) {
    $connect=parent::connection();
    parent::setNames();

    $sql = "SELECT 
      tm_ticket.idTicket,
      tm_ticket.idUser,
      tm_ticket.idCat,
      tm_ticket.title,
      tm_ticket.description,
      tm_ticket.state,
      tm_user.name,
      tm_user.lastName,
      tm_category.description as catDescription,
      tm_ticket.createdAt
      FROM 
      tm_ticket
      INNER join tm_category on tm_ticket.idCat = tm_category.idCat
      INNER join tm_user on tm_ticket.idUser = tm_user.idUser
      WHERE
      tm_ticket.state = 1
      AND tm_user.idUser=?";
    $sql = $connect->prepare($sql);
    $sql->bindValue(1, $idUser);
    $sql->execute();

    return $result = $sql->fetchAll();
  }
}

?>