<?php

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

  public function getUserById ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT * FROM user WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function saveUser ($first, $last, $email, $pass, $role) {
    $conn = $this->getConnection();
    $saveQuery =
      "INSERT INTO user
      (first_name, last_name, email, password, role)
      VALUES
      (:first, :last, :email, :pass, :role)";

      $q = $conn->prepare($saveQuery);
      $q->bindParam(":first", $first);
      $q->bindParam(":last", $last);
      $q->bindParam(":email", $email);
      $q->bindParam(":pass", $pass);
      $q->bindParam(":role", $role); 
      $q->execute();
  }

  public function saveComment ($comment_date, $user_id, $post_id, $content, ) {
    $conn = $this->getConnection();
    $saveQuery =
    "INSERT INTO comment
    (comment_date, user_id, post_id, content)
    VALUES
    (:omment_date, :user_id, :post_id, :content)";

    $q = $conn->prepare($saveQuery);
    $q->bindParam(":omment_date", $omment_date);
    $q->bindParam(":user_id", $user_id);
    $q->bindParam(":post_id", $post_id);
    $q->bindParam(":content", $content);
    $q->execute();
  }

  public function getComments ($post_id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT * FROM comment WHERE post_id = :post_id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":post_id", $post_id);
    $q->execute();
    return reset($q->fetchAll());
  }
}