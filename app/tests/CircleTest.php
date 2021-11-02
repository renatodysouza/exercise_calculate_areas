<?php declare(strict_types=1);
/* use Souza\Area\Circle;
use Souza\Area\Parameter; */
/* include "../src/Circle.php"; */
include(__DIR__ .'/../src/Circle.php');
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
