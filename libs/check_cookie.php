<?php

function check_cookie() {

    // session_start();

    if(isset($_COOKIE['id'], $_COOKIE['hash']))

    {



        //$mysql= new DataBase($host,$db,$user_root,$password_db,'utf-8');

        require 'libs/Database.php';

        $query=mysqli_query($db_connection, "SELECT * FROM ".$db_admin_table." WHERE Hash='".$_COOKIE['hash']."'");

        // $qauery="SELECT * FROM  ".$users_table." WHERE hash='".$_COOKIE['hash']."'";

        //$mysql->query("SELECT * FROM  ".$users_table." WHERE hash='".$_COOKIE['hash']."'");

        $user_data= mysqli_fetch_assoc($query);


        if($user_data['Hash'] != $_COOKIE['hash'] && $user_data['id'] != $_COOKIE['id'])

        {//Если хеш и куки не совпали, удвляем те куки что стоят

            unset($user_data);

            //require_once 'scripts/Delete_cookie.php';

            return false;

        }else{

            //Если все ок, то обновляем себе онлайн

            //$qauery="UPDATE ".$users_table." SET time=".(int)time()." WHERE hash='".$_COOKIE['hash']."'";

            //mysqli_query($db_connection,"UPDATE ".$db_admin_table." SET Time=".time()." WHERE Hash='".$_COOKIE['hash']."'");

            return $user_data;

        }

    }else {

        return false;
    }

}