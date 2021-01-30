<section class="partials">
			<h3>Include and Require</h3>
			<p>To include other php files within php file you will be using the include('path/to/file') or require('path/to/file')</p>
			<p>The main difference in that if include() function won't be able to load the file, it will not stop executing the rest of the files where include function has been called.</p>
			<p>While using require() the execution of the rest of the code in the file will be terminated. </p>
			<p>Because the files could be include multiple times, it might not be intentioned. To prevent from including accidentaly file twice or multiple times, you will use inluce_once() or require_once() functions.</p>
			<p>It is important to know that using require_once() is best option to include functions in the php file. This because, requiring the function twice will cause the name variable error (twice the same variable), and stoping executing the code which reliable on function execution which fails to load is also best practice.</p>
			<p>Declaring the variable in one of php files and then using it in other is absoulutely possible, with cascading order in mind - the variable must be declared before it is called.</p>
	</section>