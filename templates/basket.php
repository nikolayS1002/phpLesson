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
<br>
Оформите заказ:
<form action="?action=order" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="phone" placeholder="Телефон">
    <input type="submit" value="Оформить заказ">
</form>

<?php
    echo $ses;
    if ($message == 'order') {
        echo '<b> Заказ оформлен. </b>';
    }
?>