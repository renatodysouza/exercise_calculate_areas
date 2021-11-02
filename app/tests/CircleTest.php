<?php
echo file_exists("./src/Retangle.php") . 'teste123';
echo file_exists("../src/Retangle.php") . 'teste123';
echo file_exists("../src/Retangle.php") . 'teste123';
echo dirname(__FILE__) . 'teste';
echo file_exists(dirname(__FILE__) . "/src/Retangle.php") . 'teste123';
die();
include "./src/Circle.php";
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    /** @test */
    function shouldRetunCircleAreaTest() {
        $parameter = new Parameter("Test  Circle area");
        $circleTest = new Circle(23, $parameter);
        $this->assertIsFloat($circleTest->getCircleArea());
    }
}

?>
