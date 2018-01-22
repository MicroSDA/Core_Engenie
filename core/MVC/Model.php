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


        View::getInstance()->setViewFolder(UrlsDispatcher::getInstance()->getCurrentUrl()['view']);
        View::getInstance()->setHeader($header);
        View::getInstance()->setIndex($index);
        View::getInstance()->setFooter($footer);
        View::getInstance()->render();

    }

}