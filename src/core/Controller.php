<?php

/**
 *This controller call will be the parent to all other controllers
 * Tis allows me to make reuseable code as all controllers will have the same basic functions
 */
class Controller
{
  protected $view;

  public function view($viewName, $data=[])
  {
    $this->view = new View($viewName, $data);
    return $this->view;
  }
}
