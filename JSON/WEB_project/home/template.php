<?php
function timeAgo($timestamp)
{
    $diff = time() - $timestamp;

    if ($diff < 60)
        return $diff . ' секунд назад';
    elseif ($diff < 3600)
        return floor($diff / 60) . ' минут назад';
    elseif ($diff < 86400)
        return floor($diff / 3600) . ' часов назад';
    elseif ($diff < 172800)
        return 'вчера';
    elseif ($diff < 604800)
        return floor($diff / 86400) . ' дней назад';
    else
        return date('d.m.Y', $timestamp); // fallback — если больше недели
}
?>

<?php
function generatePost($post, $data_user)
{
    ?>
    <div class="post">
        <div class="head_post">
            <img class="profile_picture" src=<?php echo $data_user['profile_image'] ?> alt="Фото профиля">
            <div class="name_container name_text"><?php echo ($data_user['first_name'] . ' ' . $data_user['last_name']) ?>
            </div>
            <span class="edit_post"> <img src="images/icon/change_icon.svg" alt="Изменить пост"></span>
        </div>
        <img class="post_photo" src=<?php echo $post['images'][0] ?> alt="Фото c аккаунта">
        <div class="like_container">
            <button class="like">
                <img src="images/icon/heart_icon.png" alt="Лайк">
                <span class="like_count"><?php echo $post['like'] ?></span>
            </button>
        </div>
        <p class="description_post"><?php echo $post['post_description'] ?></p>
        <p class="information_post"><?php echo timeAgo($post['time_create']); ?></p>
    </div>
<?php
}
?>