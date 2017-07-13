<?php

/**
 * Description of Autoload Configuration
 * 
 * @author      Samet Tarim <dev.tarim@gmail.com>
 * @copyright   (c) 2017, Samet Tarim
 * @package     MelAbu
 * @subpackage  MB Tornado Ai
 * @since       1.0
 * @link        http://www.samet.tarim.de/melabu/mb-tornado-ai/config-autoload Framework-Config-Autoload
 */
define('MBT_CORE_AUTOLOAD_INDEX', true);
define('MBT_CORE_AUTOLOAD_READ_MAX_LINES', 49);
define('MBT_CORE_AUTOLOAD_LOG_FOLDER', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload' . DIRECTORY_SEPARATOR . 'log');
define('MBT_CORE_AUTOLOAD_LOG_FILE', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload' . DIRECTORY_SEPARATOR . 'autoload.log');
define('MBT_CORE_AUTOLOAD_LOG_LOGS', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload/log/_' . date('Y_m_d', time()) . '.log');