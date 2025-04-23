<?php
$posts = json_decode(file_get_contents('users.json'), true);
$postId = isset($_GET['id']) ? (int) $_GET['id'] : 1;
$post = $posts[$postId - 1];
?>