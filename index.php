<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imperum test PHP</title>
	<link rel="stylesheet" href="styles/index.css">
	<link rel="stylesheet" href="styles/landing/index.css">

</head>
<body>

	<nav>
		<button id='btn-variables'>variables</button>
		<button id="btn-loops">loops</button>
		<button id="btn-functions">functions</button>
	</nav>

	<header>
		<?php
			$header1 = 'Your slogan goes here';
			$header3 = 'And your description here, so you can communicate important message';

			echo '<h1>' . $header1 . '</h1>';
			echo '<h3>' . $header3 . '</h3>';
		?>
	</header>

	<section class="variables" id='variables'>
		<h3>Here goes some infromation about variables: </h3>
		<p>In PHP you got mutable variables declared with $ and unmutable variables declared with define([string_name],[value]) functon. So for example:</p>
		<p>$age =1 will be mutable (like let in js)</p>
		<p>and define('PI',3.14)</p>
		<p>The aritmetic operations are same as the JavaScript: + - / * %</p>
		<ul>
			<?php

				$flag = true;
				$name = 'Michal';
				$age = 35;
				$height = 1.85;
				define('PI',3.14) ;

				echo "<li>Mutable variable: " . $name . "</li>";
				echo "<li>Unmutable variable: " . PI . " is constant (like const in JS)</li>";
				echo "<li>To gatter info about the variable we use gettype function. The flag variable type is: " , gettype($flag) , "</li>";
				echo "<li>var_dump function returns informations about variable: " , var_dump($age) , "</li>";
				echo "<li>The var_dump function has to be concatenated with coma ',' not via '.', which is the string concatination operator:" , var_dump($height) , "</li>";
				echo "<li>You can also print multiple variables in var_dump function separated with coma var_dump(\$height,\$name):" , var_dump($height, $name) ,'</li>';
				echo "<li>You can check if var is certain type using function. Let's check if height is boolean: " , var_dump(is_bool($height)) , "</li>";
				echo "<li>Check if mutable variable is defined with isset(\$age) will result with true: ", var_dump(isset($age)) ," .However</li>";
				echo "<li>You can check if unmutable var is defined with defined([name_string]) like:" , var_dump(defined('PI')), "</li>";
				echo "<li> Hereby the sum of two numbers \$age=35 and \$height=1.85 = ", $age + $height, "</li>";
				$concatinated1 = "String with embeded name: $name";
				echo "<li>When string is declared with double quotes we can contatinate other variable to is, here: ", $concatinated1 ,"</li>";
				$concatinated2 = 'Single quotes string with NOT embeded name: $name';
				echo "<li>", $concatinated2 ,"</li>"

			?>
		</ul>
	</section>

	<section class="test">
		<h1>Test Database connection:</h1>
		<?php
		$user = 'test_user';
		$password = 'test_password';
		$database = "test";
		$table = 'users';

		try{
			$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
			echo "<h1>Users</h1> <ol>";
			foreach($db->query("SELECT content FROM $table") as $row){
				echo "<li>" . $row['content'] . "</li>";
			}
			echo "</ol>";
		}  catch(PDOException $e){
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	?>
	</section>
	<script src='js/index.js'></script>

</body>
</html>
