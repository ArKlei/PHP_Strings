<?php

/*7 užduotis

Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
“2001: A Space Odyssey” ir “It's a Wonderful Life”. */

$place = '"An American in Paris"';
echo 'Before: ' . $place . '<br>';

$replaced_place = str_replace('A','',str_replace('e','',str_replace('i','',str_replace('a','',$place))));
echo 'After : ' . $replaced_place . '<br><br>';

$second_place = '"Breakfast at Tiffany\'s"';
echo 'Before: ' . $second_place . '<br>';

$replaced_place = str_replace('e','',str_replace('a','',str_replace('i','',str_replace('y','',$second_place))));
echo 'After : ' . $replaced_place . '<br><br>';

$third_place = '"2001: A Space Odyssey"';
echo 'Before: ' . $third_place . '<br>';

$replaced_place = str_replace('A','',str_replace('a','',str_replace('e','',str_replace('y','',$third_place))));
echo 'After : ' . $replaced_place . '<br><br>';

$fourth_place = '"It\'s a Wonderful Life"';
echo 'Before: ' . $fourth_place . '<br>';

$replaced_place = str_replace('I','',str_replace('a','',str_replace('o','',str_replace('e','',str_replace('u','',str_replace('i','',$fourth_place))))));
echo 'After : ' . $replaced_place . '<br><br>';

?>
