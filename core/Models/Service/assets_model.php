<?php

class assets_model
{

    public function __construct()
    {

    }

    public function index()
    {

    }

    public function css()
    {

//UrlsDispatcher::getInstance()->getCurrentUrlData()['name'];


        $css = TemplateManager::getInstance()->getAssets($_GET['page'], 'css');
        if ($css) {
            if (isset($css[$_GET['hash']])) {
                header('Content-Description: File Transfer');
                header('Content-Type: text/css; charset: UTF-8');
                header('Content-Transfer-Encoding: binary');
                //header('Cache-control: must-revalidate');
                header('Content-Length: ' . filesize($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']));
                readfile($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']);
            }else{

            }
        }

    }

    public function js()
    {

        $js = TemplateManager::getInstance()->getAssets($_GET['page'], 'js');
        if ($js) {

            if (isset($js[$_GET['hash']])) {

                header('Content-Description: File Transfer');
                header('Content-Type: text/javascript; charset: UTF-8');
                header('Content-Transfer-Encoding: binary');
                //header('Cache-control: must-revalidate');
                header('Content-Length: ' . filesize($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']));
                readfile($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']);
            }

        }

    }
}