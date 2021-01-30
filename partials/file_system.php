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