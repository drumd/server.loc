<?php
$name = "alex";
$age = 35;
echo "Меня зовут:$name","<br/>";
echo "\n Мне $age лет";
unset ($age);
echo "<hr/>";
define("MY_CONST","Hello, world!");
echo define("MY_CONST");
echo"<h2>",MY_CONST,"</h2>";
echo MY_CONST;
echo"<br/>". defined("MY_CONST" );
echo "<hr/>";


