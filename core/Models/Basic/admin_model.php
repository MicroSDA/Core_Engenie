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


        try{

            $logs = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_logs');
            if($logs) {

                DataManager::getInstance()->addData('Logs', $logs);
            }else{
                DataManager::getInstance()->addData('Logs', 'Logs wasn\'t found');
            }
            
        }catch (Exception $error){
            
            echo $error->getMessage();
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


    public function settings()
    {

        if (isset($_GET['submit'])) {
            if ($_GET['submit'] == 'site-map') {
                set_time_limit(0);
                $sitemap = new SiteMapGenerator();
                $sitemap->set_ignore(array("javascript:", ".css", ".js", ".ico", ".jpg", ".png", ".jpeg", ".swf", ".gif", "mailto:"));
                $sitemap->get_links('http://' . $_SERVER['HTTP_HOST']);
                $map = $sitemap->generate_sitemap();
                $file = URL_ROOT . '/public/sitemap.xml';
                $pf = fopen($file, "w");
                fwrite($pf, $map);
                fclose($pf);

                header('Location:' . $_SERVER['HTTP_REFERER']);
            }

            if ($_GET['submit'] == 'reset-cache') {

                /**
                 * Delete All Html files from folder cache
                 */
                CacheGenerator::deleteCache();

                /**
                 * Generate new Url Config file from db
                 */
                UrlsDispatcher::getInstance()->createNewUrlDataListDBtoXML(URLS_CONFIG_FILE_PATH);

                header('Location:' . $_SERVER['HTTP_REFERER']);


            }
        }


        DataManager::getInstance()->addData('URLS',UrlsDispatcher::getInstance()->getUrlsDataList());
        $this->render();
    }
}