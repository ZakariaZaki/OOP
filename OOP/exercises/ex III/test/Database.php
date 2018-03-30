<?php
class DataBase {
  private $conn;
  private $dsn = '';
  private $user = 'root';
  private $password = '';

  function __construct() {
    $this->conn = new PDO($this->dsn, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    return $this->conn;
  }


  function getmyDB() {
    if ($this->conn instanceof PDO) {
      return $this->conn;
    }
  }

}

 ?>
