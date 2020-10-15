<?php
define("TEMPLATES_DIR", "../templates/");
define("LAYOUTS_DIR", "layouts/");
define('IMG_SMALL', '../images/small/');
define('IMG_BIG', '../images/big/');
define('IMG', '../images/');

/* DB config */
define('HOST', 'localhost');
define('USER', 'test');
define('PASS', '12345');
define('DB', 'gallery');

include "../engine/db.php";
include "../engine/functions.php";
include "../engine/log.php";
include "../engine/gallery.php";
include "../engine/news.php";
include "../engine/feedback.php";
include "../engine/catalog.php";
