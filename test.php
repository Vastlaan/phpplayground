<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imperum test PHP</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<nav>
		<a href="./index.html"><li>variables</li></a>
		<a href="./index.html"><li>loops</li></a>
		<a href="./index.html"><li>functions</li></a>
	</nav>

	<header>
		<?php
			$header1 = 'Your slogan goes here';
			$header3 = 'And your description here, so you can communicate important message';

			echo '<h1>' . $header1 . '</h1>';
			echo '<h3>' . $header3 . '</h3>';
			
		?>
	</header>

	<main>
		
	</main>

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
	
	
</body>
</html>


