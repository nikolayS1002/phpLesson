<ul>
<?php
foreach ($menu as $key => $value) {
?>
<li><a href="<?=$key?>"><?=$value?></a></li>
 <?php
 }
 echo '<br>';
 ?></ul><br>

<!-- <a href="/">Главная</a>
 <a href="/?page=catalog">Каталог</a>
 <a href="/">Корзина ($count)</a><br> -->