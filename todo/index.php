<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/todo/index.css">
  <title>Todo App</title>
</head>
<body>

  <?php include '../partials/navigation.php'?> 


  <section>
    <form action="handleForm.php" method='POST'>
      <div class='formField'>
          <label for="todoitem">Enter the task:</label>
          <input type="text" name='todoitem' id='todoitem' />
      </div>
      <button type="submit">Submit</button>
    </form>
    <?php

      if(file_exists('todo.json')){
        $jsonFile = file_get_contents('todo.json');
        $todosArray = json_decode($jsonFile, true);
      }else{
        $todosArray = [];
      }
    ?>    
    <?php foreach($todosArray as $item => $status): ?>
      <div>
        <form action="change_status.php" method='POST'>
          <input type="hidden" name='todo_name' value='<?php echo $item ?>' >
          <input type="checkbox" class='todo_item'  <?php echo $status['completed'] ? 'checked' : '' ?> >
        </form>
        
        <?php echo $item, ' has status: ', $status['completed'] ? 'completed' : 'to be done';?>
        <form action="delete.php" method="POST">
          <input type="hidden" name='dataToDelete' id='dataToDelete' value='<?php echo $item; ?>'>
          <button type='submit'>Delete</button>
        </form>
        
      </div>
    <?php endforeach; ?>

  </section>

  <script src='../js/index.js'></script>
  <script>
    const checkboxes = document.querySelectorAll('input[type=checkbox][class=todo_item]')
    checkboxes.forEach(box=>{
      box.addEventListener('click', function(){
        this.parentNode.submit()
      })  
    })
  </script>
</body>
</html>