<?php

require_once('Person.php');

class Student extends Person{

  public int $id;

  public function __construct($name, $age, $id){
    parent::__construct($name, $age, null);
    $this->id = $id;
  }
}