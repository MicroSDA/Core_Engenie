<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/8/2018
 * Time: 11:06 PM
 */

if(isset($_POST['Text'])){

    //echo $_POST['Text'];

    $op_header_url = '../public/text.txt';
    $header = $op_header_url;
    $op_header = fopen($header, 'w');
    $op_header_for_edit=rtrim($_POST['Text']);
    //$op_header_for_edit=$op_header_for_edit."\n";
    fwrite($op_header,$op_header_for_edit);
    fclose($op_header);

    unset($_POST['Text']);
    //echo '<script language="JavaScript">window.location.href = "/admin/"</script>';
}