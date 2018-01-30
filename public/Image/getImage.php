<?php

if (isset($_SERVER['HTTP_REFERER'])) {

    if (isset($_GET['ref'])) {

        require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Libs/DataBase/DataBase.php';

        $image = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_image WHERE Url=?s', $_GET['ref']);

        if ($image) {
            //require_once $_SERVER['DOCUMENT_ROOT'].'/core/Libs/Basic/General/VideoStream.php';

            //$stream = new VideoStream($_SERVER['DOCUMENT_ROOT'].$video[0]['Path']);
            //$stream->start();
            ob_get_clean();
            header('Content-Description: File Transfer');
            header('Content-Type: image/jpeg');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: '.filesize($_SERVER['DOCUMENT_ROOT'].$image[0]['Path']));
            flush();
            readfile($_SERVER['DOCUMENT_ROOT'].$image[0]['Path']);

        } else {

            header('Location:/');
        }

    } else {

        header('Location:/');
    }

} else {

    header('Location:/');
}
