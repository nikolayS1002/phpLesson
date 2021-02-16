<?php

//Первым делом подключим файл с константами настроек
include "../config/config.php";

$url_array = explode('/', $_SERVER['REQUEST_URI']);


//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [
    'count' => 2,
    'menu' => getMenu(),
];

switch ($page) {
    case 'index':
        $params['name'] = 'Alex';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'product':
        $id = (int)$_GET['id'];
        $params['product'] = getProduct($id);
        break;

    case 'gallery':
        if (!empty($_FILES)) {
            upload();
        }
        $messages = [
            'ok' => 'Файл заружен',
            'error' => 'Ошибка загрузки'
        ];
        $params['message'] = $messages[$_GET['message']];
        $params['gallery'] = getGallery();
        $params['images'] = getSortedImages();
        break;

    case 'imageone':
        $id = (int)$_GET['id'];
        $params['views'] = updateViews($id);
        $params['images'] = getOneImage($id);
        break;

    case 'feedback':
        $params['feedback'] = getFeedback();
        if ($_POST) {
            putFeedback();
        }
        $messages = [
            'ok' => 'Отзыв добавлен',
            'error' => 'Отзыв не был добавлен'
        ];
        $params['message'] = $messages[$_GET['message']];
        break;

    case 'calculator':
        $params['calc'] = getCalc();
        break;

    case 'apicatalog':
        echo json_encode(getJsonCatalog(), JSON_UNESCAPED_UNICODE);
        die();
}

//_log($params, "render");
echo render($page, $params);
