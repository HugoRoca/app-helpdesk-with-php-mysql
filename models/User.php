<?php

  class User extends Connect {
    public function login() {
      $connect=parent::connection();
      parent::setNames();
      
      if(isset($_POST["send"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $idRol = $_POST["idRol"];

        if (empty($email) and empty($password)) {
          header("Location:" . connect::route() . "index.php?m=2");
          exit();
        } else {
          $sql = "SELECT * FROM tm_user WHERE email=? and password=? and status=1 and idRol=?";
          $stmt = $connect->prepare($sql);
          $stmt->bindValue(1, $email);
          $stmt->bindValue(2, $password);
          $stmt->bindValue(3, $idRol);
          $stmt->execute();
          $result = $stmt->fetch();
          print $result;
          if (is_array($result) and count($result) > 0) {
            $_SESSION["idUser"] = $result["idUser"];
            $_SESSION["name"] = $result["name"];
            $_SESSION["lastName"] = $result["lastName"];
            $_SESSION["idRol"] = $result["idRol"];
            header("Location:" . connect::route() . "views/home/");
            exit();
          } else {
            header("Location:" . connect::route() . "index.php?m=1");
            exit();
          }
        }
      }
    }
  }

?>