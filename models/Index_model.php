<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 7:58 PM
 */


class Index_model extends Model
{

    public function __construct($plugin_data_income){


        parent::__construct($plugin_data_income);

    }

    public function index(){

        require 'views/Header.php';
        require 'views/index/index.php';
        require 'views/Footer.php';

    }
}