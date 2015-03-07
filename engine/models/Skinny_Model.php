<?php
class Skinny_Model {
    protected $db;

    public function __construct() {
        $this->db = DbAdapter::getInstance()->getAdapter();
    }
}