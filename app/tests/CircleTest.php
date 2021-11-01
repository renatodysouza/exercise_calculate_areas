<?php
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
