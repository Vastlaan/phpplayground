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