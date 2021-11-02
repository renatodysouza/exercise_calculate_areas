<?php
echo file_exists("./src/Retangle.php") . 'teste123';
echo file_exists("../src/Retangle.php") . 'teste123';
echo file_exists("../src/Retangle.php") . 'teste123';
echo dirname(__FILE__) . 'teste';
echo file_exists(dirname(__FILE__) . "/src/Retangle.php") . 'teste123';

die();
include "./src/Retangle.php";
use PHPUnit\Framework\TestCase;

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
