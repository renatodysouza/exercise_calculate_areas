<?php
require("shape.php");

class Circle extends Shape 
{
    private const PI = 3.1416;
    private $radius;
    private $parameter;
    const DEFAULTVALUE = 3;
    
    public function __construct($radius, $Parameter) {
        parent::__construct($Parameter);
        $this->radius = $radius;
    }

    public function getCircleArea() {
        return (self::PI * ($this->radius * $this->radius));
    }

    public function getAllProperties() {   
        $properties = parent::setAllProperties();
        $properties->setRadius($this->radius);
        return parent::getAllProperties();
    }
}
?>