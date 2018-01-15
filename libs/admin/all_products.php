<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/13/2018
 * Time: 4:36 PM
 */


require 'libs/Database.php';
require_once 'libs/products_core.php';

 $product;
 $product_arry;
 $json_arry;

$slq_request = "SELECT * FROM ".$db_table_name." ";
$slq_result = $db_connection->query($slq_request);

if ($slq_result->num_rows > 0) {

    $json_arr = array();
    $temp_ar = array();

    $i=0;

    while($row = $slq_result->fetch_assoc()){

        $json_arr['data'][$i]['id'] = '<a href="/products/product/id='.$row['id'].'">'.$row['id'].'</a>';
        $json_arr['data'][$i]['Title'] = $row['Title'];
        $json_arr['data'][$i]['Description'] = $row['Description'];
        $json_arr['data'][$i]['Price'] = $row['Price'];
        $json_arr['data'][$i]['Currency'] = $row['Currency'];
        $json_arr['data'][$i]['Image'] = '<img class="img-thumbnail" style="min-height:150px; max-height:150px" src="'.$row['Image'].'">';
        $i++;
    }

    $for_input = json_encode($json_arr);

    $op_footer_url = 'views/admin/data/products.json';
    $footer = $op_footer_url;
    $op_footer = fopen($footer,'w');
    $op_footer_for_edit = $for_input;
    fwrite($op_footer ,$op_footer_for_edit);
    fclose($op_footer);
}