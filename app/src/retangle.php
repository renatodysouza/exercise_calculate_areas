<?php
  class Retangle extends Shape {
    const DEFAULTVALUE = 3;

    public function __construct( int $width, int $length, $Parameter) {
      parent::__construct($Parameter, $width, $length, 2);
    }
  }

?>