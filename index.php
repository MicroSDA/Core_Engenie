<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 2:24 PM
 */


/**
 * Catch all exception
 */

/**
 * Define global time of start script
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

        /**
         * Enable Browser cache, set cache for an hour
         */

        require URL_ROOT.'/core/Libs/Config/Bootstrap.php';
        $Router = new Router();


    } catch (Exception $message){

        echo '<div style="text-align: center"><span class="btn btn-danger">INTERNAL ERROR<hr>'.$message->getMessage().'<hr>Contact with developer !</span></div>.';
    }


