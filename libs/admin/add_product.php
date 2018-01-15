<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/13/2018
 * Time: 4:36 PM
 */

require_once $_SERVER['DOCUMENT_ROOT'].'/libs/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/libs/products_core.php';

$product= new p_universal_product();

    if(!empty($_POST['title']) &&
        !empty($_POST['anchor']) &&
        !empty($_POST['url']) &&
        !empty($_POST['keywords']) &&
        !empty($_POST['description']) &&
        !empty($_POST['price']) &&
        !empty($_POST['currency']) &&
        !empty($_POST['image']) &&
        !empty($_POST['product_type'])

    ){


        $product->fillForDb(
            mysqli_real_escape_string($db_connection, $_POST['title']),
            mysqli_real_escape_string($db_connection, $_POST['anchor']),
            mysqli_real_escape_string($db_connection, $_POST['url']),
            mysqli_real_escape_string($db_connection, $_POST['keywords']),
            mysqli_real_escape_string($db_connection, $_POST['description']),
            mysqli_real_escape_string($db_connection, $_POST['image']),
            mysqli_real_escape_string($db_connection, $_POST['price']),
            mysqli_real_escape_string($db_connection, $_POST['currency']),
            mysqli_real_escape_string($db_connection, $_POST['product_type'])
        );


        $sql_request = "INSERT INTO ".$db_table_name." (Title, Anchor, Url, Keywords, Description, Image, Price, Currency, Type) VALUES
                                                       ('".$product->getProductTitle()."',
                                                        '".$product->getProductAnchor()."',
                                                        '".$product->getProductUrl()."', 
                                                        '".$product->getProductKeywords()."',
                                                        '".$product->getProductDescription()."',
                                                        '".$product->getProductImage()."',
                                                        '".$product->getProductPrice()."', 
                                                        '".$product->getProductCurrency()."',
                                                        '".$product->getProductType()."')";

        if (mysqli_query($db_connection, $sql_request)) {

            //$_SESSION['product_add_status']=  '<div class="text-success">Product Have Been Added</div>';


             echo'<div class="col-md-3 col-sm-6">
                               <div class="statistic-block block">
                                    <div class="progress-details d-flex align-items-end justify-content-between">
                                        <div class="title">
                                          <div class="icon"></div><strong><div class="text-success">Product Have Been Added</div></strong>
                                         </div>
                                     </div>
                               </div>
                          </div>
                 <script> 
                 scrollToElement(\'add_warning\');
                 setTimeout("document.location.href=\'\'", 5000);</script>';

              unset($_POST);

        }else{

            die("Error" . mysqli_error($db_connection));
           unset($_POST);
        }
    }else{
                      echo '<div class="col-md-3 col-sm-6">
                               <div class="statistic-block block">
                                    <div class="progress-details d-flex align-items-end justify-content-between">
                                        <div class="title">
                                          <div class="icon"></div><strong><div class="text-danger">Product Haven\'t Been Added</div></strong>
                                         </div>
                                     </div>
                               </div>
                          </div>
                          <script>
                          scrollToElement(\'add_warning\'); </script>';
       unset($_POST);
    }



