<?php
$userName = 'Андрей Оськин';
$userAge = '20';
$city = 'Москва';
$mail = 'strateg96@gmail.com';
$people= 'Начинающий php-программист , который учится в онлайн-институте "Нетология"';
if ($userName) {
?>
<div>
 <h2>Страница пользователя Андрей Оськин</h2>
 <p>Имя: <strong><?= $userName ?></p>
 <p>Возраст: <strong><?= $userAge ?></p>
 <p>Город: <strong><?= $city ?></p>
 <p>Email: <strong><?= $mail ?></p>
 <p>О себе: <?= $people ?></p>
</div>
<?php } else { ?>
<div><h2>Пользователь не найден</h2></div>
	<?php }
