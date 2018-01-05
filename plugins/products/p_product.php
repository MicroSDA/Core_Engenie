<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/4/2018
 * Time: 7:05 PM
 */

class p_product
{


    /**
     * product constructor.
     */
    public function __construct(){

    }



}


class p_universal_product extends p_product
{

    private $product_id;
    private $prodcut_title;
    private $prodcut_description;
    private $prodcut_price;
    private $prodcut_currency;
    private $prodcut_image;


    /**
     * universal_product constructor.
     */
    public function __construct(){

        parent::__construct();
    }

    public function fillFromDb($id, $title, $description, $price, $currency, $image ){

        $this->product_id = $id;
        $this->prodcut_title = $title;
        $this->prodcut_description =$description;
        $this->prodcut_price = $price;
        $this->prodcut_currency = $currency;
        $this->prodcut_image = $image;

    }
    /**
     * @return mixed
     */
    public function getProductId(){
        return $this->product_id;
    }

    /**
     * @return mixed
     */
    public function getProdcutTitle(){
        return $this->prodcut_title;
    }

    /**
     * @return mixed
     */
    public function getProdcutDescription(){
        return $this->prodcut_description;
    }

    /**
     * @return mixed
     */
    public function getProdcutPrice(){
        return $this->prodcut_price;
    }

    /**
     * @return mixed
     */
    public function getProdcutCurrency(){
        return $this->prodcut_currency;
    }

    /**
     * @return mixed
     */
    public function getProdcutImage(){
        return $this->prodcut_image;
    }




}


   function init(){

    $Prodcut =  new p_product();

       require 'libs/Database.php';
       $slq_request = "SELECT * FROM ".$db_table_name." ";
       $slq_result = $db_connection->query($slq_request);

       if ($slq_result->num_rows > 0) {

           return $slq_result;

       }

 }