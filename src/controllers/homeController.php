<?php

/**
 *
 *
 */
class homeController extends Controller
{

  public function index ($id = '', $quantity = '')
  {
    //echo 'id is'.$id.'name is'.$name;
    $this->view('home\index', [
      'id' => $id,
      'quantity' => $quantity,
    ]);
    //var_dump($this);
    $this->view->render();
  }
}
