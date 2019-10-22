<?php

/**
 * This the router all url paths will come to this file before being forwarded to the right controller
 *
 */
class Router
{
  //if no url path send the user to the homecontroller
  protected $controller = 'homeController';
  // this is the method to call in the homeController file
  protected $action  = 'index';
  //if there are any params i.e add apples to cart
  protected $prams  = [];

  public function __construct ()
  {
    $this->prepareURL();
    //var_dump(CONTROLLER . $this->controller . '.php');
    if (file_exists(CONTROLLER . $this->controller . '.php')) {
      $this->controller = new $this->controller;
      if (method_exists($this->controller, $this->action)) {
        //calling method and passing params
        call_user_func_array([$this->controller, $this->action], $this->prams);
      }
    }
  }
  //this parses the url.
  protected function prepareURL ()
  {
    $request = trim($_SERVER['REQUEST_URI'], '/');
    if (!empty($request)) {
      //turns the url into an array
      $url = explode('/', $request);
      //element one should be the controller name
      $this->controller = isset($url[0]) ? $url[0] . 'Controller': 'homeController';
      //element two will be the method
      $this->action = isset($url[1]) ? $url[1] : 'index';
      //removed the controller and method name to get the the params  
      unset($url[0], $url[1]);
      $this->prams = !empty($url) ? : [];
    }
  }
}
