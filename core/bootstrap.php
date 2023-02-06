<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$app = [];

$app['config'] = require_once('config.php');

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
