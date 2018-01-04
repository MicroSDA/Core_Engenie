<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/3/2018
 * Time: 7:54 PM
 */




class Products_model extends Model
{
    public function __construct(){



        parent::__construct();

    }

    public function product_disply($parameters){

        require 'libs/Database.php';
        $slq_request = "SELECT * FROM ".$db_table_name." WHERE id ='".$parameters."' ";
        $slq_result = $db_connection->query($slq_request);

        if ($slq_result->num_rows > 0) {

            require 'views/Header.php';
            require 'views/Product/index.php';
            require 'views/Footer.php';

        }


    }
    private function get_all_products(){

        require 'libs/Database.php';
        $slq_request = "SELECT * FROM ".$db_table_name." ";
        $slq_result = $db_connection->query($slq_request);

        if ($slq_result->num_rows > 0) {

          return $slq_result;

        }


    }

    public function index(){

        $slq_result = $this->get_all_products();

        require 'views/Header.php';
        require 'views/Products/index.php';
        require 'views/Footer.php';

    }


}

