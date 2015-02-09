<?php

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