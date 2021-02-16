<?php
function getCatalog() {
    return getAssocResult("SELECT * FROM goods");
}

function getProduct($id) {
    return getAssocResult("SELECT * FROM goods WHERE id = {$id}")[0];
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