<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 1:19 PM
 */


class Router {

    private $URL ;
    private $controller;
    private $plugin_data;

    public function __construct($plugin_data_income){

        $this->plugin_data = $plugin_data_income;
        /**
         * Simple example regarding OOP
         * How can you see, this constructor will do everything in short section of your code
         */

        // Begin

        //Default initialization
        $this->controller['class'] = '';
        $this->controller['method'] = '';
        $this->controller['parameters'] = '';
        $this->controller['flag'] = '';

        $this->parse();

       switch ($this->routing()){

           case 'index':
               require 'controllers/index.php';
               $app_controller = new index();
               $app_controller->index($this->plugin_data);

               break;
           case 'error':
               require 'controllers/error_404.php';
               $app_controller = new error_404();
               $app_controller->index($this->plugin_data);

               break;
           case 'class':
               //require 'controllers/' . $this->controller['class'] .'.php';
               $app_controller = new $this->controller['class'];
               $app_controller->index($this->plugin_data);

               break;
           case 'class/method':
               $app_controller = new $this->controller['class'];
               $method = $this->controller['method'];
               $app_controller->$method($this->controller['parameters']);
               break;

       }

       // End
    }

   private function parse(){


       // Getting url
       $this->URL = rtrim($_SERVER['REQUEST_URI'], '/');
       // Parse by '/'
       $this->URL = explode('/',$this->URL);
       // Prepare controller name for check

       /**
        * Check input values and change register
        */

       if(!empty($this->URL[1])){

           //if class name isn't null
           $this->controller['class'] = mb_strtolower($this->URL[1],'UTF-8');
       }

       if(!empty($this->URL[2])){

           //if method name isn't null
           $this->controller['method'] = mb_strtolower($this->URL[2],'UTF-8');
       }

       if(!empty($this->URL[3])){
           //if method name isn't null
           $this->controller['parameters'] = mb_strtolower($this->URL[3],'UTF-8');
       }


   }

   private function routing(){

       if(empty($this->controller['class'])){

           return 'index';

       }else{

               if(file_exists('controllers/'.$this->controller['class'].'.php')){

                   require 'controllers/' . $this->controller['class'] .'.php';

                   $test_app_controller = new $this->controller['class'];



                   if(!empty($this->controller['method'])){


                       if(method_exists($test_app_controller,$this->controller['method'])){

                           $this->controller['flag'] = 2;
                           return 'class/method';

                       }else {

                           $this->controller['flag'] = 0;
                           return 'error';
                       }

                   }


                   $this->controller['flag'] = 1;
                   return 'class';


               }else {

                   $this->controller['flag'] = 0;
                   return 'error';

               }
           }
       }


}

