<?php
// Decomment for debug
// error_reporting(-1); // Report all PHP errors
// ini_set('error_reporting', -1); // -1 is E_ALL
// ini_set('display_errors', 1); // Show all PHP errors

define('MBT_DOCUMENT_ROOT', __DIR__);

require_once './autoload/core.config.php';
require_once './autoload/functions/func.core.php';

// Define web roots
define('MBT_SERVER_ROOT', str_replace(MBT_DOCUMENT_ROOT, '', str_replace(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'), '', str_replace("\\", "/", __DIR__))));
define('MBT_HTTP_ROOT', get_protocol() . get_host() . MBT_SERVER_ROOT);

require_once './autoload/classes/class.LoaderHelper.php';
require_once './autoload/classes/class.Loader.php';