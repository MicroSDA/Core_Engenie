<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 2:24 PM
 */


/**
 * Catch all exception
 */

$GLOBALS['time'] = microtime(true);

    try{

        /**
         * Predefine section
         */

        define('URL_ROOT', $_SERVER['DOCUMENT_ROOT']); /** Core address */

        /**
         * End of Predefine section
         */


        require URL_ROOT.'/core/Libs/Config/Bootstrap.php';
        $Router = new Router();


    } catch (\ErrorException $message){


        echo $message->getMessage();
    }


