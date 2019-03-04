<?php
// Decomment for debug
// error_reporting(-1); // Report all PHP errors
// ini_set('error_reporting', -1); // -1 is E_ALL
// ini_set('display_errors', 1); // Show all PHP errors

define('MBT_DOCUMENT_ROOT', __DIR__);
//require_once './autoload/src/Loader.php';
require_once __DIR__ . '/vendor/autoload.php';
new \Aautoloder\Loader(array(MBT_DOCUMENT_ROOT));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MB tnado Ai - Autoload</title>
    </head>
    <body>
        <?php
        // METHOD 1: Fastest way, the namespace is foldername structure and filename is equal to filename
        $class_one = new testclasses\classOne();
        $class_one->method_from_class_one();
        ?>
        <br>
        <?php
        // METHOD 2: The slower way, namespace is equal to folder structure but the classname is differnt to the filename
        $class_two = new testclasses\classes\class_two();
        $class_two->method_from_class_two();
        ?>
        <br>
        <?php
        // METHOD 3: The slowest way, here ist nothing euqal
        $three_class = new name_space\namespace2\three_class();
        $three_class->method_from_three_class();
        ?>
    </body>
</html>
