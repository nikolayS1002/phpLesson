<? if ($auth): ?>
Добро пожаловать <?= $name ?>, <a href="/logout">[Выход]</a>
<? else: ?>
<form action="/login" method="post">
    <span> Логин: </span><input type="text" name="login"><br>
    <span> Пароль: </span><input type="text" name="pass"><br>
    Save? <input type='checkbox' name='save'>
    <input type="submit">
</form>
<? endif; ?>
<br><br>
<ul>
    <?php foreach ($menu as $key => $value) : ?>
        <li><a href="<?= $key ?>"><?= $value ?></a></li>
    <?php endforeach; ?>
</ul><br>