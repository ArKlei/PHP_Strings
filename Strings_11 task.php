<?php

/* 11 užduotis

Papildomas.
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. 
Žodžiai neturi kartotis. (reikės masyvo) */


$str = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$array = explode(" ",$str);

$random = array_rand($array,10);

echo $array[$random[0]] . '<br>' . $array[$random[1]] . '<br>' .
$array[$random[2]] . '<br>' . $array[$random[3]] . '<br>' .
$array[$random[4]] . '<br>' . $array[$random[5]] . '<br>' .
$array[$random[6]] . '<br>' . $array[$random[7]] . '<br>' .
$array[$random[8]] . '<br>' . $array[$random[9]];

?>
