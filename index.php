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

	<nav>
		<button id='btn-variables'>variables</button>
		<button id='btn-arrays'>arrays</button>
		<button id="btn-conditionals">conditionals</button>
		<button id="btn-loops">loops</button>
		<button id="btn-functions">functions</button>
		<button id="btn-forms">forms</button>
		<button id="btn-cookies">cookies</button>
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

		<ul>
			
			<li>
				<pre>
					$todoItems = [
						['title'=> 'item1', 'completed'=> true],
						['title'=> 'item2', 'completed'=> false],
						['title'=> 'item3', 'completed'=> false],
					]
					</pre>
			</li>
			
			<?php
				$todoItems = [
					['title'=> 'item1', 'completed'=> true],
					['title'=> 'item2', 'completed'=> false],
					['title'=> 'item3', 'completed'=> false],
				];
				echo '<li> Result: <pre>',var_dump($todoItems),'</pre></li>';
			?>
		</ul>
	</section>

	<section class="conditionals" id="conditionals">

		<h3>3. Conditionals</h3>
		<p>very simialr to js (==, ===, !=, !==, <>(this is the same as !=), >=, <=, &&, ||, )</p>
		<ul>
				<li>if($age === 35){...}elseif{...}else{...}</li>
				<?php
					if($age === 35){
						echo '<li> You are 35 years old</li>';
					}else{
						echo '<li>You are not 35 yo!</li>';
					};
				?>
		</ul>
		<h6>Ternary operator</h6>
		<p>same as in js:  echo $age === 25 ? "you're 25" : "you're not 25";</p>
		<p>however it has something like coalescing assignment:  echo $age ?? 33;  This will print $age if it exists, ohterwise it will print 33</p>
		<ul>
					<?php
						echo '<li>',$age === 25 ? "You're 25" : "You're not 25" , "</li>";
					?>
		</ul>
		<h6>Switch statement</h6>
		<p>the same as in js</p>
		<ul>
					<li><pre>
						switch($userRole){
							case 'admin':
								echo 'You are admin';
								break;
							case 'editor':
								echo 'You can edit articles';
								break;
							default:
								echo 'Role unknown';
						}
					</pre></li>

					<?php
						$userRole = 'editor';
						switch ($userRole){
							case 'admin':
								echo '<li>you are admin</li>';
								break;
							case 'editor':
								echo '<li>you are editor</li>';
								break;
							default:
								echo '<li>role unknown</li>';
						}
					?>
		</ul>
	
	</section>

	<section class="loops" id="loops">
			<h3>4. Loops</h3>
			<h6>While</h6>
			<ul>
				<li>
					<pre>
						while($counter<=5){
							echo "Counter: $counter";
							$counter++;
						}
					</pre>
				</li>
				<?php
					$counter = 0;
					while($counter <=5){
						echo "<li>Counter: $counter </li>";
						$counter++;
					}
				?>
			</ul>
			<h6>do - while</h6>
			<ul>
				<li>
					<pre>
						do{
							echo $age;
							age--;
						}while($age < 0);
					</pre>
				</li>
			</ul>
			<h6>for</h6>
			<ul>
				<li>
					<pre>
						for($i; $i < 10; $i++){
							echo $i;
						}
					</pre>
				</li>
			</ul>
			<h6>foreach</h6>
			<ul>
				<li>
					<pre>
						foreach($person as $key => $value){
							echo $key , $value;
						};
					</pre>
				</li>
				<?php
					foreach($person as $key => $value){
						echo '<li>', $key,': ',$value,'</li>';
					};
				?>
			</ul>
	</section>

	<section class="functions" id="functions">
		<h3>5. Functions</h3>

		<ul>
			<li>
				<pre>
					function getButton($arg){
						echo "<button>$arg</button>";
					}
					getButton($person['name'])
				</pre>
			</li>

			<?php
			
					function getButton($arg){
						echo "<button>$arg</button>";
					};

					echo '<li>', getButton($person['name']) ,'</li>';
					
			?>

			<li>
				<pre>
					// with converting args to array
					function sumOfNumbers(...$numbers){
						return array_reduce( $numbers, fn($acc,$n)=>$acc + $n);
					};
					echo sumOfNumbers(2,4,5,99);
				</pre>
			</li>
			<?php
				function sumOfNumbers(...$numbers){
					return array_reduce($numbers, fn($acc, $n)=>$acc+$n);
				};
				echo '<li>',sumOfNumbers(2,4,5,99),'</li>';
			?>


		</ul>

		<ul>
				<li>
					<pre>Build in time() and date() functions:
						date(Y-m-d H:i:s);
						$dateString = '2021-01-20 20:07:00';
						echo date_parse($dateString); //converts string to date
					</pre>
				</li>

				<?php
					$dateString = '2021-01-20 20:07:00';
					echo '<li>Convert string to date object(array)<pre>',var_dump(date_parse($dateString)),'</pre></li>';
				?>
		</ul>
	</section>

	<section class="superglobals" id="superglobals">
				<h3>6. Superglobals</h3>
				<p>these are variables build in php, the variable begins with dollar sign and underscore, like: $_[VARNAME] . They are uppercase. </p>
				<ul>
					<li>
						<pre>for example $_SERVER</pre>
						<?php
							//echo var_dump($_SERVER);
						?>
					</li>
				</ul>
	</section>

	<section class="forms" id="forms">
				<h3>7. Forms</h3>
				<h6>GET</h6>
				<p>used for unsecure data, which is not important from security point of view, for example search queries.</p>
				<ul>
					<li>
						We get the value of the input (by name) from PHP superglobal $_GET['inputName'], which takes the value of the form from the query parameters (uri params separated by &) after clicking the submit button. 
						<br/>Below simple test example of form with GET method:
					</li>
				
					<?php
						$queryParameter="";

						if (isset($_GET['name'])){
							$queryParameter = $_GET['name'];
							echo '<li>', var_dump($_GET['name']) ,'</li>';
						}
					?>
				</ul>
				<form action="" method="GET">
					<label for="name">Enter your name:</label>
					<input type="text" name='name' value="<?php echo $queryParameter ?>"/>
					<button type="submit">Submit Button</button>
				</form>
				<ul>
					<?php
							
						echo '<li>', $queryParameter ,'</li>';
							
					?>
				</ul>

				<h6>POST</h6>
				<p>used to securely post data to the server</p>

				<?php

						$errors = [];
						// define errors messages
						define('EMPTY_FIELD', 'This field is required');
						define('INVALID_PASSWORD', 'This password doesn\'t meet given criteria. Password must consist of min. 8 and max. 16 characters. At least one uppercase letter and one number.');
						define('INVALID_USERNAME','This username is invalid. Please provide min. 4 and max. 16 letters or numbers. No special characters are allowed. ');

						// function to get and validate the field value and return it
						function post_data($field){
							// if exist leave it like it is, otherwise assign to it empty string
							$_POST[$field] ??= '';

							// return it after validating - htmlspecialchars escape html tags (this avoid injecting <script>), stripslashes escapes /\ to avoid 
							return htmlspecialchars(stripslashes($_POST[$field]));
						}

						if($_SERVER['REQUEST_METHOD']==='POST'){

							$username = post_data('username');
							$password = post_data('password');
							$password_repeated = post_data('password_repeated');

							if(!$username){
								$errors['username'] = EMPTY_FIELD;
							}
							if(!$password){
								$errors['password'] = EMPTY_FIELD;
							}
							if(!$password_repeated){
								$errors['password_repeated'] = EMPTY_FIELD;
							}
							if(!preg_match('/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD', $username)){
								$errors['username']= INVALID_USERNAME;
							}	
							if(!preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $password)){
								$errors['[password'] = INVALID_PASSWORD;
							}
							if($password_repeated && $password && strcmp($password, $password_repeated) !==0){
								$errors['password_repeated'] = 'This field must match the password field';
							}
						}
				?>
				<ul>
					<li>We get all data from superglobal $_POST or specific field $_POST['inputName']</li>
				</ul>
				<form action="" method="POST" novalidate>
					<div class='form__field'>
						<label for="username">Username:</label>
						<small>This field must consist of min. 4 and max. 16 letters or numbers. No special characters are allowed.</small>
						<input type="text" name='username' value='<?php echo $username??'' ?>' class='<?php echo $errors['username'] ? 'invalid' : '' ; ?>' autocomplete='username'/>
						
						<?php 
							if($errors['username']){
								echo  "<p class='error'>",$errors['username'],"</p>";
							}
						?> 
					</div>
					<div class='form__field'>
						<label for="password">Password:</label>
						<small>Password must consist of min. 8 and max. 16 characters. At least one uppercase letter and one number.</small>
						<input type="password" name='password' value='<?php echo $password ?? '' ?>' required autocomplete='current-password'/>
						<?php 
							if($errors['password']){
								echo  "<p class='error'>",$errors['password'],"</p>";
							}
						?>
					</div>
					<div class='form__field'>
						<label for="password_repeated">Repeat password:</label>
						<input type="password_repeated" name='password_repeated' value='<?php echo $password_repeated ?? '' ?>' required autocomplete='current-password'/>
						<?php 
							if($errors['password_repeated']){
								echo  "<p class='error'>",$errors['password_repeated'],"</p>";
							}
						?>
					</div>
					<button type="submit">Submit</button>
				</form>
				<ul>
					<?php

						// check the method of the page request, if post dump data from the form
						if ($_SERVER['REQUEST_METHOD'] === 'POST'){
							echo '<li> Not validated all form fields: <pre>', var_dump($_POST) ,'</pre></li>';
						}

						// dump validated fields

						echo '<li>Validated username: ', post_data('username'),'</li>';
						echo '<li>Validated password: ', post_data('password'),'</li>';

					?>
				</ul>
	</section>

	<section class="cookies" id='cookies'>
		
		<h3>Cookies and Session</h3>

		<h6>Session</h6>
		<p>php starts the session with command session_start() . 
			This will create on the server side a cookie with unique value which will be exchanged between client and server on each request.
			If those are matching, server is 'informed' about who the client is. 
			<span class="important__message"> session_start() should be called at beginning of the page, before any html is returned!!! </span>
			Any data stored in session will be saved in the $_SESSION['key'] variable.
		</p>
		<ul>
		<?php
			if(isset($_SESSION['counter'])){				
				$_SESSION['counter']++;
			}else{
				$_SESSION['counter'] = 1;
			}
			echo '<li>You visited this page: ', $_SESSION['counter'],'</li>';
		
		?>
		</ul>

		<h6>Cookie</h6>
		<p>Cookie is created with setcookie(['string_name'], [value], [expire_date], ['path']) method. For example:</p>
		<p>setcookie('colorsPallet', 'dark', time() + 60, '/')</p>
		<p>Cookie's value can be retrive from variable: $_COOKIE['string_name'], so in our example $_COOKIE['colorsPallet']; .</p>
		<p><span class="important__message"> setcookie() should be called at beginning of the page, before any html is returned!!! </span></p>
		<p>If you want to modify the value of cookie, you need to call the method setcookie with the same name and different value (or path or expire date, whatever you want to modify).</p>
		<p>To delete the cookie you need to set the time as negative value</p>
		<ul>
			<?php
				
				echo '<li>',var_dump($_COOKIE),'</li>';
			?>
		</ul>

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
