<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include(__DIR__ .'/../src/Circle.php');

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
