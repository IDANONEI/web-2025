<?php
function is_lucky(string $ticket):bool {
    $digits = str_split($ticket);
    $first_half = (int)($ticket[0])+(int)($ticket[1])+(int)($ticket[2]);
    $second_half = (int)($ticket[3])+(int)($ticket[4])+(int)($ticket[5]);
    
    return $first_half == $second_half;
}

if (isset($_GET['ticket1']) && isset($_GET['ticket2'])) {
    $ticket1 = $_GET['ticket1'];
    $ticket2 = $_GET['ticket2'];
    echo 'Счасстливые билеты:' .'<br>';
    for ($i = (int)$ticket1; $i <= (int)$ticket2; $i++) {
        $ticket = $i;
        if (is_lucky($ticket)) {
            echo $ticket .'<br>';
        }
    }
}
