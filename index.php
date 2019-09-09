<?php
include ("Triangle.php");

$shape = new Triangle();

$shape->setSide(5,6,8);
$shape->color = "green";
echo $shape->getArea();
echo "<br>";
echo $shape->getPerimeter();
echo "<br>";
echo $shape->color;