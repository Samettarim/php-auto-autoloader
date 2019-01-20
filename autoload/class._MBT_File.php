<?php

namespace autoload;

/**
 * Description of Files
 *
 * @author      Samet Tarim (prod3v3loper)
 * @copyright   (c) 2017, Samet Tarim
 * @link        https://www.tnado.com/
 * @package     MelAbu
 * @subpackage  MB tnado Ai
 * @since       1.0
 * @see         https://github.com/prod3v3loper/php-auto-autoloader
 */
class _MBT_File {

    /**
     * This function shows all file rights
     * @param type $path
     * @return type
     */
    public function getFilePerm($path) {

        $perms = fileperms($path);

        switch ($perms & 0xF000) {
            case 0xC000: // Socket
                $info = 's';
                break;
            case 0xA000: // Symbolic Link
                $info = 'l';
                break;
            case 0x8000: // Regular
                $info = 'r';
                break;
            case 0x6000: // Block special
                $info = 'b';
                break;
            case 0x4000: // Folder
                $info = 'd';
                break;
            case 0x2000: // Character special
                $info = 'c';
                break;
            case 0x1000: // FIFO pipe
                $info = 'p';
                break;
            default: // Unknow
                $info = 'u';
        }

        // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));
        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-'));
        // Other
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));

        return $info;
    }

    /**
     * This function shows only the oktal file rights
     * @param type $path
     * @return type
     */
    public function getOktalPerm($path) {

        return mb_substr(sprintf('%o', fileperms($path)), -4);
    }

    /**
     * To open and handle large files
     * @param array $args
     * @return type
     */
    public function readLargeFile(array $args = array()) {

        $contents = '';
        if (!isset($args['size']) || isset($args['size']) AND empty($args['size'])) {
            $size = filesize($args['path']);
        }
        //..
        else if (isset($args['size']) AND ! empty($args['size'])) {
            $size = $args['size'];
        }

        $handle = fopen($args['path'], "r");
        if (false === $handle) {
            trigger_error('Can\'t open the large file ' . $args['path']);
        }

        while (!feof($handle)) {
            $contents .= fread($handle, $size);
        }

        fclose($handle);

        return $contents;
    }

}
