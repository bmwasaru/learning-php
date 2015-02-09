<?php

class Model {

    public $text;

    public function __construct() 
    {
	$this->text = 'Tukutane SwahiliBox';
    }
}


class View {
   
    private $model;
    private $controller;

    public function __construct(Controller $controller, Model $model) 
    {
	$this->controller = $controller;
	$this->model = $model;
    }

    public function output() 
    {
	return '<h1><a href="mvc.php?action=textclicked">' .$this->model->text .'</a></h1>';
    }
}

class Controller {

    private $model;

    public function __construct(Model $model)
    {
	$this->model = $model;
    }

    public function textClicked()
    {
	$this->model->text = 'I love the SwahiliBox community';
    }
}

// mvc implementation
$model = new Model();
$controller = new Controller($model);

$view = new View($controller, $model);
if (isset($_GET['action']))
{
    $controller->{$_GET['action']}();
}
echo $view->output();
