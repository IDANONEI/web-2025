
INSERT INTO
    user (username, email)
VALUES
    ('Ваня Денисов', 'vanya@example.com');

INSERT INTO
    post (content, image_url, likes, user_id, created_at)
VALUES
    (
        'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор…',
        'snowy_street.png',
        203,
        1,
        NOW()
    );

INSERT INTO
    user (username, email)
VALUES
    ('Петя', 'petya@example.com');

INSERT INTO
    post (content, image_url, likes, user_id, created_at)
VALUES
    (
        'Так красиво сегодня на улице!',
        'field.png',
        20,
        2,
        NOW()
    );