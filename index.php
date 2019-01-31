<?php require_once './init.php'; ?>
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

        // METHOD 2: The slower way, namespace is equal to folder structure but the classname is differnt to the filename
        $class_two = new testclasses\classes\class_two();
        $class_two->method_from_class_two();

        // METHOD 3: The slowest way, here ist nothing euqal
        $three_class = new name_space\namespace2\three_class();
        $three_class->method_from_three_class();
        
        ?>
    </body>
</html>
