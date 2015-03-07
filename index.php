<?php

define('ENGINE_DIR', 'engine/');
define('APPLICATION_DIR', 'application/');

include_once(ENGINE_DIR . 'autoload.php');

$config = json_decode(file_get_contents(APPLICATION_DIR . 'config.json'), true);
Registry::setValue('config', $config);

$app = new Bootstrap();
$app->bootstrap();