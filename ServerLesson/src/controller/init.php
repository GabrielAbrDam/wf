<?php
require_once __DIR__.'/../Service/DBConnector.php';
$configs = require __DIR__.'/../../config/app.config.php';

Service\DBConnector::setConfig($configs['db']);
?>