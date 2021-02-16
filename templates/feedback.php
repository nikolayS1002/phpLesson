<div>
    <h2>Отзывы</h2>
    <div>
        <form action="" method="post">
            <input type="text" name="name"><br><br>
            <textarea name="text" cols="40" rows="5"></textarea><br>
            <input type="submit" value="Отправить">
            <?= $message ?>
        </form>
    </div>
    <div>
        <?php foreach ($feedback as $item) :?>
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['text'] ?></p>
        <?php endforeach; ?>
    </div>
</div>