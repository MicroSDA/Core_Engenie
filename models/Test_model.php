<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/2/2018
 * Time: 5:47 PM
 */




class  Test_model extends Model
{

    public function __construct(){

        parent::__construct();

    }

    public function index(){

        require_once 'views/Header.php';
        require_once 'views/Test/index.php';
        require_once 'views/Footer.php';

    }
}