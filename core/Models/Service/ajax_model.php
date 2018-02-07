<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/29/2018
 * Time: 10:27 PM
 */

class ajax_model
{

    public function __construct()
    {
        /**
         * If We are trying to open from direct link or from custom link from website
         */
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) or ($_SERVER['HTTP_X_REQUESTED_WITH']) != 'XMLHttpRequest' or empty($_SERVER['HTTP_REFERER']) or empty($_SERVER['HTTP_AJAX']) or $_SERVER['HTTP_AJAX'] != 'Ajax') {

            // UrlsDispatcher::getInstance()->setCurrentUrlData(array_pop(UrlsDispatcher::getInstance()->getUrlsDataList()));
            // $contorller = new Controller();
            echo 'error';
            die();
        }

        /**
         * Else, ok
         */

    }

    public function index()
    {

    }


    public function add()
    {

        echo ' Hello';
    }


    public function admin_add_newbrand()
    {

        if (!empty($_POST['brand_name']) &&
            !empty($_POST['brand_url']) &&
            !empty($_POST['brand_description'])) {

            $if_exist = DataBase::getInstance()->getDB()->getAll("SELECT * FROM c_brands WHERE Name=?s", $_POST['brand_name']);

            if (!$if_exist) {
                $result = DataBase::getInstance()->getDB()->query("INSERT INTO c_brands (Name, Url, Description, Image) VALUES (?s, ?s, ?s, ?s)",
                    $_POST['brand_name'], $_POST['brand_url'], $_POST['brand_description'], 'image');

                if ($result) {

                    echo 'Added';

                } else {

                    echo '<span class="btn btn-warning">Internal error, wasn\'t added</span>';
                }

            } else {

                echo '<span class="btn btn-warning">This Brand is already exist</span>';
            }


        } else {
            echo '<span class="btn btn-warning">All Fields should be filled</span>';
        }
    }

    public function admin_edit_url()
    {

        $page_name = $_POST['data'][0]['value'];
        $page_pattern = $_POST['data'][1]['value'];
        $page_pattern_old = $_POST['data'][2]['value'];
        $page_type = $_POST['data'][3]['value'];
        $page_model = $_POST['data'][4]['value'];
        $page_method = $_POST['data'][5]['value'];
        $page_view = $_POST['data'][6]['value'];
        $page_cache = $_POST['data'][7]['value'];


        if(empty($page_name) or empty($page_pattern) or empty($page_type) or empty($page_model) or empty($page_method) or empty($page_view) or empty($page_cache)){

            echo '<div style="text-align: center"><span class="btn btn-danger"><h5>All fields should be filled</h5></span></div>';
            die();
        }

        if(!preg_match('(^\\(\\^.{1,}\\$\\)$)',$page_pattern)){

            echo '<br><br><div style="text-align: center"><span class="btn btn-warning"><h5>Pattern mask is wrong, try to use "(^....$)"</h5></span></div>';
            die();
        }

        try {

            DataBase::getInstance()->getDB()->query("UPDATE c_urls SET Pattern=?s, Name=?s, Type=?s, View=?s, Cache=?s, Model=?s, Method=?s WHERE Pattern=?s",
                $page_pattern, $page_name, $page_type, $page_view, $page_cache, $page_model, $page_method, $page_pattern_old);

                   echo' <form type="Get" action="">';
                   echo'<div style="text-align: center"><button type="submit" class="btn btn-success" name="submit" value="reset-cache"><h5>Done, reset cache to get changes immediately</h5></button></div>';
                   echo' </form>';
        } catch (Exception $error) {

            echo '<div style="text-align: center"><span class="btn btn-danger">INTERNAL ERROR<br>Line 113: ajax_model: admin_edit_url()<hr>'.$error.'<hr>Contact with developer !</span></div>.';
        }


    }


    public function admin_validate_edit_url()
    {

        $page_name = $_POST['data'][0]['value'];
        $page_pattern = $_POST['data'][1]['value'];
        $page_type = $_POST['data'][2]['value'];
        $page_model = $_POST['data'][3]['value'];
        $page_method = $_POST['data'][4]['value'];
        $page_view = $_POST['data'][5]['value'];
        $page_cache = $_POST['data'][6]['value'];

        //$outgoing = '[{name:'. $page_name.',pattern:'. $page_pattern.',type:'. $page_type.',model:'. $page_model.',method:'. $page_method.',view:'. $page_view.',cache:'. $page_pattern.'}]';
        $outgoing['name'] = $page_name;
        $outgoing['pattern'] = $page_pattern;
        $outgoing['type'] = $page_type;
        $outgoing['model'] = $page_model;
        $outgoing['method'] = $page_method;
        $outgoing['view'] = $page_view;
        $outgoing['cache'] = $page_cache;

        //echo '<pre>';
        echo json_encode($outgoing);
        //var_dump($_POST['data']);
        /// echo '</pre>';
    }

    public function admin_validate_delete_url()
    {

        $outgoing['pattern'] = $_POST['data'][1]['value'];

        //echo $_POST['data'][1]['value'];
        echo json_encode($outgoing);
    }

    public function admin_delete_url()
    {


        try {

            DataBase::getInstance()->getDB()->query("DELETE FROM c_urls WHERE Pattern=?s", $_POST['data']);
            echo' <form type="Get" action="">';
            echo'<div style="text-align: center"><button type="submit" class="btn btn-success" name="submit" value="reset-cache"><h5>Done, reset cache to get changes immediately</h5></button></div>';
            echo' </form>';

        } catch (Exception $error) {

            echo '<div style="text-align: center"><span class="btn btn-warning">INTERNAL ERROR<br>Line 168: ajax_model: admin_delete_url()<hr>'.$error.'<hr>Contact with developer !</span></div>.';
        }

    }


    public function admin_add_url()
    {

        $page_name = $_POST['data'][0]['value'];
        $page_pattern = $_POST['data'][1]['value'];
        $page_type = $_POST['data'][2]['value'];
        $page_model = $_POST['data'][3]['value'];
        $page_method = $_POST['data'][4]['value'];
        $page_view = $_POST['data'][5]['value'];
        $page_cache = $_POST['data'][6]['value'];


        if(empty($page_name) or empty($page_pattern) or empty($page_type) or empty($page_model) or empty($page_method) or empty($page_view) or empty($page_cache)){

            echo '<div style="text-align: center"><span class="btn btn-warning"><h5>All fields should be filled</h5></span></div>';
            die();
        }

        if(!preg_match('(^\\(\\^.{1,}\\$\\)$)',$page_pattern)){

            echo '<br><br><div style="text-align: center"><span class="btn btn-warning"><h5>Pattern mask is wrong, try to use "(^....$)"</h5></span></div>';
            die();
        }

        try {

            if(!DataBase::getInstance()->getDB()->getAll("SELECT * FROM c_urls WHERE Pattern=?s",$page_pattern)){

                DataBase::getInstance()->getDB()->query("INSERT INTO c_urls (Pattern, Name, Type, View, Cache, Model, Method) VALUES (?s, ?s, ?s, ?s, ?s, ?s, ?s)",
                    $page_pattern, $page_name, $page_type, $page_view, $page_cache, $page_model, $page_method);

                echo' <form type="Get" action="">';
                echo'<div style="text-align: center"><button type="submit" class="btn btn-success" name="submit" value="reset-cache"><h5>Done, reset cache to get changes immediately</h5></button></div>';
                echo' </form>';

            }else{

                echo '<div style="text-align: center"><span class="btn btn-danger"><h5>Already exist</h5></span></div>';
            }


        } catch (Exception $error) {

            echo '<div style="text-align: center"><span class="btn btn-danger">INTERNAL ERROR<br>Line 218: ajax_model: admin_add_url()<hr>'.$error.'<hr>Contact with developer !</span></div>.';
        }

    }

}