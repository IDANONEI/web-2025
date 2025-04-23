<?php
function factDigit(int $digit): string {
    if ($digit === 0) {
        return 1;
    } else {
        return $digit * factDigit($digit - 1);
    }
}

if (isset($_GET['digit'])) {
    $input = (int)$_GET['digit'];

    if ($input >= 0) {
        echo factDigit($input);
    } else {
        echo 'Неправильный ввод';
    }  
}
