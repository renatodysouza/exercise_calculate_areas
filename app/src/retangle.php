<?php

  require_once "Parameter.php";
  require_once "Shape.php";
  
  class Retangle extends Shape {
    const DEFAULTVALUE = 3;

    public function __construct( int $width, int $length, $Parameter) {
      parent::__construct($Parameter, $width, $length, 2);
    }
    
    public function x() {
      return 4;
    }
  }

  function calculateRetangle (string $name, int $width,  int $length) {
    $parameter = new Parameter($name);
    $retangle = new Retangle($width, $length, $parameter);
    return $retangle->getArea();
}

?>