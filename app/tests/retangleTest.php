<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include(__DIR__ .'/../src/Retangle.php');

class RetangleTest extends TestCase
{
    /** @test */
    function ifIdIsNumberTest() {
        $parameter = new Parameter("Test  Circle area");
        $circleTest =  new Retangle(23, 34, $parameter);
        $this->assertIsInt($circleTest->getId());
    }

        /** @test */
    function shouldReturnNumberSetTest() {
        $parameter = new Parameter("Test  Circle area");
        $circleTest =  new Retangle(23, 34, $parameter);
        $circleTest->setId(5);
        $this->assertEquals(5, $circleTest->getId());
    }

    /** @test */
    function shouldReturnAreaTest() {
        $parameter = new Parameter("Test  Circle area");
        $circleTest =  new Retangle(23, 34, $parameter);
        $this->assertEquals(782, $circleTest->getArea());
    }
}

?>
