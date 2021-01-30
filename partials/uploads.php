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