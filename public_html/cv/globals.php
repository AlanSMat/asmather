<?php
date_default_timezone_set("Australia/Sydney");

if ($_SERVER["SERVER_NAME"] == 'localhost') {    
    define("LOCAL_DIR", "cv");
    define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" . LOCAL_DIR);
    define("ROOT_URL", "http://" . $_SERVER["SERVER_NAME"] . "/" . LOCAL_DIR);
} else {
    define("LOCAL_DIR", "cv");
    define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" . LOCAL_DIR);
    define("ROOT_URL", "https://" . $_SERVER["SERVER_NAME"] . "/" . LOCAL_DIR);
}

define("MAIN_TITLE", "");
define("COMPANY", "");

define("ASSETS_PATH",        DOC_ROOT           . "/dist/assets");
define("SITE_PATH",          DOC_ROOT           . "/dist/site");
define("CLIENT_ASSETS_PATH", ASSETS_PATH        . "/client");
define("SERVER_ASSETS_PATH", ASSETS_PATH        . "/server");
define("JSON_FILE_PATH",          SITE_PATH          . "/json");
define("CLASSES_PATH",       SERVER_ASSETS_PATH . "/classes");

define("CLIENT_URL",  ROOT_URL . "/dist/assets/client");

define("SCRIPTS_URL", CLIENT_URL . "/js");
define("IMAGES_URL",  CLIENT_URL . "/img");
define("CSS_URL",     CLIENT_URL . "/css");

define("SITE_URL",    ROOT_URL . "/dist/site");
define("COVER_URL",   SITE_URL . "/cover");
define("CV_URL",      SITE_URL . "/cv");

$job_categories["application_support"] = "Application Support";
$job_categories["web_developer"]       = "Web Developer";                        
//$job_categories["traffic_controller"]  = "Traffic Controller";     
?>