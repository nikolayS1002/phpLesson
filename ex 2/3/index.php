<?php
    $headTitle = "Главная страница - страница обо мне";
    $textTitle = "Информация обо мне";
    $year = 2021;

    $text = file_get_contents("site.php");

    $text = str_replace("{{ headTitle }}", $headTitle, $text);
    $text = str_replace("{{ textTitle }}", $textTitle, $text);
    $text = str_replace("{{ year }}", $year, $text);

    echo $text;


