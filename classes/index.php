<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <title>Classes</title>
</head>
<body>

<?php
  include('../partials/navigation.php');
  
?>

<header>
  <?php
    require_once('Person.php');

    require_once('Student.php');

    $person = new Person('Michal', 35, 3768.22);

    echo '<p>',$person->getSalary(),'</p>';

    echo '<p>',$person->name,'</p>';

    $person->setSalary(4033.11);

    echo '<p>',$person->getSalary(),'</p>';

    $student = new Student('Michal', 33, 45583);

    echo $student->name;
    echo $student->id;
  ?>
</header>

<script src='../js/index.js'></script>
</body>
</html>