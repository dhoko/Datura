<?php
require('../../constants.php');
require(LIB_PATH . '/lib_rss.php');  // Includes class autoloader

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
