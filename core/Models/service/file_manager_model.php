<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 2/19/2018
 * Time: 11:03 PM
 */

class file_manager_model
{

    public function __construct()
    {


    }


    public function upload(){

        $token = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_settings WHERE id=?i',1);

        preg_match_all('/^.+\/([0-9a-zA-a]+)/',$_SERVER['HTTP_REFERER'],$token[0][1]);

        if($token[0][1] != UrlsDispatcher::getInstance()->getToken()){
            UrlsDispatcher::getInstance()->setCurrentUrlData(UrlsDispatcher::getInstance()->getUrlsDataListByKey('(^)'));
            //$controller = new Controller();

        }

        if(isset($_FILES['upload'])){
            // ------ Process your file upload code -------
            $filen = $_FILES['upload']['tmp_name'];
            $con_images = $_SERVER['DOCUMENT_ROOT']."/private/content/image/".$_FILES['upload']['name'];
             move_uploaded_file($filen, $con_images );


            $funcNum = $_GET['CKEditorFuncNum'] ;
            // Optional: instance name (might be used to load a specific configuration file or anything else).
            $CKEditor = $_GET['CKEditor'] ;
            // Optional: might be used to provide localized messages.
            $langCode = $_GET['langCode'] ;

            // Usually you will only assign something here if the file could not be uploaded.

            $href = md5(getenv("REMOTE_ADDR") . "key" . time()). md5(getenv("REMOTE_ADDR") . "key-2" .
                    time()). md5(getenv("REMOTE_ADDR") . "key-3" . time());

            try{

                preg_match('|^(.+)\..+$|',$_FILES['upload']['name'],$filename);


                DataBase::getInstance()->getDB()->query('INSERT INTO c_image (Name, Path, Url) VALUES (?s,?s,?s)', $filename[1],'/private/content/image/'.$_FILES['upload']['name'],$href);
            }catch (Exception $exception){
               echo $exception->getMessage();
            }

            $url = "/assets/image/?hash=".$href;
            $message = '';
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
        }
    }
}