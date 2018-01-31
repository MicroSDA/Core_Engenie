<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/29/2018
 * Time: 10:27 PM
 */

class ajax_model
{

    public function __construct()
    {
        /**
         * If We are trying to open from direct link or from custom link from website
         */
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) or ($_SERVER['HTTP_X_REQUESTED_WITH']) != 'XMLHttpRequest' or empty($_SERVER['HTTP_REFERER']) or empty($_SERVER['HTTP_AJAX']) or $_SERVER['HTTP_AJAX'] != 'Ajax') {

            UrlsDispatcher::getInstance()->setCurrentUrlData(array_pop(UrlsDispatcher::getInstance()->getUrlsDataList()));
            $contorller = new Controller();
        }

        /**
         * Else, ok
         */

    }

    public function index()
    {

    }


    public function add()
    {

      echo ' Hello';
    }

}