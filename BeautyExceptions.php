<?php
/**
 * Created by PhpStorm.
 * User: tianyi
 * Date: 3/21/2017
 * Time: 17:35
 */

namespace Goenitz\BeautyExceptions;


class BeautyExceptions
{
    private static $theme;
    public static function register($theme = 'default')
    {
        $error_reporting = error_reporting();
        set_error_handler([__CLASS__, 'errorHandler'], $error_reporting);
        set_exception_handler([__CLASS__, 'exceptionHandler']);
        self::$theme = $theme;
    }

    public static function errorHandler($errorNo, $errorMsg, $errorFile, $errorLine)
    {
        self::render($errorNo, $errorMsg, $errorFile, $errorLine);
    }

    public static function exceptionHandler($e)
    {
        self::render($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTrace());
    }

    public static function render($errorNo, $errorMsg, $errorFile, $errorLine, $trace = [])
    {
        require 'themes/' . self::$theme . '.php';
    }

    private static function getSource($errorFile, $errorLine)
    {
        $content = file($errorFile);
        $min = $errorLine - 8 > 0 ? $errorLine - 8 : 0;
        $content = array_slice($content, $min, 17);
        $content = array_map(function($line) use (&$min, $errorLine) {
            if (++$min == $errorLine) {
                return '<div class="highlight">' . htmlspecialchars($line) . '</div>';
            }
            return htmlspecialchars($line);
        }, $content);
        return implode($content);
    }
}