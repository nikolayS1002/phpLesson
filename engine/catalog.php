<?php
function getCatalog() {
    return getAssocResult("SELECT * FROM goods");
}

function getProduct($id) {
    return getAssocResult("SELECT * FROM goods WHERE id = {$id}")[0];
}


function getBasketCount() {
    $session_id = session_id();
    $result = getAssocResult("SELECT count(id) as count FROM basket WHERE session_id = '$session_id'");
    return $result[0]['count'];
}

function addBasket($id) {
    $session_id = session_id();
    executeSql("INSERT INTO basket(session_id, goods_id) VALUES ('$session_id', '$id')");
}

function deleteBasket($id) {
    $session_id = session_id();
    executeSql("DELETE FROM basket WHERE id = '$id' AND session_id = '$session_id'");
}

function getBasket() {
    $session_id = session_id();
    // $basket = getAssocResult("SELECT * FROM basket, goods WHERE session_id = '$session_id' AND basket.goods_id = goods.id AS good_id");
    $basket = getAssocResult("SELECT basket.id, goods.name, goods.price, goods.description FROM basket, goods WHERE session_id = '$session_id' AND basket.goods_id = goods.id");
    return $basket;
}

function getBasketSum() {
    $session_id = session_id();
    $sum = getAssocResult("SELECT SUM(goods.price) AS summ FROM basket, goods WHERE session_id = '$session_id' AND basket.goods_id = goods.id");
    return $sum[0]['summ'];
}



function getJsonCatalog() {
    return [
        [
            'name' => 'Пицца',
            'price' => 24
        ],
        [
            'name' => 'Чай',
            'price' => 1
        ],
        [
            'name' => 'Яблоко',
            'price' => 12
        ],
    ];
}