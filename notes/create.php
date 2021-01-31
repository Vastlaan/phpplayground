<?php

var_dump($_POST);

require_once('./Connection.php');

$title = $_POST['title'];
$description = $_POST['description'];

$connection = new Connection();
$newData= $connection->insertNote($title, $description);

header("Location: index.php");