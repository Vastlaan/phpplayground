<?php

require_once('./Connection.php');

if(isset($_POST)){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $id = $_POST['id'];

  $connection = new Connection();
  $connection->updateNote($id, $title, $description);

}

header('Location: index.php');