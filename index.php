<?php
/**
 * User: Ro Kovalenko
 * Date: 12/30/2017
 * Time: 2:24 PM
 */

require 'libs/bootstrap.php';

$plugin = new plugins_search();

$router = new Router($plugin->getPluginsData());