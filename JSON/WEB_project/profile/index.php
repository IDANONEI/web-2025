<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Профиль</title>
    <meta charset="UTF-8">
    <link href="../fonts/font.css" type="text/css" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="island_menu">
        <img class="island_item" src="images/icon/house_icon.svg" alt="Кнопка домой" onclick="location.href='../home'">
        <img src="images/icon/profile_icon.svg" alt="Кнопка профиля">
        <img class="island_item" src="images/icon/add_icon.svg" alt="Новый пост">
    </div>
    <div class="island_header"></div>

    <?php
    include 'template.php';

    // Загружаем данные
    $postsData = file_get_contents('../data/post.json');
    $posts = json_decode($postsData, true);

    $usersData = file_get_contents('../data/users.json');
    $usersList = json_decode($usersData, true);

    // Получаем user_id из URL
    $userId = (isset($_GET['user_id']) && ctype_digit($_GET['user_id']))
        ? intval($_GET['user_id'])
        : null;

    $users_data = null;

    if ($userId !== null) {
        foreach ($usersList as $user) {
            if ($user['user_id'] == $userId) {
                $users_data = $user;
                break;
            }
        }
    }

    if ($users_data === null) {
        header("Location: ../home");
        exit;
    }

    $user_posts = [];
    foreach ($posts as $post) {
        if ($post['user_id'] == $userId) {
            $user_posts[] = $post;
        }
    }

    generateProfile($users_data, $user_posts);
    ?>
</body>

</html>