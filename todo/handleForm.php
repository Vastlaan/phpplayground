<?php

  $input = $_POST['todoitem'] ?? '';
  $input = trim($input);
  
  if($input){
    echo var_dump($input);
    $is_file = file_exists('data/todoItem.json');

    if(!is_file){
      fopen('todoItems.json','w');
      echo '{}' > 'todoItems.json';
    }
    $rawFileContent = file_get_contents('todoItems.json');
    $fileContentArray = json_decode($rawFileContent);
    $fileContentArray[$input] = ['completed'=>false];
    file_put_contents('todoItems.json', json_encode($fileContentArray));
    
    
  }