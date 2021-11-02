<?php
namespace Area;


abstract class Shape 
{
    public $name;
    protected $width;
    protected $length;
    private $id;
    private $parameter;
    private const INDENTIFY = 1;
    
    public function __construct($Parameter, int $width = NULL, int $length = NULL ) {
        $this->width = $width;
        $this->length = $length;
        $this->id = rand();
        $this->parameter = $Parameter;
        $this->name = $Parameter->getName();
    }

    public function getIdentify() {
      return $this->INDENTIFY;
    }

    public function getId() {
      return $this->id;
    }

    public function setId(int $id) {
      if ($this->id !== $id) {
        $this->id = $id;
      } else {
        throw new Exception('Choice a new id, this id exist');
      }
    }

    public function getArea() {
      return $this->length * $this->width;
    }

    public function setAllProperties() {
      return $this->parameter;
    }

    public function getAllProperties() {
      $this->parameter->setId($this->id);
      $this->parameter->setWidth($this->width ? $this->width : 0);
      $this->parameter->setLength($this->length ? $this->length: 0);
      $this->parameter->setName($this->name);
      return $this->parameter;
    }
  }

?>
