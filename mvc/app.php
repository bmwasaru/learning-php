<?php

require 'view.php';
require 'controller.php';
require 'model.php';

// mvc implementation
$model = new Model();
$controller = new Controller($model);

$view = new View($controller, $model);

if (isset($_GET['action']))
{
    $controller->{$_GET['action']}();
}

echo $view->output();