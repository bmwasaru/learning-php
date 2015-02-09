<?php

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
		return '<h1><a href="app.php?action=textclicked">' .$this->model->text .'</a></h1>';
    }
}
 