<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/4/2018
 * Time: 7:05 PM
 */

class p_product
{


    protected $product_id;
    protected $prodcut_title;
    protected $prodcut_description;
    protected $prodcut_price;
    protected $prodcut_currency;
    protected $prodcut_image;
    /**
     * product constructor.
     */
    public function __construct(){


    }


    public function fillFromDb($id, $title, $description, $price, $currency, $image ){

        $this->product_id = $id;
        $this->prodcut_title = $title;
        $this->prodcut_description =$description;
        $this->prodcut_price = $price;
        $this->prodcut_currency = $currency;
        $this->prodcut_image = $image;

    }

}


class p_universal_product extends p_product
{

    /**
     * universal_product constructor.
     */
    public function __construct(){

        parent::__construct();
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
    public function getProductTitle(){
        return $this->prodcut_title;
    }

    /**
     * @return mixed
     */
    public function getProductDescription(){
        return $this->prodcut_description;
    }

    /**
     * @return mixed
     */
    public function getProductPrice(){
        return $this->prodcut_price;
    }

    /**
     * @return mixed
     */
    public function getProductCurrency(){
        return $this->prodcut_currency;
    }

    /**
     * @return mixed
     */
    public function getProductImage(){
        return $this->prodcut_image;
    }




}


function init(){



}