<section class="variables" id='variables'>
  <h3>1.Variables </h3>
  <p>In PHP you got mutable variables declared with $ and unmutable variables declared with define([string_name],[value]) functon. So for example:</p>
  <p>$age =1 will be mutable (like let in js)</p>
  <p>and define('PI',3.14) is like const in js</p>
  <p>The aritmetic operations are same as the JavaScript: + - / * %</p>
  <ul>
    <?php

      $flag = true;
      $name = 'Michal';
      $age = 35;
      $height = 1.85;
      define('PI',3.14) ;

      echo "<li>Mutable variable: " . $name ." and unmutable:", PI , " </li>";
      echo "<li>To gatter info about the variable we use gettype function. The flag variable type is: " , gettype($flag) , "</li>";
      echo "<li>var_dump function returns informations about variable: " , var_dump($age) , "</li>";
      echo "<li>The var_dump function has to be concatenated with coma ',' not via '.', which is the string concatination operator:" , var_dump($height) , "</li>";
      echo "<li>You can also print multiple variables in var_dump function separated with coma var_dump(\$height,\$name):" , var_dump($height, $name) ,'</li>';
      echo "<li>You can check if var is certain type using function. Let's check if height is boolean: " , var_dump(is_bool($height)) , "</li>";
      echo "<li>Check if mutable variable is defined with isset(\$age) will result with true: ", var_dump(isset($age)) ," .However</li>";
      echo "<li>You can check if unmutable var is defined with defined([name_string]) like:" , var_dump(defined('PI')), "</li>";
      echo "<li> Hereby the sum of two numbers \$age=35 and \$height=1.85 = ", $age + $height, "</li>";
      $concatinated1 = "String with embeded name: $name";
      echo "<li>When string is declared with double quotes we can contatinate other variable to is, here: ", $concatinated1 ,"</li>";
      $concatinated2 = 'Single quotes string with NOT embeded name: $name';
      echo "<li>", $concatinated2 ,"</li>";

    ?>
  </ul>
  <h6>Operations on strings: </h6>
  <ul>
    <?php
      $greeting = 'Conas Atatu is an Irish greeting';
      echo "<li>Length of string - strlen(\$str): ", strlen($greeting), " </li>";
      echo "<li>Trim string - trim(\$str): ", trim($greeting), " </li>";
      echo "<li>Word count - str_word_count(\$str): ", str_word_count($greeting), " </li>";
      echo "<li>Reverse string - strrev(\$str): ", strrev($greeting), " </li>";
      echo "<li>To uppercase - strtoupper(\$str): ", strtoupper($greeting), " </li>";
      echo "<li>To lowercase - strtolower(\$str): ", strtolower($greeting), " </li>";
      echo "<li>First char to uppercase - ucfirst(\$str): ", ucfirst($greeting), " </li>";
      echo "<li>First char to lowercase - lcfirst(\$str): ", lcfirst($greeting), " </li>";
      echo "<li>Capitalize - ucwords(\$str): ", ucwords($greeting), " </li>";
      echo "<li>Word position - strpos(\$str, 'greeting'): ", strpos($greeting, 'greeting'), " </li>";
      echo "<li>Word position case insensitive - stripos(\$str, 'Greeting'): ", stripos($greeting, 'Greeting'), " </li>";
      echo "<li>String replace (insenitive) - str_ireplace([old], [new], \$str): ", str_ireplace('irish','polish', $greeting) ,"</li>";
      echo "<li>Fill to the certain amount of char with given char - str_pad(\$str, numberOfChars, stringToFill, whichSide), for example str_pad(\$greeting, 40, '!', STR_PAD_RIGHT): ", str_pad($greeting, 40, '!', STR_PAD_RIGHT), " </li>";
      echo "<li>Repeat string - str_repeat(\$str, [number]): ", str_repeat($greeting, 3), "</li>";
      $longText = "
      This is Eva.
      <strong>Eva</strong> is female.
      Eva likes to talk.";
      echo "<li>How to handle long text with new lines by converting from:", $longText, " to nl2br(\$lognText)", nl2br($longText),"</li>";
      echo "<li>And show the html tags - htmlentities(\$longText): ", htmlentities($longText), "</li>";
    ?>
  </ul>
</section>