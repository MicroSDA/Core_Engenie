<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/20/2018
 * Time: 11:02 AM
 */

class test_model extends Model
{
    /**
     * test_model constructor.
     */
    public function __construct(){


        parent::__construct();

    }

    /**
     *
     */
    public function index(){

        DataBase::getInstance();
        DataManager::getInstance();


        $this->render();

    }

    public function tests(){

        $this->render();

    }
}