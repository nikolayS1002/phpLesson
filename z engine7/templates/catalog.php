<h2>Каталог</h2>

<?php foreach ($catalog as $value):?>
    <div>
        <h2><?=$value["name"]?></h2>
        Стоимость: <?=$value["price"]?><br>
        <button id="<?=$value["id"]?>">Купить</button><hr>
    </div>
<? endforeach;?>