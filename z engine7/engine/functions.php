<?php


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
function prepareVariables($page, $action = '')
{
    $params = [];
    $params['name'] = get_user();
    $params['auth'] = isAuth();

    switch ($page) {
        case 'index':

            break;

        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            if (auth($login, $pass)) {
                if (isset($_POST['save'])) {
                    $hash = uniqid(rand(), true);
                    $id = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($_SESSION['id'])));
                    $sql = "UPDATE users SET hash = '{$hash}' WHERE id = {$id}";
                    $result = mysqli_query(getDb(), $sql);
                    setcookie("hash", $hash, time() + 3600, "/");
                }
                header("Location: /");
                die();
            } else {
                die("Не верный логин пароль");
            }


        case 'logout':
            setcookie("hash", "", time()-1, "/");
            session_destroy();
            header("Location: /");
            die();



        case 'feedback':

            doFeedbackAction($action);

            $params['message'] = '';
            $params['feedback'] = getAllFeedback();

            break;

        case 'gallery':
            if ($_POST) {
                uploadFile();
                header();
            }

            $params['gallery'] = getGallery();
            break;

        case 'basket':
            $params = [
                'basket' => getBasket()
            ];
            break;

        case 'news':
            $params['news'] = getNews();
            if ($action = 'edit') {
            }
            break;

        case 'newsOne':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'catalog':

            $params['catalog'] = getGoods();

            break;
    }
    return $params;
}

//Функция, возвращает текст шаблона $page с подстановкой переменных
//из массива $params, содержимое шабона $page подставляется в
//переменную $content главного шаблона layout для всех страниц
function render($page, array $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}


//Функция возвращает текст шаблона $page с подставленными переменными из
//массива $params, просто текст
function renderTemplate($page, array $param = [])
{
    ob_start();
    //params
    //[
    // 'menu' => '<a>...
    // 'content' => 'Добро пожало
    //]
    // foreach ($params as $key => $value) {
    //     $$key = $value;
    // }
    if (!is_null($param)) {
        extract($param);
    }


    $fileName = TEMPLATES_DIR . $page . ".php";


    if (file_exists($fileName)) {
        include $fileName;
    } else {
        die("Страницы {$fileName} не существует.");
    }


    return ob_get_clean();
}