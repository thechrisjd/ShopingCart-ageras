<?php

/**
 * This will mangae the home view 
 *
 */
class homeController extends Controller
{

  public function index ($id = '', $quantity = '')
  {
    //echo 'id is'.$id.'name is'.$name;
    $this->model('Model');
    $this->view('home\index', [
      'id' => $id,
      'quantity' => $quantity,
    ]);

    $this->view->render();
    //var_dump($this->model->getData());
  }


}
