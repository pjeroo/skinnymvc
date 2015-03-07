<?php
class DbAdapter {
    private $_pdo;
    private static $instance;

    private function __construct() {
        $config = Registry::getValue('config');
        $this->_pdo = new PDO('mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['db'],
            $config['database']['user'],
            $config['database']['password']
        );
    }
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAdapter() {
        return $this->_pdo;
    }
}