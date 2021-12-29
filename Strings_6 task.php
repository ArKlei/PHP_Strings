<?php

/* 6 užduotis 

Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. */

$place = 'An American in Paris';
echo 'Before: ' . $place . '<br>';

$place_number = strlen($place);
echo 'Number of letters is: ' . $place_number . '<br>';

$replaced_place = str_replace('a','',$place);
echo 'Replaced "a" to " ": ' . $replaced_place . '<br>';

$place_number = strlen($replaced_place);
echo 'Number of letters is: ' . $place_number . '<br>';

$a_number = strlen($place) - strlen($replaced_place);
echo 'Number of "a" were : ' . $a_number . '<br>';

$replaced_place = str_replace('A','',$place);
echo 'Replaced "A" to " ": ' . $replaced_place . '<br>';

$place_number = strlen($replaced_place);
echo 'Number of letters is: ' . $place_number . '<br>';

$A_number = strlen($place) - strlen($replaced_place);
echo 'Number of "A" were as well as "a": ' . $A_number . '<br>';




?>
