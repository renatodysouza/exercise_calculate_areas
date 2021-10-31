<?php


abstract class Shape 
{
    public $name;
    protected $width;
    protected $length;
    private $id;
    private $parameter;
    const DEFAULTVALUE = 1;
    
    public function __construct($Parameter, int $width = NULL, int $length = NULL ) {
        $this->width = $width;
        $this->length = $length;
        $this->id = $randomNumber;
        $this->parameter = $Parameter;
        $this->name = $Parameter->getName();
    }

    public function getId() {
      return $this->id;
    }

    public function setId(int $id) {
      if ($this->id !== $id) {
        $this->id = $id;
      }
    }

    public function getArea() {
      return $this->length * $this->width;
    }

    public function setAllProperties() {
      return $this->$parameter;
    }

    public function getAllProperties() {
      $this->$parameter->setId($this->id);
      $this->$parameter->setWidth($this->width);
      $this->$parameter->setLength($this->length);
      $this->$parameter->setName($this->name);
      return $this->$parameter;
    }
  }

?>
