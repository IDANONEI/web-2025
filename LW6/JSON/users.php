<?php

$filename = 'users.json'; 
$jsonData = file_get_contents($filename); 

$users = json_decode($jsonData, true);

foreach ($users as $user) {
    echo 'ID: ' . $user['id'] . '<br>';
    echo 'Name: ' . $user['name'] . '<br>';
    echo 'Timestamp: ' . date('Y-m-d H:i:s', $user['timestamp']) . '<br><br>'; // Преобразуем timestamp в читаемый формат
}
?>