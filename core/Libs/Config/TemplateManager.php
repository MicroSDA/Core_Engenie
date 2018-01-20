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
     * @var array
     */
    private $template = [
        'name' => '',
        'status' => '',
        'path' => ''
    ];

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
     * TemplateManager constructor.
     * @throws ErrorException
     */
    public function __construct()
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

                            break;

                        } else {

                            throw new ErrorException('TEMPLATE NAME IS NOT EXIST');
                        }

                    }

                }
            }

        }

    }
}
