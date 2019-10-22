<?php
/**
 * This is the models file it interacts with the database 
 */
class Model
{
  protected static $data_file;
  protected $invertory  = '';

  public function __constructor()
  {
    self::$data_file = DATA . 'products.json';
  }

  private function load ()
  {
    if (file_exists(DATA . 'products.json')) {
      //var_dump(file_get_contents(DATA . 'products.json'));
      $this->invertory = file_get_contents(DATA . 'products.json');
      $data = json_decode($this->invertory);
      $this->invertory = $data;
    }
  }

  public function getData ()
  {
    $this->load();
    return $this->invertory;
  }
}
