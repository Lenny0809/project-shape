<?php

include_once ('shape.php');
include_once ('square.php');
include_once ('circle.php');
/*$newShape=new Shape();
echo $newShape->calculateArea();
$newSquare=new square(15);
echo $newSquare ->calculateArea();
*/
$shapes=[new Square(20), new Square(50), new Circle(5)];
foreach ($shapes as $shape) {
  echo  $shape->calculateArea(). "\n";
}
?>

