<?php

require('functions.php'); 
$person = new Person("Tim", "van de", "Achterweg", '12345', 060123213);

$person->__set("firstname", "Izan");
echo $person->sayHello();
echo "<br>"; 
$person->__set("bankaccountnumber", 12341);
echo "gast je bent gehackt want je bankrekeningnummer is: " . $person->__get("bankaccountnumber");
echo "<br>";


echo "<hr>";
// echo "$person->firstname $person->infix $person->lastname";
$person1 = new Person('Bertje', 'de', 'beer', '12345', 060123213);
echo $person1->sayHello();

echo "<hr>";

$person2 = new Person( 'Tarik', ' ', 'Zarouali', '12345', 060123213);
echo $person2-> sayHello();