<?php
/* namespace Souza\Area;
 */
class Parameter 
{
    public $name;
    public $width;
    public $length;
    public $id;
    public $radius;

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
        return $this->width = $width;
    }

    public function getLength() {
        return $this->id;
    }

    public function setLength(int $length) {
        return $this->length = $length;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius(int $radius) {
        return  $this->radius = $radius;
    }
}

?>