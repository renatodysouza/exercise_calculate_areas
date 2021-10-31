<?php
 require('./src/parameter.php');
 require('./src/circle.php');
 require('./src/retangle.php');

 $parameter = new Parameter("calculate  Circle area");
 
 $circle = new Circle(10, $parameter);
 echo "Circle area is " . $circle->getCircleArea();

 $circleParameter = new Parameter("Calculating area");
 $retangle = new Retangle(23, 34, $circleParameter);
 echo nl2br("\nRetangle area is " . $retangle->getArea());

?>