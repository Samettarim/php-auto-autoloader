<?php

/**
 * Description of Autoload Configuration
 * 
 * @author      Samet Tarim (prod3v3loper)
 * @copyright   (c) 2017, Samet Tarim
 * @link        https://www.tnado.com/
 * @package     MelAbu
 * @subpackage  MB tnado Ai
 * @since       1.0
 * @see         https://github.com/prod3v3loper/php-auto-autoloader
 */

// Set this to false so that you no longer see the debugging
define('MBT_DEBUG_DISPLAY_AUTOLOAD', true);
// This activate/deactivate the indexing of the classes in file
define('MBT_CORE_AUTOLOAD_INDEX', true);
// Max read lines in file to find the class
define('MBT_CORE_AUTOLOAD_READ_MAX_LINES', 49);
// Files
define('MBT_CORE_AUTOLOAD_LOG_FOLDER', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload' . DIRECTORY_SEPARATOR . 'log');
define('MBT_CORE_AUTOLOAD_LOG_FILE', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload' . DIRECTORY_SEPARATOR . 'autoload.log');
define('MBT_CORE_AUTOLOAD_LOG_LOGS', MBT_DOCUMENT_ROOT . DIRECTORY_SEPARATOR . 'autoload/log/_' . date('Y_m_d', time()) . '.log');