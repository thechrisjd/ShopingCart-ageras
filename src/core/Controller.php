<?php

/**
 *This controller call will be the parent to all other controllers
 * Tis allows me to make reuseable code as all controllers will have the same basic functions
 */
class Controller
{
  protected $view;
  protected $model;

  public function view($viewName, $data=[])
  {
    $this->view = new View($viewName, $data);
    return $this->view;
  }

  public function model($modelName, $data=[])
  {

    if (file_exists(MODEL . $modelName . '.php')) {
      include (MODEL . $modelName . '.php');
      $this->model = new $modelName;
    }
  }
}
