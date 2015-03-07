<?php

function __autoload($class) {
    $exploded = explode('_', $class);

    if (count($exploded) > 1) {
        $kind = $exploded[1];

        if (file_exists(ENGINE_DIR . $kind . 's' . DIRECTORY_SEPARATOR . $class . '.php')) {
            include_once(ENGINE_DIR . $kind . 's' . DIRECTORY_SEPARATOR . $class . '.php');
        } else {
            include_once(APPLICATION_DIR . $kind . 's' . DIRECTORY_SEPARATOR . $class . '.php');
        }
    } else {
        if (file_exists(ENGINE_DIR . $class . '.php')) {
            include_once(ENGINE_DIR . $class . '.php');
        } else {
            include_once(APPLICATION_DIR . $class . '.php');
        }
    }
}