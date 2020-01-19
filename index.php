<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('VIEW_DIR', ROOT . 'View' . DS);
define('LIB_DIR', ROOT . 'Library' . DS);
define('CONTROLLER_DIR', ROOT . 'Controller' . DS);


function __autoload($className)
{
    $file = "{$className}.php";

    if (file_exists(LIB_DIR . $file)) {
        require_once LIB_DIR . $file;
    } elseif (file_exists(CONTROLLER_DIR . $file)) {
        require_once CONTROLLER_DIR . $file;
    } else {
        die("{$file} not found");
    }

}

$request = new Request();
$route = $request->get('route'); //$_GET['route']

if (is_null($route)) {
    $route = 'index/index';
}

$arRoute = explode('/', $route);
//[0=>$controllerName, 1=>$actionName] = explode('/', $route);

$controller = ucfirst($arRoute[0]) . 'Controller'; // IndexController
$action = $arRoute[1] . 'Action'; //indexController

$controller = new $controller();

if(!method_exists($controller, $action)){
    die("{$action} not fount");
}

$content = $controller->$action($request);

require VIEW_DIR . 'default_layout.php';
echo '<hr><pre>';
var_dump($controller, $action);
