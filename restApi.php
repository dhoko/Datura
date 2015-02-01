<?php
require('../../constants.php');
require(LIB_PATH . '/lib_rss.php');  // Includes class autoloader
require 'vendor/autoload.php';
class RestApi {

}

Minz_Configuration::register('system',
                             DATA_PATH . '/config.php',
                             DATA_PATH . '/config.default.php');
$input = file_get_contents("php://input");
// Minz_Log::debug($input);
$input = json_decode($input, true);
if (isset($input["sid"])) {
    session_id($input["sid"]);
}
Minz_Session::init('FreshRSS');
class Yolo {
    public function get() {
        echo "get/Yolo";
    }
}
Toro::serve(array(
    "/"               => "Yolo",
    // "/login"          => "Reed\Routing\Login",
    // "/logout"         => "Reed\Routing\Logout",
    // "/dashboard"      => "Reed\Routing\Dashboard",
    // "/config"         => "Reed\Routing\Config",
    // "/config/:string" => "Reed\Routing\Config",
    // "/import"         => "Reed\Routing\Import",
    // "/feeds"           => "Reed\Routing\Feed",
    // "/feeds/:number"   => "Reed\Routing\Feed",
    // "/categories" => "Reed\Routing\Categories",
    // "/categories/:number" => "Reed\Routing\Categories",
    // "/categories/:number/:string" => "Reed\Routing\Categories",
));
