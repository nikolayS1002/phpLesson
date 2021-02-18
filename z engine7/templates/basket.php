<?php
foreach ($basket as $value):?>
    <div>
        <h2><?= $value["name"] ?></h2>
        Стоимость: <?= $value["price"] ?><br>
        <button id="<?= $value["id"] ?>">Удалить</button>
        <hr>
    </div>
<? endforeach; ?>