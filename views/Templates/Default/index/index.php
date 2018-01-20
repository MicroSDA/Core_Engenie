<?php
echo '<pre>';
echo 'Index';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getUlrRequest());
echo '</pre>';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getUrlsList());
echo '</pre>';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getCurrentUrl());
echo '</pre>';
echo '<pre>';
print_r(DataManager::getInstance()->getAllData());
echo '</pre>';
echo '<pre>';
print_r(UrlsDispatcher::getInstance()->getCurrentUrl());
echo '</pre>';