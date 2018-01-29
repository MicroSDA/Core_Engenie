<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/18/2018
 * Time: 9:28 PM
 */

class TemplateManager
{

    /**
     * @var
     */
    protected static $_instance;
    /**
     * @var array
     */
    private $template = [
        'name' => '',
        'status' => '',
        'path' => ''
    ];

    /**
     * @var array
     */
    private $assets = [];
    /**
     * @var
     */
    private $current_page;

    /**
     * @var
     */
    private $xml_parse_doc;

    /**
     * @return array
     */
    public function getTemplate()
    {

        return $this->template;
    }


    /**
     * @param $page
     * @param $key
     * @return mixed
     */
    public function getAssets($page, $key)
    {


        if ($key == 'css') {

            $css_out = '';
            foreach ($this->assets[$page][$key] as $value) {

                $css_temp = '<link href="' . $value['path'] . '" rel="stylesheet">' . "\n";
                $css_out .= $css_temp;


            }

            return $css_out;
        }

        if ($key == 'js') {

            $js_out = '';
            foreach ($this->assets[$page][$key] as $value) {


                $js_temp = '<script src="' . $value['path'] . '"></script>' . "\n";
                $js_out .= $js_temp;


            }

            return $js_out;
        }

        return '<!--Key wasn\'t defined!! -->';

    }

    /**
     * TemplateManager constructor.
     * @throws ErrorException
     */


    private function __construct()
    {
        $this->read();
    }

    /**
     * @return TemplateManager
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * @throws ErrorException
     */
    private function read()
    {

        $this->xml_parse_doc = new XMLReader();

        if (!$this->xml_parse_doc->open(URL_ROOT . '/config/Template-Config.xml')) {

            throw new ErrorException('TEMPLATE CONFIG FILE IS NOT EXIST');

        } else {

            while ($this->xml_parse_doc->read()) {

                if ($this->xml_parse_doc->nodeType == XMLReader::ELEMENT) {


                    if ($this->xml_parse_doc->localName == 'Template') {


                        $this->template['status'] = $this->xml_parse_doc->getAttribute('status');
                        $this->template['path'] = $this->xml_parse_doc->getAttribute('folder');


                        $this->xml_parse_doc->read();
                        if ($this->xml_parse_doc->nodeType == XMLReader::TEXT) {
                            $this->template['name'] = $this->xml_parse_doc->value;

                        }


                    }

                    if ($this->xml_parse_doc->localName == 'Page') {

                        $this->current_page = $this->xml_parse_doc->getAttribute('name');

                    }

/////////////////////////////////////////////////////////////////////////////////////////////


                    if ($this->xml_parse_doc->localName == 'css') {

                        $css['type'] = $this->xml_parse_doc->getAttribute('type');
                        if ($css['type'] == 'internal') {
                            $css['path'] = '/views/public/' . $this->template['path'] . $this->xml_parse_doc->getAttribute('path');
                        } else {
                            $css['path'] = $this->xml_parse_doc->getAttribute('path');
                        }


                        $this->assets[$this->current_page]['css'][] = $css;

                    }


                    if ($this->xml_parse_doc->localName == 'js') {

                        $js['type'] = $this->xml_parse_doc->getAttribute('type');
                        if ($js['type'] == 'internal') {
                            $js['path'] = '/views/public/' . $this->template['path'] . $this->xml_parse_doc->getAttribute('path');
                        } else {
                            $js['path'] = $this->xml_parse_doc->getAttribute('path');
                        }


                        $this->assets[$this->current_page]['js'][] = $js;

                    }

                }
            }
        }

    }


    /**
     * @throws ErrorException
     */
    private function read_old()
    {


        $this->xml_parse_doc = new XMLReader();

        if (!$this->xml_parse_doc->open(URL_ROOT . '/config/Template-Config.xml')) {

            throw new ErrorException('TEMPLATE CONFIG FILE IS NOT EXIST');
        }


        while ($this->xml_parse_doc->read()) {

            if ($this->xml_parse_doc->nodeType == XMLReader::ELEMENT) {

                if ($this->xml_parse_doc->localName == 'Template') {


                    if ($this->xml_parse_doc->getAttribute('status') == 'ACTIVE') {

                        $this->template['status'] = $this->xml_parse_doc->getAttribute('status');
                        $this->template['path'] = $this->xml_parse_doc->getAttribute('folder');

                        $this->xml_parse_doc->read();

                        if ($this->xml_parse_doc->nodeType == XMLReader::TEXT) {

                            $this->template['name'] = $this->xml_parse_doc->value;
                            $this->xml_parse_doc->read();
                            /**
                             * Load Assets
                             */
                            $this->xml_parse_doc->read();
                            /**
                             * When we have found Page Name
                             */
                            while ($this->xml_parse_doc->localName == 'Page') {
                                echo 'Page';

                                $this->xml_parse_doc->next('Assets-Css');
                                if ($this->xml_parse_doc->localName == 'Assets-Css') {

                                    echo 'Assets-Css';
                                }

                                $this->xml_parse_doc->moveToElement();
                                $this->xml_parse_doc->next('Page');
                            }


                        } else {

                            throw new ErrorException('TEMPLATE NAME IS NOT EXIST');
                        }

                    }

                }
            }

        }
    }
}

