<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blog';

// Подключение к базе
$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conn, "utf8mb4");

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Запрос к таблице постов
$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);

// Вывод
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><b>Пост #{$row['id']}</b>: {$row['content']}</p>";
    echo "<img src='{$row['image_url']}' alt='Картинка поста' width='300'><br>";
    echo "<p>❤ {$row['likes']} — опубликован: {$row['created_at']}</p>";
    echo "<hr>";

}

mysqli_close($conn);
?>