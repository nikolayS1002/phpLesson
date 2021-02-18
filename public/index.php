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
$params = [];
$params['menu'] = getMenu();
$params['auth'] = isAuth();
$params['name'] = get_user();
$params['count'] = getBasketCount();

switch ($page) {
    case 'index':

        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        if ($_GET['action'] == 'buy') {
            $id = (int)$_GET['id'];
            addBasket($id);
        }
        break;

    case 'product':
        $id = (int)$_GET['id'];
        $params['product'] = getProduct($id);
        break;

    case 'basket':
        if ($_GET['action'] == 'delete') {
            $id = (int)$_GET['id'];
            deleteBasket($id);
        }

        $params['basket'] = getBasket();
        $params['sum'] = getBasketSum();
        break;

    case 'login':
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        if (auth($login, $pass)) {
            if (isset($_POST['save'])) {
                $hash = uniqid(rand(), true);
                $id = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($_SESSION['id'])));
                $result = executeSql("UPDATE users SET hash = '{$hash}' WHERE id = {$id}");
                setcookie("hash", $hash, time() + 3600, "/");
            }
            header("Location: /");
            die();
        } else {
            die("Не верный логин пароль");
        }


    case 'logout':
        setcookie("hash", "", time() - 1, "/");
        session_destroy();
        header("Location: /");
        die();

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
