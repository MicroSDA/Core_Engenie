<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/7/2018
 * Time: 8:32 PM
 */



require_once 'models/Admin_model.php';
require_once 'models/Error_404_model.php';

class admin extends Controller
{

    public function __construct(){

        parent::__construct();

    }

    public function index($plugin_data_income){

        //Если попали на индекс то кидаем на еррор 404
        $this->plugin_data = $plugin_data_income;
        $models = new Error_404_model($this->plugin_data);
        $models->index();
        /*$this->plugin_data = $plugin_data_income;
        $models = new Admin_model($this->plugin_data);
        $models->index();*/
    }

    public function login($income_parameters){

        $income_parameters_data = $income_parameters;

        $parameters_refer =  explode('=', $income_parameters['first']);


        require_once 'libs/Database.php';
        $slq_request = "SELECT * FROM ".$db_admin_table." ";
        $slq_result = $db_connection->query($slq_request);


        if($slq_result->num_rows > 0){

            $admin_data = $slq_result->fetch_assoc();

            // Проверяем токен ссылки равен ли тому что у нас в бд. Если нет то кидаем на еррор 404
            if($parameters_refer[0] == 'href' && $parameters_refer[1] == $admin_data['Href']){

                //Грузим нашу модель

                $models = new Admin_model($this->plugin_data);
                $models->login_index($income_parameters_data);


            }else {

                //$this->plugin_data = $plugin_data_income;
                $models = new Error_404_model($this->plugin_data);
                $models->index();
            }
        }else {

            //$this->plugin_data = $plugin_data_income;

            $models = new Error_404_model($this->plugin_data);
            $models->index();
        }



    }
}