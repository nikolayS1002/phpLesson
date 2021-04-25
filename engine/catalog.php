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

if ($_GET['action'] == 'apilike') {
    $id = (int)$_GET['id'];

    $sql = "UPDATE `goods` SET likes = likes+1 WHERE `id` = '{$id}'";
    executeSql($sql);

    $sql = "SELECT likes FROM `goods` WHERE `id` = {$id}";
    $result = getAssocResult($sql);
    $like = $result[0]['likes'];

    $response['status'] = 'ok';
    $response['like'] = $like;
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    die();
}