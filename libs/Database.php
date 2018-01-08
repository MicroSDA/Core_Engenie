<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/3/2018
 * Time: 8:27 PM
 */



$db_host = '127.0.0.1';
$db_name = 'core';
$db_table_name = 'c_products';
$db_user_name ='root';
$db_password = '';
$db_admin_table ='c_admin';

$db_connection  = mysqli_connect($db_host, $db_user_name, $db_password, $db_name);

if (!$db_connection) {
    die("Connection to database failed: " . mysqli_connect_error());

}