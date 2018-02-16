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

        if(isset($_GET['submit'])){

            switch ($_GET['submit']){

                case 'logs-erase':
                    DataBase::getInstance()->getDB()->query("DELETE FROM c_logs");
                    sleep(0.5);
                    DataBase::getInstance()->getDB()->query("ALTER TABLE c_logs AUTO_INCREMENT = 1");
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    break;
                case 'activity-erase':
                    DataBase::getInstance()->getDB()->query("DELETE FROM c_visitor");
                    sleep(0.5);
                    DataBase::getInstance()->getDB()->query("ALTER TABLE c_visitor AUTO_INCREMENT = 1");
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    break;
                default:
                    break;

            }
        }


        try {
            $logs = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_logs ORDER BY id DESC');

            if ($logs) {

                DataManager::getInstance()->addData('Logs', $logs);
            } else {
                DataManager::getInstance()->addData('Logs', 'Logs wasn\'t found');
            }

            require_once URL_ROOT.'/core/Libs/Basic/General/Charts.php';

            $charts_daily = new Charts('Day'); DataManager::getInstance()->addData('Day',$charts_daily);
            $charts_weekly = new Charts('Week'); DataManager::getInstance()->addData('Week',$charts_weekly);
            $charts_monthly = new Charts('Month'); DataManager::getInstance()->addData('Month',  $charts_monthly);
            $charts_yearly = new Charts('Year'); DataManager::getInstance()->addData('Year',  $charts_yearly);





        } catch (Exception $error) {

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

        require_once URL_ROOT.'/core/Libs/Basic/General/Charts.php';

        $charts = new Charts('Day');
        DataManager::getInstance()->addData('Day',$charts);

        $this->render();
    }

    public function articles(){


        DataManager::getInstance()->addData('Articles',DataBase::getInstance()->getDB()->query('SELECT * FROM c_article'));

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


        DataManager::getInstance()->addData('URLS', UrlsDispatcher::getInstance()->getUrlsDataList());
        $this->render();
    }
}