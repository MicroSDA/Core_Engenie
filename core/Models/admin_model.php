<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/22/2018
 * Time: 8:57 PM
 */


require_once URL_ROOT . '/core/Libs/Config/SiteMapGenerator.php';

class admin_model extends Model
{

    /**
     * admin_model constructor.
     */
    public function __construct()
    {


        parent::__construct();

    }

    /**
     *
     */

    public function index()
    {

        DataBase::getInstance();
        DataManager::getInstance();

        if (isset($_GET['submit'])) {
            if ($_GET['submit'] == 'site-map') {
                set_time_limit(0);
                $sitemap = new SiteMapGenerator();
                $sitemap->set_ignore(array("javascript:", ".css", ".js", ".ico", ".jpg", ".png", ".jpeg", ".swf", ".gif", "mailto:"));
                $sitemap->get_links('http://' . $_SERVER['HTTP_HOST']);
                $map = $sitemap->generate_sitemap();
                $file = URL_ROOT . '/sitemap.xml';
                $pf = fopen($file, "w");
                fwrite($pf, $map);
                fclose($pf);

                header('Location:' . $_SERVER['HTTP_REFERER']);
            }

            if ($_GET['submit'] == 'reset-cache') {

                CacheGenerator::deleteCache();
                header('Location:' . $_SERVER['HTTP_REFERER']);


            }
        }


        $this->render();
    }

    public function brand()
    {

        $this->render();
    }

    public function category()
    {

        $this->render();
    }

    public function products()
    {

        $this->render();
    }


    public function api()
    {

    }
}