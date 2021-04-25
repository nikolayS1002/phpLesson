<h2>Заказы:</h2>

<div class="orders">
    <?php foreach ($orders as $order) : ?>
        <div class="order">
            <div class="order_id"><b>Id: <?= $order['id']; ?></b></div>
            <div class="order_name">Имя: <?= $order['name']; ?></div>
            <div class="order_phone">Телефон: <?= $order['phone']; ?></div>
            <form action="/basket/?action=getOrder" method="post">
                <input type="text" name="id" hidden value="<?= $order['session_id'] ?>">
                <button type="submit">Перейти к заказу</button>
            </form>
        </div><br><br>
    <?php endforeach; ?>
</div>