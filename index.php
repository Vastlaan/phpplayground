<?php
		// start the session
		session_start();

		setcookie('colorsPallet', 'dark', time() + 60, '/');

?>

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
	<?php include 'partials/navigation.php'?>

	<?php include 'partials/header.php'?>

	<?php include 'partials/variables.php'?>

	<?php include 'partials/arrays.php'?>

	<?php include 'partials/conditionals.php' ?>

	<?php include 'partials/loops.php' ?>

	<?php include 'partials/functions.php' ?>

	<?php include 'partials/superglobals.php' ?>

	<?php include 'partials/forms.php' ?>

	<?php include 'partials/cookies.php' ?>

	<?php include 'partials/uploads.php' ?>

	<?php include 'partials/partials.php' ?>

	<?php include 'partials/file_system.php' ?>

	<section class="test">
		<h1>Test Database connection:</h1>
		<?php
		// $user = 'test_user';
		// $password = 'test_password';
		// $database = "test";
		// $table = 'users';

		// try{
		// 	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
		// 	echo "<h1>Users</h1> <ol>";
		// 	foreach($db->query("SELECT content FROM $table") as $row){
		// 		echo "<li>" . $row['content'] . "</li>";
		// 	}
		// 	echo "</ol>";
		// }  catch(PDOException $e){
		// 	print "Error!: " . $e->getMessage() . "<br/>";
		// 	die();
		// }
	?>
	</section>
	<script src='js/index.js'></script>

</body>
</html>
