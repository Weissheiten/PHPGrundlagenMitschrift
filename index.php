<?php
/**
 * Created by PhpStorm.
 * User: FloLeBlanc
 * Date: 19.10.2016
 * Time: 13:59
 */
namespace PHPGrundlagen\GeometricForms;

include_once('HelperClasses/Shape.php');
include_once('Shapes/Square.php');
include_once('Shapes/Triangle.php');

use \PHPGrundlagen\Shapes;

$green = "#00FF00";
$red = "#FF0000";
$blue = "#0000FF";

$triangles = array(
    new Shapes\Triangle(4, $green),
    new Shapes\Triangle(2, $blue),
    new Shapes\Triangle(3, $red)
);

foreach($triangles as $triangle)
{
    /* @var Shapes\Triangle $triangle */
    echo sprintf(
        "Es gibt ein Dreieck mit Umfang %d cm und der Farbe %s\n",
        $triangle->calculatePerimeter(),
        $triangle->getColor()
    );
}

$squares = array(
    new Shapes\Square(3, $green),
    new Shapes\Square(5, $red)
);

foreach ($squares as $square) {
    /* @var Shapes\Square $square */
    echo sprintf(
        "Es gibt ein Quadrat mit Umfang %d cm und der Farbe %s\n",
        $square->calculatePerimeter(),
        $square->getColor()
    );
}
