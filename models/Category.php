<?php

class Category extends Connect {
  public function getCategory(){
    $connect=parent::connection();
    parent::setNames();
    
    $sql = "SELECT * FROM tm_category WHERE state = 1;";
    $sql = $connect->prepare($sql);
    $sql->execute();
    
    return $result = $sql->fetchAll();
  }
}

?>