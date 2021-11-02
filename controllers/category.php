<?php

require_once("../config/connection.php");
require_once("../models/Category.php");

$category = new Category();

switch ($_GET["op"]){
  case "combo":
    $data = $category->getCategory();

    if (is_array($data) == true and count($data) > 0) {
      foreach ($data as $row) {
        $html .= "<option value='".$row['idCat']."'>".$row['description']."</option>";
      }

      echo $html;
    }
}

?>