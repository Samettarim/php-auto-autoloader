<?php

/**
 * 
 * @return type float
 */
function start_time() {

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];
    return (float) $time;
}

/**
 * 
 * @param type $timer
 * @return type float
 */
function end_time($timer) {

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];
    $finish = $time - $timer;
    $endTime = sprintf("%4.3f", $finish);
    return (float) $endTime;
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