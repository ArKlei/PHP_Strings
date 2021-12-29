<?php

/* 10 užduotis

Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. 
Stringo ilgis 3 simboliai. */

$str = 'a b c d e f g h i k l m n p r s t u v w x y z';
$array = explode(" ",$str);
echo $array[array_rand($array,1)]. ' ' . $array[array_rand($array,1)] . ' ' . $array[array_rand($array,1)];

?>
