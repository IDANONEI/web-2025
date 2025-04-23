<?php
function generateProfile($data_user, $user_post)
{
    ?>

    <div class="container_header">
        <img class="profile_picture" src=<?php echo $data_user['profile_image'] ?> alt="Фото профиля">
        <p class="name_text"><?php echo ($data_user['first_name'] . ' ' . $data_user['last_name']) ?></p>
        <p class="about_profile"><?php echo $data_user['about'] ?></p>
        <p class="gallery_container">
            <img src="images/icon/gallery_icon.svg" alt="Галерея">
            <?php echo count($user_post) ?> поста
        </p>
    </div>
    <div class="container_image">
        <?php
        foreach ($user_post as $post) {
        ?>
            <img class="galary_picture" src=<?php echo $post['images'][0] ?> alt="Фото">
            <?php
        }
        ?>
    </div>
<?php
}
?>