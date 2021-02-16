<?php 
function getMenu($link = '/')
{
    return [
        $link => 'Главная',
        $link . 'catalog' => 'Каталог',
        $link . 'gallery' => 'Галерея',
        $link . 'cart' => 'Корзина',
        $link . 'calculator' => 'Калькулятор',
        $link . 'feedback' => 'Отзывы',
    ];
}