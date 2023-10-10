<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';


$sheep = new Animal("Shaun");
echo "Name: " ; echo $sheep->get_name() . "\n <br> ";
echo "Legs: " ; echo $sheep->get_legs() . "\n <br>"; 
echo "Cold Blooded: " ; echo $sheep->get_cold_blooded() . "\n <br> ";

$sungokong = new Ape("Kera Sakti");
echo "<br>Name: " ; echo $sungokong->get_name() . "\n <br>";
echo "Legs: " ; echo $sungokong->get_legs() . "\n <br>"; 
echo "Cold Blooded: " ; echo $sungokong->get_cold_blooded() . "\n<br>";
echo "Yell: " ; $sungokong->yell() . "\n<br>";

$kodok = new Frog("Buduk");
echo "<br><br>Name: " ; echo $kodok->get_name() . "\n<br>";
echo "Legs: " ; echo $kodok->get_legs() . "\n<br>"; 
echo "Cold Blooded: " ; echo $kodok->get_cold_blooded() . "\n<br>";
echo "Jump: " ; echo $kodok->jump() . "\n<br>"; // Output: "hop hop"
?>