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
    protected $product_title;
    protected $product_anchor;
    protected $product_url;
    protected $product_keywords;
    protected $product_description;
    protected $product_price;
    protected $product_currency;
    protected $product_image;
    protected $product_type;

    /**
     * product constructor.
     */
    public function __construct(){


    }

    public function fillForDb($title, $anchor, $url, $keywords, $description, $image, $price, $currency, $type){

        $this->product_title = $title;
        $this->product_anchor = $anchor;
        $this->product_url = $url;
        $this->product_keywords = $keywords;
        $this->product_description = $description;
        $this->product_image = $image;
        $this->product_price = $price;
        $this->product_currency = $currency;
        $this->product_type = $type;
    }

    public function fillFromDb($id, $title, $description, $price, $currency, $image ){

        $this->product_id = $id;
        $this->product_title = $title;
        $this->product_description =$description;
        $this->product_price = $price;
        $this->product_currency = $currency;
        $this->product_image = $image;

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
        return $this->product_title;
    }

    /**
     * @return mixed
     */
    public function getProductDescription(){
        return $this->product_description;
    }

    /**
     * @return mixed
     */
    public function getProductPrice(){
        return $this->product_price;
    }

    /**
     * @return mixed
     */
    public function getProductCurrency(){
        return $this->product_currency;
    }

    /**
     * @return mixed
     */
    public function getProductImage(){
        return $this->product_image;
    }

    /**
     * @return mixed
     */
    public function getProductAnchor()
    {
        return $this->product_anchor;
    }

    /**
     * @return mixed
     */
    public function getProductUrl()
    {
        return $this->product_url;
    }

    /**
     * @return mixed
     */
    public function getProductKeywords()
    {
        return $this->product_keywords;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }




}


function init(){



}