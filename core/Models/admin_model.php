<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/22/2018
 * Time: 8:57 PM
 */


require_once URL_ROOT.'/core/Libs/Config/SiteMapGenerator.php';

class admin_model extends Model
{

    /**
     * admin_model constructor.
     */
    public function __construct(){


        parent::__construct();

    }

    /**
     *
     */

    public function index(){

        DataBase::getInstance();
        DataManager::getInstance();

        if(isset($_GET['submit'])){
            if($_GET['submit']=='site-map'){
                set_time_limit(0);
                $sitemap = new SiteMapGenerator();
                $sitemap->set_ignore(array("javascript:", ".css", ".js", ".ico", ".jpg", ".png", ".jpeg", ".swf", ".gif", "mailto:"));
                $sitemap->get_links('http://'.$_SERVER['HTTP_HOST']);
                $map = $sitemap->generate_sitemap();
                $file = URL_ROOT.'/SiteMap.xml';
                $pf = fopen($file, "w");
                fwrite($pf, $map);
                fclose($pf);

                header('Location:/admin/secure/href=be0275fad331666c5484a35df98966a/dashboard');
            }

        }

        $this->render(false,false);

    }

    public function brand(){

        $this->render(false,false);
    }

    public function category(){

        $this->render(false,false);
    }

    public function products(){

        $this->render(false,false);
    }
}