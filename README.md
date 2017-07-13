## php-auto-autoloader
 With this autoloader, you do not need any more, no matter where you have a master in your root, the autoloader of MB Tornado Ai will find it.

### Usage

The only thing you have to do is to integrate the two files `init.php` and `class.Loader.php`, that's it :)
And now instantiate your classes, interfaces, traits or even abstract classes, no matter where.

```markdown
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
```

## METHOD 1:
That means we take the website root path and namespace as a folder path and the classname we put together with these.

## Example
PATH:        /users/username/projects/sites/website/
NAMESPACE:   modal
CLASS:       AbstractEntity
Then the result example /users/username/projects/sites/website/modal/class.AbstractEntity.php

## METHOD 2:
This function namspace as folder path and force only this path for class file.
This means every file found in this folder is opened and searched for the classname. 
As soon as the used class exists in a file, this is integrated.

## METHOD 3:
This method is the slowest, because it scans all your folders. 
No matter how much files you have, all are opened, read and searched for the classname. 
The complete path is the directory path, that you give the autoloader
DEFAULT: `MBT_DOCUMENT_ROOT`

### Information

MB Tornado Ai is a CMF & CMS mixin coming soon, this autoloader is one of parts from Framework.

### Support or Contact

Please write issues here for support, thanks and have fun!