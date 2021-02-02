<?php
function upload()
{
    //Проверка на размер файла
    if ($_FILES["myfile"]["size"] > 1024 * 1024 * 5) {
        header("Location: /?page=gallery&message=error_size");
        echo ("Размер файла не больше 5 мб");
        exit;
    }

    $path = "gallery_img/big/" . $_FILES["myfile"]["name"] = (array_pop(getGallery()) + 1) . '.jpg';
    $path2 = "gallery_img/small/" . $_FILES["myfile"]["name"] = (array_pop(getGallery()) + 1) . '.jpg';
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $path)) {
        $image = new SimpleImage();
        $image->load($path);
        $image->resize(150, 100);
        $image->save($path2);

        header("Location: /?page=gallery&message=OK");
        die();
    } else {
        header("Location: /?page=gallery&message=error");
        die();
    }
}




$messages = [
    'ok' => 'Файл заружен',
    'error' => 'Ошибка загрузки'
];

$message = $messages[strtolower($_GET['message'])];