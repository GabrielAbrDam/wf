<?php
require_once __DIR__.'/../vendor/autoload.php';

$configs = require __DIR__.'/../config/app.conf.php';

use Service\DBConnector;

DBConnector::setConfig($configs['db']);

$map = [
    '/account' => __DIR__.'/../src/Controller/acount.php',
    ''=>__DIR__.'/../src/Controller/index.php',
    '/register' => __DIR__.'/../src/Controller/register.php'
    
];

$url = $_server['REQUEST_URI'];

if (substr($url, 0, strlen('/index.php'))== '/index.php'){
    $url = substr($url, strlen('/index.php'));
}else if($url =='/'){
    $url = '';
}

if(array_key_exists($url, $map)){
    include $map[$url];
    
}
var_dump($url);

?>