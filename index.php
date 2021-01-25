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
		<button id="btn-uploads">file uploads</button>
		<a href="./todo/index.php"> TODO APP</a>
	</nav>

	<?php include 'partials/header.php'?>

	<?php include 'partials/variables.php'?>

	<?php include 'partials/arrays.php'?>

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
							if(!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $password)){
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

	<section class="forms" id="uploads">

		<h3>Upload Files</h3>
		<p>In case you want to process file from html form element, you need to add the enctype='multipart/form-data' attribute to the form.</p>
		<p>To grab the value of input type file, you use global variable $_FILES. It prints an array of files.</p>
	
		<ul>
			<?php

				// // check who owns the php process
				// echo '<li>',exec('whoami'),'</li>';
				if(isset($_FILES['file'])){
					echo '<li><pre>', var_dump($_FILES),'</pre></li>';
					$checkIfImage = getimagesize($_FILES['file']['tmp_name']);
					// check if size of the image exceeds 2MB
					if($_FILES['file']['size'] > 1 * 1024 * 1025){
						$errors['uploadFile'] =  'The size of the file must not exceed 1 MB';
					}
					// allow only true images
					
					// check if true im
					elseif($checkIfImage === false){
							$errors['uploadFile'] = 'This is not an image';
							
					}
					// if no errors upload file
					elseif(!isset($errors['uploadFile'])){
						move_uploaded_file($_FILES['file']['tmp_name'], '/var/www/imperum.nl/uploads/'.$_FILES['file']['name']);
					}
					else{
						$errors['uploadFile'] = 'Ups, something went wrong. Please try again later.';
					}
					
				
				}
				
			?>
		</ul>
		<form action="" method="POST" enctype='multipart/form-data'>
			<input type="file" name="file" id="file" >
			<button type="submit">Submit</button>
			<?php echo '<small class="error">', $errors['uploadFile']??'' ,'</small>'; ?>
		</form>

		<p>the result of $_FILES is the associated array of files. Each file is an associated array with fields:</p>
		<ul>
			<li>name: name of the file</li>
			<li>type: type of the file, e.g. image/jpg</li>
			<li>tmp_name: location path where the file is temporary stored. You can process the file from this path or in order to save it permanently, move it from this location.</li>
			<li>error: if error occurs, there is the info about it</li>
			<li>size: size of the file</li>
		</ul>
		<p>in order to move the file we use build in PHP method move_uploaded_files($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name'])</p>
		<p>this will move file from temporary location to uploads/[file_name]</p>
		<p class="important">Be aware of permissions given to directories on Linux system</p>
		<p class="important">
			To modify allowed size of upload file and its type. You don't want to allow scripts to be uploaded to your machine. 
			This you might configure in php.ini file. On Linux it is in /etc/php/7.4/cli/php.ini. Look for: post_max_size to set up the limit and upload_max_filesize.
			The usefull command in Linux is: php -i | grep -i "upload\_max\_filesize\|post\_max\_size\|max\_file\_uploads". <br/>
			After that restart apache2.
			Check type $Files['file', 'type'] against the array of allowed type.
		</p>
		<p>For images you can use getimagesize($_FILES['file']['tmp_name'] - this returns the true</p>
		<p>More information about file upload validation <a href="https://www.w3schools.com/php/php_file_upload.asp">here</a></p>
	</section>

	<section class="partials">
			<h3>Include and Require</h3>
			<p>To include other php files within php file you will be using the include('path/to/file') or require('path/to/file')</p>
			<p>The main difference in that if include() function won't be able to load the file, it will not stop executing the rest of the files where include function has been called.</p>
			<p>While using require() the execution of the rest of the code in the file will be terminated. </p>
			<p>Because the files could be include multiple times, it might not be intentioned. To prevent from including accidentaly file twice or multiple times, you will use inluce_once() or require_once() functions.</p>
			<p>It is important to know that using require_once() is best option to include functions in the php file. This because, requiring the function twice will cause the name variable error (twice the same variable), and stoping executing the code which reliable on function execution which fails to load is also best practice.</p>
			<p>Declaring the variable in one of php files and then using it in other is absoulutely possible, with cascading order in mind - the variable must be declared before it is called.</p>
	</section>
	<section class="fileSystem">
			<ul>
				<li>To localize the current direcory call global variable __DIR__</li>
				<li>To localize the current file call global var __FILE__ </li>
				<li>To make the directory, use function: mkdir('dir_name')</li>
				<li>Rename: rename('dir_name', 'new_name')</li>
				<li>Remove: rmdir('dir_name')</li>
				<li>List files in current directory: scandir('path')</li>
				<li>Retrive the content of the file: file_get_contents('path/to/file.ext')</li>
				<li>To put content inside the file (and possibly create file if it doesn't exist): file_put_contents('file_name.ext','Some content')</li>
				<?php
					echo '<li><pre>',var_dump(scandir('./')),'</pre></li>';
					echo '<li><pre>',file_get_contents('./robots.txt'),'</pre></li>';
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
