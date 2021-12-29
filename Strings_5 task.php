<?php

/* 5 užduotis 

Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. */


$place = 'An American in Paris';
echo 'Before: ' . $place . '<br>';
$replaced_place = str_replace('A','*', str_replace('a','*',$place));
echo 'After: ' . $replaced_place;


?>
