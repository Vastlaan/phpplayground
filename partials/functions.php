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