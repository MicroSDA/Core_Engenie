<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 1:19 PM
 */

/**
 * Class Router
 *
 * Simple scheme of work
 * 1.Default initialization
 * 2.Call Parse function(pars incoming url)
 * 3.Call Routing function for check our income url parameters and return answer
 * 4.Check answers by switch
 * 5.Call controller
 *
 */
class Router
{

    /**
     * @var UrlsManager
     */
    private $urls_manager;
    /**
     * @var UrlsDispatcher
     */
    private $request_url;
    /**
     * @var
     */
    private $url_data;
    /**
     * @var
     */
    private $controller;


    /**
     *
     */
    private function route()
    {
        if(UrlsDispatcher::getInstance()->getCurrentUrlData()['cache']=='cache'){


            if(UrlsDispatcher::getInstance()->getUlrRequest() ==''){
                $file ='-index';

            }else{

                $file = preg_replace('(\/)','-', UrlsDispatcher::getInstance()->getUlrRequest());
            }

            $file_path = $_SERVER['DOCUMENT_ROOT'].'/cache/'.'cache'.$file.'.html';

            if(file_exists($file_path)){


                echo file_get_contents($file_path);
                echo '<div style="text-align: center;">Usage:'.round(memory_get_usage() / 1024 / 1024, 2).'MB</div>';
                echo ' <div style="text-align: center;">Time:'.(microtime(true) - $GLOBALS['time']) .'Sec</div>';

                die();

            }else{

                $this->controller = new Controller();
            }

        }else{

            $this->controller = new Controller();
        }



    }

    /**
     * @throws ErrorException
     */
    private function parse()
    {

        /**
         *  Getting url
         */
        $this->request_url = rtrim($_SERVER['REQUEST_URI'], '/');

        $this->request_url = mb_strtolower($this->request_url, 'UTF-8');

       /** if(preg_match('(\.(js|php|mp4|txt)$)',$this->request_url)){

            echo 'asd';
           die();
        }*/
        $this->url_data = $this->urls_manager->manegeUrl($this->request_url);

        /**
         * Set Current Url Data
         */
        UrlsDispatcher::getInstance()->setCurrentUrlData($this->url_data);
        /**
         * Set Current Url Request
         */
        UrlsDispatcher::getInstance()->setUlrRequest($this->request_url);


    }

    /**
     * Router constructor.
     * @throws ErrorException
     */
    public function __construct()
    {

        $this->urls_manager = new UrlsManager(URLS_CONFIG_FILE_PATH);
        $this->parse();
        $this->route();

    }


}