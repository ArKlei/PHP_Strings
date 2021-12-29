<?php

/* 8 užduotis

Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį. */


$str = 'Star Wars: Episode '. str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';
echo 'The phrase is: ' . $str . '<br>';
$number = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
echo 'The number inside the phrase is: ' . $number . '<br><br>';

$str = 'Star Wars: Episode '. str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';
echo 'The phrase is: ' . $str . '<br>';
$number = preg_replace('/[^0-9]/', '', $str);
echo 'The number inside the phrase is: ' .$number . '<br><br>';

$str = 'Star Wars: Episode '. str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';
echo 'The phrase is: ' . $str . '<br>';
$number = preg_replace('/\D/', '', $str);
echo 'The number inside the phrase is: ' . $number;

?>
