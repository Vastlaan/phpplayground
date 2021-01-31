<?php

$id = $_POST['id'];

require_once('./Connection.php');

$connection = new Connection();
$connection->deleteNote($id);

header("Location: index.php");