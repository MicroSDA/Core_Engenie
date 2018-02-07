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
    /**
     * @var array
     */
    private $urls_list = [];
    /**
     * @var
     */
    private $current_url;
    /**
     * @var
     */
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
    public function getCurrentUrlData()
    {
        return $this->current_url;
    }

    /**
     * @param mixed $current_url
     */
    public function setCurrentUrlData($current_url)
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
    public function getUrlsDataList()
    {
        return $this->urls_list;
    }

    /**
     * @param mixed $urls_list
     */

    public function setUrlsDataList($urls_list)
    {
        $this->urls_list = $urls_list;
    }


    /**
     * @param $flag
     * @return mixed
     * @throws ErrorException
     */
    public function getValue($flag){

        //$outgoing_data;

        if($flag == 'STR'){

            if(preg_match_all('|\/[a-zA-Z0-9_-]+$|', $this->ulr_request, $outgoing_data_first)){

                preg_match_all('|[a-zA-Z0-9_-]+|',(string)array_pop($outgoing_data_first[0]), $outgoing_data);

                /**
                 * Return last element after /
                 */

                return array_pop($outgoing_data[0]);

            }else{

                return 'NOT FOUND';
            }

        }

        if($flag == 'NUMBER'){

            if(preg_match('|\d+|', $this->ulr_request, $outgoing_data)){

                return (int)$outgoing_data[0];

            }else{

                return 'NOT FOUND';
            }

        }

        throw new ErrorException('METHOD TAKE ONLY STRING OR NUMBER');
    }


    public function createNewUrlDataListDBtoXML($filename)
    {
        $urlArray = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_urls ORDER BY id DESC');

        $newUrlListXML = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><Urls/>');

        foreach ($urlArray as $url) {
            $url_tag = $newUrlListXML->addChild("Url",$url['Name']);
           // $url_tag->addChild("Url",$url['Name']);
            $url_tag->addAttribute('model',$url['Model']);
            $url_tag->addAttribute('method',$url['Method']);
            $url_tag->addAttribute('pattern',$url['Pattern']);
            $url_tag->addAttribute('type',$url['Type']);
            $url_tag->addAttribute('view',$url['View']);
            $url_tag->addAttribute('cache',$url['Cache']);
            $url_tag->addAttribute('status',$url['Status']);
        }

        $file = $filename;
        $pf = fopen($file, "w");
        fwrite($pf, $newUrlListXML->asXML());
        fclose($pf);
    }

}