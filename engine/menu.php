<?php 

function getMenu($link = '/')
{
    return [
        $link => 'Главная',
        $link . 'catalog' => 'Каталог',
        $link . 'basket' => 'Корзина (' . getBasketCount() . ')',
        $link . 'gallery' => 'Галерея',
        $link . 'calculator' => 'Калькулятор',
        $link . 'feedback' => 'Отзывы',
        $link . 'orders' => 'Заказы',
    ];
}