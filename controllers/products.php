<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/3/2018
 * Time: 7:53 PM
 */


require_once 'models/Products_model.php';
require_once 'models/Error_404_model.php';

class products extends Controller
{


    public function __construct(){

        parent::__construct();

    }

    public function index($plugin_data_income){

        $this->plugin_data = $plugin_data_income;
        $this->models = new Products_model($this->plugin_data);
        $this->models->index();
    }


    public function product($income_parameters){

        $parameters =  explode('=', $income_parameters);

        if($parameters[0] == 'id' && is_numeric($parameters[1])){

            $models = new Products_model($this->plugin_data);
            $models->product($parameters[1]);

        }else {

            $this->models = new Error_404_model($this->plugin_data);
            $this->models->index();
           // error_404::index($this->plugin_data);
        }

    }
}