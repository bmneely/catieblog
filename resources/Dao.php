<?php

require_once "User.php";

class Dao {

  private $host = "us-cdbr-east-04.cleardb.com";
  private $db = "heroku_f3d6b64b4b5dc57";
  private $user = "be7813156b6434";
  private $pass = "b7cb13a4";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }


  public function getUsers () {
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM user");
  }

  public function getUser ($email) {
    $conn = $this->getConnection();
    $getQuery = "SELECT * FROM user WHERE email = :email";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":email", $email);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function saveUser ($user) {
    $conn = $this->getConnection();
    // FINISH
  }


  public function saveComment ($comment) {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO comment
        (comment)
        VALUES
        (:comment)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }

  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM comment");
  }
} // end Dao