<?php
require_once __DIR__ . '/../Func/Autoload.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $controllerName = isset($_POST['controller']) ? $_POST['controller'] : 'Image';
    $controllerName = $controllerName.'Controller';
    $actionName = isset($_POST['action']) ? $_POST['action'] : 'ShowAllImages';
    $actionName = 'action'.$actionName;
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'Image';
    $controllerName = $controllerName.'Controller';
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'ShowAllImages';
    $actionName = 'action'.$actionName;
}

$controller = new $controllerName();
$controller->$actionName();

