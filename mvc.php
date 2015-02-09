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
	return '<h1>' .$this->model->text .'</h1>';
    }
}

class Controller {

    private $model;

    public function __construct(Model $model)
    {
	$this->model = $model;
    }
}

// mvc implementation
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

echo $view->output();
