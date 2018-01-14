<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 7:58 PM
 */


class Contact_Us_model extends Model
{

    public function __construct($plugin_data_income){


        parent::__construct($plugin_data_income);

    }

    public function index(){

        require_once 'views/Header.php';
        require_once 'views/contact_us/index.php';
        require_once 'views/Footer.php';

    }
}