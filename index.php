<?php
require_once 'init.php';
require_once './autoload/class.Loader.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MB Tornado Ai - Autoload</title>
    </head>
    <body>
        <?php
        
        $class_one = new name_space\class_one();
        $class_one->method_from_class_one();

        $class_two = new class_two();
        $class_two->method_from_class_two();

        $three_class = new name_space\three_class();
        $three_class->method_from_three_class();
        
        ?>
    </body>
</html>
