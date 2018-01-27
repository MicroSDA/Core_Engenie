<?php
/*header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . str_replace(",","",basename($file)));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . $_SESSION['filesize']);


if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $file);
    curl_exec($ch);
    curl_close($ch);
}*/
if (isset($_GET['ref']) && $_GET['ref'] == '123456') {



}

$ip = md5(getenv("REMOTE_ADDR") . "key" . date("i"));
if ($_GET['ref'] == $ip) {

    header('HTTP/1.0 206 Partial Content');
    header('Content-type: video/mp4');
    header('Accept-Ranges: bytes');
    header('Content-Length: ' . filesize('video.mp4'));
    header('X-SendFile: /public/video/video.mp4');
    header("Content-type: application/octet-stream");
    header("Content-disposition: attachment; filename=video.mp4");

    readfile('./video.mp4');

}



