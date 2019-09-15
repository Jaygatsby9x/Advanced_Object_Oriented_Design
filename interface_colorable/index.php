<?php
include_once "interface/Colorable.php";
include_once "class/Shape.php";
include_once "class/Circle.php";
include_once "class/Rectangle.php";
include_once "class/Square.php";
include_once "class/Cylinder.php";

$arrayOfShapes[0]= new Circle("Circle",5);
$arrayOfShapes[1]= new Cylinder("Cylinder",5,4);
$arrayOfShapes[2]= new Square("Square",10,10);
$arrayOfShapes[3]= new Rectangle("rectangle",10,5);

foreach ($arrayOfShapes as $Shape){
    echo $Shape->calculateArea();
    echo "<br>";
    if ($Shape instanceof Colorable){
       echo $Shape->colorable();
       echo "<br>";
    }
}
