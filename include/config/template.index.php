<?php

if(!ini_get('date.timezone')) {
    date_default_timezone_set('UTC');
}

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../include/vendor/autoload.php');
require(__DIR__ . '/../include/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../include/config/web.php');

(new yii\web\Application($config))->run();
