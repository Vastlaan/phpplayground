<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <title>Document</title>
</head>
<body>
  <form action="handleForm.php" method='POST'>
    <div>
        <label for="todoitem">Enter the task:</label>
        <input type="text" name='todoitem' id='todoitem' />
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>