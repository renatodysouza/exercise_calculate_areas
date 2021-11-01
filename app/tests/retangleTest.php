<?php
require('../src/parameter.php');
require('../src/retangle.php');

use PHPUnit\Framework\TestCase;


class RetangleTest extends TestCase
{

    function testVerifyMethodExist() {
        $parameter = new Parameter("Test  Circle area");
        $circleTest =  new Retangle(23, 34, $circleParameter); 
        assertThat("method getID exist", true, $circleTest->hasMethod($getId));
    }

}


?>