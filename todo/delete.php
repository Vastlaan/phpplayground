<?php

if(isset($_POST['dataToDelete'])){
  $dataToDelete = $_POST['dataToDelete'];

  $todoJson = file_get_contents('todo.json');

  $todoArray = json_decode($todoJson, true);

  // In case you are interested (like me) in filtering out elements with certain key-names, array_filter won't help you. 
  // Instead you can use the following:
  // turn string into array: array($dataToDelete) ; 
  // flip it, change the value to be a key; 
  // use array_diff_key() to remove from first array the key and value coresponding to the key of second value

  // $filteredArray = array_diff_key($todoArray, array_flip(array($dataToDelete)));

  // BUT YOU CAN SIMPLY USE UNSET WHICH DELETS THE GIVEN KEY-VALUE BASED ON THE KEY

  unset($todoArray[$dataToDelete]);

  // first approach, inject filtered array:
  // file_put_contents('todo.json',json_encode($filteredArray, JSON_PRETTY_PRINT));
  //second approach incets modified array:
  file_put_contents('todo.json', json_encode($todoArray, JSON_PRETTY_PRINT ));

}


header('Location: index.php');