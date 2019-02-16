# php-auto-autoloader

With this autoloader, you do not need any more, no matter where you have a master in your root, the autoloader of MB tnado Ai will find it.
[Theme Page of this Site](https://prod3v3loper.github.io/php-auto-autoloader/)

# Usage

The only thing you have to do is to integrate the two file `init.php` and the autoload folder to the root of your project, that's it :)
And now instantiate your classes, interfaces, traits or even abstract classes, no matter where.

## Example

```php
<?php
require_once 'init.php';
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

        // METHOD 2: The slower way, namespace is equal to folder structure but the classname is differnt to the filename
        $class_two = new testclasses\classes\class_two();
        $class_two->method_from_class_two();

        // METHOD 3: The slowest way, here ist nothing euqal
        $three_class = new name_space\namespace2\three_class();
        $three_class->method_from_three_class();
        
        ?>
    </body>
</html>
```
# Debug

**autoload/core.config.php**

Set this to false so that you no longer see the debugging
```php
define('MBT_DEBUG_DISPLAY_AUTOLOAD', true);
```

Look at which classes where were found.
```php
define('MBT_DEBUG_DISPLAY_AUTOLOAD_SEARCH', true);
```

# Root

The complete path is the directory path, that the autoloader get by self

DEFAULT: `MBT_DOCUMENT_ROOT`

The autoloader define get the web root by self on require the `init.php`
```php
define('MBT_DOCUMENT_ROOT', __DIR__);
define('MBT_SERVER_ROOT', str_replace(MBT_DOCUMENT_ROOT, '', str_replace(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'), '', str_replace("\\", "/", __DIR__))));
define('MBT_HTTP_ROOT', get_protocol() . get_host() . MBT_SERVER_ROOT);
```

# Loader methods

The autoloader finds everything yourself you do not have to do anything except write your class and instanzieren and use.

Method | Namespace (Instance) | Path | Load Time
------------ | ------------ | ------------- | -------------
1 | testclasses\classOne | php-auto-autoloader/testclasses/classOne.php | 0.002 sec.
2 | testclasses\classes\classTwo.php | php-auto-autoloader/testclasses/classes/classTwo.php | 0.001 sec.
3 | name_space\namespace2\three_class | php-auto-autoloader/testclasses/classThree.php | 0.021 sec.

## METHOD 1:

> This is the fastest way

That means we take the website root path and namespace as a folder path and the classname we put together with these.

### Example

Type | Sample
---- | ------
PATH | `/users/username/projects/sites/website/`
NAMESPACE | `modal`
CLASS | `AbstractEntity`
Then the result example | `/users/username/projects/sites/website/modal/class.AbstractEntity.php`

## METHOD 2:

> This method is slightly slower than the first, so 0.03 - 0.05 seconds

This function namespace as folder path and force only this path for class `Abstract Entity` file.
However, this only occurs when the file does not match the specified class name.
This means every file found in this folder is opened and searched for the classname. 
As soon as the used class exists in a file, this is integrated and can use it.

### Example

Type | Sample
---- | ------
PATH | `/users/username/projects/sites/website/`
NAMESPACE | `modal`
Then the result example | `/users/username/projects/sites/website/modal/`

## METHOD 3:

> This method is the slowest, but found class anything where

This method is the slowest, because it scans all your folders. 
No matter how much files you have, all are opened, read and searched for the classname. 
This method intervenes only when none of the other methods was successful. So if the namespace was not just a folder name and the class name was not filename.

### Example

Type | Sample
---- | ------
PATH | `/users/username/projects/sites/website/`

# Information

[tnado SEO & AMP CMS](https://www.tnado.com/), this autoloader is one of parts from Framework.

## Contribute

Please an [issue](https://github.com/prod3v3loper/less-mixins/issues) if you
think something could be improved. Please submit Pull Requests when ever
possible.

## Built with

[NetBeans](https://netbeans.org/) - NetBeans editor for error-free code

# Authors

**Samet Tarim** - *All works* - [prod3v3loper](https://www.tnado.com/author/prod3v3loper/)

# License

[MIT](https://github.com/prod3v3loper/php-auto-autoloader/blob/master/LICENSE)