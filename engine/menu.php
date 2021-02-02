<?php 
function getMenu($link = '/')
{
    return [
        $link => 'Главная',
        $link . '?page=catalog' => 'Каталог',
        $link . '?page=gallery' => 'Галерея',
        $link . '?page=cart' => 'Корзина (<?= $count ?>)',
    ];
}