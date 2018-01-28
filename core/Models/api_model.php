<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/27/2018
 * Time: 6:53 PM
 */

class api_model
{

    public function __construct()
    {

    }


    public function index()
    {

        /*$out = json_encode($brand);
        // header('Content-Type: application/json');

        var_dump($out);*/

       // echo $ip = md5('secure') . md5('api');
        if (isset($_GET['token']) && isset($_GET['key']) && isset($_GET['query'])) {

            $api = DataBase::getInstance()->getDB()->getAll("SELECT * FROM c_api_key WHERE Token=?s", $_GET['token']);

            if ($api) {

                if ($_GET['key'] == $api[0]['APIKey']) {

                    switch ($_GET['query']) {

                        /**
                         * ////////////////////////////////////////////////////////////////////////////////////
                         * Call needed function
                         */
                        case 'test':
                            $this->test();
                            break;
                        default:
                            echo 'error';
                            break;

                    }

                } else {

                    echo 'error';
                }

            } else {

                echo 'Token Error';
            }


        } else {

            echo 'error';
        }


    }


    public function test()
    {

        if(isset($_SERVER['HTTP_REFERER'])){

            echo 'Refer: '.$_SERVER['HTTP_REFERER'].'<br>';
        }

        echo 'Ip: '.$_SERVER['REMOTE_ADDR'];
    }
}