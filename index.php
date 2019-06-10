<?php
include_once "Colorable/Colorable.php";
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$shapes[0] = new Circle("hinh tron", 3);
$shapes[1] = new Square("hinh vuong");
$shapes[2] = new Cylinder("hinh tru", 23);
$shapes[3] = new Rectangle("hinh chu nhat", 3, 8);
foreach ($shapes as $shape){
    if ($shape instanceof Square) {
        echo $shape->howToColor() . ' ';
    }
}