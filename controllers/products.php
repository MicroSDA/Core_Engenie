<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/3/2018
 * Time: 7:53 PM
 */


require 'models/Products_model.php';

class products extends Controller
{
    public function __construct(){

        parent::__construct();

    }

    public function index(){

        $models = new Products_model();
        $models->index();
    }



    public function product($income_parameters){

        $parameters =  explode('=', $income_parameters);

        if($parameters[0] == 'id' && is_numeric($parameters[1])){

            $models = new Products_model();
            $models->product_disply($parameters[1]);

        }else {

            require 'controllers/error_404.php';
            error_404::index();
        }

    }
}