<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/20/2018
 * Time: 6:45 PM
 */

class products_model extends Model
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

        /** DataBase::getInstance();
         * DataManager::getInstance();*/

        DataManager::getInstance()->addData('Products', DataBase::getInstance()->getDB()->getall('SELECT * FROM c_products'));

        $this->render();

    }

    public function product()
    {


        $product_id = UrlsDispatcher::getInstance()->getValue('NUMBER');

        if($product_id == 'NOT FOUND'){

            header('Location:/error');
            die();
        }


        $product_arry = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_products WHERE id=?i', $product_id);
        if (!$product_arry) {

            header('Location:/products');
        } else {

            DataManager::getInstance()->addData('Product', $product_arry);
            $this->render();
        }
    }

    public function product_by_part(){

        $product_part = UrlsDispatcher::getInstance()->getValue('STR');

        if($product_part == 'NOT FOUND'){

            header('Location:/error');
            die();
        }

        $product_arry = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_products WHERE Url=?s', $product_part);


        if (!$product_arry) {
            header('Location:/products');
        } else {

            DataManager::getInstance()->addData('Product', $product_arry);
            $this->render();
        }
    }
}