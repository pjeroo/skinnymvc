<?php
class Registry {
    private static $vault = array();

    public static function setValue($key, $value) {
        self::$vault[$key] = $value;
    }

    public static function getValue($key) {
        return isset(self::$vault[$key]) ? self::$vault[$key] : null;
    }

    public static function remove($key) {
        if (isset(self::$vault[$key])) unset(self::$vault[$key]);
    }
}