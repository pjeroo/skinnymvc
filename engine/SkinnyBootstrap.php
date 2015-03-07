<?php
class SkinnyBootstrap {
    public function __construct() {}

    public function bootstrap() {
        $controller = @$_GET['controller'];
        $action = @$_GET['action'];

        if (!$controller) {
            $controller = ucfirst('index');
        } else {
            $controller = ucfirst($controller);
        }

        if (!$action) {
            $action = 'index';
        }

        if (@class_exists($controller . '_Controller', true)) {
            $className = $controller . '_Controller';
            $class = new $className();
            if (@method_exists($class, $action)) {
                $class->{$action}();
            } else {
                $this->notFound();
            }
        } else {
            $this->notFound();
        }
     }

    private function notFound() {
        include_once(ENGINE_DIR . 'errors/404.html');
        exit();
    }
}