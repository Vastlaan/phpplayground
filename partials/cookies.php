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