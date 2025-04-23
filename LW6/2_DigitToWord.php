<?php
function digitToWord(int $digit): string
{
    $words = [
        0 => 'ноль',
        1 => 'один',
        2 => 'два',
        3 => 'три',
        4 => 'четыре',
        5 => 'пять',
        6 => 'шесть',
        7 => 'семь',
        8 => 'восемь',
        9 => 'девять'
    ];

    return $words[$digit];
}

if (isset($_GET['digit'])) {
    $input = (int)$_GET['digit'];
    if ($input >= 0 && $input <= 9){
        echo digitToWord($input);
    }else{
        echo 'Неправильный ввод';
    }     
}
