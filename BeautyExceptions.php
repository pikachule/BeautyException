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
        self::render($errorNo, $errorMsg, $errorFile, $errorLine, 'Error');
    }

    public static function exceptionHandler($e)
    {
        if ($e instanceof \Error) {
            $type = 'Error';
        } else {
            $type = get_class($e) == '' ? 'Exception' : get_class($e);
        }
        self::render($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine(), $type, $e->getTrace());
    }

    public static function render($errorNo, $errorMsg, $errorFile, $errorLine, $type, $trace = [])
    {
        ob_get_contents();
        ob_flush();
        $trace = array_filter($trace, function ($t) {
            return isset($t['file']);
        });

        require 'themes/' . self::$theme . '.php';
        die;
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
