<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашняя страница</title>
    <meta charset="UTF-8">
    <link href="../fonts/font.css" type="text/css" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
    $postsData = file_get_contents('../data/post.json');
    $posts = json_decode($postsData, true);
    $usersData = file_get_contents('../data/users.json');
    $usersList = json_decode($usersData, true);
    ?>

    <div class="island_menu">
        <img src="images/icon/house_icon.svg" alt="Кнопка домой">
        <?php
        if (isset($usersList[0])) {
            ?>
            <img class="island_item" src="images/icon/profile_icon.svg" alt="Кнопка профиля"
                onclick="location.href='../profile/?user_id='+ <?php $usersList[0]['user_id'] ?>">
            <?php
        }
        ?>
        <img class="island_item" src="images/icon/add_icon.svg" alt="Новый пост">
    </div>
    <div class="island_header"></div>
    <?php
    include 'template.php';
    include '../validation.php';

    $userIdFilter = (isset($_GET['user_id']) && ctype_digit($_GET['user_id']))
        ? intval($_GET['user_id'])
        : null;

    $usersById = [];
    foreach ($usersList as $user) {
        $usersById[$user['user_id']] = $user;
    }

    foreach ($posts as $post) {
        $postUserId = $post['user_id'];

        if (isValidUserId($userIdFilter, $usersById) && ($postUserId !== $userIdFilter)) {
            continue;
        }

        if (isset($usersById[$postUserId])) {
            $user = $usersById[$postUserId];
            generatePost($post, $user);
        }
    }
    ?>
</body>

</html>