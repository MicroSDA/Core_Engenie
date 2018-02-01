<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 2/1/2018
 * Time: 9:40 AM
 */

class CacheGenerator
{
    /**
     * @var
     */

    private static $file_path;
    private static $file;

    protected static $_instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public static function generateCache()
    {

        if (!empty(self::$file_path)) {

            $cache_file = self::$file_path;
            $cache_page = fopen($cache_file, 'w'); // Открываем файл для записи и стираем его содержимое
            fwrite($cache_page, ob_get_contents()); // Сохраняем всё содержимое буфера в файл
            fclose($cache_page); // Закрываем файл
        }


    }

    public static function isCache()
    {

        if (UrlsDispatcher::getInstance()->getUlrRequest() == '') {

            echo UrlsDispatcher::getInstance()->getUlrRequest();
            self::$file = '-index';
            self::$file_path = URL_ROOT . '/cache/' . 'cache' . self::$file . '.html';

        } else {

            self::$file = preg_replace('(\/)', '-', UrlsDispatcher::getInstance()->getUlrRequest());
            self::$file_path = URL_ROOT . '/cache/' . 'cache' . self::$file . '.html';
        }

        if (file_exists(self::$file_path)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getCache()
    {
        echo file_get_contents(self::$file_path);
    }

    public static function deleteCache()
    {
        if (file_exists(URL_ROOT . '/cache')) {
            foreach (glob(URL_ROOT . '/cache/*.html') as $file) {
                unlink($file);
            }
        }
    }
}