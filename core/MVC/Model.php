<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 7:59 PM
 */

class Model
{

    /**
     * @var
     */
    protected $request_url;
    /**
     * @var
     */
    protected $url_data;


    /**
     * Model constructor.
     */
    public function __construct()
    {


    }

    protected function render($header = 'header.php', $footer ='footer.php',$index ='index.php'){

        /**
         * Add link to data base for site map
         */
         $this->siteMap();

        /**
         * ----------------------------------------------------------------------------------------
         */

        View::getInstance()->setViewFolder(UrlsDispatcher::getInstance()->getCurrentUrl()['view']);

        if($header == false){


        }else{

            View::getInstance()->setHeader($header);
        }

        View::getInstance()->setIndex($index);

        if($footer == false){

        }else{

            View::getInstance()->setFooter($footer);
        }


        View::getInstance()->render($header,$footer);

    }


    private function siteMap(){


        $host = 'https://'.$_SERVER['HTTP_HOST'].UrlsDispatcher::getInstance()->getUlrRequest();

        $is_link = DataBase::getInstance()->getDB()->getAll("SELECT * FROM c_sitemap WHERE Url=?s",$host);

        if(!$is_link){
            DataBase::getInstance()->getDB()->query("INSERT INTO c_sitemap (Url) VALUES (?s)",$host);
        }
    }
}