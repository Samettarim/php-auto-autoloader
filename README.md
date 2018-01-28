# php-auto-autoloader
 With this autoloader, you do not need any more, no matter where you have a master in your root, the autoloader of MB Tornado Ai will find it.

# Usage

The only thing you have to do is to integrate the two files `init.php` and `class.Loader.php`, that's it :)
And now instantiate your classes, interfaces, traits or even abstract classes, no matter where.

## Example
```php
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

        define('MBT_DOCUMENT_ROOT', 'your-project-root-path');
        
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

# Loader methods
The autoloader finds everything yourself you do not have to do anything except write your class and instanzieren and use.

## METHOD 1:

> This is the fastest way

That means we take the website root path and namespace as a folder path and the classname we put together with these.

### Example
First Header | Second Header
------------ | -------------
PATH | `/users/username/projects/sites/website/`
NAMESPACE | `modal`
CLASS | `AbstractEntity`
Then the result example | `/users/username/projects/sites/website/modal/class.AbstractEntity.php`

## METHOD 2:

> This method is slightly slower than the first, so 0.03 - 0.05 seconds

This function namspace as folder path and force only this path for class file.
This means every file found in this folder is opened and searched for the classname. 
As soon as the used class exists in a file, this is integrated.

### Example
First Header | Second Header
------------ | -------------
PATH | `/users/username/projects/sites/website/`
NAMESPACE | `modal`
Then the result example | `/users/username/projects/sites/website/modal/`

## METHOD 3:

> This method is the slowest, but found class anything where

This method is the slowest, because it scans all your folders. 
No matter how much files you have, all are opened, read and searched for the classname. 
The complete path is the directory path, that you give the autoloader

DEFAULT: `MBT_DOCUMENT_ROOT`

You can change this default root here in file `class.Loader.php` on line 314
```php
if (class_exists('autoload\Loader')) {
    // Path to force - Default: MBT_DOCUMENT_ROOT
    $GLOBALS['MBT_AUTOLOAD'] = new Loader(array(MBT_DOCUMENT_ROOT));
} else {
    trigger_error("The Class Loader() from Autoload can't initiate.", E_USER_ERROR);
}
```

### Example
First Header | Second Header
------------ | -------------
PATH | `/users/username/projects/sites/website/`

# Information

MB Tornado Ai is a CMF & CMS mixin coming soon, this autoloader is one of parts from Framework.

## Contribute

Please an [issue](https://github.com/Samettarim/less-mixins/issues) if you
think something could be improved. Please submit Pull Requests when ever
possible.

## Built with

* [NetBeans](https://netbeans.org/) - NetBeans editor for error-free code

## Authors

* **Samet Tarim** - *All works* - [ProDeveloper](https://profiles.wordpress.org/prodeveloper/)

## License

[![CC0](https://licensebuttons.net/p/zero/1.0/88x31.png)](http://creativecommons.org/publicdomain/zero/1.0/)