<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 1:19 PM
 */


require_once 'models/Name_model.php';

class Name extends Controller
{

    public function __construct(){

        parent::__construct();

    }

    public function index($plugin_data_income){

        $this->plugin_data = $plugin_data_income;
        $models = new Name_model($this->plugin_data);
        $models->index();
    }

    public function method(){

    }
}