<?php 

$todoJson = file_get_contents('todo.json');
$todoArray = json_decode($todoJson, true);

// // bullshit method we use array_walk(&$value, $key) 
// // and we use & sign to change grab the $value by reference, so any modification will be reflected in the array's value itself
// array_walk($todoArray, function(&$value, $key){

//   $itemToChangeStatusFor = $_POST['todo_name'];

//   if($key === $itemToChangeStatusFor){
    
//     $value['completed'] = !$value['completed'];
//   }
// });
if($_POST['todo_name']){
  $itemToChangeStatusFor = $_POST['todo_name'];
  $todoArray[$itemToChangeStatusFor]['completed'] = !$todoArray[$itemToChangeStatusFor]['completed'];
}


file_put_contents('todo.json', json_encode($todoArray, JSON_PRETTY_PRINT));

header('Location: index.php');