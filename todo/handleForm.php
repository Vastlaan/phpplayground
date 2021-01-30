<?php

  $input = $_POST['todoitem'] ?? '';
  $input = trim($input);
  
  if($input){

    echo var_dump($input);
    // check if todo.json exists
    if(file_exists('todo.json')){
      // get the content of the file
      $jsonFile = file_get_contents('todo.json');
      // convert it to the associated array, REMEMBER TO PASS SECOND ARGUMENT: TRUE
      $jsonArray = json_decode($jsonFile, true);
    }else{
      // if file doesn't exist, create an array
      $jsonArray = [];
    }
    
    // append the item with completed status of false
    $jsonArray[$input] = ['completed' => false];
    // save modified array encoded back to json into file
    // if file doesn't exist it will be created
    // again make sure right permissions are priviged to the file
    // add second argument constant JSON_PRETTY_PRINT to save json file in a human readable format (not minified)
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
    
  }

  // after handling all data from POST request you use header() function which allows to send headers to the respons
  // in that header you put Location: [nameOfFileToRedirectTo]

  header('Location: index.php');