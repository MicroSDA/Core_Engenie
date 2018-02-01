<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 7:58 PM
 */


class index_model extends Model
{

    /**
     * index_model constructor.
     */
    public function __construct()
    {


        parent::__construct();

    }

    /**
     *
     */
    public function index()
    {

        DataBase::getInstance();
        DataManager::getInstance();

        //DataManager::getInstance()->addData('Products',DataBase::getDB()->getAll('SELECT * FROM c_products'));


        $this->render();

    }

}