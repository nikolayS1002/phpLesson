<?php
define("TEMPLATES_DIR", "../templates/");
define("LAYOUTS_DIR", "layouts/");

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'shop');

include "../engine/db.php";
include "../engine/auth.php";
include "../engine/functions.php";
include "../engine/log.php";
include "../engine/gallery.php";
include "../engine/news.php";
include "../engine/feedback.php";
include "../engine/good.php";
