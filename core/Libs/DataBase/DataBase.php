<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/19/2018
 * Time: 8:32 PM
 */


require_once URL_ROOT.'/core/Libs/DataBase/safemysql.class.php';


class DataBase
{

    protected static $_instance;

    private static $DB;

    private function __construct() {

        self::$DB = new SafeMySQL();

    }


    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }




    private function __wakeup() {

    }

    private function __clone() {
    }


    public static function getDB(){

        return self::$DB;

    }
}