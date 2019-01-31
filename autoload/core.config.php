<?php

/**
 * Description of Autoload Configuration
 * 
 * @author      Samet Tarim
 * @copyright   (c) 2017, Samet Tarim
 * @package     MelAbu
 * @subpackage  MB tando Ai
 * @since       1.0
 * @link        https://www.tnado.com/
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