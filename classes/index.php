<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/landing/index.css">
  <title>Classes</title>
</head>
<body>

<?php
  include('../partials/navigation.php');
  
?>

<div style='margin-top: 4.7rem;'></div>
<section>
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
</section>

<section>
  <h3>Namespaces</h3>
  <p>Basicly the namespaces are introduced to prevent class names collisions.
    For example if we create class Email and then we would like to use third party package to send emails and that third party package also has a class named Email, then we end up with two classes named the same, which would result with the error.
    We can avoid that by creating the namespace for our class:
  </p>
  <p>
    namespace app; <br/>
    class Person{ <br/>
      .... <br/>
    }
  </p>
  <p>that way we can require_once('file/with/declared/class');</p>
  <p>and then use it like:</p>
  <p>$person = new \app\Person();</p>
  <p>or use 'use' keyword, which inform about using classes from certain namespace</p>
  <p>use app\Person;</p>
  <p>$person = new Person()</p>
</section>

<section>
  <h3>Composer</h3>
  <p>Basicly composer is like npm in js. It also allow us to load namespaces to our application (we setup the rule in composer.json file )
  </p>
  <p>more info about composer <a href="https://code.tutsplus.com/tutorials/what-is-composer-for-php-and-how-to-install-it--cms-35160">HERE</a></p>
  
</section>

<script src='../js/index.js'></script>
</body>
</html>