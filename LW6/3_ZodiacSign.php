<?php
function ZodiacSign(string $dateString): string {

    $parts = explode('-', $dateString);
    $day = $parts[2];
    $month = $parts[1];

    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 20)) {
        return "Овен";
    } elseif (($month == 4 && $day >= 21) || ($month == 5 && $day <= 20)) {
        return "Телец";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
        return "Близнецы";
    } elseif (($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
        return "Рак";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 23)) {
        return "Лев";
    } elseif (($month == 8 && $day >= 24) || ($month == 9 && $day <= 23)) {
        return "Дева";
    } elseif (($month == 9 && $day >= 24) || ($month == 10 && $day <= 23)) {
        return "Весы";
    } elseif (($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) {
        return "Скорпион";
    } elseif (($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)) {
        return "Стрелец";
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 20)) {
        return "Козерог";
    } elseif (($month == 1 && $day >= 21) || ($month == 2 && $day <= 19)) {
        return "Водолей";
    } elseif (($month == 2 && $day >= 20) || ($month == 3 && $day <= 20)) {
        return "Рыбы"; 
    } else {
        return "Неправильный ввод";
    }
}

if (isset($_GET['date'])) {
    
    $input = $_GET['date'];
    echo ZodiacSign($input);
}
