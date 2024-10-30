<?php

// Action with numbers

$reminder_of_division = 7 % 3;
var_dump($reminder_of_division);

echo '<br>';

$int_part_of_division = (int)(7 / 7.15);
var_dump($int_part_of_division);

echo '<br>';

$sqrt_number = 25;
var_dump(sqrt($sqrt_number));

echo '<br>';

// Actions with strings

$fourth_word = explode(' ', 'Десять негритят пошли купаться в море');
var_dump($fourth_word[3]);

echo '<br>';

$get_char = mb_substr('Десять негритят пошли купаться в море', 16, 1);
var_dump($get_char);

echo '<br>';

$to_upper = 'Десять негритят пошли купаться в море';
$to_upper = mb_convert_case($to_upper, MB_CASE_TITLE, 'UTF-8');
var_dump($to_upper);

echo '<br>';

$length_of_string = 'Десять негритят пошли купаться в море';
var_dump(mb_strlen($length_of_string, 'UTF-8'));



?>