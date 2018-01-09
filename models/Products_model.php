<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/3/2018
 * Time: 7:54 PM
 */

require_once 'libs/products_core.php';


class Products_model extends Model
{

   // private $plugin_data;

    public $product;
    public $product_arry;

    public function __construct($plugin_data_income){


        parent::__construct($plugin_data_income);


    }

    //To show all products
    public function index(){

        require 'libs/Database.php';
        $slq_request = "SELECT * FROM ".$db_table_name." ";
        $slq_result = $db_connection->query($slq_request);

        if ($slq_result->num_rows > 0) {

            //$this->product_arry = new p_product();
            $this->product_arry = array();

            while($row = $slq_result->fetch_assoc()){

                $product_temp = new p_universal_product();
                $product_temp->fillFromDb($row['id'],$row['Title'],$row['Description'],$row['Price'],$row['Currency'],$row['Image']);
                array_push($this->product_arry,$product_temp );

            }

        }

        require_once 'views/Header.php';
        require_once 'views/products/index.php';
        require_once 'views/Footer.php';


    }

    // for single
    public function product($parameters){

        $this->product = new p_universal_product();
        require 'libs/Database.php';
        $slq_request = "SELECT * FROM ".$db_table_name." WHERE id='".$parameters."' ";
        $slq_result = $db_connection->query($slq_request);

        if ($slq_result->num_rows > 0) {

            $row = $slq_result->fetch_assoc();
            $this->product->fillFromDb($row['id'],$row['Title'],$row['Description'],$row['Price'],$row['Currency'],$row['Image']);

            require_once 'views/Header.php';
            require_once 'views/product/index.php';
            require_once 'views/Footer.php';

        }else{

            Error_404_model::index();

        }



    }



}

