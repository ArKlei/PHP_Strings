<?php

/* 7 užduotis

Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
“2001: A Space Odyssey” ir “It's a Wonderful Life”. */

$place = '"An American in Paris"<br> "Breakfast at Tiffany\'s"<br>"2001: A Space Odyssey"<br>"It\'s a Wonderful Life"';
echo 'Before: <br>' . $place . '<br>';

$replaced_place = str_replace('a','',str_replace('e','',str_replace('i','',str_replace('e','',str_replace('y','',str_replace('o','',str_replace('u',''$place)))))));
echo 'After : ' . $replaced_place . '<br><br>';

?>
