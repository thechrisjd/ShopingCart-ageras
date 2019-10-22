<?php

/**
 * This file is used to represent data for actions
 * It takes the view file and the data as args
 */
class View
{

  protected $view_file;
  protected $view_data;

  public function __construct ($view_file, $view_data)
  {
    $this->view_file = $view_file;
    $this->view_data = $view_data;
  }

  public function render()
  {
    //var_dump(VIEW . $this->view_file . '.phtml');
    if (file_exists( VIEW . $this->view_file . '.phtml' )) {
      include (VIEW . $this->view_file . '.phtml');
    }
  }

}
