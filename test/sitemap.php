<?php
//set_time_limit(0);
//подключаем класс
require_once '../core/Libs/Config/SiteMapGenerator.php';
$sitemap = new SiteMapGenerator();
//игнорировать ссылки с расширениями:
$sitemap->set_ignore(array("javascript:", ".css", ".js", ".ico", ".jpg", ".png", ".jpeg", ".swf", ".gif", "mailto:"));

//ссылка Вашего сайта:
$sitemap->get_links("http://127.0.0.1");

//если нужно вернуть просто массив с данными:
//$arr = $sitemap->get_array();
//echo "<pre>";
//print_r($arr);
//echo "</pre>";

//header ("content-type: text/xml");
$map = $sitemap->generate_sitemap();
//записываем в файл
$file = '../config/sitemap.xml';
$pf = fopen($file, "w");
fwrite($pf, $map);
fclose($pf);

//перенаправляем обратно в админку
