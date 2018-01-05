<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/4/2018
 * Time: 7:23 PM
 */

class plugins_search
{

    private $plugins_row;
    private $doc_xml;

    /**
     * @return mixed
     */
    public function getPluginsData(){

        return $this->plugins_row;
    }


    public function __construct(){
        $this->doc_xml = new XMLReader();
        $this->doc_xml->open('plugins/config.xml'); // указываем ридеру что будем парсить этот файл
        // циклическое чтение документа
        $i = 0;
        while($this->doc_xml->read()) {

            if($this->doc_xml->nodeType == XMLReader::ELEMENT) {
                // если находим элемент <card>
                if($this->doc_xml->localName == 'plugin') {

                    // считываем аттрибут number
                   /* $this->plugins_row[$i]['Name'][$this->doc_xml->getAttribute('name')]['version'] = $this->doc_xml->getAttribute('version');
                    $this->plugins_row[$i]['Name'][$this->doc_xml->getAttribute('name')]['author'] = $this->doc_xml->getAttribute('author');
                    $this->plugins_row[$i]['Name'][$this->doc_xml->getAttribute('name')]['file'] = $this->doc_xml->getAttribute('file');
                    $this->plugins_row[$i]['Name'][$this->doc_xml->getAttribute('name')]['function'] = $this->doc_xml->getAttribute('function');*/


                    $this->plugins_row[$i]['for'] = $this->doc_xml->getAttribute('for');
                    $this->plugins_row[$i]['version'] = $this->doc_xml->getAttribute('version');
                    $this->plugins_row[$i]['author'] = $this->doc_xml->getAttribute('author');
                    $this->plugins_row[$i]['file'] = $this->doc_xml->getAttribute('file');
                    $this->plugins_row[$i]['function'] = $this->doc_xml->getAttribute('function');
                    // читаем дальше для получения текстового элемента
                    $this->doc_xml->read();

                    if($this->doc_xml->nodeType == XMLReader::TEXT) {
                        $this->plugins_row[$i]['name'] = $this->doc_xml->value;
                    }


                 /* echo $this->plugins_row[$i]['name'].'<br>';
                    echo $this->plugins_row[$i]['version'].'<br>';
                    echo $this->plugins_row[$i]['author'].'<br>';
                    echo $this->plugins_row[$i]['file'].'<br>';
                    echo $this->plugins_row[$i]['function'].'<br>';*/

                }

               // var_dump($this->plugins_row[$i]);
                $i++;
            }




        }

    }
}