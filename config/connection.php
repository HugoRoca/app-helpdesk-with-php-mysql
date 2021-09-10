<?php

  session_start();

  class Connect {
    protected $dbHost;
    
    protected function connection() {
      try {
        $connect = $this->dbHost = new PDO("mysql:local=localhost;dbname=app_helpdesk", "root");
        return $connect;
      } catch (Exception $e) {
        print "Error DB: " . $e->getMessage() . "</br>";
        die();
      }
    }

    public function setNames() {
      return $this->dbHost->query("SET NAMES 'utf8'");
    }

    public function route() {
      return "http://localhost:8080/app-helpdesk-with-php-mysql/";
    }
  }

?>
