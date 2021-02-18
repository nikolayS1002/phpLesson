<? if ($auth): ?>
    Добро пожаловать <?= $name ?>, <a href="/logout">[Выход]</a>
<? else: ?>
    <form action="/login" method="post">
        <input type="text" name="login">
        <input type="text" name="pass">
        Save? <input type='checkbox' name='save'>
        <input type="submit">
    </form>
<? endif; ?>
<br>
<a href="/">Главная</a>
<a href="/catalog">Каталог</a>
<a href="/gallery">Галерея</a>
<a href="/news">Новости</a>
<a href="/feedback">Отзывы</a>
<a href="/basket">Корзину (0)</a>
<br>