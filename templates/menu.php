<?php
foreach ($params['menu'] as $key => $value) {
    // echo $key . '  =>  ' . $value . '<br>';
    echo "<a href=\"{$key}\">{$value}</a> ";
}
echo '<br>';


?>
<!--  <a href="/">Главная</a>
 <a href="/?page=catalog">Каталог</a>
 <a href="/">Корзина (<?= $count ?>)</a><br> -->