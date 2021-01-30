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