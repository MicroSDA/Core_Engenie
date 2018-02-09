<?php

class assets_model
{

    public function __construct()
    {

    }

    public function index()
    {

    }

    public function css()
    {


        $css = TemplateManager::getInstance()->getAssets($_GET['page'], 'css');
        if ($css) {
            if (isset($css[$_GET['hash']])) {

                $last_modified_time = filemtime($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']);
                $etag = md5_file($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']);

                header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
                header("Etag: $etag");

                if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time ||
                    @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {

                    header("HTTP/1.1 304 Not Modified");
                    header('Content-Encoding: gzip');
                    header('Content-Type: text/css; charset: UTF-8');
                    header('Content-Transfer-Encoding: binary');
                    exit;

                } else {

                    header('Content-Description: File Transfer');
                    header('Content-Type: text/css; charset: UTF-8');
                    header('Content-Transfer-Encoding: binary');
                    header('Cache-control: must-revalidate');
                    header('Content-Length: ' . filesize($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']));
                    readfile($_SERVER['DOCUMENT_ROOT'] . $css[$_GET['hash']]['path']);
                }

            } else {

                die();
            }
        }

    }

    public function js()
    {

        $js = TemplateManager::getInstance()->getAssets($_GET['page'], 'js');
        if ($js) {

            if (isset($js[$_GET['hash']])) {

                $last_modified_time = filemtime($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']);
                $etag = md5_file($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']);

                header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
                header("Etag: $etag");

                if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time ||
                    @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {

                    header("HTTP/1.1 304 Not Modified");
                    header('Content-Encoding: gzip');
                    header('Content-Type: text/javascript; charset: UTF-8');
                    header('Content-Transfer-Encoding: binary');

                    exit;

                } else {
                    header('Content-Description: File Transfer');
                    header('Content-Type: text/javascript; charset: UTF-8');
                    header('Content-Transfer-Encoding: binary');
                    header('Cache-control: must-revalidate');
                    header('Content-Length: ' . filesize($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']));
                    readfile($_SERVER['DOCUMENT_ROOT'] . $js[$_GET['hash']]['path']);
                }


            }else{
                die();
            }

        }

    }

    public function image(){

       // if (isset($_SERVER['HTTP_REFERER'])) {

            if (isset($_GET['hash'])) {

                require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Libs/DataBase/DataBase.php';

                $image = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_image WHERE Url=?s', $_GET['hash']);

                if ($image) {

                    /**
                     * /public/Image/getImage.php?ref=f8baa7bce9b90d1128dd19a6c1f1ee9d
                     *
                     * image/gif
                     * image/x-icon
                     * image/jpeg
                     * image/png
                     * image/tiff
                     */

                    $image_type = NULL;

                    switch (exif_imagetype(URL_ROOT.$image[0]['Path'])){

                        case IMAGETYPE_JPEG:
                            $image_type = 'image/jpeg';
                            break;
                        case IMAGETYPE_PNG:
                            $image_type ='image/png';
                            break;
                        case IMAGETYPE_GIF:
                            $image_type = 'image/gif';
                            break;
                        default:
                            die();
                            break;
                    }


                    /**
                     * Cache
                     */

                    $last_modified_time = filemtime(URL_ROOT.$image[0]['Path']);
                    $etag = md5_file(URL_ROOT.$image[0]['Path']);

                    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
                    header("Etag: $etag");

                    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time ||
                        @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {

                        header("HTTP/1.1 304 Not Modified");
                        header('Content-Encoding: gzip');
                        header('Content-Type: '.$image_type.'');
                        header('Content-Transfer-Encoding: binary');

                       exit();

                    }else{

                        ob_get_clean();
                        header('Cache-Control: public,max-age=31536000'); // кеширование на 1 год
                        header('Content-Description: File Transfer');
                        header('Content-Type: '.$image_type);
                        header('Content-Transfer-Encoding: binary');
                        header('Cache-control: must-revalidate');
                        header('Content-Length: '.filesize(URL_ROOT.$image[0]['Path']));
                        readfile(URL_ROOT.$image[0]['Path']);

                        flush();
                    }



                } else {

                    header('Location:/');
                }

            } else {

                header('Location:/');
            }

    }
}