<?php declare(strict_types=1);
/* include "./src/Retangle.php"; */
/* include(__DIR__ .'/../src/Retangle.php'); */
use PHPUnit\Framework\TestCase;
use Area\Parameter;
use Area\Retangle;

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
