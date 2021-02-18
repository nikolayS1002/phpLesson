<?php
function getGoods() {
    return getAssocResult("SELECT * FROM goods");
}

function getBasketCount() {

}

function addBasket($id) {
    $session_id = session_id();
    //INSERT
}

function getBasket() {
    $session_id = session_id();
    $session_id = '123';

    $basket = getAssocResult("SELECT * FROM basket, goods WHERE session_id = '$session_id' AND basket.goods_id = goods.id");

    return $basket;
}