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

    protected function render($index ='index.php',$header = 'header.php', $footer ='footer.php'){

        /**
         * Add link to data base for site map
         */
        $this->siteMap();

        /**
         * ----------------------------------------------------------------------------------------
         */
        View::getInstance()->setViewFolder(UrlsDispatcher::getInstance()->getCurrentUrl()['view']);
        View::getInstance()->setHeader($header);
        View::getInstance()->setIndex($index);
        View::getInstance()->setFooter($footer);
        View::getInstance()->render();

    }


    private function siteMap(){


        $host = 'https://'.$_SERVER['HTTP_HOST'].UrlsDispatcher::getInstance()->getUlrRequest();

        $is_link = DataBase::getInstance()->getDB()->getAll("SELECT * FROM c_sitemap WHERE Url=?s",$host);

        if(!$is_link){
            DataBase::getInstance()->getDB()->query("INSERT INTO c_sitemap (Url) VALUES (?s)",$host);
        }
    }
}