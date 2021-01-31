<?php

class Connection{

  public function __construct(){
    $password = getenv('DB_PASSWORD');
    $this->pdo = new PDO('mysql:server=localhost,dbname=practice', 'imperum', 'imperum');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getNotes(){
    $statement = $this->pdo->prepare("SELECT * FROM practice.notes ORDER BY create_date DESC");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getSingleNote($id){
    $statement = $this->pdo->prepare("SELECT * FROM practice.notes WHERE id=:id");
    $statement->bindValue('id',$id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    
  }

  public function updateNote($id, $title, $description){
    $statement = $this->pdo->prepare("UPDATE practice.notes SET title=:title, description=:description WHERE id=:id");
    $statement->bindValue('id', $id);
    $statement->bindValue('title', $title);
    $statement->bindValue('description', $description);
    return $statement->execute();
  }

  public function insertNote($title, $description){
    $statement = $this->pdo->prepare("INSERT INTO practice.notes (title, description, create_date) VALUES (:title, :description, now())");
    $statement->bindValue('title', $title);
    $statement->bindValue('description', $description);
    return $statement->execute();
  }

  public function deleteNote($id){
    $statement = $this->pdo->prepare("DELETE FROM practice.notes WHERE id=:id");
    $statement->bindValue('id', $id);
    return $statement->execute();
  }


}