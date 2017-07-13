<?php

//error_reporting(-1); // Report all PHP errors
//ini_set('error_reporting', -1); // -1 is E_ALL
//ini_set('display_errors', 1); // Show all PHP errors

/**
 * 
 * @return type Integer
 */
function start_time() {

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];
    return $time;
}

/**
 * 
 * @param type $timer
 * @return type Integer
 */
function end_time($timer) {

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];
    $finish = $time - $timer;
    $endTime = sprintf("%4.3f", $finish);
    return $endTime;
}

/**
 * Get the URL protocol
 * @return type String
 */
function get_protocol() {

    $HTTPS = (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : '');
    $protocol = !isset($HTTPS) || $HTTPS != 'on' ? 'http://' : 'https://';
    return $protocol;
}

/**
 * Get the Host
 * @return type String
 */
function get_host() {

    return (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
}

/**
 * Get the request uri
 * @return type String
 */
function get_request_uri() {

    return get_protocol() . get_host() . filter_input(INPUT_SERVER, 'REQUEST_URI');
}

define('MBT_DEBUG_DISPLAY_AUTOLOAD', true);
// Define web roots
define('MBT_DOCUMENT_ROOT', __DIR__);
define('MBT_SERVER_ROOT', str_replace(MBT_DOCUMENT_ROOT, '', str_replace(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'), '', str_replace("\\", "/", __DIR__))));
define('MBT_HTTP_ROOT', get_protocol() . get_host() . MBT_SERVER_ROOT);
