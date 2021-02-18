Корзина
<?php
foreach ($basket as $value):?>
    <div>
        <h2><?= $value["name"] ?></h2>
        Стоимость: <?= $value["price"] ?><br>
        <a href="/basket/?action=delete&id=<?= $value["id"] ?>">Удалить</a>
        <hr>
    </div>
<? endforeach; ?>
<div>Итого: <?=$sum?></div>