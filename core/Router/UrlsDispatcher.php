<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/16/2018
 * Time: 9:42 AM
 */

class UrlsDispatcher
{


    /**
     * @var
     */
    protected static $_instance;
    private $urls_list = [];
    private $current_url;
    private $ulr_request;


    /**
     * UrlsDispatcher constructor.
     */
    private function __construct()
    {

    }

    /**
     * @return UrlsDispatcher
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }


    /**
     *
     */
    private function __wakeup()
    {

    }


    /**
     *
     */
    private function __clone()
    {
    }

    /**
     * @return mixed
     */
    public function getCurrentUrl()
    {
        return $this->current_url;
    }

    /**
     * @param mixed $current_url
     */
    public function setCurrentUrl($current_url)
    {
        $this->current_url = $current_url;
    }

    /**
     * @return mixed
     */
    public function getUlrRequest()
    {
        return $this->ulr_request;
    }

    /**
     * @param mixed $ulr_request
     */
    public function setUlrRequest($ulr_request)
    {
        $this->ulr_request = $ulr_request;
    }


    /**
     * @var array
     */
    private $patterns = [
        'integer' => '[0-9]+',
        'string' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @return array
     */
    public function getPatterns()
    {
        return $this->patterns;
    }

    /**
     * @return mixed
     */
    public function getUrlsList()
    {
        return $this->urls_list;
    }

    /**
     * @param mixed $urls_list
     */

    public function setUrlsList($urls_list)
    {
        $this->urls_list = $urls_list;
    }


}