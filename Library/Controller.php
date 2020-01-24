<?php


abstract class Controller
{
    protected function render($viewName, array $args = array())
    {
        extract($args);

        $tplDir = str_replace('Controller', '', get_class($this));
        $path = VIEW_DIR . $tplDir . DS . $viewName . '.php';

        if (!file_exists($path)) {
            die("{$path} not fount");
        }

        ob_start();
        require $path;
        return ob_get_clean();
    }
}