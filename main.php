<?php

include_once ('shape.php');
include_once ('square.php');
$newShape=new Shape();
echo $newShape->calculateArea();
$newSquare=new square(15);
echo $newSquare ->calculateArea();
?>