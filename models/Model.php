<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 7:59 PM
 */

class Model
{

    protected $plugin_data;

    public function __construct($plugin_data_income){

        $this->plugin_data = $plugin_data_income;

    }

    public function index(){

        if(!empty($this->plugin_data)){

            foreach ($this->plugin_data as $key => $value){

                if($value['for'] =='products'){

                    require $value['file'];

                    $slq_result=  $value['function']();

                    require './views/Header.php';
                    require './views/Products/index.php';
                    require './views/Footer.php';
                    echo 'here';

                }else {


                    require './views/Header.php';
                    require './views/Products/index.php';
                    require './views/Footer.php';
                    echo 'here';

                }
            }
        }else{

            require './views/Header.php';
            require './views/Products/index.php';
            require './views/Footer.php';
            echo 'here';
        }


    }
}