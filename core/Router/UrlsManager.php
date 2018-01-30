<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/16/2018
 * Time: 8:21 AM
 */
define('INDEX_FLAG', 'INDEX');
/**
 *
 */
define('ERROR_FLAG', 'ERROR');
/**
 *
 */
define('PAGE_FLAG', 'PAGE');

/**
 * Class UrlsManager
 */
class UrlsManager
{

    /**
     * @var
     */
    private $controller;
    /**
     * @var XMLReader
     */
    private $xml_parse_doc;
    /**
     * @var
     */
    private $flag;
    /**
     * @var array
     */
    private $url = [
        'key' => '',
        'model' => '',
        'method' => '',
        'pattern' => '',
        'type' => '',
        'name' => '',
        'view' => ''

    ];

    /**
     * @var array
     * $urls_list = [
     *     'key'=>[
     *        'model' => '',
     *        'method' => '',
     *        'pattern' => '',
     *        'type' => '',
     *        'name' => ''
     *        ]
     *];
     */

    private $urls_list = [];


    /**
     * UrlsManager constructor.
     * @param $file
     * @throws ErrorException
     */
    public function __construct($file)
    {

        $this->xml_parse_doc = new XMLReader();

        if (!$this->xml_parse_doc->open($file)) {

            throw new ErrorException('URLS CONFIG FILE WAS NOT FOUND');
        }


        $iteration_key = 0;
        while ($this->xml_parse_doc->read()) {

            if ($this->xml_parse_doc->nodeType == XMLReader::ELEMENT) {

                if ($this->xml_parse_doc->localName == 'Url') {


                    $this->url['key'] = $iteration_key;
                    $this->url['pattern'] = $this->xml_parse_doc->getAttribute('pattern');
                    $this->url['model'] = mb_strtolower($this->xml_parse_doc->getAttribute('model'), 'UTF-8');
                    $this->url['method'] = mb_strtolower($this->xml_parse_doc->getAttribute('method'), 'UTF-8');
                    $this->url['type'] = $this->xml_parse_doc->getAttribute('type');
                    $this->url['view'] = $this->xml_parse_doc->getAttribute('view');

                    $this->xml_parse_doc->read();

                    if ($this->xml_parse_doc->nodeType == XMLReader::TEXT) {

                        $this->url['name'] = $this->xml_parse_doc->value;
                        $this->addUrl(
                            $this->url['key'],
                            $this->url['pattern'],
                            $this->url['model'],
                            $this->url['method'],
                            $this->url['type'],
                            $this->url['name'],
                            $this->url['view']
                        );

                    } else {

                        throw new ErrorException('URL IS NOT EXIST');
                    }

                    $iteration_key++;
                }
            }


        }

        /**
         * Set All urls list to UrlsDispatcher
         */
        UrlsDispatcher::getInstance()->setUrlsDataList($this->urls_list);
    }


    /**
     * @param $key
     * @param $model
     * @param $method
     * @param $patterns
     * @param $name
     * @param $view
     * @param string $type
     */
    private function addUrl($key, $patterns, $model, $method, $type = 'GET', $name, $view )
    {


        $this->urls_list[$key]['pattern'] = $patterns;
        $this->urls_list[$key]['model'] = $model;
        $this->urls_list[$key]['method'] = $method;
        $this->urls_list[$key]['type'] = $type;
        $this->urls_list[$key]['name'] = $name;
        $this->urls_list[$key]['view'] = $view;

    }

    /**
     * @param $key
     */
    public function getUrl($key)
    {
        $this->urls_list[$key];
    }


    /**
     * @return array
     */
    public function getUrlsList()
    {

        return $this->urls_list;
    }


    /**
     * @param $url_request
     * @return mixed
     * @throws ErrorException
     */
    public function manegeUrl($url_request)
    {

        /**
         * Set  index if request is empty -
         */
        if (empty($url_request)) {

            $url_request = '/index';
        }

        if (!empty($url_request)) {

            foreach ($this->getUrlsList() as $key => $value) {


                if (preg_match($value['pattern'], $url_request)) {

                    //var_dump($value);
                    return $value;
                }

            }

            throw new ErrorException('ERROR URL WAS NOT DEFINED');

        }

        return false;
    }

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }
}