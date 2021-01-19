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
		<button id='btn-arrays'>arrays</button>
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
		<h3>1.Variables </h3>
		<p>In PHP you got mutable variables declared with $ and unmutable variables declared with define([string_name],[value]) functon. So for example:</p>
		<p>$age =1 will be mutable (like let in js)</p>
		<p>and define('PI',3.14) is like const in js</p>
		<p>The aritmetic operations are same as the JavaScript: + - / * %</p>
		<ul>
			<?php

				$flag = true;
				$name = 'Michal';
				$age = 35;
				$height = 1.85;
				define('PI',3.14) ;

				echo "<li>Mutable variable: " . $name ." and unmutable:", PI , " </li>";
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
				echo "<li>", $concatinated2 ,"</li>";

			?>
		</ul>
		<h6>Operations on strings: </h6>
		<ul>
			<?php
				$greeting = 'Conas Atatu is an Irish greeting';
				echo "<li>Length of string - strlen(\$str): ", strlen($greeting), " </li>";
				echo "<li>Trim string - trim(\$str): ", trim($greeting), " </li>";
				echo "<li>Word count - str_word_count(\$str): ", str_word_count($greeting), " </li>";
				echo "<li>Reverse string - strrev(\$str): ", strrev($greeting), " </li>";
				echo "<li>To uppercase - strtoupper(\$str): ", strtoupper($greeting), " </li>";
				echo "<li>To lowercase - strtolower(\$str): ", strtolower($greeting), " </li>";
				echo "<li>First char to uppercase - ucfirst(\$str): ", ucfirst($greeting), " </li>";
				echo "<li>First char to lowercase - lcfirst(\$str): ", lcfirst($greeting), " </li>";
				echo "<li>Capitalize - ucwords(\$str): ", ucwords($greeting), " </li>";
				echo "<li>Word position - strpos(\$str, 'greeting'): ", strpos($greeting, 'greeting'), " </li>";
				echo "<li>Word position case insensitive - stripos(\$str, 'Greeting'): ", stripos($greeting, 'Greeting'), " </li>";
				echo "<li>String replace (insenitive) - str_ireplace([old], [new], \$str): ", str_ireplace('irish','polish', $greeting) ,"</li>";
				echo "<li>Fill to the certain amount of char with given char - str_pad(\$str, numberOfChars, stringToFill, whichSide), for example str_pad(\$greeting, 40, '!', STR_PAD_RIGHT): ", str_pad($greeting, 40, '!', STR_PAD_RIGHT), " </li>";
				echo "<li>Repeat string - str_repeat(\$str, [number]): ", str_repeat($greeting, 3), "</li>";
				$longText = "
				This is Eva.
				<strong>Eva</strong> is female.
				Eva likes to talk.";
				echo "<li>How to handle long text with new lines by converting from:", $longText, " to nl2br(\$lognText)", nl2br($longText),"</li>";
				echo "<li>And show the html tags - htmlentities(\$longText): ", htmlentities($longText), "</li>";
			?>
		</ul>
	</section>

	<section class="arrays" id='arrays'>
		<h3>2.Arrays</h3>
		<p>To declare array and access its elements is very similar to JavaScript</p>
		<ul>
			<?php
				$arr=['Bannan', 'Orange', 33, true];
				echo "<li>Declare array - \$arr=['Bannan', 'Orange', 33, true]: <pre>",var_dump($arr),"</pre></li>";
				echo "<li>Access first element = \$arr[0]: ", $arr[0], " </li>";
				$arr[0] = 'Apple';
				echo "<li>Set element of array - \$arr[0]='Apple': <pre>",var_dump($arr),"</pre></li>";
				$arr[] = 'Peach';
				echo "<li>Append element - \$arr[]='Peach' or array_push('Peach'): <pre>",var_dump($arr),"</pre></li>";
				echo "<li>Number of items in array - count(\$arr): ",count($arr)," </li>";
				echo "<li>Shift removes first element and return it - array_shift(\$arr) ",array_shift($arr)," </li>";
				echo "<li>Unshift adds element at the beggining and returns length of array- array_unshift(\$arr, 78): ",array_unshift($arr, false)," </li>";
				echo "<li>Split string to array - explode(' ', \$longText) <pre>",var_dump(explode(" ",$longText))," </pre></li>";
				echo "<li>Group array items to string(true evaluates to 1, false is not included) - implode(' ', \$arr): ", var_dump(implode(' ', $arr))," </li>";
				echo "<li>Check if the element exist in array(boolean returned) - in_array('Apple', \$arr):  ",var_dump(in_array('Apple', $arr))," </li>";
				echo "<li>Search the element in array(position in array returned) - array_search(33, \$arr):  ",array_search(33, $arr)," </li>";
				$arr2 = ["honey", 174, "ko", "aaa"];
				echo "<li>Merge arrays - array_merge(\$arr1, \$arr2) or with spread operator - [...\$arr1, ...\$arr2]: <pre>",var_dump([...$arr, ...$arr2]),"</pre></li>";
				echo "<li>Sort - sort(\$arr), reverse sort - rsort(\$arr2) both modify an array!: <pre> ",sort($arr2) , var_dump($arr2),"</pre> </li>";
				echo "<li>The filter, map and reduce operations on arrays, very similar to JS</li>";
				$numbers = [1,3,5,6,7,8,20];
				echo '<li>$numbers = [1,3,5,6,7,8,20]: <pre>',var_dump($numbers),'</pre></li>';
				$filteredarray = array_filter($numbers, fn($n)=>$n % 2 === 0 );
				echo '<li>$filteredarray = array_filter($numbers, fn($n) => $n % 2 === 0  </li>';
				echo '<li>',var_dump($filteredarray),'</li>';
				echo '<li>REDUCE array syntax is - array_reduce($acc, $numbers)=>$acc + $numbers</li>';
				echo '<li>BUT MAPPING IS REVERSE!!! first callback, then array, like array_map(fn($n)=>$n * $n, $numbers)</li>';
				$mappedArray = array_map(fn($n)=> $n * $n, $numbers);
				echo '<li>',var_dump($mappedArray),'</li>';
			?>
		</ul>

		<h6>Associate Arrays (like Objects in Js)</h6>
		<ul>
			<li><pre>
					$person = [
						'name' => 'Michal',
						'surname' => 'Tower',
						'age' => 33,
						'hobbies' => [ 'Jogging', 'Music']
					];

					And acces it like:

					$person['name'];
					
					assign new key:
					$person['gender'] = 'male';

					get keys:
					array_keys($person);

					get values:
					array_values($person);
			</pre></li>
			<?php
				$person = [
						'name' => 'Michal',
						'surname' => 'Tower',
						'age' => 33,
						'hobbies' => [ 'Jogging', 'Music']
					];
				$person['gender'] = 'male';

				echo "<li>Name:", var_dump($person['name']), " </li>";
				echo "<li>Age:", var_dump($person['age']), " </li>";
				echo '<li>Get all keys<pre>',var_dump(array_keys($person)), '</pre></li>';
				echo '<li>Get all values<pre>',var_dump(array_values($person)), '</pre></li>';
			?>
		</ul>

		<h6>Two dimensional arrays:</h6>
				
				
			
		
	</section>

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
