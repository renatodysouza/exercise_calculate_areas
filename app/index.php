<?php
 require('./src/parameter.php');
 require('./src/circle.php');
 require('./src/retangle.php');
/*  $parameter = new Parameter("calculate  Circle area");
 
 $circle = new Circle(10, $parameter);
 echo "Circle area is " . $circle->getCircleArea(); */

 /* $circleParameter = new Parameter("Calculating area");
 $retangle = new Retangle(23, 34, $circleParameter);
 echo nl2br("\nRetangle area is " . $retangle->getArea()); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculate Geometry</title>
</head>
<body>
    <header></header>
    <main class="main">
        <section>
            <h1 class="title">Calculate</h1>
            <form name="form" method="POST" action="" >
                <div class="calculate-group">
                    <label class="sub-title">Calculate Circle area</label>
                    <div class="group-field">
                        <label for="btn-area">Radius</label>
                        <input name="circle"  class="form-control" id="btn-circle" type="number" >

                        <p>Result:     <?php  
                                        if (isset($_POST['circle']) && is_numeric($_POST['circle']) )  {
                                              $parameter = new Parameter("calculate  Circle area");
                                              $circle = new Circle($_POST['circle'], $parameter);
                                              $result =  "Circle area is " . $circle->getCircleArea();
                                             echo  $result;
                                        }

                                        if (isset($_POST['clear']))  {
                                            $result;
                                       }

                                         ?>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                    <button name="clear" type="submit" class="btn btn-primary">Clear</button>
                </div>
                <div class="calculate-group">
                    <label class="sub-title">Calculate Retangle area</label>
                    <div>
                        <label for="width-value">Width</label>
                        <input name="width" id="width-value" class="form-control" id="btn-retangle" type="number" >
                    </div>
                    <div>
                        <label for="length-value">Length</label>
                         <input name="length" id="length-value" class="form-control" id="btn-retangle" type="number" >
                    </div>
                    <p>Result: <?php
                                if (isset($_POST['width']) && is_numeric($_POST['width']) &&
                                isset($_POST['length']) && is_numeric($_POST['length']) )  {
                                            $retangleParameter = new Parameter("Calculating area");
                                            $retangle = new Retangle(23, 34, $retangleParameter);
                                            $result =  "Retangle area is  " . $retangle->getArea();
                                            echo  $result;
                                        }

                                        if (isset($_POST['clear']))  {
                                            $result;
                                       }

                                ?></p>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                    <button name="clear" type="submit" class="btn btn-primary">Clear</button>
                </div>
            </form>
        </section>
    </main>
    <footer></footer>
   
</body>
</html>
