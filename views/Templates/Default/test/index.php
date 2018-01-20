<?php
echo '<pre>';
echo 'Test';
echo '<pre>';
echo 'URL Request:';
print_r(UrlsDispatcher::getInstance()->getUlrRequest());
echo '</pre>';
echo 'ALL URLS :';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getUrlsList());
echo '</pre>';
echo 'CURRENT URL DATA:';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getCurrentUrl());
echo '</pre>';
echo '<pre>';
print_r(DataManager::getInstance()->getAllData());
echo '</pre>';
