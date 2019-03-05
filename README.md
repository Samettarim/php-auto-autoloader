# PHP Auto Autoloader

![Language](https://img.shields.io/github/languages/top/prod3v3loper/php-auto-autoloader.svg?style=flat "Language")
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/90539baa57ba4ea1beb8451090f42547)](https://www.codacy.com/app/prod3v3loper/php-auto-autoloader?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=prod3v3loper/php-auto-autoloader&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/prod3v3loper/syntaxo.svg?branch=master "Build Status")](https://travis-ci.org/prod3v3loper/syntaxo "Build Status")
![Repo Size](https://img.shields.io/github/repo-size/prod3v3loper/php-auto-autoloader.svg?style=flat "Repo size")
![Code SIze](https://img.shields.io/github/languages/code-size/prod3v3loper/php-auto-autoloader.svg?style=flat "Code size")
![Github Release date](https://img.shields.io/github/release/prod3v3loper/php-auto-autoloader.svg?style=flat "Github Release date")
![Packgist PHP Version](https://img.shields.io/packagist/php-v/prod3v3loper/php-auto-autoloader.svg?style=flat "Packgist PHP Version")
![MIT License](https://img.shields.io/github/license/prod3v3loper/php-auto-autoloader.svg?style=flat "MIT License")
[![Website](https://img.shields.io/website-up-down-green-red/https/www.tnado.com/open-source-projects-by-prod3v3loper.svg?style=flat "Website")](https://www.tnado.com/open-source-projects-by-prod3v3loper/ "Website")

With this autoloader, you do not need any more, no matter where you have a master in your root, the autoloader of MB tnado Ai will find it.
[Theme Page of this Site](https://prod3v3loper.github.io/php-auto-autoloader/)

# Usage

Instantiate your classes, interfaces, traits or even abstract classes, no matter where.
The only thing you have to do is to integrate.

## Packagist with Composer

This solution extends the vendor autoloader because it calls the files with certain criteria. The extension allows you to call classes wherever the Autloder is involved.

Download [Composer](https://getcomposer.org/) local or global. Check for more [Tutorial - NetBeans with Composer and Packagist](https://www.tnado.com/blog/netbeans-with-composer-and-packagist-the-php-package-manager/) for this one.

You found the Autoloader package on [Packagist - PHP Auto Autoloader](https://packagist.org/packages/prod3v3loper/php-auto-autoloader).

Add the Autoloader dependencie to the **composer.json** and set the autoload.
```json
{
    ...
    "autoload": {
        "psr-4": { "Aautoloder\\": "autoload/src" }
    },
    "require": {
        "prod3v3loper/php-auto-autoloader": ">=1.0"
    }
    ...
}
```

Now run the composer install command with php
```
php composer.phar install
```

This is the vendor autoloader invites our autoloader and now we do not need to specify any more class and can load all our classes.

`index.php`
```php
<?php
define('MBT_DOCUMENT_ROOT', __DIR__);
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

## Git clone

Get per [Git](https://git-scm.com/) or [download](https://github.com/prod3v3loper/php-auto-autoloader/archive/master.zip) and use it.

```
git clone https://github.com/prod3v3loper/php-auto-autoloader.git /Users/username/projects/
```

So we use it without a vendor and can start a direct call.

`index.php`
```php
<?php
define('MBT_DOCUMENT_ROOT', __DIR__);
require_once './autoload/src/Loader.php';
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

`autoload/core.config.php`

Set this to false so that you no longer see the debugging
```php
define('MBT_DEBUG_DISPLAY_AUTOLOAD', true);
```

Look at which classes where were found.
```php
define('MBT_DEBUG_DISPLAY_AUTOLOAD_SEARCH', true);
```

# Root

The complete path is the directory path, that the autoloader get by self.

DEFAULT: `MBT_DOCUMENT_ROOT`

The autoloader define get the web root by self after set `MBT_DOCUMENT_ROOT`
```php
define('MBT_DOCUMENT_ROOT', __DIR__);
define('MBT_SERVER_ROOT', str_replace(MBT_DOCUMENT_ROOT, '', str_replace(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'), '', str_replace("\\", "/", MBT_DOCUMENT_ROOT))));
define('MBT_HTTP_ROOT', get_protocol() . get_host() . MBT_SERVER_ROOT);
```

# Loader methods

The autoloader finds everything yourself you do not have to do anything except write your class and instanzieren and use.

Method | Namespace (Instance) | Path | Load Time
------------ | ------------ | ------------- | -------------
1 | testclasses\classOne | php-auto-autoloader/testclasses/classOne.php | 0.001 sec.
2 | testclasses\classes\classTwo.php | php-auto-autoloader/testclasses/classes/classTwo.php | 0.002 sec.
3 | name_space\namespace2\three_class | php-auto-autoloader/testclasses/classThree.php | 0.021 sec.

## METHOD 1:

> This is the fastest way

That means we take the website root path and namespace as a folder path and the classname we put together with these.

### Example

**The instance:**
`new testclasses\classOne();`

Type | Sample | Description
---- | ------ | ------
PATH | `/users/username/projects/sites/website/` | MBT_DOCUMENT_ROOT
NAMESPACE | `testclasses` | Like the folder name
CLASS | `classOne` | Like the file name without extension
Then the result example | `/users/username/projects/sites/website/testclasses/classOne.php` | 

## METHOD 2:

> This method is slightly slower than the first, so 0.03 - 0.05 seconds

This function namespace as folder path and force only this path for class `class_two` (Example) file.
However, this only occurs when the file does not match the specified class name.
This means every file found in this folder is opened and searched for the classname. 
As soon as the used class exists in a file, this is integrated and can use it.

### Example

**The instance:**
`new testclasses\classes\class_two();`

Type | Sample | Description
---- | ------ | ------
PATH | `/users/username/projects/sites/website/` | MBT_DOCUMENT_ROOT
NAMESPACE | `testclasses\classes` | Like the folder name
Then the result example | `/users/username/projects/sites/website/testclasses/classes/classTwo.php` | 

## METHOD 3:

> This method is the slowest, but found class anything where

This method is the slowest, because it scans all your folders. 
No matter how much files you have, all are opened, read and searched for the classname. 
This method intervenes only when none of the other methods was successful. So if the namespace was not just a folder name and the class name was not filename.

### Example

**The instance:**
`new testclasses\classes\three_class();`

Type | Sample | Description
---- | ------ | ------
PATH | `/users/username/projects/sites/website/` | MBT_DOCUMENT_ROOT
Then the result example | `/users/username/projects/sites/website/testclasses/classThree.php` | 

# Information

[tnado SEO & AMP CMS](https://www.tnado.com/), this autoloader is one of parts from Framework.

# Contribute

Please an [issue](https://github.com/prod3v3loper/php-auto-autoloader/issues) if you
think something could be improved. Please submit Pull Requests when ever
possible.

# Authors

**Samet Tarim** - *All works* - [prod3v3loper](https://www.tnado.com/author/prod3v3loper/)

# License

[MIT](https://github.com/prod3v3loper/php-auto-autoloader/blob/master/LICENSE)
