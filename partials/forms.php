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