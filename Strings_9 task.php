<?php

/* 9 užduotis

Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. 
Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. */


$str = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$array = explode(" ",$str);
echo '<p>The lengths of words in phrase "Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood" :<br>'. 
$array[0] . ' - ' . strlen($array[0]) . '<br>' . $array[1] . ' - ' . strlen($array[1]) . '<br>'. $array[2] . ' - ' . strlen($array[2]). '<br>' .
$array[3] . ' - ' . strlen($array[3]) . '<br>' . $array[4] . ' - ' . strlen($array[4]) . '<br>'. $array[5] . ' - ' . strlen($array[5]). '<br>' .
$array[6] . ' - ' . strlen($array[6]) . '<br>' . $array[7] . ' - ' . strlen($array[7]) . '<br>' . $array[8] . ' - ' . strlen($array[8]) . '<br>' .
$array[9] . ' - ' . strlen($array[9]) . '<br>' . $array[10] . ' - ' . strlen($array[10]). '<br>' . $array[11] . ' - ' . strlen($array[11]) . '<br>' .
$array[12] . ' - ' . strlen($array[12]) . '<br>' . $array[13] . ' - ' . strlen($array[13]);


$str = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$array = explode(" ",$str);
echo '<p>The lengths of words in phrase "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale" :<br>'. 
$array[0] . ' - ' . strlen($array[0]) . '<br>' . $array[1] . ' - ' . strlen($array[1]) . '<br>'. $array[2] . ' - ' . strlen($array[2]). '<br>' .
$array[3] . ' - ' . strlen($array[3]) . '<br>' . $array[4] . ' - ' . (strlen($array[4])-1) . '<br>'. $array[5] . ' - ' . strlen($array[5]). '<br>' .
$array[6] . ' - ' . strlen($array[6]) . '<br>' . $array[7] . ' - ' . strlen($array[7]) . '<br>' . $array[8] . ' - ' . strlen($array[8]). '<br>' . 
$array[9] . ' - ' . strlen($array[9]). '<br>';

?>
