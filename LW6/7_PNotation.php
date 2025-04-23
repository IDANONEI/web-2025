<?php
function calculationPostfix($expression){
    $stack = [];
    $tokens = explode(' ', $expression); 

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            array_push($stack, (int)$token);
        } else {
            $b = array_pop($stack);  // Извлекаем второй операнд
            $a = array_pop($stack);  // Извлекаем первый операнд

            switch ($token) {
                case '+':
                    array_push($stack, $a + $b);
                    break;
                case '-':
                    array_push($stack, $a - $b);
                    break;
                case '*':
                    array_push($stack, $a * $b);
                    break;
            }
        }
    }

    return array_pop($stack); 
}

if (isset($_GET['text'])) {
    $expression = $_GET['text'];
    $result = calculationPostfix($expression);

    echo "Результат:";
    echo $result;
}
?>