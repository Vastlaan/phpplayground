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
      echo '<li>REDUCE array syntax is - array_reduce($numbers, fn($acc, $number)=>$acc + $number</li>';
      echo '<li>BUT MAPPING IS REVERSE!!! first callback, then array, like array_map(fn($n)=>$n * $n, $numbers)</li>';
      $mappedArray = array_map(fn($n)=> $n * $n, $numbers);
      echo '<li>',var_dump($mappedArray),'</li>';
    ?>

    <li>
      foreach (iterable_expression as $value)<br/>
      statement<br/>
      foreach (iterable_expression as $key => $value)<br/>
      statement<br/>
    </li>
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