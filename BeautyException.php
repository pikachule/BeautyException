<?php
/**
 * Created by PhpStorm.
 * User: tianyi
 * Date: 3/21/2017
 * Time: 17:35
 */

namespace Goenitz\BeautyException;


class BeautyException
{
    public static function register()
    {
        $error_reporting = error_reporting();
        set_error_handler([__CLASS__, 'errorHandler'], $error_reporting);
        set_exception_handler([__CLASS__, 'exceptionHandler']);
    }

    public static function errorHandler($errorNo, $errorMsg, $errorFile, $errorLine)
    {
        self::render($errorNo, $errorMsg, $errorFile, $errorLine);
    }

    public static function exceptionHandler(\Exception $e)
    {
        self::render($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTrace());
    }

    public static function render($errorNo, $errorMsg, $errorFile, $errorLine, $trace = [])
    {
        dump(...func_get_args());
    }
}