<?php

class Parameter 
{
    public $name;
    protected $width;
    protected $length;
    private $id;
    private $radius;

    public function  __construct(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getWidth() {
        return $this->id;
    }

    public function setWidth(int $width) {
        return $this->width;
    }

    public function getLength() {
        return $this->id;
    }

    public function setLength(int $length) {
        return $this->length;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius(int $radius) {
        return $this->radius;
    }
}

?>