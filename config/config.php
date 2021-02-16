<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3307');  
// порт  3306 занят, т.к. стоит MySQLworkbranch
define('USER', 'site');
define('PASS', '12345');
define('DB', 'site');

include "../engine/db.php";
include "../engine/functions.php";
include "../engine/log.php";
include "../engine/gallery.php";
include "../engine/catalog.php";
include "../engine/upload.php";
include "../engine/menu.php";
include "../engine/feedback.php";
include "../engine/calc.php";
include "../engine/classSimpleImage.php";

