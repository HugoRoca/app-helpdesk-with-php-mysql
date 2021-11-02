<?php

class Ticket extends Connect {
  public function insert($idUser, $idCat, $title, $description){
    $connect=parent::connection();
    parent::setNames();
    
    $sql = "INSERT INTO tm_ticket (idTicket, idUser, idCat, title, description, state) VALUES (NULL, ?, ?, ?, ?, 1);";
    $sql = $connect->prepare($sql);
    $sql->bindValue(1 ,$idUser);
    $sql->bindValue(2 ,$idCat);
    $sql->bindValue(3 ,$title);
    $sql->bindValue(4 ,$description);
    $sql->execute();
    
    return $result = $sql->fetchAll();
  }
}

?>