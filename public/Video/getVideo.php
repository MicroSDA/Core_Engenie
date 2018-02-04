<?php

if (isset($_SERVER['HTTP_REFERER'])) {

    if (isset($_GET['ref'])) {

        require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Libs/DataBase/DataBase.php';

        $video = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_video WHERE Url=?s', $_GET['ref']);

        if($video){
            require_once $_SERVER['DOCUMENT_ROOT'].'/core/Libs/Basic/General/VideoStream.php';

            $stream = new VideoStream($_SERVER['DOCUMENT_ROOT'].$video[0]['Path']);
            $stream->start();

        }else{

            header('Location:/');
        }

    }else{

        header('Location:/');
    }

}else{

    echo 'IDI NAXYI';

    //header('Location:/');
}
