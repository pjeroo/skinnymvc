<?php
class Skinny_Controller {
    protected function redirect($url) {
        header('Location: ' . $url);
    }

    protected function getPost() {
        if (isset($_POST))
            return $_POST;
        else
            return null;
    }

    protected function getParam($id) {
        if (isset($_GET[$id]))
            return $_GET[$id];
        else
            return null;
    }

    protected function render($view, $varibles = null) {
        if ($varibles) {
            foreach ($varibles as $key=>$value)
                ${$key} = $value;
        }
        include_once(APPLICATION_DIR . 'views/' . $view . '.php');
    }
}