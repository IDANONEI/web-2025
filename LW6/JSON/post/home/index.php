

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашняя страница</title>
    <meta charset="UTF-8">
    <link href="../fonts/font.css" type="text/css" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="island_menu">
        <img src="images/icon/house_icon.svg" alt="Кнопка домой">
        <img class="island_item" src="images/icon/profile_icon.svg" alt="Кнопка профиля">
        <img class="island_item" src="images/icon/add_icon.svg" alt="Новый пост">
    </div>

<?php foreach ($users as $user) {
    <div class="post">
        <div class="head_post">
            <img class="profile_picture" src="images/Profile№1/profile_image.png" alt="Фото профиля">
            <div class="name_container name_text"><?php echo $post['name']; ?></div>
            <span class="edit_post"> <img src="images/icon/change_icon.svg" alt="Изменить пост"></span>
        </div>
        <img class="post_photo" src="images/Profile№1/image№1.png" alt="Фото c аккаунта">
        <div class="like_container">
            <button class="like">
                <img src="images/icon/heart_icon.png" alt="Лайк">
                <span class="like_count"><?php echo $post['count_like']; ?></span>
            </button>
        </div>
        <p class="description_post"><?php echo $post['description']; ?></p>
        <p class="information_post"><?php echo date('d.m.y', $post['timestamp']); ?></p>
    </div>
</body>

</html>