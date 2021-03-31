<?php

// if (version_compare(PHP_VERSION, '5.1.0', '>=')) {
//     //SPL autoloading was introduced in PHP 5.1.2

// } else {
//     function __autoload($class)
//     {
//         include("class_" . ucfirst($class) . ".php");
//     }
// }

include_once "Rectangle.php";
include_once "Triangle.php";
include_once "Circle.php";
include_once "Color.php";

// spl_autoload_register(function ($class) {
//     include $class . '.php';
// });


$myCollection = array();

// make a rectangle
$r = new Rectangle;
$r->width = 5;
$r->height = 7;
$myCollection[] = $r;
unset($r);

// make a triangle
$t = new Triangle;
$t->base = 4;
$t->height = 5;
$myCollection[] = $t;
unset($t);

// make a circle
$c = new Circle;
$c->radius = 3;
$myCollection[] = $c;
unset($c);

// make a color
$c = new Color;
$c->name = "blue";
$myCollection[] = $c;
unset($c);

foreach ($myCollection as $s) {
    if ($s instanceof Shape) {
        print("Area: " . $s->getArea() . "<br>\n");
    }
    if ($s instanceof Polygon) {
        print("Sides: " . $s->getNumberOfSides() . "<br>\n");
    }
    if ($s instanceof Color) {
        print("Color: $s->name<br>\n");
    }
    print("<br>\n");
}