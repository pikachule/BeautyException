Beauty Exceptions
=============

Installation
-------

```bash
composer require goenitz/beauty-exceptions
```
Usage
----------

```php
//error_reporting(E_ALL || ~E_NOTICE);
require 'vendor/autoload.php';

\Goenitz\BeautyExceptions\BeautyExceptions::register();
```

Ok, that's it!

ScreenShot
-------------

![ScreenShot](https://raw.githubusercontent.com/tianyirenjian/static/master/beauty-exceptions.jpg)

Change Logs
-------------------

#### v1.1.0

- BugFix: method BeautyException::exceptionHandler error.

#### v1.2.0

- Style: change default theme to yii-like.
