<?php

namespace core;

class Core
{
    public function run()
    {
        $url = '/';
        $param = array();

        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = ucfirst($url[0]) . 'Controller';
            array_shift($url);

            if (isset($url) && !empty($url[0])) {
                $currentAction = $url[0];
            } else {
                $currentAction = 'index';
            }

            array_shift($url);

            if (count($url) > 0) {
                $param = $url;
            }
        } else {
            $currentController = 'HomeController';
            $currentAction = 'index';
        }

        $controllerClassName = "src\\controllers\\$currentController";
        $controller = new $controllerClassName();
        call_user_func_array(array($controller, $currentAction), $param);
    }
}
