<?php

define("DEFAULT_CONTROLLER", "paginas");
define("DEFAULT_LAYOUT", "default");

define("APP_FOLDER", "framework1");
define("APP_URL", "http://".$_SERVER['SERVER_NAME']."/".APP_FOLDER."/");

define("APP_URL_CSS", APP_URL."default/css/");
define("APP_URL_IMG", APP_URL."default/img/");
define("APP_URL_JS",  APP_URL."default/js/");

define("APP_NAME", "Framework");

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "gestion");
define("DB_CHAR", "UTF8");
?>