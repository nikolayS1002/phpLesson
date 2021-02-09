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
    getDbUpload($_FILES["myfile"]["name"], $_FILES["myfile"]["size"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $path)) {
        $image = new SimpleImage();
        $image->load($path);
        $image->resize(150, 100);
        $image->save($path2);

        header("Location: /gallery/&message=OK");
        die();
    } else {
        header("Location: /gallery/&message=error");
        die();
    }
}

function getDbUpload($name, $size) {
    return executeSql("INSERT INTO images VALUES (NULL, '$name', $size, '0')");
}



